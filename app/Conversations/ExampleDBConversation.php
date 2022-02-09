<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use BotMan\BotMan\Messages\Attachments\Video;

use App\Models\Chatbot;
use App\Models\ChatbotsQuestion;

class ExampleDBConversation extends Conversation
{
    /**
     * First question
     */

    protected $answerText;
    protected int $sort_number_local;

    public function startChatDb(String $keyword, int $sort_number)
    {
        
        $questions=Chatbot::where('keyword', $keyword)->with('questions')->first();
        if ($sort_number < sizeof($questions->questions)) {
            $record=$questions->questions->where('sort_number', $sort_number);
            $this->sort_number_local = $record->first()->sort_number;
            $this->ask($record->first()->description, function(Answer $answer) {
            // Save result
            $this->answerText = $answer->getText();
            $this->say('you sent me: '.$this->answerText);
            $this->startChatDb('speak', $this->sort_number_local+1);
            });

        } else {
            $this->say('bye');
        }
        
       
    }

   
    /**
     * Start the conversation
     */
    public function run()
    {
        $this->startChatDb('speak',0);
    }
}

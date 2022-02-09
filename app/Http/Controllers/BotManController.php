<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use Illuminate\Http\Request;
use App\Conversations\ExampleConversation;
use App\Conversations\ExampleDBConversation;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use BotMan\BotMan\Messages\Attachments\Video;

use App\Models\Chatbot;
use App\Models\ChatbotsQuestion;

use BotMan\BotMan\Cache\LaravelCache;

class BotManController extends Controller
{

    public $record;
    public $data;
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        //*********************config botman******************************** */
        $config = [
            // Your driver-specific configuration
            'web' => [
                'matchingData' => [
                    'driver' => 'web',
                ],
            ]
        ];
        
        // Load the driver(s) you want to use
        DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);        
        // Create an instance
        DriverManager::loadDriver(\BotMan\Drivers\Telegram\TelegramDriver::class);
        //make sure to disable CORS for botman route or put it on routes api
        ///app/Http/Middleware/VerifyCsrfToken.php

        //cache for web 
        $botman = BotManFactory::create([
            'config' => [
                'user_cache_time' => 30000,
                'conversation_cache_time' => 30000,
            ],
            'telegram' => [
                'token' => '5289185607:AAHJFYLAd7QvgoGhgC12AbUh0gNyMtwGxCs',
            ],
        ],  new LaravelCache());
        //*********************config botman******************************** */


         /**
         * Place your BotMan logic here.
         */

        //**************hears from database records******************** */
        $records=Chatbot::where('is_conversation', '==', 0)->with('questions')->get();

        foreach ($records as $record){
            $this->record=$record;
            $botman->hears($record->keyword, function ($bot) {
                $chat=Chatbot::where('keyword', $bot->getMessage()->getPayload()['message'])->with('questions')->first();
                foreach ( $chat->questions as $data){
                    $bot->reply($data->description);
                }
                
            });
        }
        //**************hears from database records******************** */
        
        $botman->hears('Hi', function ($bot) {
            $bot->reply('Hello!');
        });
        $botman->hears('chat', BotManController::class.'@startConversation');
        $botman->hears('speak', BotManController::class.'@startConversationDB');
        
        $botman->hears('call me {name}', function ($bot, $name) {
            $bot->reply('Your name is: '.$name);
        });
        
                
        // Give the bot something to listen for.
        $botman->hears('hello', function (BotMan $bot) {
            $bot->reply('Hello yourself.');
        });

        $botman->hears('wait', function (BotMan $bot) {
            $bot->reply("Give me few seconds to answer please!");
            $bot->typesAndWaits(3);
            $bot->reply("Almost ready!");
            $bot->typesAndWaits(2);
            $bot->reply("Done!");
        });
         
        $botman->fallback(function($bot) {
            $bot->reply('Sorry, I did not understand these commands. Here is a list of commands I understand: ...');
        });



        $botman->hears('image', function (BotMan $bot) {
            // Create attachment
            $attachment = new Image('https://botman.io/img/logo.png');
        
            // Build message object
            $message = OutgoingMessage::create('This is my text')
                        ->withAttachment($attachment);
        
            // Reply message object
            $bot->reply($message);
        });

        $botman->hears('video', function (BotMan $bot) {
            // Create attachment
            $attachment = new Video('https://media.istockphoto.com/videos/isometric-bot-and-cybersecurity-artificial-intelligence-concept-ai-video-id1232186712', [
                'custom_payload' => true,
            ]);

            // Build message object
            $message = OutgoingMessage::create('This is my text')
                        ->withAttachment($attachment);
            // Reply message object
            $bot->reply($message);
        });


        // Start listening
        $botman->listen();
    }

   
    /**
     * Loaded through routes/botman.php
     * @param  BotMan $bot
     */
    public function startConversation(BotMan $bot)
    {
        $bot->startConversation(new ExampleConversation());
    }


    /**
     * Loaded through routes/botman.php
     * @param  BotMan $bot
     */
    public function startConversationDB(BotMan $bot)
    {
        $bot->startConversation(new ExampleDBConversation());
    }



}

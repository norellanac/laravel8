<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use Illuminate\Http\Request;
use App\Conversations\ExampleConversation;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use BotMan\BotMan\Messages\Attachments\Video;

use BotMan\BotMan\Cache\LaravelCache;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
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

        //cache for web 
        $botman = BotManFactory::create([
            'config' => [
                'user_cache_time' => 30000,
                'conversation_cache_time' => 30000,
            ],
        ],  new LaravelCache());

        $botman->hears('Hi', function ($bot) {
            $bot->reply('Hello!');
        });
        $botman->hears('chat', BotManController::class.'@startConversation');
        
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
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function (Answer $answer) {

            $name = $answer->getText();

            $this->say('Nice to meet you ' . $name);
        });
    }



    /**
     * Loaded through routes/botman.php
     * @param  BotMan $bot
     */
    public function startConversation(BotMan $bot)
    {
        $bot->startConversation(new ExampleConversation());
    }



}

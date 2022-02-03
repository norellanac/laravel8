<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use Illuminate\Http\Request;
use App\Conversations\ExampleConversation;
use BotMan\BotMan\Drivers\DriverManager;

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
        $botman->hears('Start conversation', BotManController::class.'@startConversation');
        
        $botman->hears('call me {name}', function ($bot, $name) {
            $bot->reply('Your name is: '.$name);
        });
        
                
        // Give the bot something to listen for.
        $botman->hears('hello', function (BotMan $bot) {
            $bot->reply('Hello yourself.');
        });

        $botman->hears('wait', function (BotMan $bot) {
            $bot->typesAndWaits(2);
            $bot->reply("Tell me more!");
        });
         
        /* $botman->fallback(function($bot) {
            $bot->reply('Sorry, I did not understand these commands. Here is a list of commands I understand: ...');
        }); */
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

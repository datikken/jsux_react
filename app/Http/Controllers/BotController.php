<?php

namespace App\Http\Controllers;

use skrtdev\NovaGram\Bot;
use skrtdev\Telegram\Message;

class BotController extends Controller
{
    public function testbot()
    {
        $Bot = new Bot("1598375531:AAGo2wE1BXm38tKbipBc3AqKsfrdUNftH4k");

        $Bot->onCommand("start", function (Message $message) use ($Bot) {
            $message->reply("Hey! Nice to meet you. Use /info to know more about me.");
        });

        $Bot->onCommand("info", function (Message $message) use ($Bot) {
            $message->reply("Well, I'm just an example, but you can learn more about NovaGram at docs.novagram.ga");
        });

    }
}

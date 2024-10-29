<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Conversations\Conversation;
use App\Conversations\RekomendasiRambut;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    public function handle(Request $request)
    {

        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {
            if (strtolower($message) === 'mulai') {
                $this->startConversation($botman);
            } else {
                $botman->reply("Ketik 'Mulai' untuk memulai percakapan, Jika ada yang ingin ditanyakan selain itu bisa di lihat pada <a href='http://127.0.0.1:8000/faq'>FAQ</a>");
            }
        });

        $botman->listen();
    }

    public function startConversation($botman)
    {
        $botman->startConversation(new RekomendasiRambut);
    }
}

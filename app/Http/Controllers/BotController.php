<?php

namespace App\Http\Controllers;

use App\Notifications\TelegramNotification;
use Illuminate\Support\Facades\Notification;
use App\Models\User;

class BotController extends Controller
{
    public function testbot()
    {
        $users = User::all();

        Notification::send($users, new TelegramNotification('hello'));
    }
}

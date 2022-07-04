<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\InvoiceSend;
use App\Models\order;

class Invoice extends Controller
{
    public function sendMAil()
    {
        $orders = order::first();
        $details = [
            'greeting' => 'Hi Artisan',
            'body' => 'This is my first notification from ItSolutionStuff.com',
            'thanks' => 'Thank you for using ItSolutionStuff.com tuto!',
            'actionText' => 'View My Site',
            'actionURL' => url('/'),
            'email' => 1
        ];

        Notification::send($orders, new InvoiceSend($details));
        dd('done');
    }
}

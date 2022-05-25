<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\WebhookServer\WebhookCall;

class SendWebhookController extends Controller
{
    public function send(Request $request)
    {
        WebhookCall::create()
            ->url('http://note-laravel-8.test/webhook-receiving-url')
            ->payload(['data' => 'test'])
            // ->useSecret('mysecretekey')
            ->doNotSign()
            ->dispatch();

        dd("send webshook");
    }
}

<?php

namespace App\Handler;

use Spatie\WebhookClient\ProcessWebhookJob;
use Illuminate\Support\Facades\Log;

class WebhookHandler extends ProcessWebhookJob
{
    public function handle()
    {
        $data = json_decode($this->webhookCall, true);
        // dd($data);
        Log::channel('debuglog')->info('Webhook Data >> ' . $this->webhookCall);
    }
}

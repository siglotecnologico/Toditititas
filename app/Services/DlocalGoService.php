<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class DlocalGoService
{
    protected $apiKey;
    protected $secretKey;

    public function __construct()
    {
        $this->apiKey = env('DLOCALGO_API_KEY');
        $this->secretKey = env('DLOCALGO_SECRET_KEY');
    }

    public function getMe()
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $this->apiKey . ':' . $this->secretKey,
        ])->post('https://api.dlocalgo.com/v1/me');

        return $response->json();
    }
}

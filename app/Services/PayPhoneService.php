<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class PayPhoneService
{
    protected $url;
    protected $entityId;
    protected $authorization;

    public function __construct()
    {
        $this->url = config('services.payphone.url');
        $this->entityId = config('services.payphone.entity_id');
        $this->authorization = config('services.payphone.authorization');
    }

    public function createCheckout($amount)
    {
        $response = Http::withHeaders([
            'Authorization' => $this->authorization,
        ])->post($this->url, [
            'entityId' => $this->entityId,
            'amount' => $amount,
            'currency' => 'USD',
            'paymentType' => 'DB',
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }

    public function getPaymentStatus($checkoutId)
    {
        $response = Http::withHeaders([
            'Authorization' => $this->authorization,
        ])->get("{$this->url}/{$checkoutId}/payment", [
            'entityId' => $this->entityId,
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }
}

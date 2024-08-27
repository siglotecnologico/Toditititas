<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class DonationController extends Controller
{
    public function create()
    {
        $data = [
            'token' => env('PAYPHONE_TOKEN'), // Asegúrate de que tu token esté almacenado en el archivo .env
            'amount' => 1000,
            'amountWithoutTax' => 1000,
            'amountWithTax' => 0,
            'tax' => 0,
            'service' => 0,
            'tip' => 0,
            'reference' => 'Donacion desde la Pagina Web Toditititas',
        ];

        return view('donations.create',  $data);
    }
    public function monto(Request $request)
    {
        $monto = $request->input('monto') * 100;
        $data = [
            'token' => env('PAYPHONE_TOKEN'), // Asegúrate de que tu token esté almacenado en el archivo .env
            'amount' => $monto,
            'amountWithoutTax' => $monto,
            'amountWithTax' => 0,
            'tax' => 0,
            'service' => 0,
            'tip' => 0,
            'reference' => 'Donacion desde la Pagina Web Toditititas',
        ];

        return view('donations.create',  $data);
    }
    public function store(Request $request)
    {

        if ($request->has('id') && $request->has('clientTransactionId')) {
            $transaccion = $request->input('id');
            $client = $request->input('clientTransactionId');

            $data_array = [
                'id' => (int) $transaccion,
                'clientTxId' => $client,
            ];

            $data = json_encode($data_array);

            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, 'https://pay.payphonetodoesposible.com/api/button/V2/Confirm');
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            curl_setopt_array($curl, [
                CURLOPT_HTTPHEADER => [
                    'Authorization: Bearer '.env('PAYPHONE_TOKEN'),
                    'Content-Type: application/json',
                ],
            ]);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($curl);
            curl_close($curl);

            $response_data = json_decode($result, true);

            if ($response_data) {
                $transaction_details = [
                    'Código de estado' => $response_data['statusCode'],
                    'Estado de la transacción' => $response_data['transactionStatus'],
                    'ID de transacción' => $response_data['transactionId'],
                    'ID de transacción (Cliente)' => $response_data['clientTransactionId'],
                    'Código de autorización' => $response_data['authorizationCode'],
                    'Email' => $response_data['email'],
                    'Teléfono' => $response_data['phoneNumber'],
                    'Documento' => $response_data['document'],
                    'Monto pagado' => $response_data['amount'],
                    'Tipo de tarjeta' => $response_data['cardType'],
                    'Código de marca de tarjeta' => $response_data['cardBrandCode'],
                    'Marca de la tarjeta' => $response_data['cardBrand'],
                    'BIN (Primeros 6 dígitos)' => $response_data['bin'],
                    'Últimos dígitos de la tarjeta' => $response_data['lastDigits'],
                    'Código de diferido' => $response_data['deferredCode'],
                    'Mensaje de diferido' => $response_data['deferredMessage'],
                    '¿Diferido?' => $response_data['deferred'] ? 'Sí' : 'No',
                    'Mensaje' => $response_data['message'],
                    'Código de mensaje' => $response_data['messageCode'],
                    'Moneda' => $response_data['currency'],
                    'Parámetro opcional 1' => $response_data['optionalParameter1'],
                ];

                // Guardar los datos en un archivo JSON en la carpeta storage/app/public
                $file_name = 'transaction_details_' . time() . '.json';
                Storage::put($file_name, $result);
                return view('donations.thankyou', ['transaction_details' => $transaction_details]);
            } else {
                return view('donations.thankyou', ['message' => 'Error en la transacción o respuesta vacía.']);
            }
        } else {
            return view('donations.thankyou', ['message' => "Los parámetros 'id' o 'clientTransactionId' no están definidos en la URL."]);
        }


    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'amount' => 'required|numeric|min:1',
            'message' => 'nullable|string',
        ]);

        Donation::create($validated);

        // Aquí puedes redirigir a una página de agradecimiento o mostrar un mensaje
        return redirect()->route('donations.index');
    }

    public function processPayment()
    {
        // Datos de prueba
        $data = [
            'CardToken' => 'token_de_prueba',
            'CardHolder' => 'John Doe',
            'PhoneNumber' => '+1234567890',
            'Email' => 'john.doe@example.com',
            'DocumentId' => '1234567890',
            'Amount' => 100, // $1.00
            'AmountWithTax' => 80, // $0.80, opcional
            'AmountWithoutTax' => 0, // opcional
            'Tax' => 20, // $0.20, opcional
            'Service' => 0, // opcional
            'Tip' => 0, // opcional
            'ClientTransactionId' => 'txn_001',
            'StoreId' => env('PAYPHONE_STORE_ID', 'store_001'), // opcional
            'TerminalId' => env('PAYPHONE_TERMINAL_ID', 'terminal_001'), // opcional
            'Currency' => env('PAYPHONE_CURRENCY', 'USD'), // opcional
            'DeferredType' => 'deferred_001', // opcional
            'ResponseUrl' => env('PAYPHONE_RESPONSE_URL', 'http://example.com/response'), // opcional
        ];

        $url = env('PAYPHONE_API_URL') . '/Pay';
        $token = env('PAYPHONE_API_TOKEN');

        // Realizar la llamada POST al API
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->post($url, $data);

        // Manejar la respuesta del API
        if ($response->successful()) {
            $responseData = $response->json();
            $statusCode = $responseData['StatusCode'];
            $status = $responseData['Status'];

            if ($statusCode == 3) {
                // Transacción aprobada
                return response()->json([
                    'success' => true,
                    'message' => 'Pago aprobado.',
                    'data' => $responseData,
                ]);
            } elseif ($statusCode == 2) {
                // Transacción cancelada
                return response()->json([
                    'success' => false,
                    'message' => 'Pago cancelado.',
                    'data' => $responseData,
                ]);
            } else {
                // Otros códigos de estado
                return response()->json([
                    'success' => false,
                    'message' => 'Error en la transacción.',
                    'data' => $responseData,
                ]);
            }
        } else {
            // Manejar errores en la solicitud
            $error = $response->json();
            $message = $error['message'] ?? 'La transacción no pudo ser creada por favor inténtelo de nuevo';

            return response()->json([
                'success' => false,
                'message' => $message,
                'errors' => $error,
            ], $response->status());
        }
    }

}

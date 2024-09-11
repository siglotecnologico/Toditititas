<?php

namespace App\Livewire;

//use GuzzleHttp\Psr7\Request;

use App\Models\Transaction;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Respuesta  extends Component
{


    public function render(Request $request)
    {
        $resourcePath = $request->query('resourcePath');
        
        if ($resourcePath) {
            $response = $this->requestTransactionStatus($resourcePath);

            // Guardar la información de la transacción en la base de datos
            $this->processTransactionResponse($response);

            // Determinar el mensaje basado en el código de respuesta
            $responseCode = $response['result']['code'] ?? 'unknown';
            $description = $this->getResponseDescription($responseCode);

            if ($responseCode === '000.100.110') {
                // Transacción exitosa
                return view('livewire.success', ['transaction' => $response, 'description' => $description])->layout('layouts.app');
            } else {
                // Transacción fallida o en espera
                return view('livewire.error', ['error' => $description])->layout('layouts.app');
            }
        }

        return view('transaction_status');
    }

    protected function saveTransactionData(array $response)
    {
        // Mapear los datos de la respuesta al formato esperado por el modelo
        $transactionData = [
            'id' => $response['id'] ?? null,
            'paymentType' => $response['paymentType'] ?? null,
            'paymentBrand' => $response['paymentBrand'] ?? null,
            'amount' => $response['amount'] ?? null,
            'currency' => $response['currency'] ?? null,
            'descriptor' => $response['descriptor'] ?? null,
            'merchantTransactionId' => $response['merchantTransactionId'] ?? null,
            'resultCode' => $response['result']['code'] ?? null,
            'resultDescription' => $response['result']['description'] ?? null,
            'resultDetails' => json_encode($response['resultDetails'] ?? []),
            'card' => json_encode($response['card'] ?? []),
            'customer' => json_encode($response['customer'] ?? []),
            'billing' => json_encode($response['billing'] ?? []),
            'shipping' => json_encode($response['shipping'] ?? []),
            'threeDSecure' => json_encode($response['threeDSecure'] ?? []),
            'customParameters' => json_encode($response['customParameters'] ?? []),
            'risk' => json_encode($response['risk'] ?? []),
            'cart' => json_encode($response['cart'] ?? []),
        ];

        // Guardar los datos en la base de datos
        Transaction::updateOrCreate(
            ['id' => $transactionData['id']], // Unique key to avoid duplicates
            $transactionData
        );
    }



    protected function processTransactionResponse($jsonResponse)
    {
        // Verificar si $jsonResponse es una cadena
        if (is_string($jsonResponse)) {
            // Decodificar la respuesta JSON
            $response = json_decode($jsonResponse, true);
        } elseif (is_array($jsonResponse)) {
            // Si ya es un array, simplemente lo asignamos
            $response = $jsonResponse;
        } else {
            // Manejar el caso en que $jsonResponse no es una cadena ni un array
            throw new \InvalidArgumentException('El argumento proporcionado no es una cadena JSON ni un array.');
        }

        // Extraer información relevante
        $paymentType = $response['paymentType'] ?? null;
        $paymentBrand = $response['paymentBrand'] ?? null;
        $amount = $response['amount'] ?? null;
        $currency = $response['currency'] ?? null;
        $descriptor = $response['descriptor'] ?? null;
        $merchantTransactionId = $response['merchantTransactionId'] ?? null;

        // Obtener información del resultado
        $resultCode = $response['result']['code'] ?? null;
        $resultDescription = $response['result']['description'] ?? null;

        // Obtener detalles del resultado
        $resultDetails = $response['resultDetails'] ?? [];
        $authCode = $resultDetails['AuthCode'] ?? null;
        $batchNo = $resultDetails['BatchNo'] ?? null;
        $totalAmount = $resultDetails['TotalAmount'] ?? null;
        $interest = $resultDetails['Interest'] ?? null;
        $responseResult = $resultDetails['Response'] ?? null;
        $acquirerCode = $resultDetails['AcquirerCode'] ?? null;
        $referenceNo = $resultDetails['ReferenceNo'] ?? null;
        $cardType = $resultDetails['CardType'] ?? null;

        // Obtener información de la tarjeta
        $card = $response['card'] ?? [];
        $cardBin = $card['bin'] ?? null;
        $cardBinCountry = $card['binCountry'] ?? null;
        $last4Digits = $card['last4Digits'] ?? null;
        $holder = $card['holder'] ?? null;
        $expiryMonth = $card['expiryMonth'] ?? null;
        $expiryYear = $card['expiryYear'] ?? null;

        // Aquí puedes insertar o actualizar la base de datos con la información de la transacción
        DB::table('transactions')->updateOrInsert(
            ['merchant_transaction_id' => $merchantTransactionId],
            [
                'payment_type' => $paymentType,
                'payment_brand' => $paymentBrand,
                'amount' => $amount,
                'currency' => $currency,
                'descriptor' => $descriptor,
                'merchant_transaction_id' => $merchantTransactionId,
                'result_code' => $resultCode,
                'result_description' => $resultDescription,
                'auth_code' => $authCode,
                'batch_no' => $batchNo,
                'total_amount' => $totalAmount,
                'interest' => $interest,
                'response' => $responseResult,
                'acquirer_code' => $acquirerCode,
                'reference_no' => $referenceNo,
                'card_type' => $cardType,
                'card_bin' => $cardBin,
                'card_bin_country' => $cardBinCountry,
                'card_last_4_digits' => $last4Digits,
                'card_holder' => $holder,
                'card_expiry_month' => $expiryMonth,
                'card_expiry_year' => $expiryYear,
                'status' => $resultCode === '000.000.000' ? 'procesada' : 'no procesada',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        // Retornar un mensaje de éxito o error basado en el código de resultado
        return $this->getResponseDescription($resultCode);
    }




    protected function getResponseDescription($code)
    {

        $messages = [
            '000.000.000' => 'Transacción aprobada',
            '000.200.100' => 'Checkout creado exitosamente',
            '800.110.100' => 'Transacción duplicada. El técnico del comercio debe solucionarlo.',
            '200.100.101' => 'Mensaje inválido. Revisa los datos ingresados y la respuesta del banco.',
            '200.100.103' => 'Mensaje inválido. Hay errores estructurales en la solicitud.',
            '800.100.171' => 'Retenga la tarjeta y llame al banco.',
            '700.300.700' => 'Reverso declinado. La reversión ya no es posible.',
            '800.100.174' => 'Monto inválido.',
            '800.100.151' => 'Tarjeta de crédito inválida.',
            '800.100.402' => 'Titular de cuenta no válido.',
            '800.100.190' => 'Transacción declinada. Configuración inválida.',
            '800.100.152' => 'Error de autorización. Rechazada por el sistema de autorización.',
            '800.100.197' => 'Cancelación por el cliente.',
            '800.100.176' => 'Cuenta temporalmente no disponible. Intente de nuevo más tarde.',
            '100.400.311' => 'Error de formato.',
            '100.100.100' => 'No se enviaron datos de la tarjeta.',
            '800.100.165' => 'Tarjeta reportada como pérdida.',
            '800.100.159' => 'Tarjeta reportada como sustraída.',
            '800.100.155' => 'Fondos insuficientes.',
            '100.100.400' => 'Titular de tarjeta vacío.',
            '100.100.303' => 'Tarjeta expirada.',
            '800.100.170' => 'Transacción no permitida.',
            '100.550.310' => 'Monto excede el límite de la cuenta.',
            '800.100.168' => 'Tarjeta restringida. Llame al banco.',
            '800.100.179' => 'Límite de transacciones excedido.',
            '100.100.402' => 'Titular de cuenta no válido.',
            '600.200.100' => 'Método de pago inválido.',
            '700.100.200' => 'Referencia no coincidente.',
            '700.400.200' => 'No se puede reembolsar. Volumen de reembolsos excedido.',
            '800.100.157' => 'Fecha de caducidad errada.',
            '800.100.501' => 'Establecimiento cancelado.',
            '800.100.100' => 'Razón desconocida para la declinación.',
            '800.100.171' => 'Razón desconocida para la declinación. Llame al centro de autorización.',
            '800.300.500' => 'Tarjeta temporalmente en lista negra. Intente de nuevo después de 48 horas.',
            '800.300.501' => 'Tarjeta temporalmente en lista negra por fecha de caducidad errada. Intente de nuevo después de 48 horas.',
            '900.100.201' => 'Error en el gateway externo. Intente más tarde.',
            '900.100.100' => 'Error de comunicación con el banco. Intente luego.',
            '900.100.300' => 'No hubo respuesta del conector/acquirer.',
            '800.100.176' => 'Transacción rechazada. Intente de nuevo o llame al banco.',
            '800.100.199' => 'Error en el cálculo de impuestos.',
            '600.200.201' => 'Canal/Comercio no configurado para este método de pago.',
            '600.200.500' => 'Datos de pago inválidos. No está configurado para esta moneda o tipo.',
            '800.100.151' => 'Tarjeta inválida.',
            '800.100.156' => 'Error de formato.',
            '800.100.162' => 'Límite excedido en la tarjeta.',
            '100.100.101' => 'Tarjeta de crédito inválida.',
            '100.700.801' => 'Valor de identificación inválido o ausente.',
            '100.400.147' => 'Transacción rechazada por regla antifraude.',
            '100.400.149' => 'Datos de transacción infringen regla antifraude.',
            '100.400.325' => 'Sistema de riesgo externo no disponible.',
            '100.380.401' => 'Error en la autenticación del usuario (3DSecure).',
            '100.380.501' => 'Error en la autenticación del usuario (tiempo de espera).',
            '100.396.103' => 'Transacción pendiente expiró.',
            '100.390.108' => 'Error en la configuración 3DSecure.',
            '100.390.112' => 'Error técnico en el sistema 3DSecure.',
            '000.100.112' => 'Solicitud procesada en modo de prueba del comerciante.',
            '000.100.110' => 'Solicitud procesada en modo de prueba del integrador.',
            '000.200.100' => 'Checkout creado exitosamente en modo de prueba.',
            '200.300.404' => 'Parámetro inválido o ausente.'
        ];

        return $messages[$code] ?? 'Código de respuesta desconocido';
    }


    private function requestTransactionStatus($resourcePath)
    {
        // Cargar las variables del archivo .env
        $baseUrl = env('PAYMENT_URL_RESUESTA'); // Obtiene la URL base del archivo .env
        $entityId = env('PAYMENT_ENTITY_ID'); // Obtiene el entityId del archivo .env
        $authToken = env('PAYMENT_AUTH_TOKEN'); // Obtiene el token de autorización del archivo .env

        // Construir la URL completa
        $url = $baseUrl . $resourcePath . "?entityId=" . $entityId;

        // Inicializar cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer ' . $authToken
        ));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Debe ser true en producción
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Ejecutar la solicitud
        $responseData = curl_exec($ch);

        // Manejar errores
        if (curl_errno($ch)) {
            return curl_error($ch);
        }

        // Cerrar cURL
        curl_close($ch);

        // Convertir la respuesta en un array asociativo
        return json_decode($responseData, true);
    }
}

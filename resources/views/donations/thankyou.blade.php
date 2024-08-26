<x-app-layout>
    @section('content')
    <div class="container">
        <?php
        // Verificar si los parámetros 'id' y 'clientTransactionId' están definidos en la URL
        if (isset($_GET['id']) && isset($_GET['clientTransactionId'])) {
            $transaccion = $_GET['id'];
            $client = $_GET['clientTransactionId'];

            // Preparar JSON para la solicitud
            $data_array = [
                'id' => (int) $transaccion,
                'clientTxId' => $client,
            ];

            $data = json_encode($data_array);

            // Iniciar la solicitud cURL
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, 'https://pay.payphonetodoesposible.com/api/button/V2/Confirm');
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            curl_setopt_array($curl, [
                CURLOPT_HTTPHEADER => [
                    'Authorization: Bearer -ZmR_32fMJQIxpMUEYnAY1Zo4oQvTbKSg3dLzL7F4yNZzYaTtNRuJo2Wk3oAl8hP38NRCwCrHaVFgfPexSAQBVpCGAVK5kgCuS3e1xqjqa90qwi6yNqct4K4Yz9jUebrGEREmU47HbV-BnS2Gh4NbMOSN_F1U_61YWEalXq6uHciyHywDlHi0uyt-nI9E499EgfCPKJlYNiS2dS7yPP1dOnvaTca1JKcHz2xQyX5t6I2JlXMuz8zjQ4nhQ3jw5T0QuFEVP-wJSnZqhy4s7G5hDCyzdva2vXd4rIKn8YHDm2aZRRLMFpW-IE-e3we4nuLPO_74VMCdNuiKHLI6SZ1n9eZEsc',
                    'Content-Type: application/json',
                ],
            ]);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($curl);
            curl_close($curl);

            // Decodificar la respuesta JSON
            $response_data = json_decode($result, true);

            // Verificar si la respuesta contiene datos
            if ($response_data) {
                echo '<h3>Detalles de la Transacción</h3>';
                echo 'Código de estado: ' . $response_data['statusCode'] . '<br>';
                echo 'Estado de la transacción: ' . $response_data['transactionStatus'] . '<br>';
                echo 'ID de transacción: ' . $response_data['transactionId'] . '<br>';
                echo 'ID de transacción (Cliente): ' . $response_data['clientTransactionId'] . '<br>';
                echo 'Código de autorización: ' . $response_data['authorizationCode'] . '<br>';
                echo 'Email: ' . $response_data['email'] . '<br>';
                echo 'Teléfono: ' . $response_data['phoneNumber'] . '<br>';
                echo 'Documento: ' . $response_data['document'] . '<br>';
                echo 'Monto pagado: ' . $response_data['amount'] . '<br>';
                echo 'Tipo de tarjeta: ' . $response_data['cardType'] . '<br>';
                echo 'Código de marca de tarjeta: ' . $response_data['cardBrandCode'] . '<br>';
                echo 'Marca de la tarjeta: ' . $response_data['cardBrand'] . '<br>';
                echo 'BIN (Primeros 6 dígitos): ' . $response_data['bin'] . '<br>';
                echo 'Últimos dígitos de la tarjeta: ' . $response_data['lastDigits'] . '<br>';
                echo 'Código de diferido: ' . $response_data['deferredCode'] . '<br>';
                echo 'Mensaje de diferido: ' . $response_data['deferredMessage'] . '<br>';
                echo '¿Diferido?: ' . ($response_data['deferred'] ? 'Sí' : 'No') . '<br>';
                echo 'Mensaje: ' . $response_data['message'] . '<br>';
                echo 'Código de mensaje: ' . $response_data['messageCode'] . '<br>';
                echo 'Moneda: ' . $response_data['currency'] . '<br>';
                echo 'Parámetro opcional 1: ' . $response_data['optionalParameter1'] . '<br>';
            } else {
                echo 'Error en la transacción o respuesta vacía.';
            }
        } else {
            echo "Los parámetros 'id' o 'clientTransactionId' no están definidos en la URL.";
        }
        ?>
        <h1>¡Gracias por tu donación!</h1>
        <p>Apreciamos tu generosidad y apoyo.</p>
    </div>
    @endsection
    </x-app-layout>

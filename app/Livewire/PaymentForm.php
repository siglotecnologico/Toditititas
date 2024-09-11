<?php

namespace App\Livewire;

use Livewire\Component;

class PaymentForm  extends Component
{
    public $checkoutId;
    public $donation_id;
    protected $listeners = ['datosDonacion'];

    public $donationData = []; // Array para almacenar los detalles de la donación

    // El método mount captura el valor del parámetro de la ruta
    public function mount($donation_id)
    {
        // Asignar el valor del parámetro a la propiedad pública
        $this->donation_id = $donation_id;

        // Intentar recuperar los detalles de la donación desde el archivo JSON
        $this->loadDonationData();
    }

    // Método para cargar los datos desde el archivo JSON
    public function loadDonationData()
    {
        // Ruta del archivo JSON donde se almacenan las donaciones
        $jsonFile = storage_path('data.json');

        if (file_exists($jsonFile)) {
            // Leer el contenido del archivo
            $jsonData = file_get_contents($jsonFile);
            $donations = json_decode($jsonData, true);

            // Buscar la donación correspondiente al donation_id
            foreach ($donations as $donation) {

                if ($donation['data']['donation_id'] === $this->donation_id) {
                    $this->donationData = $donation['data'];
                    break;
                }
            }
        }
    }

    /*     public function render()
    {

         // Lógica para obtener el checkoutId de la API
         $url = "https://test.oppwa.com/v1/checkouts";

         $datax = [
             'entityId' => '8a829418533cf31d01533d06f2ee06fa',
             'amount' => $this->donationData['monto'],
             'currency' => 'USD',
             'paymentType' => 'DB'
         ];

         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, $url);
         curl_setopt($ch, CURLOPT_HTTPHEADER, [
             'Authorization: Bearer OGE4Mjk0MTg1MzNjZjMxZDAxNTMzZDA2ZmQwNDA3NDh8WHQ3RjIyUUVOWA=='
         ]);
         curl_setopt($ch, CURLOPT_POST, 1);
         curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($datax));
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         $responseData = curl_exec($ch);

         if (curl_errno($ch)) {
             $error = curl_error($ch);
             curl_close($ch);
             return response()->json(['error' => $error], 500);
         }

         curl_close($ch);
         $response = json_decode($responseData, true);

         // Guardar el checkoutId
         $this->checkoutId = $response['id'];
        return view('livewire.payment-form')->layout('layouts.app');
    } */

    public function render()
    {
        // Verifica que 'monto' esté presente en los datos de donación
        if (!isset($this->donationData['monto']) || empty($this->donationData['monto'])) {
            // Manejo de error si el monto no está disponible o es inválido
            session()->flash('error', 'El monto de la donación no está especificado.');
            return view('livewire.payment-form')->layout('layouts.app');
        }

        // Parámetros necesarios
        $entityId = env('PAYMENT_ENTITY_ID'); // Usar desde .env
        $items = []; // No hay productos en una donación
        $total = $this->donationData['monto']; // Monto dinámico
        $valoriva = $this->donationData['valoriva'] ?? 0;
        $base12 = $this->donationData['base12'] ?? 0;
        $base0 = $this->donationData['base0'] ?? 0;
        $email = $this->donationData['email'];
        $primer_nombre = $this->donationData['primer_nombre'];
        $segundo_nombre = $this->donationData['segundo_nombre'];
        $apellido = $this->donationData['apellido'];
        $cedula = $this->donationData['cedula'];
        $trx = uniqid();
        $ip_address = request()->ip();
        $telefono = $this->donationData['telefono'];
        $direccion_cliente = $this->donationData['direccion_cliente'];
        $pais_cliente = $this->donationData['pais_cliente'];
        $direccion_entrega = $this->donationData['direccion_entrega'] ?? $this->donationData['direccion_cliente'];
        $pais_entrega = $this->donationData['pais_entrega'] ?? $this->donationData['pais_cliente'];
        $postcode = $this->donationData['postcode'];

        // Llamada a la función request() con los parámetros
        $responseData = $this->request(
            $entityId,
            $items,
            $total,
            $valoriva,
            $base12,
            $base0,
            $email,
            $primer_nombre,
            $segundo_nombre,
            $apellido,
            $cedula,
            $trx,
            $ip_address,
            $telefono,
            $direccion_cliente,
            $pais_cliente,
            $direccion_entrega,
            $pais_entrega,
            $postcode
        );

        // Procesar la respuesta
        $response = json_decode($responseData, true);

        if (isset($response['error'])) {
            return response()->json(['error' => $response['error']], 500);
        }

        // Guardar el checkoutId si la respuesta es exitosa
        $this->checkoutId = $response['id'];

        return view('livewire.payment-form')->layout('layouts.app');
    }

    // Definir la función request()
    public function request(
        $entityId,
        $items,
        $total,
        $valoriva,
        $base12,
        $base0,
        $email,
        $primer_nombre,
        $segundo_nombre,
        $apellido,
        $cedula,
        $trx,
        $ip_address,
        $telefono,
        $direccion_cliente,
        $pais_cliente,
        $direccion_entrega,
        $pais_entrega,
        $postcode
    ) {
        // Obtener la URL y el token de autorización desde el archivo .env
        $url = env('PAYMENT_URL');
        $authToken = env('PAYMENT_AUTH_TOKEN');

        $data = "entityId=" . $entityId .
            "&amount=" . $total .
            "&currency=USD" .
            "&paymentType=DB" .
            "&customer.givenName=" . $primer_nombre .
            "&customer.middleName=" . $segundo_nombre .
            "&customer.surname=" . $apellido .
            "&customer.ip=" . $ip_address .
            "&customer.merchantCustomerId=000000000001" .
            "&merchantTransactionId=transaction_" . $trx .
            "&customer.email=" . $email .
            "&customer.identificationDocType=IDCARD" .
            "&customer.identificationDocId=" . $cedula .
            "&customer.phone=" . $telefono .
            "&billing.street1=" . $direccion_cliente .
            "&billing.country=" . $pais_cliente .
            "&billing.postcode=" . $postcode .
            "&shipping.street1=" . $direccion_entrega .
            "&shipping.country=" . $pais_entrega .
            "&customParameters[SHOPPER_MID]=1000000406" .
            "&customParameters[SHOPPER_TID]=PD100406" .
            "&customParameters[SHOPPER_ECI]=0103910" .
            "&customParameters[SHOPPER_PSERV]=17913101" .
            "&customParameters[SHOPPER_VAL_BASE0]=" . $base0 .
            "&customParameters[SHOPPER_VAL_BASEIMP]=" . $base12 .
            "&customParameters[SHOPPER_VAL_IVA]=" . $valoriva;

        // Agregar los ítems
        $i = 0;
        $data .= "&cart.items[" . $i . "].name=Donación";
        $data .= "&cart.items[" . $i . "].description=Donación para fundación Toditititas";
        $data .= "&cart.items[" . $i . "].price=" . $total;
        $data .= "&cart.items[" . $i . "].quantity=1";
        $i++;

        $data .= "&customParameters[SHOPPER_VERSIONDF]=2";
        $data .= "&testMode=EXTERNAL";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Authorization: Bearer $authToken"
        ]);

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Debería estar en true en producción
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);

        if (curl_errno($ch)) {
            $error = curl_error($ch);
            return response()->json(['error' => $error], 500);
        }

        curl_close($ch);
        return $responseData;
    }

}

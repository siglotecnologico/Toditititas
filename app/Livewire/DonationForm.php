<?php

namespace App\Livewire;

use Faker\Core\Uuid;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\File;

class DonationForm extends Component
{
    public $primer_nombre = 'Juan';
    public $segundo_nombre = 'Carlos';
    public $apellido = 'Pérez';
    public $cedula = '0912345678';
    public $email = 'juan.perez@example.com';
    public $telefono = '+593987654321';
    public $direccion_cliente = 'Av. 10 de Agosto y Colón';
    public $ciudad = 'Quito';
    public $pais_cliente = 'EC'; // Ecuador
    public $postcode = '170518';
    public $monto = '1.00'; // Valor de la donación en dólares
    public $merchantCustomerId = 'juan.perez@example.com'; // Generado a partir del email


    protected $rules = [
        'primer_nombre' => 'required|string|min:3|max:48',
        'segundo_nombre' => 'required|string|min:2|max:50',
        'apellido' => 'required|string|min:3|max:48',
        'cedula' => 'required|string|size:10',
        'email' => 'required|email|max:128',
        'telefono' => 'required|string|min:7|max:25',
        'direccion_cliente' => 'required|string|max:100',
        'ciudad' => 'required|string|max:50',
        'pais_cliente' => 'required|string|size:2',
        'postcode' => 'required|string|max:10',
        'monto' => 'required|numeric|min:1',
    ];

    public function render()
    {
        return view('livewire.donation-form')->layout('layouts.app');
    }

    // Validación y llamada al formulario de pago
    public function submitDetails()
    {
        $this->validate();

        // Generar un ID único usando uniqid
        $uniqueId = uniqid();

        // Agregar el ID único a los datos
        $donationData = array_merge($this->validate(), ['donation_id' => $uniqueId]);

        // Guardar los datos de la donación junto con el ID
        $this->saveDataToJson('detalleDonacion', $donationData);

        // Emitir el evento con el donation_id
        //$this->dispatch('datosDonacion', uniqueId:  $uniqueId);

        // Redirigir al formulario de pago
        return redirect()->to('paymentForm/' . $uniqueId);
    }




    // Función para guardar los datos del formulario en un archivo JSON
    protected function saveDataToJson($formName, $data)
    {
        $filePath = storage_path('data.json');
        $allData = [];

        // Verificar si el archivo existe
        if (File::exists($filePath)) {
            $allData = json_decode(File::get($filePath), true);
        }

        // Agregar la nueva donación a los datos existentes
        $allData[] = [
            'form' => $formName,
            'data' => $data,
            'timestamp' => now()->toDateTimeString(),
        ];

        // Guardar los datos en JSON con la opción JSON_UNESCAPED_UNICODE para que no se escapen los caracteres especiales
        File::put($filePath, json_encode($allData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
}

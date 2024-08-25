<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    // Definir los campos que se pueden asignar masivamente
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'city',
        'country',
        'amount',
        'message',
        'updates',
        'terms_accepted', // Cambié 'terms' a 'terms_accepted' según el campo en el formulario
        'transaction_id', // Asegúrate de que todos los campos necesarios están aquí
    ];

    // Configurar los campos de tipo de datos (opcional)
    protected $casts = [
        'amount' => 'decimal:2',
        'updates' => 'boolean',
        'terms_accepted' => 'boolean',
    ];
}

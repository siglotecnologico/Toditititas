<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

   // Especificar la tabla asociada
   protected $table = 'transactions';

   protected $fillable = [
    'merchant_transaction_id',
    'payment_type',
    'payment_brand',
    'amount',
    'currency',
    'descriptor',
    'result_code',
    'result_description',
    'auth_code',
    'batch_no',
    'total_amount',
    'interest',
    'response',
    'acquirer_code',
    'reference_no',
    'card_type',
    'card_bin',
    'card_bin_country',
    'card_last_4_digits',
    'card_holder',
    'card_expiry_month',
    'card_expiry_year',
    'status',
];

protected $casts = [
    'amount' => 'decimal:2',
    'total_amount' => 'decimal:2',
    'interest' => 'decimal:2',
];


}

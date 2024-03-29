<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_invoice',
        'invoice_number',
        'product',
        'section',
        'status',
        'note',
        'user',
        'payment_date',
    ];
}

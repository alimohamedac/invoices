<?php

namespace App\Models;

use App\Enum\InvoiceStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'invoice_number',
        'invoice_date',
        'due_date',
        'product',
        'section_id',
        'amount_collection',
        'amount_commission',
        'discount',
        'value_vat',
        'rate_vat',
        'total',
        'status',
        'note',
        'payment_date',
    ];

    protected $dates = ['deleted_at'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    /**
     * @return bool
     */
    public function isPaid(): bool
    {
        return $this->status == InvoiceStatus::Paid;
    }

    /**
     * @return bool
     */
    public function isUnpaid(): bool
    {
        return $this->status == InvoiceStatus::Unpaid;
    }
}

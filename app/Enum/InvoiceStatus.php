<?php

namespace App\Enum;

abstract class InvoiceStatus
{
    const Paid   = 'paid';
    const Unpaid   = 'unpaid';
    const PartiallyPaid  = 'partiallyPaid';
}


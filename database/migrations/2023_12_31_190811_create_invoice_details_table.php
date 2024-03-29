<?php

use App\Enum\InvoiceStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_invoice');
            $table->foreign('id_invoice')->references('id')->on('invoices')->onDelete('cascade');
            $table->string('invoice_number', 50);
            $table->string('product', 50);
            $table->string('section', 999);
            //$table->string('status', 50);
            $table->enum('status', [InvoiceStatus::Paid, InvoiceStatus::Unpaid, InvoiceStatus::PartiallyPaid])->default(InvoiceStatus::Unpaid);
            //$table->integer('value_status');
            $table->date('payment_date')->nullable();
            $table->text('note')->nullable();
            $table->string('user',300);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_details');
    }
}

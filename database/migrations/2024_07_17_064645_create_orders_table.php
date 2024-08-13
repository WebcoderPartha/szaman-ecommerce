<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->text('order_number')->nullable();
            $table->text('tnx_id')->nullable();
            $table->string('payable_amount');
            $table->string('shipping_charge')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_date')->nullable();
            $table->string('order_date')->nullable();
            $table->integer('order_status')->nullable()->default(0); // [0=Initiated, 1=Confirmed, 3=Processing, 4=Picked, 5=Shipped, 6=Delivered, 7=Cancelled, 8=Refunded, 9 Returned]
            $table->integer('payment_status')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

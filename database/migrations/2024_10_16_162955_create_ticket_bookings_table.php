<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('ticket_bookings', function (Blueprint $table) {
        $table->id(); // Primary key
        $table->string('name'); // Customer name
        $table->integer('adults'); // Number of adults
        $table->integer('kids'); // Number of kids
        $table->date('booking_date'); // Date of booking
        $table->decimal('total_price', 8, 2); // Total price
        $table->timestamps(); // Created and updated timestamps
    });
}
};

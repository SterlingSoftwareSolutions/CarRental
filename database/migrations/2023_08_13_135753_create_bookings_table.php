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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('pickup'); // Change this to the appropriate data type if needed
            $table->string('dropoff'); // Change this to the appropriate data type if needed
            $table->dateTime('pickup_time'); // Change this to the appropriate data type if needed
            $table->dateTime('dropoff_time'); // Change this to the appropriate data type if needed
            $table->unsignedBigInteger('vehicle_id'); // Assuming vehicle_id is a foreign key
            $table->foreign('vehicle_id')->references('id')->on('vehicles'); // Replace 'vehicles' with the actual table name
            $table->unsignedBigInteger('user_id'); // Assuming user_id is a foreign key
            $table->foreign('user_id')->references('id')->on('users'); // Replace 'users' with the actual table name
            $table->timestamps(); // Created_at and updated_at timestamps
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};

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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->string('vin')->nullable();
            $table->string('body_type')->nullable();
            $table->string('year')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('category')->nullable();
            $table->string('status')->default('Pending');
            $table->string('transmission')->nullable();
            $table->string('mileage')->nullable();
            $table->string('color')->nullable();
            $table->string('luggage')->nullable();
            $table->string('doors')->nullable();
            $table->string('price')->nullable();
            $table->string('passengers')->nullable();
            $table->text('short_Description')->nullable();
            $table->text('description')->nullable();
            $table->boolean('availability')->default(true)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};

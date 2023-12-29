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
        Schema::create('agreements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained()->cascadeOnDelete();
            $table->string('customer_name')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('customer_address_line_1')->nullable();
            $table->string('customer_address_line_2')->nullable();
            $table->string('customer_dob')->nullable();
            $table->string('customer_license')->nullable();
            $table->string('customer_license_expiry_year')->nullable();
            $table->string('customer_license_expiry_month')->nullable();
            $table->string('customer_license_expiry_date')->nullable();
            $table->string('addtional_driver_name')->nullable();
            $table->string('addtional_driver_mobile')->nullable();
            $table->string('addtional_driver_address_line_1')->nullable();
            $table->string('addtional_driver_address_line_2')->nullable();
            $table->string('customer_signature')->nullable();
            $table->string('customer_signature_name')->nullable();
            $table->string('customer_signature_date')->nullable();
            $table->string('driver_signature')->nullable();
            $table->string('driver_signature_name')->nullable();
            $table->string('driver_signature_date')->nullable();
            $table->string('admin_signature')->nullable();
            $table->string('license_image_front')->nullable();
            $table->string('license_image_back')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agreements');
    }
};

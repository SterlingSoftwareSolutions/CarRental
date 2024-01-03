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
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('vehicle_id');

            // Status
            $table->string('approval')->default('pending');
            $table->string('status');
            $table->boolean('agreed')->default(false);

            // Customer details
            $table->string('customer_name')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('customer_dob')->nullable();
            $table->string('customer_address_line_1')->nullable();
            $table->string('customer_address_line_2')->nullable();

            $table->string('customer_license')->nullable();
            $table->string('customer_license_expiry_year')->nullable();
            $table->string('customer_license_expiry_month')->nullable();
            $table->string('customer_license_expiry_date')->nullable();

            // Additional driver details
            $table->string('additional_driver_name')->nullable();
            $table->string('additional_driver_mobile')->nullable();
            $table->string('additional_driver_address_line_1')->nullable();
            $table->string('additional_driver_address_line_2')->nullable();

            // License images
            $table->string('license_image_front')->nullable();
            $table->string('license_image_back')->nullable();

            // Signatures
            $table->string('customer_signature')->nullable();
            $table->string('customer_signature_name')->nullable();
            $table->string('customer_signature_date')->nullable();
            $table->string('driver_signature')->nullable();
            $table->string('driver_signature_name')->nullable();
            $table->string('driver_signature_date')->nullable();
            $table->string('admin_signature')->nullable();

            // Booking details
            $table->string('pickup');
            $table->dateTime('pickup_time')->nullable();
            $table->string('pickup_mileage')->nullable();
            $table->string('pickup_fuel_level')->nullable();

            $table->string('dropoff');
            $table->dateTime('dropoff_time')->nullable();
            $table->string('dropoff_mileage')->nullable();
            $table->string('dropoff_fuel_level')->nullable();

            $table->string('return')->nullable();
            $table->dateTime('return_time')->nullable();
            $table->string('return_mileage')->nullable();
            $table->string('return_fuel_level')->nullable();

            // Vehicle damage details
            $table->string('body_damage_left')->nullable();
            $table->string('body_damage_right')->nullable();
            $table->string('body_damage_front')->nullable();
            $table->string('body_damage_back')->nullable();

            // Fees
            $table->string('allowed_vehicle_mileage')->nullable();
            $table->string('rate')->nullable();
            $table->string('extra_charge_km')->nullable();
            $table->string('insurance_premium')->nullable();
            $table->string('rental')->nullable();
            $table->string('extra_mileage')->nullable();
            $table->string('damage_liablity_reduction')->nullable();
            $table->string('bond_depost')->nullable();
            $table->string('card_fee')->nullable();
            $table->string('others')->nullable();
            $table->string('total')->nullable();

            // Checklist
            $table->boolean('reverse_camera')->nullable();
            $table->boolean('cargo_barrier')->nullable();
            $table->boolean('fuel_cap')->nullable();
            $table->boolean('rim_cups')->nullable();

            $table->timestamps();
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

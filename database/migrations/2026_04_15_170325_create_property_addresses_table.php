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
        Schema::create('property_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')
                ->references('id')
                ->on('properties')
                ->onDelete('cascade');
            $table->string('house_name_number')
                ->comment("First line of the address including the property name or number.");
            $table->string('address_2')
                ->comment('Second line of the address for the property')
                ->nullable();
            $table->string('address_3')
                ->comment('Third line of the address for the property')
                ->nullable();
            $table->string('address_4')
                ->comment('Fourth line of the address for the property')
                ->nullable();
            $table->string('town')
                ->comment('Town in which the property is located');
            $table->string('postcode_1')
                ->comment('First half of the postcode for the property');
            $table->string('postcode_2')
                ->comment('Second half of the postcode for the property');
            $table->string('display_address')
                ->comment('Address which should be displayed on Rightmove for
                            the property. The full detailed address will only be
                            visible to the agent and not displayed on website.');
            $table->string('country_code', 2)
                ->comment("The ISO-3316 two letter code for the country the property is located");
            $table->string('region')
                ->comment('The region that the property being sent is located in')
                ->nullable();
            $table->string('sub_region')
                ->comment('The sub region that the property being sent is located in')
                ->nullable();
            $table->string('town_city')
                ->comment('The town or city that the property being sent is located in')
                ->nullable();
            $table->decimal('latitude', 10, 8)
                ->comment('The exact latitude of the property')
                ->nullable();
            $table->decimal('longitude', 11, 8)
                ->comment('The exact longitude of the property')
                ->nullable();
            $table->decimal('pov_latitude', 10, 8)
                ->comment('Latitude for the Google street view camera')
                ->nullable();
            $table->decimal('pov_longitude', 11, 8)
                ->comment('Longitude for the Google street view camera.')
                ->nullable();
            $table->decimal('pov_pitch', 11, 8)
                ->comment('Longitude for the Google street view camera.')
                ->nullable();
            $table->decimal('pov_heading', 11, 8)
                ->comment('Heading for the Google street view camera.')
                ->nullable();
            $table->decimal('pov_zoom', 11, 8)
                ->comment('Zoom for the Google street view camera.')
                ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_addresses');
    }
};

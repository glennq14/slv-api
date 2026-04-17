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
        Schema::create('property_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')
                ->references('id')
                ->on('properties')
                ->onDelete('cascade');
            $table->string('summary', 1000)
                ->comment('The summary description of the property being sent');
            $table->text('description')
                ->comment('The full description of the property being sent');
            $table->json('features')
                ->comment('Features of the property being sent')
                ->nullable();
            $table->integer('bedrooms')->default(0)
                ->comment('The number of bedrooms for the property being sent')
                ->nullable();
            $table->integer('bathrooms')->default(0)
                ->comment('The number of bathrooms for the property being sent')
                ->nullable();
            $table->integer('reception_rooms')->default(0)
                ->comment('The number of reception rooms for the property being sent')
                ->nullable();
            $table->enum('parking', [13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, null])
                ->comment('Parking options available for the property being sent: 
                    13 Allocated, 14 Communal, 15 Covered, 16 Garage, 17 Driveway, 
                    18 Gated, 19 Off Street, 20 On Street, 21 Rear, 22 Permit, 23 Private, 
                    24 Residents')
                ->nullable();
            $table->boolean('business_for_sale');
            $table->string('comm_use_class');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_details');
    }
};

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
        Schema::create('property_prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')
                ->references('id')
                ->on('properties')
                ->onDelete('cascade');
            $table->decimal('price',8,2)->default(0)
                ->comment('The price of the property being sen');
            $table->enum('price_qualifier', ['Default', 'Guide Price', 'Offers in Excess of', 'Offers in the Region of', 'Coming Soon', null])
                ->comment('The qualifier on the advertised price of the property being sent')
                ->nullable();
            $table->integer('deposit')
                ->comment('Deposit required for rental of the property (for lettings only)')
                ->nullable();
            $table->string('administration_fee')
                ->comment('Admin fee required for the rental contract of the property (for lettings only)')
                ->nullable();
            $table->string('rent_frequency')
                ->comment('Frequency of rental payments for the property')
                ->nullable();
            $table->string('tenure_Type')
                ->comment('Tenure type for the sale of the property')
                ->nullable();
            $table->boolean('auction')
                ->comment('Whether the property is being sold at auction')
                ->nullable();
            $table->decimal('tenure_Unexpired_Years')
                ->comment('Number of years left on the tenure of the property')
                ->nullable();
            $table->decimal('price_per_unit_area')
                ->comment('The price per area unit of the property (no longer used - data sent in this field will not be used)')
                ->nullable();
            $table->decimal('price_per_unit_per_annum')
                ->comment('The price per area unit per annum of the property')
                ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_prices');
    }
};

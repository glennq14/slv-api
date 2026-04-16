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
            $table->foreign('property_id')
                ->references('id')
                ->on('properties')
                ->onDelete('cascade');
            $table->string('summary', 1000)
                ->comment('The summary description of the property being sent');
            $table->string('description', 32000)
                ->comment('The full description of the property being sent');
            $table->json('features')->unique()
                ->comment('Features of the property being sent');
            

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

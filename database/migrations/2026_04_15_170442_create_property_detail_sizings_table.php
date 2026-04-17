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
        Schema::create('property_detail_sizings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_detail_id');
            $table->foreign('property_detail_id')
                ->references('id')
                ->on('property_details')
                ->onDelete('cascade');
            $table->decimal('minimum',8,2)->default(0);
            $table->decimal('maximum',8,2)->default(0);
            $table->string('area_unit')
                ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_detail_sizings');
    }
};

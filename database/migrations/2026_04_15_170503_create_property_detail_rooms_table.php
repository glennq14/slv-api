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
        Schema::create('property_detail_rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_detail_id');
            $table->foreign('property_detail_id')
                ->references('id')
                ->on('property_details')
                ->onDelete('cascade');
            $table->string('name', 120)
                ->comment('The name of the room');
            $table->string('description', 1000)
                ->comment('The specific description of that room')
                ->nullable();
            $table->integer('length')
                ->comment('The length of the room');
            $table->integer('width')
                ->comment('The width of the room');
            $table->enum('dimension_unit', ["Metres", "Centimetres", "Millimetres", "Feet", "Inches", null])
                ->comment('The units which the length and width of the room have 
                            been provided in'
                        )
                ->nullable();
            $table->string('dimension_text')
                ->comment('Any additional description or clarification of the room dimensions')
                ->nullable();
            $table->json('photo_urls')
                ->comment('The URLs of images which should be associated with this room')
                ->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_rooms');
    }
};

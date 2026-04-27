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
        Schema::create('property_media', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')
                ->references('id')
                ->on('properties')
                ->onDelete('cascade');
            $table->enum('type', [
                    'Image', 
                    'Floorplan',
                    'Brochure',
                    'Virtual Tour',
                    'Audio Tour',
                    'EPC', 
                    'EPC Graph'
                ])
                ->comment('The type of media which is being sent');
            $table->string('url')
                ->comment('The URL to retrieve this piece of media from');
            $table->string('caption')
                ->comment('The caption to be displayed for this piece of media')
                ->nullable();
            $table->integer('sort_order')
                ->comment('The display order for this piece of media');
            $table->dateTime('media_update_date')
                ->comment('The date the media at this URL was last updated in the format: dd-MM-yyyy HH:mm:ss')
                ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_media');
    }
};

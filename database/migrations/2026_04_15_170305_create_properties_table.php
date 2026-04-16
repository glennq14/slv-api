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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('network_id');
            $table->foreign('network_id')
                ->references('id')
                ->on('networks')
                ->onDelete('cascade');
            $table->unsignedBigInteger('branch_id');
            $table->foreign('branch_id')
                ->references('id')
                ->on('branches')
                ->onDelete('cascade');
            $table->string('agent_ref');
            $table->boolean('published');
            $table->integer('property_type');
            $table->integer('status');
            $table->integer('os_status');
            $table->unsignedBigInteger('property_address_id');
            $table->foreign('property_address_id')
                ->references('id')
                ->on('property_addresses')
                ->onDelete('cascade');
            $table->foreign('property_price_id')
                ->references('id')
                ->on('property_prices')
                ->onDelete('cascade');
            $table->foreign('property_detail_id')
                ->references('id')
                ->on('property_details')
                ->onDelete('cascade');
            $table->boolean('business_for_sale');
            $table->string('comm_use_class');
            $table->foreign('property_room_id')
                ->references('id')
                ->on('property_rooms')
                ->onDelete('cascade');
            $table->boolean('new_home');
            $table->foreign('property_media_id')
                ->references('id')
                ->on('property_media')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};

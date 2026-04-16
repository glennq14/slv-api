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
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('network_id');
            $table->foreign('network_id')->references('id')->on('networks')->onDelete('cascade');
            $table->integer('branch_id')->unique()->comment('Unique reference for this branch');
            $table->enaum('channel', [1, 2])->comment('For dual branches it allows to retrieve all the properties for a specific channel');
            $table->boolean('overseas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};

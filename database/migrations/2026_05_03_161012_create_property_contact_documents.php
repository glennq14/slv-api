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
        Schema::create('property_contact_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contact_detail_id');
            $table->foreign('contact_detail_id')
                ->references('id')
                ->on('property_contact_detials')
                ->onDelete('cascade');
            $table->string('filename');
            $table->string('file_path');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_contact_documents');
    }
};

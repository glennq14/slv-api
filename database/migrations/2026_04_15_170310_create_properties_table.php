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
        // Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('properties');
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->unsignedBigInteger('property_type_id');
            $table->foreign('property_type_id')
                ->references('id')
                ->on('property_types');
            $table->string('title')
                ->unique()
                ->comment('Property title');
            $table->string('agent_ref', 80)
                ->comment("Agent's unique reference for this property");
            $table->enum('status', [
                    'Available',
                    'SSTC',
                    'Under Offer',
                    'Reserved'])
                ->comment('The current transaction status for this property');
            $table->boolean('new_home')
                ->default(false)
                ->comment("Defines whether this property is a new build");
            $table->boolean('student_property')
                ->default(false)
                ->comment('Whether the property is available for student lettings');
            $table->boolean('house_flat_share')
                ->default(false)
                ->comment('Whether this advert is for a house/flat share');
            $table->date('date_available')
                ->comment('Date from which a rental property is available in the format: dd-MM-yyyy.')
                ->nullable();
            $table->integer('contract_months')
                ->default(0)
                ->comment('Length of rental contract in months (for lettings only).');
            $table->integer('minimum_term')
                ->default(0)
                ->comment('Minimum term for the rental contract in months (for lettings only).');
            $table->string('let_type')
                ->comment('Type of rental contract available for the property (for lettings only).')
                ->nullable();
            $table->timestamps();
        });

        // Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};

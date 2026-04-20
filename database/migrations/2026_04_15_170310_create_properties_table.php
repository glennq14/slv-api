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
            $table->string('agent_ref', 80)
                ->comment("Agent's unique reference for this property");
            $table->boolean('published')
                ->comment('Defines whether this property should be visible');
            $table->integer('property_type')
                ->default(0)
                ->comment('The type of the property being sent in this message');
            $table->enum('os_status', ['Available', 'SSTC', 'Under Offer', 'Reserved'])
                ->comment('The current transaction status for this property: 
                    1 Available, 
                    2 SSTC, 
                    4 Under Offer, 
                    5 Reserved'
                );
            $table->boolean('new_home')
                ->comment("Defines whether this property is a new build")
                ->nullable();
            $table->boolean('student_property')
                ->comment('Whether the property is available for student lettings')
                ->nullable();
            $table->boolean('house_flat_share')
                ->comment('Whether this advert is for a house/flat share')
                ->nullable();
            $table->date('date_available')
                ->comment('Date from which a rental property is available in the format: dd-MM-yyyy.')
                ->nullable();
            $table->integer('contract_months')
                ->comment('Length of rental contract in months (for lettings only).')
                ->nullable();
            $table->integer('minimum_term')
                ->comment('Minimum term for the rental contract in months (for lettings only).')
                ->nullable();
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

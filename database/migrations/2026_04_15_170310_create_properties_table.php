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
            $table->string('agent_ref', 80)
                ->comment("Agent's unique reference for this property");
            $table->boolean('published')
                ->comment('Defines whether this property should be visible');
            $table->enum('property_type', [
                    0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 20, 
                    21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 43, 44, 45, 46, 47, 48, 
                    49, 50, 51, 52, 53, 56, 59, 62, 65, 68, 71, 74, 77, 80, 83, 86, 
                    92, 95, 101, 104, 107, 110, 113, 116, 117, 118, 119, 120, 121, 
                    125, 128, 131, 134, 137, 140, 141, 142, 143, 144, 178, 181, 184, 
                    187, 190, 193, 196, 199, 202, 205, 208, 211, 214, 217, 220, 223, 
                    226, 229, 232, 235, 238, 241, 244, 247, 250, 253, 256, 259, 262, 
                    265, 268, 271, 274, 277, 280, 283, 298, 301, 304, 307, 310, 511, 
                    512, 535, 538, 541
                ])
                ->comment('The type of the property being sent in this message'
                );
            $table->enum('os_status', [1, 2, 4, 5])
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

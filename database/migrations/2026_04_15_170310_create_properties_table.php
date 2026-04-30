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
            $table->text('description')
                ->comment('The full description of the property');
            $table->enum('title_deeds', ['available','not-available'])
                ->comment('Whether the title deeds for the property are available');
            $table->integer('bedrooms')
                ->default(0)
                ->comment('Number of bedrooms');
            $table->integer('bathrooms')
                ->default(0)
                ->comment('Number of bathrooms');
            $table->decimal('build', 8, 2)
                ->default(0)
                ->comment('Build area in square meters');
            $table->decimal('terrace', 8, 2)
                ->default(0)
                ->comment('Terrace area in square meters');
            $table->decimal('plot', 8.2)
                ->default(0)
                ->comment('Plot area in square meters');
            $table->string('plot_description', 255)
                ->comment('Description of the plot area')
                ->nullable();
            $table->unsignedBigInteger('agent_id')
                ->comment('ID of the agent responsible for the property');
            $table->foreign('agent_id')
                ->references('id')
                ->on('users');
            $table->foreign('property_type_id')
                ->references('id')
                ->on('property_types');
            $table->string('year_of_construction', 255)
                ->comment('Year of construction')
                ->nullable();
            $table->enum('pool', ['yes', 'no'])
                ->comment('Whether the property has a pool');
            $table->string('pool_description', 255)
                ->comment('Description of the pool')
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

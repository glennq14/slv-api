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
        Schema::create('property_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')
                ->references('id')
                ->on('properties')
                ->onDelete('cascade');
            $table->string('summary', 1000)
                ->comment('The summary description of the property being sent');
            $table->text('description')
                ->comment('The full description of the property being sent');
            $table->json('features')
                ->comment('Features of the property being sent')
                ->nullable();
            $table->integer('bedrooms')
                ->default(0)
                ->comment('The number of bedrooms for the property being sent');
            $table->integer('bathrooms')
                ->default(0)
                ->comment('The number of bathrooms for the property being sent');
            $table->integer('reception_rooms')
                ->default(0)
                ->comment('The number of reception rooms for the property being sent');
            $table->enum('parking', [
                    "Allocated",
                    "Communal",
                    "Covered", 
                    "Garage", 
                    "Driveway", 
                    "Gated", 
                    "Off Street", 
                    "On Street", 
                    "Rear", 
                    "Permit", 
                    "Private", 
                    "Residents", 
                    null
                ])
                ->comment('Parking options available for the property being sent')
                ->nullable();
            $table->enum('outside_space', [
                    "Back Garden",
                    "Communal Garden",
                    "Enclosed Garden",
                    "Front Garden",
                    "Private Garden",
                    "Rear Garden",
                    "Terrace",
                    "Patio",
                    null
                ])
                ->comment('Outside spaces associated with the property being sent')
                ->nullable();
            $table->integer('year_built')
                ->default(0)
                ->comment('The year in which the property being sent was built');
            $table->decimal('internal_area', 8,1)
                ->default(0)
                ->comment('Total internal area of the property being sent');
            $table->enum('internal_area_unit', [
                    "sq ft", 
                    "sq m", 
                    "acre",
                     "hectares", 
                     null
                ])
                ->comment('Units which the internal area is sent in: 1 sq ft 2 sq m 3 acre 4 hectares')
                ->nullable();
            $table->decimal('land_area', 8,1)
                ->default(0)
                ->comment('Total land area of the property being sent');
            $table->enum('land_area_unit', [
                    "sq ft", 
                    "sq m", 
                    "acre", 
                    "hectares", 
                    null
                ])
                ->comment('Units which the land area is sent in: 1 sq ft 2 sq m 3 acre 4 hectares')
                ->nullable();
            $table->integer('floors')
                ->default(0)
                ->comment('Number of floors in the property being sent');
            $table->enum('entrance_floor', [
                    "Basement", 
                    "Ground Floor", 
                    "1st Floor", 
                    "2nd Floor", 
                    "Higher than 2nd floor (no lift)", 
                    "Higher than 2nd floor (with lift)", 
                    null
                ])
                ->comment('Floor which the entrance to the property being sent is on')
                ->nullable();
            $table->enum('condition', [
                    "Good", 
                    "Some work needed", 
                    "Work required throughout", 
                    "Major renovation required", 
                    null
                ])
                ->comment('Condition of the property being sent')
                ->nullable();
            $table->enum('accessibility', [
                    "Accessible", 
                    "Partially Accessible", 
                    "Not Accessible", 
                    null
                ])
                ->comment('Accessibility features of the property being sent')
                ->nullable();
            $table->enum('heating', [
                    "Air Conditioning", 
                    "Central",
                    "Double Glazing", 
                    "Eco-Friendly",
                    "Electric", 
                    "Gas", 
                    "Gas Central", 
                    "Night Storage", 
                    "Oil", 
                    "Solar", 
                    "Solar Water", 
                    "Under Floor", 
                    null
                ])
                ->comment('Heating related features of the property being sent')
                ->nullable();
            $table->boolean('golf_course_on_site_or_within_10_minutes_walk')
                ->default(false)
                ->comment('Is there a golf course within a ten minute walk of the property being sent');
            $table->boolean('golf_course_within_a_20_minute_drive')
                ->default(false)
                ->comment('Is there a golf course within a twenty minute drive of the property being sent');
            $table->boolean('private_pool')
                ->default(false)
                ->comment('Is there a private pool at the property being sent');

            $table->boolean('communal_pool')
                ->default(false)
                ->comment('Is there access to a communal pool at the property being sent');
            $table->boolean('at_beach_or_within_10_minute_walk')
                ->default(false)
                ->comment('Is there a beach located at or within a ten minute walk of the property being sent');
            $table->boolean('beach_within_a_20_minute_drive')
                ->default(false)
                ->comment('Is there a beach within a twenty minute drive of the property being sent');
            $table->boolean('private_beach')
                ->default(false)    
                ->comment('Is there a private beach at the property being sent');
            $table->boolean('sea_view')
                ->default(false)    
                ->comment('Is there a sea view at the property being sent');
            $table->boolean('at_ski_field_or_within_10_minutes_walk')
                ->default(false)
                ->comment('at_ski_field_or_within_10_minutes_walk');
            $table->boolean('ski_field_within_a_45_minute_drive')
                ->default(false)
                ->comment('Is there a ski field within a 45 minute drive of the property being sent');
            $table->boolean('air_conditioning')
                ->default(false)
                ->comment('Is there air conditioning at the property being sent');
            $table->boolean('security_system')
                ->default(false)
                ->comment('Is there a security system at the property being sent');
            $table->boolean('gated_entry')
                ->default(false)
                ->comment('Is there gated entry at the property being sent');
            $table->boolean('balcony')
                ->default(false)    
                ->comment('Is there a balcony at the property being sent');
            $table->boolean('ground_floor_terrace')
                ->default(false)    
                ->comment('Is there a ground floor terrace at the property being sent');
            $table->boolean('roof_terrace')
                ->default(false)
                ->comment('Is there a roof terrace at the property being sent');
            $table->boolean('hot_tub')
                ->default(false)    
                ->comment('Is there a hot tub at the property being sent');
            $table->boolean('business_for_sale')
                ->default(false)
                ->comment('Is there a business for sale with the commercial property being sent');
            $table->enum('comm_use_class', [
                    "A1 Shops", 
                    "A2 Financial and Professional Services", 
                    "A3 Restaurants and Cafes", 
                    "A4 Drinking Establishments", 
                    "A5 Hot Food Take away", 
                    "B1 Business", 
                    "B2 General Industrial", 
                    "B8 Storage and Distribution", 
                    "C1 Hotels", 
                    "C2 Residential Institutions", 
                    "C2A Secure Residential Institution", 
                    "C3 Dwelling Houses",
                    "D1 Non-Residential Institutions", 
                    "D2 Assembly and Leisure", 
                    "Sui_generis_1", 
                    "Sui_generis_2", 
                    null
                ])
                ->comment('The commercial use class(es) of the property being sent: 1 A1 Shops, 
                            4 A2 Financial and Professional Services, 7 A3 Restaurants and Cafes, 
                            10 A4 Drinking Establishments, 13 A5 Hot Food Take away, 16 B1 Business, 
                            19 B2 General Industrial, 22 B8 Storage and Distribution, 25 C1 Hotels, 
                            28 C2 Residential Institutions, 31 C2A Secure Residential Institution, 
                            34 C3 Dwelling Houses, 37 D1 Non-Residential Institutions, 40 D2 Assembly and Leisure, 
                            43 Sui_generis_1, 46 Sui_generis_2'
                        )
                ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_details');
    }
};

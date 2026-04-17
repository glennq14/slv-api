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
            $table->integer('bedrooms')->default(0)
                ->comment('The number of bedrooms for the property being sent')
                ->nullable();
            $table->integer('bathrooms')->default(0)
                ->comment('The number of bathrooms for the property being sent')
                ->nullable();
            $table->integer('reception_rooms')->default(0)
                ->comment('The number of reception rooms for the property being sent')
                ->nullable();
            $table->enum('parking', [13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, null])
                ->comment('Parking options available for the property being sent: 
                    13 Allocated, 14 Communal, 15 Covered, 16 Garage, 17 Driveway, 
                    18 Gated, 19 Off Street, 20 On Street, 21 Rear, 22 Permit, 23 Private, 
                    24 Residents')
                ->nullable();
            $table->enum('outside_space', [29, 30, 31, 32, 33, 34, 35, 36, null])
                ->comment('Outside spaces associated with the property being sent: 29 Back Garden, 
                        30 Communal Garden, 31 Enclosed Garden, 32 Front Garden, 33 Private Garden, 
                        34 Rear Garden, 35 Terrace, 36 Patio')
                ->nullable();
            $table->integer('year_built')->default(0)
                ->comment('The year in which the property being sent was built');
            $table->decimal('internal_area' ,8,1)
                ->comment('Total internal area of the property being sent');
            $table->enum('internal_area_unit', [1, 2, 3, 4, null])
                ->comment('Units which the internal area is sent in: 1 sq ft 2 sq m 3 acre 4 hectares')
                ->nullable();
            $table->decimal('land_area' ,8,1)
                ->comment('Total land area of the property being sent');
            $table->enum('land_area_unit', [1, 2, 3, 4, null])
                ->comment('Units which the land area is sent in: 1 sq ft 2 sq m 3 acre 4 hectares')
                ->nullable();
            $table->integer('floors')
                ->comment('Number of floors in the property being sent');
            $table->enum('entrance_floor', [1, 2, 3, 4, 5, 6, null])
                ->comment('Floor which the entrance to the property being sent is on: 1 Basement, 
                        2 Ground Floor, 3 1st Floor, 4 2nd Floor, 5 Higher than 2nd floor (no lift), 6 Higher than 2nd floor (with lift)')
                ->nullable();
            $table->enum('condition', [1, 2, 3, 4, null])
                ->comment('Condition of the property being sent: 1 Good, 2 Some work needed, 3 Work required throughout, 4 Major renovation required')
                ->nullable();
            $table->enum('accessibility', [42, 37, 38, 39, 40, 41, null])
                ->comment('Condition of the property being sent: 1 Good, 2 Some work needed, 3 Work required throughout, 4 Major renovation required')
                ->nullable();
            $table->enum('heating', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, null])
                ->comment('Heating related features of the property being sent: 1 Air Conditioning, 2 Central, 3 Double Glazing, 
                            4 Eco-Friendly, 5 Electric, 6 Gas, 7 Gas Central, 8 Night Storage, 9 Oil, 10 Solar, 11 Solar Water, 12 Under Floor')
                ->nullable();
            $table->boolean('golf_course_on_site_or_within_10_minutes_walk')
                ->comment('Is there a golf course within a ten minute walk of the property being sent')
                ->nullable();
            $table->boolean('golf_course_within_a_20_minute_drive')
                ->comment('Is there a golf course within a twenty minute drive of the property being sent')
                ->nullable();
            $table->boolean('private_pool')
                ->comment('Is there a private pool at the property being sent')
                ->nullable();
            $table->boolean('communal_pool')
                ->comment('Is there access to a communal pool at the property being sent')
                ->nullable();
            $table->boolean('at_beach_or_within_10_minute_walk')
                ->comment('Is there a beach located at or within a ten minute walk of the property being sent')
                ->nullable();
            $table->boolean('beach_within_a_20_minute_drive')
                ->comment('Is there a beach within a twenty minute drive of the property being sent')
                ->nullable();
            $table->boolean('private_beach')
                ->comment('Is there a private beach at the property being sent')
                ->nullable();
            $table->boolean('sea_view')
                ->comment('Is there a sea view at the property being sent')
                ->nullable();
            $table->boolean('at_ski_field_or_within_10_minutes_walk')
                ->comment('at_ski_field_or_within_10_minutes_walk')
                ->nullable();
            $table->boolean('ski_field_within_a_45_minute_drive')
                ->comment('Is there a ski field within a 45 minute drive of the property being sent')
                ->nullable();
            $table->boolean('air_conditioning')
                ->comment('Is there air conditioning at the property being sent')
                ->nullable();
            $table->boolean('security_system')
                ->comment('Is there a security system at the property being sent')
                ->nullable();
            $table->boolean('gated_entry')
                ->comment('Is there gated entry at the property being sent')
                ->nullable();
            $table->boolean('balcony')
                ->comment('Is there a balcony at the property being sent')
                ->nullable();
            $table->boolean('ground_floor_terrace')
                ->comment('Is there a ground floor terrace at the property being sent')
                ->nullable();
            $table->boolean('roof_terrace')
                ->comment('Is there a roof terrace at the property being sent')
                ->nullable();
            $table->boolean('hot_tub')
                ->comment('Is there a hot tub at the property being sent')
                ->nullable();
            $table->boolean('business_for_sale')
                ->comment('Is there a business for sale with the commercial property being sent')
                ->nullable();
            $table->enum('comm_use_class', [1, 4, 7, 10, 13, 16, 19, 22, 25, 28, 31, 34, 37, 40, 43, 46, null])
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

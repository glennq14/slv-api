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
                ->comment('The type of the property being sent in this message: 
                    0 Not Specified, 1 Terraced House, 2 End of terrace house, 
                    3 Semi-detached house, 4 Detached house, 5 Mews house, 
                    6 Cluster house, 7 Ground floor flat, 8 Flat, 9 Studio flat, 
                    10 Ground floor maisonette, 11 Maisonette, 12 Bungalow, 
                    13 Terraced bungalow, 14 Semi-detached bungalow, 
                    15 Detached bungalow, 16 Mobile home, 20 Land, 
                    21 Link detached house, 22 Town house, 23 Cottage, 24 Chalet, 
                    25 Character Property, 26 House (unspecified), 27 Villa, 
                    28 Apartment, 29 Penthouse, 30 Finca, 43 Barn Conversion, 
                    44 Serviced apartment, 45 Parking, 46 Sheltered Housing, 
                    47 Reteirment property, 48 House share, 49 Flat share, 
                    50 Park home, 51 Garages, 52 Farm House, 53 Equestrian facility, 
                    56 Duplex, 59 Triplex, 62 Longere, 65 Gite, 68 Barn, 71 Trulli, 
                    74 Mill, 77 Ruins, 80 Restaurant, 83 Cafe, 86 Mill, 92 Castle, 
                    95 Village House, 101 Cave House, 104 Cortijo, 107 Farm Land, 
                    110 Plot, 113 Country House, 116 Stone House, 117 Caravan, 
                    118 Lodge, 119 Log Cabin, 120 Manor House, 121 Stately Home, 
                    125 Off-Plan, 128 Semi-detached Villa, 131 Detached Villa, 
                    134 Bar/Nightclub, 137 Shop, 140 Riad, 141 House Boat, 
                    142 Hotel Room, 143 Block of Apartments, 144 Private Halls, 
                    178 Office, 181 Business Park, 184 Serviced Office, 
                    187 Retail Property (High Street), 190 Retail Property (Out of Town), 
                    193 Convenience Store, 196 Garages, 199 Hairdresser/Barber Shop, 
                    202 Hotel, 205 Petrol Station, 208 Post Office, 211 Pub, 
                    214 Workshop & Retail Space, 217 Distribution Warehouse, 
                    220 Factory, 223 Heavy Industrial, 226 Industrial Park, 
                    229 Light Industrial, 232 Storage, 235 Showroom, 238 Warehouse, 
                    241 Land, 244 Commercial Development, 247 Industrial Development, 
                    250 Residential Development, 253 Commercial Property, 256 Data Centre, 
                    259 Farm, 262 Healthcare Facility, 265 Marine Property, 268 Mixed Use, 
                    271 Research & Development Facility, 274 Science Park, 277 Guest House, 
                    280 Hospitality, 283 Leisure Facility, 298 Takeaway, 301 Childcare Facility, 
                    304 Smallholding, 307 Place of Worship, 310 Trade Counter, 511 Coach House, 
                    512 House of Multiple Occupation, 535 Sports facilities, 538 Spa, 
                    541 Campsite & Holiday Village'
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
            $table->foreign('property_room_id')
                ->references('id')
                ->on('property_rooms')
                ->onDelete('cascade');
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

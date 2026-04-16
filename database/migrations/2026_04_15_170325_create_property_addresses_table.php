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
        Schema::create('property_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')
                ->references('id')
                ->on('properties')
                ->onDelete('cascade');
            $table->string('house_name_number')
                ->comment("First line of the address including the property name or number.");
            $table->string('address_2')
                ->comment('Second line of the address for the property')
                ->nullable();
            $table->string('address_3')
                ->comment('Third line of the address for the property')
                ->nullable();
            $table->string('address_4')
                ->comment('Fourth line of the address for the property')
                ->nullable();
            $table->string('town')
                ->comment('Town in which the property is located');
            $table->string('postcode_1')
                ->comment('First half of the postcode for the property');
            $table->string('postcode_2')
                ->comment('Second half of the postcode for the property');
            $table->string('postcode_2')
                ->comment('Address which should be displayed on Rightmove for
                            the property. The full detailed address will only be
                            visible to the agent and not displayed on website.');
            $table->string('country_code', 2)
                ->comment("The ISO-3316 two letter code for the country the property is located in: 
                        AD Andorra, AE United Arab Emirates, AF Afghanistan, AG Antigua And Barbuda, 
                        AI Anguilla, AL Albania, AM Armenia, AN Netherlands Antilles, AO Angola, 
                        AR Argentina, AS American Samoa, AT Austria, AU Australia, AW Aruba, AZ Azerbaijan, 
                        BA Bosnia-Herzegovina, BB Barbados, BD Bangladesh, BE Belgium, BF Burkina, BG Bulgaria, 
                        BH Bahrain, BI Burundi, BJ Benin, BM Bermuda, BN Brunei, BO Bolivia, BR Brazil, 
                        BS The Bahamas, BT Bhutan, BV Bouvetoya, BW Botswana, BY Belarus, BZ Belize, CA Canada, 
                        CB Canouan Island, CC Cocos Islands, CD Democratic Republic of the Congo, 
                        CF Central African Republic, CG Congo, CH Switzerland, CI Cote d'Ivoire, CK Cook Islands, 
                        CL Chile, CM Cameroon, CN China, CO Colombia, CR Costa Rica, CS Serbia and Montenegro, 
                        CU Cuba, CV Cape Verde, CX Christmas Island, CY Cyprus, CZ Czech Republic, DE Germany, 
                        DJ Djibouti, DK Denmark, DM Dominica, DO Dominican Republic, DU Dubai, DZ Algeria, EC Ecuador, 
                        EE Estonia, EG Egypt, ER Eritrea, ES Spain, ET Ethiopia, FI Finland, FJ Fiji, 
                        FK Falkland Islands, FM Federated States of Micronesia, FO Faroe Islands, FR France, GA Gabon, 
                        GD Grenada, GE Georgia, GF French Guiana, GH Ghana, GI Gibraltar, GL Greenland, GM The Gambia, 
                        GN Guinea, GO Goa, GP Guadeloupe, GQ Equatorial Guinea, GR Greece, 
                        GS South Georgia and South Sandwich Islands, GT Guatemala, GU Guam, GW Guinea-Bissau, GY Guyana, 
                        HM Heard and McDonald Islands, HN Honduras, HR Croatia, HT Haiti, HU Hungary, ID Indonesia, 
                        IE Ireland, IL Israel, IM Margarita Island, IN India, IO British Indian Ocean Territory, 
                        IQ Iraq, IR Iran, IS Iceland, IT Italy, JM Jamaica, JO Jordan, JP Japan, KE Kenya, KG Kyrgyzstan, 
                        KH Cambodia, KI Kiribati, KM Comoros, KN St Kitts and Nevis, KP North Korea, KR South Korea, 
                        KW Kuwait, KY Cayman Islands, KZ Kazakhstan, LA Laos, LB Lebanon, LC St Lucia, LI Liechtenstein, 
                        LK Sri Lanka, LR Liberia, LS Lesotho, LT Lithuania, LU Luxembourg, LV Latvia, LY Libya, MA Morocco, 
                        MC Monaco, MD Moldova, ME Montenegro, MG Madagascar, MH Marshall Islands, MK Macedonia, ML Mali, 
                        MM Myanmar, MN Mongolia, MP Northern Mariana Islands, MQ Martinique, MR Mauritania, MS Montserrat, 
                        MT Malta, MU Mauritius, MV Maldives, MW Malawi, MX Mexico, MY Malaysia, MZ Mozambique, NA Namibia, 
                        NC New Caledonia, NE Niger, NF Norfolk Island, NG Nigeria, NI Nicaragua, NL Netherlands, NO Norway, 
                        NP Nepal, NR Nauru, NU Niue, NY Northern Cyprus, NZ New Zealand, OM Oman, PA Panama, PE Peru, 
                        PF French Polynesia, PG Papua New Guinea, PH Philippines, PK Pakistan, PL Poland, PM St Pierre and Miquelon, 
                        PN Pitcairn Islands, PR Puerto Rico, PT Portugal, PW Palau, PY Paraguay, QA Qatar, RE Reunion, RO Romania, 
                        RU Russian Federation, RW Rwanda, SA Saudi Arabia, SB Solomon Islands, SC Seychelles, SD Sudan, SE Sweden, 
                        SG Singapore, SH St Helena, SI Slovenia, SJ Svalbard, SK Slovakia, SL Sierra Leone, SM San Marino, 
                        SN Senegal, SO Somalia, SP Serbia, SR Suriname, ST Sao Tome and Principe, SV El Salvador, 
                        SY Syria, SZ Swaziland, TC Turks And Caicos Islands, TD Chad, TF French Southern and Antarctic Lands, 
                        TG Togo, TH Thailand, TJ Tajikistan, TK Tokelau, TL East Timor, TM Turkmenistan, TN Tunisia, TO Tonga, 
                        TR Turkey, TT Trinidad And Tobago, TV Tuvalu, TW Taiwan, TZ Tanzania, UA Ukraine, UG Uganda, 
                        US United States of America, UY Uruguay, UZ Uzbekistan, VC St Vincent and the Grenadines, VE Venezuela, 
                        VG British Virgin Islands, VI Virgin Islands (U.S.A.), VN Vietnam, VU Vanuatu, WF Wallis and Futuna Islands, 
                        WS Samoa, XB St Barthelemy, XM St Maarten, YE Yemen, YT Mayotte, ZA South Africa, ZM Zambia, ZW Zimbabwe"
                    );
            $table->string('region')
                ->comment('The region that the property being sent is located in')
                ->nullable();
            $table->string('sub_region')
                ->comment('The sub region that the property being sent is located in')
                ->nullable();
            $table->string('town_city')
                ->comment('The town or city that the property being sent is located in')
                ->nullable();
            $table->decimal('latitude', 10, 8)
                ->comment('The exact latitude of the property')
                ->nullable();
            $table->decimal('longitude', 11, 8)
                ->comment('The exact longitude of the property')
                ->nullable();
            $table->decimal('pov_latitude', 10, 8)
                ->comment('Latitude for the Google street view camera')
                ->nullable();
            $table->decimal('pov_longitude', 11, 8)
                ->comment('Longitude for the Google street view camera.')
                ->nullable();
            $table->decimal('pov_pitch', 11, 8)
                ->comment('Longitude for the Google street view camera.')
                ->nullable();
            $table->decimal('pov_pitch', 11, 8)
                ->comment('Pitch for the Google street view camera..')
                ->nullable();
            $table->decimal('pov_heading', 11, 8)
                ->comment('Heading for the Google street view camera.')
                ->nullable();
            $table->decimal('pov_zoom', 11, 8)
                ->comment('Zoom for the Google street view camera.')
                ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_addresses');
    }
};

<x-app-layout>
    <x-slot name="header">
        <h3 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Properties') }}
        </h3>
    </x-slot>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('Add New Property') }}
            </h2>
        </div>
    </div>

    <div class="text-xs flex py-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div>
            <div class="flex py-3">
                <div class="ring-2 ring-[#01ADF1] rounded-full p-[11px]">
                    <div class="h-2.5 w-2.5 rounded-full bg-[#01ADF1] ring-2"></div>
                </div>
                <div class="w-20 flex items-center">
                    <hr class="border-t-2 border-[#01ADF1] w-full">
                </div>
            </div>
            <div class="block text-[#01ADF1]">1 Reference</div>
        </div>
        <div>
            <div class="flex py-3">
                <div class="ring-2 ring-gray-400 rounded-full p-[11px]">
                    <div class="h-2.5 w-2.5 rounded-full bg-gray-300 ring-2 ring-gray-300"></div>
                </div>
                <div class="w-20 flex items-center pl-[2px]">
                    <hr class="border-t-2 border-gray-300 w-full">
                </div>
            </div>
            <div class="block">2 Location</div>
        </div>
         <div>
            <div class="flex py-3">
                <div class="ring-2 ring-gray-400 rounded-full p-[11px]">
                    <div class="h-2.5 w-2.5 rounded-full bg-gray-300 ring-2 ring-gray-300"></div>
                </div>
                <div class="w-20 flex items-center pl-[2px]">
                    <hr class="border-t-2 border-gray-300 w-full">
                </div>
            </div>
            <div class="block flex-nowrap">3 Photos</div>
        </div>
         <div>
            <div class="flex py-3">
                <div class="ring-2 ring-gray-400 rounded-full p-[11px]">
                    <div class="h-2.5 w-2.5 rounded-full bg-gray-300 ring-2 ring-gray-300"></div>
                </div>
                <div class="w-20 flex items-center pl-[2px]">
                    <hr class="border-t-2 border-gray-300 w-full">
                </div>
            </div>
            <div class="block flex-nowrap">4 Floor Plan</div>
        </div>
         <div>
            <div class="flex py-3">
                <div class="ring-2 ring-gray-400 rounded-full p-[11px]">
                    <div class="h-2.5 w-2.5 rounded-full bg-gray-300 ring-2 ring-gray-300"></div>
                </div>
                <div class="w-20 flex items-center pl-[2px]">
                    <hr class="border-t-2 border-gray-300 w-full">
                </div>
            </div>
            <div class="block flex-nowrap">5 Amenities</div>
        </div>
         <div>
            <div class="flex py-3">
                <div class="ring-2 ring-gray-400 rounded-full p-[11px]">
                    <div class="h-2.5 w-2.5 rounded-full bg-gray-300 ring-2 ring-gray-300"></div>
                </div>
                <div class="w-20 flex items-center pl-[2px]">
                    <hr class="border-t-2 border-gray-300 w-full">
                </div>
            </div>
            <div class="block flex-nowrap">6 Options</div>
        </div>
         <div>
            <div class="flex py-3">
                <div class="ring-2 ring-gray-400 rounded-full p-[11px]">
                    <div class="h-2.5 w-2.5 rounded-full bg-gray-300 ring-2 ring-gray-300"></div>
                </div>
                <div class="w-20 flex items-center pl-[2px]">
                    <hr class="border-t-2 border-gray-300 w-full">
                </div>
            </div>
            <div class="block flex-nowrap">7 Vendor</div>
        </div>
         <div>
            <div class="flex py-3">
                <div class="ring-2 ring-gray-400 rounded-full p-[11px]">
                    <div class="h-2.5 w-2.5 rounded-full bg-gray-300 ring-2 ring-gray-300"></div>
                </div>
                <div class="w-20 flex items-center pl-[2px]">
                    <hr class="border-t-2 border-gray-300 w-full">
                </div>
            </div>
            <div class="block flex-nowrap">8 Custom Fields</div>
        </div>
         <div>
            <div class="flex py-3">
                <div class="ring-2 ring-gray-400 rounded-full p-[11px]">
                    <div class="h-2.5 w-2.5 rounded-full bg-gray-300 ring-2 ring-gray-300"></div>
                </div>
                <div class="w-20 flex items-center pl-[2px]">
                    <hr class="border-t-2 border-gray-300 w-full">
                </div>
            </div>
            <div class="block flex-nowrap">9 V-tour Video</div>
        </div>
         <div>
            <div class="flex py-3">
                <div class="ring-2 ring-gray-400 rounded-full p-[11px]">
                    <div class="h-2.5 w-2.5 rounded-full bg-gray-300 ring-2 ring-gray-300"></div>
                </div>
            </div>
            <div class="block flex-nowrap">10 Title & Description</div>
        </div>
    </div>
    

    
    <!-----------------------------------------------------
    Add your form or content for adding a property here
    ------------------------------------------------------->
    <form method="POST" action="{{ route('properties.store') }}">
    @csrf

        <!------------------------------------
        Basic information about the property 
        ------------------------------------->
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow-md sm:rounded-lg">
                    <div class="w-full">
                        <h3 class="font-semibold text-xl text-blue-900 leading-tight mb-5">
                            {{ __('Basic')  }}
                        </h3>
                        <!-- Form fields for property details -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-4">
                            <div>
                                <label for="reference" class="block text-black text-sm mb-1">Reference</label>
                                <input type="text" name="reference" id="reference" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            </div>
                            <div>
                                <label for="description" class="block text-black text-sm mb-1">Price</label>
                                <div class="relative flex items-center">
                                    <div class="absolute ml-0 text-gray-500 pr-3 h-full left-3 flex items-center">
                                        &euro;
                                    </div>
                                    <input type="number" name="description" id="basicPrice" class="w-full pl-7 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 [&::-webkit-inner-spin-button]:mr-8" required>
                                    <div class="absolute ml-0 text-gray-500 pr-3 border-r-1 border-gray-300 rounded-r-md h-full right-0 flex items-center">
                                        GBP
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for="location" class="block text-black text-sm mb-1">&nbsp;</label>
                                <div class="flex items-center pt-2">
                                    <input type="radio" name="location" id="location" class="border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    <label class="text-gray-700 ml-2">POA (hide price)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!------------------------------------
        Add more sections for property details as needed
        ------------------------------------->
        <div class="py-3">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow-md sm:rounded-lg">
                    <div class="w-full">
                        <h3 class="font-semibold text-xl text-blue-900 leading-tight mb-5">
                            {{ __('Property Details')  }}
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-6">
                            <div>
                                <label for="reference" class="block text-black text-sm mb-1">Property Type</label>
                                <select name="property_type" id="property_type" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                    <option value="">None</option>
                                    <option value="house">House</option>
                                    <option value="apartment">Apartment</option>
                                    <option value="land">Land</option>
                                    <option value="commercial">Commercial</option>
                                </select>
                            </div>
                            <div class="col-span-2 flex items-center">
                                <div>
                                    <label for="description" class="block text-black text-sm mb-1">Has Title Deeds</label>
                                    <div class="flex items-center pt-2">
                                        <div class="flex items-center">
                                            <input type="radio" name="description" id="description_yes" value="yes" class="border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                            <label for="description_yes" class="text-gray-700 ml-2 text-sm">Available</label>
                                        </div>
                                        <div class="flex items-center ml-5">
                                            <input type="radio" name="description" id="description_no" value="no" class="border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                            <label for="description_no" class="text-gray-700 ml-2 text-sm">Not Available</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="pl-4">
                                    <label for="description" class="block text-black text-sm mb-1">Leasehold Property?</label>
                                    <div class="flex items-center pt-2">
                                        <div class="flex items-center">
                                            <input type="radio" name="description" id="description_yes" value="yes" class="border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                            <label for="description_yes" class="text-gray-700 ml-2 text-sm">Yes</label>
                                        </div>
                                        <div class="flex items-center ml-5">
                                            <input type="radio" name="description" id="description_no" value="no" class="border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                            <label for="description_no" class="text-gray-700 ml-2 text-sm">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-6">
                            <div>
                                <label for="reference" class="block text-black text-sm mb-1">Bedrooms</label>
                                <input type="number" name="reference" id="reference" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            </div>
                            <div>
                                <label for="description" class="block text-black text-sm mb-1">Bathrooms</label>
                                <input type="number" name="description" id="description" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            </div>
                            <div>
                                <label for="description" class="block text-black text-sm mb-1">Build</label>
                                <div class="relative rounded-md shadow-sm max-w-sm">
                                    <input type="number" name="building" id="building" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 [&::-webkit-inner-spin-button]:mr-9 placeholder="">
                                    <div class="absolute inset-y-0 right-0 flex items-center h-full pl-3 pr-3 bg-gray-50 text-center text-gray-500 border border-gray-300 rounded-r-md">
                                        m<span class="text-[0.65rem] align-super mb-2">2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-6">
                            <div>
                                <label for="reference" class="block text-black text-sm mb-1">Terrace</label>
                                <div class="relative rounded-md shadow-sm max-w-sm">
                                    <input type="number" name="price" id="price" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 [&::-webkit-inner-spin-button]:mr-9" placeholder="">
                                    <div class="absolute inset-y-0 right-0 flex items-center h-full pl-3 pr-3 bg-gray-50 text-center text-gray-500 border border-gray-300 rounded-r-md">
                                        m<span class="text-[0.65rem] align-super mb-2">2</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for="description" class="block text-black text-sm mb-1 mb-1">Plot</label>
                                <div class="relative rounded-md shadow-sm max-w-sm">
                                    <input type="number" name="price" id="price" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 [&::-webkit-inner-spin-button]:mr-9" placeholder="">
                                    <div class="absolute inset-y-0 right-0 flex items-center h-full pl-3 pr-3 bg-gray-50 text-center text-gray-500 border border-gray-300 rounded-r-md">
                                        m<span class="text-[0.65rem] align-super mb-2">2</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for="description" class="block text-black text-sm mb-1">Plot Description</label>
                                <input type="text" placeholder="e.g. Corner Plot, flat, slight slope, cul-de-sac" name="description" id="description" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-6">
                            <div>
                                <label for="reference" class="block text-black text-sm mb-1 mb-1">Managing Agent</label>
                                <select name="property_type" id="property_type" class="w-full border-gray-300 py-3 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-sm" required>
                                    <option value="">None</option>
                                    <option value="house">SLV (General)</option>
                                    <option value="apartment">Andriy Stanislavchuk</option>
                                    <option value="land">Cheryl Hann</option>
                                    <option value="commercial">Gabbie Simpson</option>
                                </select>
                            </div>
                            <div>
                                <label for="description" class="block text-black text-sm mb-1">Year of Construction</label>
                                <input type="number" placeholder="e.g. 2005" name="description" id="description" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            </div>
                            <div>
                                <label for="description" class="block text-black text-sm mb-1">Pool</label>
                                <div class="flex items-center pt-2">
                                    <div class="flex items-center">
                                        <input type="radio" name="location" id="location" class="border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <label class="text-gray-700 ml-2 text-sm">Yes</label>
                                    </div>
                                    <div class="flex items-center ml-4">
                                        <input type="radio" name="description" id="description" class="border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <label class="text-gray-700 ml-2 text-sm">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <div class="w-1/2">
                                <label for="pool_description" class="block text-black text-sm mb-1">Pool Description</label>
                                <input type="text" name="pool_description" id="pool_description" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter pool details (e.g. Infinity, Heated, Shared)" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!------------------------------------
        Price and other specific details about the property
        ------------------------------------->
        <div class="py-3">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow-md sm:rounded-lg">
                    <div class="w-full">
                        <h3 class="font-semibold text-xl text-blue-900 leading-tight mb-5">
                            {{ __('Price')  }}
                        </h3>
                        <!-- Add your form or content for adding a property here -->
                        <!-- Form fields for property details -->
                        <div class="grid grid-cols-5 md:grid-cols-5 gap-5 mb-4">
                            <div>
                                <label for="reference" class="font-md block text-black text-sm mb-1">Original Price</label>
                                <input type="text" name="reference" id="reference" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            </div>
                            <div>
                                <label for="description" class="block text-black text-sm mb-1">Total Reduction %</label>
                                <div class="relative rounded-md shadow-sm max-w-sm">
                                    <input type="number" name="price" id="price" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 [&::-webkit-inner-spin-button]:mr-7" placeholder="">
                                    <div class="absolute inset-y-0 right-0 flex items-center h-full pl-3 px-3 bg-gray-100 text-center text-gray-500 border border-gray-300 rounded-r-md text-sm">
                                        %
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for="description" class="block text-black text-sm mb-1">Total Reduction (Price)</label>
                                <input type="number" name="description" id="description" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            </div>
                            <div>
                                <label for="description" class="block text-black text-sm mb-1">Commission</label>
                                <div class="relative rounded-md shadow-sm max-w-sm">
                                    <input type="number" name="commission" id="commission" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 [&::-webkit-inner-spin-button]:mr-7" placeholder="">
                                    <div class="absolute inset-y-0 right-0 flex items-center h-full pl-3 px-3 bg-gray-100 text-center text-gray-500 border border-gray-300 rounded-r-md text-sm">
                                        %
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for="description" class="block text-black text-sm mb-1">Communal Charge (&euro;)</label>
                                <div class="relative rounded-md shadow-sm max-w-sm">
                                    <input type="number" name="communal_charge" id="communalCharge" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 [&::-webkit-inner-spin-button]:mr-[55px]" placeholder="">
                                    <div class="absolute inset-y-0 right-0 flex items-center">
                                        <select id="currency" name="currency" class="h-full pl-2 rounded-r-md border-gray-300 pr-3 bg-gray-100 text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                                            <option value="yearly">p/yr</option>
                                            <option value="monthly">p/mon</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>

        <!------------------------------------
        Specific details about the property
        ------------------------------------->
        <div class="py-3">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow-md sm:rounded-lg">
                    <div class="w-full">
                        <h3 class="font-semibold text-xl text-blue-900 leading-tight mb-5">
                            {{ __('Specific')  }}
                        </h3>
                        <!-- Add your form or content for adding a property here -->
                        <!-- Form fields for property details -->
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-5 mb-4">
                            <div>
                                <label for="reference" class="block text-gray-700 text-sm">Listing Type</label>
                                <div class="flex items-center pt-2">
                                    <div class="flex items-center">
                                        <input type="radio" name="location" id="location" class="border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <label class="text-gray-700 ml-2 text-sm ">Release</label>
                                    </div>
                                    <div class="flex items-center ml-4">
                                        <input type="radio" name="description" id="description" class="border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <label class="text-gray-700 ml-2 text-sm">New</label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for="description" class="block text-gray-700 text-sm">Plan Zone</label>
                                <div class="flex items-center pt-2">
                                    <div class="flex items-center">
                                        <input type="radio" name="location" id="location" class="border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <label class="text-gray-700 ml-2 text-sm ">A</label>
                                    </div>
                                    <div class="flex items-center ml-4">
                                        <input type="radio" name="description" id="description" class="border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <label class="text-gray-700 ml-2 text-sm">B</label>
                                    </div>
                                    <div class="flex items-center ml-4">
                                        <input type="radio" name="description" id="description" class="border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <label class="text-gray-700 ml-2 text-sm">C</label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for="description" class="block text-gray-700 text-sm">Sea View</label>
                                <div class="flex items-center pt-2">
                                    <div class="flex items-center">
                                        <input type="radio" name="location" id="location" class="border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <label class="text-gray-700 ml-2 text-sm ">Yes</label>
                                    </div>
                                    <div class="flex items-center ml-4">
                                        <input type="radio" name="description" id="description" class="border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <label class="text-gray-700 ml-2 text-sm">No</label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for="description" class="block text-gray-700 text-sm">For Sale Board</label>
                                <div class="flex items-center pt-2">
                                    <div class="flex items-center">
                                        <input type="radio" name="location" id="location" class="border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <label class="text-gray-700 ml-2 text-sm ">Yes</label>
                                    </div>
                                    <div class="flex items-center ml-4">
                                        <input type="radio" name="description" id="description" class="border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <label class="text-gray-700 ml-2 text-sm">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 flex">
                <button type="submit" class="ml-auto px-4 py-2 bg-orange-400 text-white rounded-md hover:bg-orange-500 px-7">Save and Next &#x2192;</button>
            </div>
        </div>
    </form>
    <div class="mb-5"></div>
    <br /><br /><br />
</x-app-layout>

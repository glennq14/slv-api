<x-app-layout>
    <x-slot name="header">
        <h3 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Properties') }}
        </h3>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add New Property') }}
            </h2>
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
                                <label for="reference" class="block text-gray-700 text-base">Reference</label>
                                <input type="text" name="reference" id="reference" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            </div>
                            <div>
                                <label for="description" class="block text-gray-700 text-base">Price</label>
                                <input type="number" name="description" id="description" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            </div>
                            <div>
                                <label for="location" class="block text-gray-700 text-base">&nbsp;</label>
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
                                <label for="reference" class="block text-gray-700 text-base">Property Type</label>
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
                                    <label for="description" class="block text-gray-700 text-base">Has Title Deeds</label>
                                    <div class="flex items-center pt-2">
                                        <div class="flex items-center">
                                            <input type="radio" name="description" id="description_yes" value="yes" class="border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                            <label for="description_yes" class="text-gray-700 ml-2">Available</label>
                                        </div>
                                        <div class="flex items-center ml-5">
                                            <input type="radio" name="description" id="description_no" value="no" class="border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                            <label for="description_no" class="text-gray-700 ml-2">Not Available</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="pl-4">
                                    <label for="description" class="block text-gray-700 text-base">Leasehold Property?</label>
                                    <div class="flex items-center pt-2">
                                        <div class="flex items-center">
                                            <input type="radio" name="description" id="description_yes" value="yes" class="border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                            <label for="description_yes" class="text-gray-700 ml-2">Yes</label>
                                        </div>
                                        <div class="flex items-center ml-5">
                                            <input type="radio" name="description" id="description_no" value="no" class="border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                            <label for="description_no" class="text-gray-700 ml-2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-6">
                            <div>
                                <label for="reference" class="block text-gray-700 text-base">Bedrooms</label>
                                <input type="number" name="reference" id="reference" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            </div>
                            <div>
                                <label for="description" class="block text-gray-700 text-base">Bathrooms</label>
                                <input type="number" name="description" id="description" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            </div>
                            <div>
                                <label for="description" class="block text-gray-700 text-base">Build</label>
                                <input type="number" name="description" id="description" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-6">
                            <div>
                                <label for="reference" class="block text-gray-700 text-base">Terrace</label>
                                <input type="number" name="reference" id="reference" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            </div>
                            <div>
                                <label for="description" class="block text-gray-700 text-base">Plot</label>
                                <input type="number" name="description" id="description" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            </div>
                            <div>
                                <label for="description" class="block text-gray-700 text-base">Plot Description</label>
                                <input type="text" placeholder="e.g. Corner Plot, flat, slight slope, cul-de-sac" name="description" id="description" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-6">
                            <div>
                                <label for="reference" class="block text-gray-700 text-base">Managing Agent</label>
                                <select name="property_type" id="property_type" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                    <option value="">None</option>
                                    <option value="house">SLV (General)</option>
                                    <option value="apartment">Andriy Stanislavchuk</option>
                                    <option value="land">Cheryl Hann</option>
                                    <option value="commercial">Gabbie Simpson</option>
                                </select>
                            </div>
                            <div>
                                <label for="description" class="block text-gray-700 text-base">Year of Construction</label>
                                <input type="number" placeholder="e.g. 2005" name="description" id="description" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            </div>
                            <div>
                                <label for="description" class="block text-gray-700 text-base">Pool</label>
                                <div class="flex items-center pt-2">
                                    <div class="flex items-center">
                                        <input type="radio" name="location" id="location" class="border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <label class="text-gray-700 ml-2">Yes</label>
                                    </div>
                                    <div class="flex items-center ml-4">
                                        <input type="radio" name="description" id="description" class="border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <label class="text-gray-700 ml-2">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <div class="w-1/2">
                                <label for="pool_description" class="block text-gray-700 text-base">Pool Description</label>
                                <input type="text" name="pool_description" id="pool_description" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
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
                                <label for="reference" class="font-md block text-gray-700 text-base">Original Price</label>
                                <input type="text" name="reference" id="reference" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            </div>
                            <div>
                                <label for="description" class="block text-gray-700 text-base">Total Reduction %</label>
                                <input type="number" name="description" id="description" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            </div>
                            <div>
                                <label for="description" class="block text-gray-700 text-base">Total Reduction (Price)</label>
                                <input type="number" name="description" id="description" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            </div>
                            <div>
                                <label for="description" class="block text-gray-700 text-base">Commission</label>
                                <input type="number" name="description" id="description" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            </div>
                            <div>
                                <label for="description" class="block text-gray-700 text-base">Communal Charge (&euro;)</label>
                                <input type="number" name="description" id="description" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
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
                            </div>
                            <div>
                                <label for="description" class="block text-gray-700 text-sm">Plan Zone</label>
                            </div>
                            <div>
                                <label for="description" class="block text-gray-700 text-sm">Sea View</label>
                            </div>
                            <div>
                                <label for="description" class="block text-gray-700 text-sm">For Sale Board</label>
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
</x-app-layout>

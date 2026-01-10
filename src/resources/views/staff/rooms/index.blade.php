<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms - Staff Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="min-h-screen flex">
        @include('staff.sidebar', ['active' => 'rooms'])

        <!-- Main Content -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow">
                <div class="flex items-center justify-between px-4 py-4 h-16">
                    <div class="flex items-center">
                        <h1 class="text-xl font-semibold text-gray-900">Room Management</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="bg-indigo-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-indigo-700">
                            <i class="fas fa-plus mr-2"></i>Add Room
                        </button>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 overflow-y-auto p-4 sm:p-6">
                <!-- Room Stats -->
                <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 mb-6">
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <i class="fas fa-bed text-green-500 text-xl"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-500">Available</p>
                                <p class="text-xl font-bold text-gray-900">15</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <i class="fas fa-user-check text-blue-500 text-xl"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-500">Occupied</p>
                                <p class="text-xl font-bold text-gray-900">32</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <i class="fas fa-broom text-purple-500 text-xl"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-500">Cleaning</p>
                                <p class="text-xl font-bold text-gray-900">3</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <i class="fas fa-tools text-yellow-500 text-xl"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-500">Maintenance</p>
                                <p class="text-xl font-bold text-gray-900">2</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Filters -->
                <div class="bg-white rounded-lg shadow mb-6 p-4">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Room Number</label>
                            <input type="text" placeholder="Search rooms..." class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border px-3 py-2">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                            <select class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border px-3 py-2">
                                <option>All Status</option>
                                <option>Available</option>
                                <option>Occupied</option>
                                <option>Cleaning</option>
                                <option>Maintenance</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Room Type</label>
                            <select class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border px-3 py-2">
                                <option>All Types</option>
                                <option>Standard</option>
                                <option>Deluxe</option>
                                <option>Premium</option>
                                <option>Suite</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Floor</label>
                            <select class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border px-3 py-2">
                                <option>All Floors</option>
                                <option>Floor 1</option>
                                <option>Floor 2</option>
                                <option>Floor 3</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Rooms Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                    <!-- Room Card - Available -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="h-32 bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                            <i class="fas fa-bed text-white text-4xl"></i>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold text-gray-900">Room 101</h3>
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Available</span>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">Standard Room • Floor 1</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-lg font-bold text-gray-900">$99<span class="text-sm text-gray-500">/night</span></span>
                                <button class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">View Details</button>
                            </div>
                        </div>
                    </div>

                    <!-- Room Card - Occupied -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="h-32 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                            <i class="fas fa-user text-white text-4xl"></i>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold text-gray-900">Room 201</h3>
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Occupied</span>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">Deluxe Room • Floor 2</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-sm text-gray-600">Guest: John Smith</span>
                                <button class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">View Details</button>
                            </div>
                        </div>
                    </div>

                    <!-- Room Card - Cleaning -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="h-32 bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
                            <i class="fas fa-broom text-white text-4xl"></i>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold text-gray-900">Room 105</h3>
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-800">Cleaning</span>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">Standard Room • Floor 1</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-sm text-gray-600">ETA: 30 mins</span>
                                <button class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">Mark Ready</button>
                            </div>
                        </div>
                    </div>

                    <!-- Room Card - Maintenance -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="h-32 bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center">
                            <i class="fas fa-tools text-white text-4xl"></i>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold text-gray-900">Room 305</h3>
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Maintenance</span>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">Premium Room • Floor 3</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-sm text-gray-600">HVAC repair</span>
                                <button class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">Update Status</button>
                            </div>
                        </div>
                    </div>

                    <!-- Room Card - Available -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="h-32 bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                            <i class="fas fa-bed text-white text-4xl"></i>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold text-gray-900">Suite 501</h3>
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Available</span>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">Premium Suite • Floor 5</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-lg font-bold text-gray-900">$299<span class="text-sm text-gray-500">/night</span></span>
                                <button class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">View Details</button>
                            </div>
                        </div>
                    </div>

                    <!-- Room Card - Occupied -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="h-32 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                            <i class="fas fa-user text-white text-4xl"></i>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold text-gray-900">Room 202</h3>
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Occupied</span>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">Deluxe Room • Floor 2</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-sm text-gray-600">Guest: Emma Davis</span>
                                <button class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>


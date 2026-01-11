<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms - Staff</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <div class="min-h-screen flex">
        @include('staff.sidebar', ['active' => 'rooms'])

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-900">Rooms</h1>
            </div>

            <!-- Room Status Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 mb-6">
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="flex items-center">
                        <div class="p-2 bg-green-100 rounded-lg">
                            <i class="fas fa-check text-green-600"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-gray-500">Available</p>
                            <p class="text-xl font-bold text-gray-900">15</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="flex items-center">
                        <div class="p-2 bg-blue-100 rounded-lg">
                            <i class="fas fa-user text-blue-600"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-gray-500">Occupied</p>
                            <p class="text-xl font-bold text-gray-900">32</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="flex items-center">
                        <div class="p-2 bg-purple-100 rounded-lg">
                            <i class="fas fa-broom text-purple-600"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-gray-500">Cleaning</p>
                            <p class="text-xl font-bold text-gray-900">3</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="flex items-center">
                        <div class="p-2 bg-yellow-100 rounded-lg">
                            <i class="fas fa-tools text-yellow-600"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-gray-500">Maintenance</p>
                            <p class="text-xl font-bold text-gray-900">2</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rooms Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Room 101 - Available -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="h-24 bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                        <i class="fas fa-bed text-white text-3xl"></i>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center">
                            <h3 class="font-semibold text-gray-900">Room 101</h3>
                            <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Available</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Standard • Floor 1</p>
                        <p class="text-lg font-bold text-gray-900 mt-2">$99<span class="text-sm text-gray-500">/night</span></p>
                    </div>
                </div>

                <!-- Room 201 - Occupied -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="h-24 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                        <i class="fas fa-user text-white text-3xl"></i>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center">
                            <h3 class="font-semibold text-gray-900">Room 201</h3>
                            <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">Occupied</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Deluxe • Floor 2</p>
                        <p class="text-sm text-gray-600 mt-2">John Smith</p>
                    </div>
                </div>

                <!-- Room 105 - Cleaning -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="h-24 bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
                        <i class="fas fa-broom text-white text-3xl"></i>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center">
                            <h3 class="font-semibold text-gray-900">Room 105</h3>
                            <span class="px-2 py-1 text-xs rounded-full bg-purple-100 text-purple-800">Cleaning</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Standard • Floor 1</p>
                        <p class="text-sm text-gray-600 mt-2">ETA: 30 mins</p>
                    </div>
                </div>

                <!-- Room 305 - Maintenance -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="h-24 bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center">
                        <i class="fas fa-tools text-white text-3xl"></i>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center">
                            <h3 class="font-semibold text-gray-900">Room 305</h3>
                            <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">Maintenance</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Premium • Floor 3</p>
                        <p class="text-sm text-gray-600 mt-2">HVAC repair</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


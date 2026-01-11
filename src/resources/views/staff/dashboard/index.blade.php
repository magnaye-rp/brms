<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <div class="min-h-screen flex">
        @include('staff.sidebar', ['active' => 'dashboard'])

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <h1 class="text-2xl font-bold text-gray-900 mb-6">Dashboard</h1>

            <!-- Quick Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="flex items-center">
                        <div class="p-3 bg-indigo-100 rounded-full">
                            <i class="fas fa-calendar-check text-indigo-600 text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm text-gray-500">Today's Bookings</p>
                            <p class="text-2xl font-bold text-gray-900">24</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="flex items-center">
                        <div class="p-3 bg-green-100 rounded-full">
                            <i class="fas fa-sign-in-alt text-green-600 text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm text-gray-500">Check-ins</p>
                            <p class="text-2xl font-bold text-gray-900">8</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="flex items-center">
                        <div class="p-3 bg-blue-100 rounded-full">
                            <i class="fas fa-bed text-blue-600 text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm text-gray-500">Available Rooms</p>
                            <p class="text-2xl font-bold text-gray-900">15/50</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Today's Schedule -->
            <div class="bg-white rounded-lg shadow mb-6">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h2 class="text-lg font-semibold text-gray-900">Today's Schedule</h2>
                </div>
                <div class="p-6">
                    <table class="min-w-full">
                        <thead>
                            <tr class="text-left text-sm text-gray-500">
                                <th class="pb-3">Time</th>
                                <th class="pb-3">Guest</th>
                                <th class="pb-3">Room</th>
                                <th class="pb-3">Action</th>
                                <th class="pb-3">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="py-3 text-sm text-gray-900">09:00 AM</td>
                                <td class="py-3 text-sm text-gray-900">John Smith</td>
                                <td class="py-3 text-sm text-gray-900">Room 201</td>
                                <td class="py-3 text-sm text-gray-500">Check-in</td>
                                <td class="py-3"><span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Done</span></td>
                            </tr>
                            <tr>
                                <td class="py-3 text-sm text-gray-900">10:30 AM</td>
                                <td class="py-3 text-sm text-gray-900">Sarah Johnson</td>
                                <td class="py-3 text-sm text-gray-900">Suite 301</td>
                                <td class="py-3 text-sm text-gray-500">Check-in</td>
                                <td class="py-3"><span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Done</span></td>
                            </tr>
                            <tr>
                                <td class="py-3 text-sm text-gray-900">11:00 AM</td>
                                <td class="py-3 text-sm text-gray-900">Mike Wilson</td>
                                <td class="py-3 text-sm text-gray-900">Room 105</td>
                                <td class="py-3 text-sm text-gray-500">Check-out</td>
                                <td class="py-3"><span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">Pending</span></td>
                            </tr>
                            <tr>
                                <td class="py-3 text-sm text-gray-900">02:00 PM</td>
                                <td class="py-3 text-sm text-gray-900">Emma Davis</td>
                                <td class="py-3 text-sm text-gray-900">Room 202</td>
                                <td class="py-3 text-sm text-gray-500">Check-in</td>
                                <td class="py-3"><span class="px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-800">Scheduled</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Room Status -->
            <div class="bg-white rounded-lg shadow">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h2 class="text-lg font-semibold text-gray-900">Room Status</h2>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="text-center p-4 bg-green-50 rounded-lg">
                            <i class="fas fa-check-circle text-green-500 text-2xl mb-2"></i>
                            <p class="text-2xl font-bold text-gray-900">15</p>
                            <p class="text-sm text-gray-500">Available</p>
                        </div>
                        <div class="text-center p-4 bg-blue-50 rounded-lg">
                            <i class="fas fa-user-check text-blue-500 text-2xl mb-2"></i>
                            <p class="text-2xl font-bold text-gray-900">32</p>
                            <p class="text-sm text-gray-500">Occupied</p>
                        </div>
                        <div class="text-center p-4 bg-purple-50 rounded-lg">
                            <i class="fas fa-broom text-purple-500 text-2xl mb-2"></i>
                            <p class="text-2xl font-bold text-gray-900">3</p>
                            <p class="text-sm text-gray-500">Cleaning</p>
                        </div>
                        <div class="text-center p-4 bg-yellow-50 rounded-lg">
                            <i class="fas fa-tools text-yellow-500 text-2xl mb-2"></i>
                            <p class="text-2xl font-bold text-gray-900">2</p>
                            <p class="text-sm text-gray-500">Maintenance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


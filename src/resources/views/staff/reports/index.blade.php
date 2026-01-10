<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports - Staff Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="min-h-screen flex">
        @include('staff.sidebar', ['active' => 'reports'])

        <!-- Main Content -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow">
                <div class="flex items-center justify-between px-4 py-4 h-16">
                    <div class="flex items-center">
                        <h1 class="text-xl font-semibold text-gray-900">Reports & Analytics</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <select class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border px-3 py-2">
                            <option>Last 7 Days</option>
                            <option>Last 30 Days</option>
                            <option>This Month</option>
                            <option>This Quarter</option>
                        </select>
                        <button class="bg-indigo-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-indigo-700">
                            <i class="fas fa-download mr-2"></i>Export
                        </button>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 overflow-y-auto p-4 sm:p-6">
                <!-- Summary Stats -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                    <div class="bg-white rounded-lg shadow p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <i class="fas fa-calendar-check text-indigo-600 text-2xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Total Bookings</p>
                                <p class="text-2xl font-bold text-gray-900">156</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="text-green-600 text-sm font-medium">+12.5%</span>
                            <span class="text-gray-500 text-sm">vs last period</span>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <i class="fas fa-dollar-sign text-green-600 text-2xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Revenue</p>
                                <p class="text-2xl font-bold text-gray-900">$45,230</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="text-green-600 text-sm font-medium">+8.3%</span>
                            <span class="text-gray-500 text-sm">vs last period</span>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <i class="fas fa-percentage text-blue-600 text-2xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Occupancy Rate</p>
                                <p class="text-2xl font-bold text-gray-900">78%</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="text-green-600 text-sm font-medium">+3.2%</span>
                            <span class="text-gray-500 text-sm">vs last period</span>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <i class="fas fa-users text-purple-600 text-2xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">New Customers</p>
                                <p class="text-2xl font-bold text-gray-900">42</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="text-yellow-600 text-sm font-medium">-2.1%</span>
                            <span class="text-gray-500 text-sm">vs last period</span>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                    <!-- Occupancy Chart -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Daily Occupancy</h3>
                        <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                            <div class="text-center">
                                <i class="fas fa-chart-line text-gray-300 text-4xl mb-2"></i>
                                <p class="text-gray-500 text-sm">Occupancy Chart Placeholder</p>
                            </div>
                        </div>
                    </div>

                    <!-- Revenue Chart -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Daily Revenue</h3>
                        <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                            <div class="text-center">
                                <i class="fas fa-chart-bar text-gray-300 text-4xl mb-2"></i>
                                <p class="text-gray-500 text-sm">Revenue Chart Placeholder</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Bookings Report -->
                <div class="bg-white rounded-lg shadow overflow-hidden mb-6">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Booking Summary</h3>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Check-ins</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Check-outs</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Occupancy</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Revenue</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Dec 28, 2024</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">8</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">5</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm text-gray-900">72%</span>
                                    <div class="w-24 bg-gray-200 rounded-full h-2 mt-1">
                                        <div class="bg-indigo-600 h-2 rounded-full" style="width: 72%"></div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$4,521</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Dec 27, 2024</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">12</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">8</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm text-gray-900">85%</span>
                                    <div class="w-24 bg-gray-200 rounded-full h-2 mt-1">
                                        <div class="bg-indigo-600 h-2 rounded-full" style="width: 85%"></div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$6,847</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Dec 26, 2024</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">6</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm text-gray-900">68%</span>
                                    <div class="w-24 bg-gray-200 rounded-full h-2 mt-1">
                                        <div class="bg-indigo-600 h-2 rounded-full" style="width: 68%"></div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$3,921</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Dec 25, 2024</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">15</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">12</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm text-gray-900">92%</span>
                                    <div class="w-24 bg-gray-200 rounded-full h-2 mt-1">
                                        <div class="bg-indigo-600 h-2 rounded-full" style="width: 92%"></div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$8,245</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Room Performance -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Room Type Performance -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h3 class="text-lg font-medium text-gray-900">Room Type Performance</h3>
                        </div>
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bookings</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Revenue</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Standard</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">45</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$12,420</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Deluxe</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">62</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$21,708</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Premium</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">28</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$12,124</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Suite</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">21</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$14,490</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Top Customers -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h3 class="text-lg font-medium text-gray-900">Top Customers</h3>
                        </div>
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bookings</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Spent</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-8 w-8">
                                                <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=Sarah+Johnson&background=6366f1&color=fff" alt="">
                                            </div>
                                            <div class="ml-3">
                                                <div class="text-sm font-medium text-gray-900">Sarah Johnson</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">28</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$12,847</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-8 w-8">
                                                <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=John+Smith&background=6366f1&color=fff" alt="">
                                            </div>
                                            <div class="ml-3">
                                                <div class="text-sm font-medium text-gray-900">John Smith</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">15</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$4,521</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-8 w-8">
                                                <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=Emma+Davis&background=6366f1&color=fff" alt="">
                                            </div>
                                            <div class="ml-3">
                                                <div class="text-sm font-medium text-gray-900">Emma Davis</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">12</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$3,892</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>


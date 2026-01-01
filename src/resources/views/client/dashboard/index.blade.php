<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking System Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans antialiased">
    <div class="min-h-screen flex">
        @include('client.sidebar')

        <!-- Main Content -->
        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            <!-- Header -->
            <div class="relative z-10 flex-shrink-0 flex h-16 bg-white shadow">
                <button type="button" class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500 md:hidden">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="flex-1 px-4 flex justify-between">
                    <div class="flex-1 flex">
                        <form class="w-full flex md:ml-0" action="#" method="GET">
                            <label for="search-field" class="sr-only">Search</label>
                            <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                    <i class="fas fa-search h-5 w-5"></i>
                                </div>
                                <input id="search-field" class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-0 focus:border-transparent" placeholder="Search bookings, customers..." type="search">
                            </div>
                        </form>
                    </div>
                    <div class="ml-4 flex items-center md:ml-6">
                        <!-- Notifications -->
                        <button type="button" class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <span class="sr-only">View notifications</span>
                            <i class="fas fa-bell h-6 w-6"></i>
                        </button>

                        <!-- Profile dropdown -->
                        <div class="ml-3 relative">
                            <div>
                                <button type="button" class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" id="user-menu-button">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=John+Doe&background=3b82f6&color=fff" alt="User avatar">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Area -->
            <main class="flex-1 relative overflow-y-auto focus:outline-none">
                <div class="py-6">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        <!-- Page Header -->
                        <div class="mb-8">
                            <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
                            <p class="mt-1 text-sm text-gray-500">Welcome back! Here's what's happening with your bookings today.</p>
                        </div>

                        <!-- Statistics Cards -->
                        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4 mb-8">
                            <!-- Total Bookings -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-calendar-check text-blue-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Total Bookings</dt>
                                                <dd class="text-lg font-medium text-gray-900">1,247</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-green-600 font-medium">+12% </span>
                                        <span class="text-gray-500">from last month</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Revenue -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-dollar-sign text-green-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Monthly Revenue</dt>
                                                <dd class="text-lg font-medium text-gray-900">$45,231</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-green-600 font-medium">+8.2% </span>
                                        <span class="text-gray-500">from last month</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Occupancy Rate -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-percentage text-purple-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Occupancy Rate</dt>
                                                <dd class="text-lg font-medium text-gray-900">78%</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-green-600 font-medium">+3.1% </span>
                                        <span class="text-gray-500">from last month</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Active Customers -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-users text-orange-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Active Customers</dt>
                                                <dd class="text-lg font-medium text-gray-900">892</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-green-600 font-medium">+15 </span>
                                        <span class="text-gray-500">new this week</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                            <!-- Recent Bookings -->
                            <div class="lg:col-span-2">
                                <div class="bg-white shadow rounded-lg">
                                    <div class="px-4 py-5 sm:p-6">
                                        <div class="flex items-center justify-between mb-4">
                                            <h3 class="text-lg leading-6 font-medium text-gray-900">Recent Bookings</h3>
                                            <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-500">View all</a>
                                        </div>
                                        
                                        <!-- Quick Actions -->
                                        <div class="mb-6 flex space-x-3">
                                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                                <i class="fas fa-plus mr-2"></i>
                                                New Booking
                                            </button>
                                            <button class="inline-flex items-center px-3 py-2 border border-gray-300 text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                                <i class="fas fa-sign-in-alt mr-2"></i>
                                                Check-in
                                            </button>
                                            <button class="inline-flex items-center px-3 py-2 border border-gray-300 text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                                <i class="fas fa-sign-out-alt mr-2"></i>
                                                Check-out
                                            </button>
                                        </div>

                                        <!-- Bookings Table -->
                                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-300">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Guest</th>
                                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Room</th>
                                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Check-in</th>
                                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <div class="flex-shrink-0 h-10 w-10">
                                                                    <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=Sarah+Johnson&background=f3f4f6&color=374151" alt="">
                                                                </div>
                                                                <div class="ml-4">
                                                                    <div class="text-sm font-medium text-gray-900">Sarah Johnson</div>
                                                                    <div class="text-sm text-gray-500">sarah@example.com</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="text-sm text-gray-900">Suite 201</div>
                                                            <div class="text-sm text-gray-500">Deluxe Room</div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Dec 28, 2024</td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Checked-in</span>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$299/night</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <div class="flex-shrink-0 h-10 w-10">
                                                                    <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=Michael+Chen&background=f3f4f6&color=374151" alt="">
                                                                </div>
                                                                <div class="ml-4">
                                                                    <div class="text-sm font-medium text-gray-900">Michael Chen</div>
                                                                    <div class="text-sm text-gray-500">michael@example.com</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="text-sm text-gray-900">Room 105</div>
                                                            <div class="text-sm text-gray-500">Standard Room</div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Dec 29, 2024</td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$159/night</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <div class="flex-shrink-0 h-10 w-10">
                                                                    <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=Emma+Davis&background=f3f4f6&color=374151" alt="">
                                                                </div>
                                                                <div class="ml-4">
                                                                    <div class="text-sm font-medium text-gray-900">Emma Davis</div>
                                                                    <div class="text-sm text-gray-500">emma@example.com</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="text-sm text-gray-900">Room 301</div>
                                                            <div class="text-sm text-gray-500">Premium Room</div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Dec 30, 2024</td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Confirmed</span>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$219/night</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Calendar & Today's Schedule -->
                            <div class="space-y-6">
                                <!-- Today's Schedule -->
                                <div class="bg-white shadow rounded-lg">
                                    <div class="px-4 py-5 sm:p-6">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Today's Schedule</h3>
                                        <div class="space-y-4">
                                            <div class="flex items-center p-3 bg-blue-50 rounded-lg">
                                                <div class="flex-shrink-0">
                                                    <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                                                </div>
                                                <div class="ml-3">
                                                    <p class="text-sm font-medium text-gray-900">Check-in: Sarah Johnson</p>
                                                    <p class="text-xs text-gray-500">Suite 201 at 3:00 PM</p>
                                                </div>
                                            </div>
                                            <div class="flex items-center p-3 bg-green-50 rounded-lg">
                                                <div class="flex-shrink-0">
                                                    <div class="w-3 h-3 bg-green-600 rounded-full"></div>
                                                </div>
                                                <div class="ml-3">
                                                    <p class="text-sm font-medium text-gray-900">Check-out: John Smith</p>
                                                    <p class="text-xs text-gray-500">Room 105 at 11:00 AM</p>
                                                </div>
                                            </div>
                                            <div class="flex items-center p-3 bg-yellow-50 rounded-lg">
                                                <div class="flex-shrink-0">
                                                    <div class="w-3 h-3 bg-yellow-600 rounded-full"></div>
                                                </div>
                                                <div class="ml-3">
                                                    <p class="text-sm font-medium text-gray-900">Room Cleaning</p>
                                                    <p class="text-xs text-gray-500">Rooms 105, 203, 301</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Stats -->
                                <div class="bg-white shadow rounded-lg">
                                    <div class="px-4 py-5 sm:p-6">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Quick Stats</h3>
                                        <div class="space-y-4">
                                            <div class="flex justify-between">
                                                <span class="text-sm text-gray-500">Available Rooms</span>
                                                <span class="text-sm font-medium text-gray-900">23/50</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span class="text-sm text-gray-500">Checked-in Today</span>
                                                <span class="text-sm font-medium text-gray-900">12</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span class="text-sm text-gray-500">Check-outs Today</span>
                                                <span class="text-sm font-medium text-gray-900">8</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span class="text-sm text-gray-500">Pending Bookings</span>
                                                <span class="text-sm font-medium text-gray-900">5</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>
</html>

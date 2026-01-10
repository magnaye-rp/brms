<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dashboard - Booking System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans antialiased">
    <!-- Mobile sidebar overlay -->
    <div class="fixed inset-0 z-40 bg-gray-600 bg-opacity-75 md:hidden hidden" id="mobile-sidebar-overlay"></div>

    <div class="min-h-screen flex">
        @include('staff.sidebar', ['active' => 'dashboard'])

        <!-- Main Content -->
        <div class="flex flex-col flex-1 overflow-hidden md:ml-0">
            <!-- Header -->
            <header class="relative z-10 flex-shrink-0 flex h-16 bg-white shadow">
                <button type="button" class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden" id="mobile-menu-button">
                    <span class="sr-only">Open sidebar</span>
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
                                <input id="search-field" class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-0 focus:border-transparent sm:text-sm" placeholder="Search bookings, customers..." type="search">
                            </div>
                        </form>
                    </div>
                    <div class="ml-4 flex items-center md:ml-6">
                        <!-- Notifications -->
                        <button type="button" class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 relative">
                            <span class="sr-only">View notifications</span>
                            <i class="fas fa-bell h-6 w-6"></i>
                            <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-indigo-600 ring-2 ring-white"></span>
                        </button>

                        <!-- Quick Actions -->
                        <div class="ml-3 relative">
                            <button type="button" class="bg-indigo-600 text-white px-3 py-1.5 rounded-md text-sm font-medium hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" onclick="window.location.href='{{ route('staff.bookings') }}'">
                                <i class="fas fa-plus mr-1"></i>
                                New Booking
                            </button>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 relative overflow-y-auto focus:outline-none">
                <div class="py-4 sm:py-6">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <!-- Page Header -->
                        <div class="mb-6 sm:mb-8">
                            <h1 class="text-xl sm:text-2xl font-semibold text-gray-900">Staff Dashboard</h1>
                            <p class="mt-1 text-sm text-gray-500">Welcome back! Here's your daily overview and tasks.</p>
                        </div>

                        <!-- Statistics Cards -->
                        <div class="grid grid-cols-1 gap-4 sm:gap-5 sm:grid-cols-2 lg:grid-cols-4 mb-6 sm:mb-8">
                            <!-- Today's Bookings -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-calendar-check text-indigo-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Today's Bookings</dt>
                                                <dd class="text-lg font-medium text-gray-900">24</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-indigo-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-indigo-600 font-medium">8 </span>
                                        <span class="text-gray-500">check-ins today</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Check-ins -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-sign-in-alt text-green-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Check-ins</dt>
                                                <dd class="text-lg font-medium text-gray-900">8</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-green-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-green-600 font-medium">6 </span>
                                        <span class="text-gray-500">completed</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Check-outs -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-sign-out-alt text-orange-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Check-outs</dt>
                                                <dd class="text-lg font-medium text-gray-900">12</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-orange-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-orange-600 font-medium">5 </span>
                                        <span class="text-gray-500">remaining today</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Available Rooms -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-bed text-blue-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Available Rooms</dt>
                                                <dd class="text-lg font-medium text-gray-900">15/50</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-blue-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-blue-600 font-medium">30% </span>
                                        <span class="text-gray-500">occupancy</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Secondary Stats -->
                        <div class="grid grid-cols-1 gap-4 sm:gap-5 sm:grid-cols-3 mb-6 sm:mb-8">
                            <!-- Pending Tasks -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-tasks text-yellow-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Pending Tasks</dt>
                                                <dd class="text-lg font-medium text-gray-900">7</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-yellow-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-yellow-600 font-medium">2 </span>
                                        <span class="text-gray-500">high priority</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Room Cleanings -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-broom text-purple-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Room Cleanings</dt>
                                                <dd class="text-lg font-medium text-gray-900">5</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-purple-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-purple-600 font-medium">3 </span>
                                        <span class="text-gray-500">in progress</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Complaints -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-exclamation-circle text-red-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Open Issues</dt>
                                                <dd class="text-lg font-medium text-gray-900">2</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-red-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-red-600 font-medium">1 </span>
                                        <span class="text-gray-500">urgent</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                            <!-- Today's Schedule -->
                            <div class="lg:col-span-2">
                                <div class="bg-white shadow rounded-lg">
                                    <div class="px-4 py-5 sm:p-6">
                                        <div class="flex items-center justify-between mb-4">
                                            <h3 class="text-lg leading-6 font-medium text-gray-900">Today's Schedule</h3>
                                            <a href="{{ route('staff.calendar') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">View calendar</a>
                                        </div>
                                        
                                        <!-- Quick Actions -->
                                        <div class="mb-6 flex space-x-3">
                                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                <i class="fas fa-user-plus mr-2"></i>
                                                Check-in
                                            </button>
                                            <button class="inline-flex items-center px-3 py-2 border border-gray-300 text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                <i class="fas fa-user-minus mr-2"></i>
                                                Check-out
                                            </button>
                                            <button class="inline-flex items-center px-3 py-2 border border-gray-300 text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                <i class="fas fa-broom mr-2"></i>
                                                Request Cleaning
                                            </button>
                                        </div>

                                        <!-- Schedule Table -->
                                        <div class="overflow-x-auto shadow ring-1 ring-black ring-opacity-5 rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-300">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Time</th>
                                                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Guest</th>
                                                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Room</th>
                                                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">09:00 AM</td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <div class="flex-shrink-0 h-8 w-8">
                                                                    <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=John+Smith&background=6366f1&color=fff" alt="">
                                                                </div>
                                                                <div class="ml-3">
                                                                    <div class="text-sm font-medium text-gray-900">John Smith</div>
                                                                    <div class="text-xs text-gray-500">john@example.com</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Room 201</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Check-in</td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Completed</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10:30 AM</td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <div class="flex-shrink-0 h-8 w-8">
                                                                    <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=Sarah+Johnson&background=6366f1&color=fff" alt="">
                                                                </div>
                                                                <div class="ml-3">
                                                                    <div class="text-sm font-medium text-gray-900">Sarah Johnson</div>
                                                                    <div class="text-xs text-gray-500">sarah@example.com</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Suite 301</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Check-in</td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Completed</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">11:00 AM</td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <div class="flex-shrink-0 h-8 w-8">
                                                                    <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=Mike+Wilson&background=6366f1&color=fff" alt="">
                                                                </div>
                                                                <div class="ml-3">
                                                                    <div class="text-sm font-medium text-gray-900">Mike Wilson</div>
                                                                    <div class="text-xs text-gray-500">mike@example.com</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Room 105</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Check-out</td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">02:00 PM</td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <div class="flex-shrink-0 h-8 w-8">
                                                                    <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=Emma+Davis&background=6366f1&color=fff" alt="">
                                                                </div>
                                                                <div class="ml-3">
                                                                    <div class="text-sm font-medium text-gray-900">Emma Davis</div>
                                                                    <div class="text-xs text-gray-500">emma@example.com</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Room 202</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Check-in</td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">Scheduled</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Stats & Tasks -->
                            <div class="space-y-6">
                                <!-- Room Status -->
                                <div class="bg-white shadow rounded-lg">
                                    <div class="px-4 py-5 sm:p-6">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Room Status</h3>
                                        <div class="space-y-4">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                                    <span class="text-sm text-gray-600">Available</span>
                                                </div>
                                                <span class="text-sm font-medium text-gray-900">15</span>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <i class="fas fa-user-check text-blue-500 mr-3"></i>
                                                    <span class="text-sm text-gray-600">Occupied</span>
                                                </div>
                                                <span class="text-sm font-medium text-gray-900">32</span>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <i class="fas fa-broom text-purple-500 mr-3"></i>
                                                    <span class="text-sm text-gray-600">Cleaning</span>
                                                </div>
                                                <span class="text-sm font-medium text-gray-900">3</span>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <i class="fas fa-tools text-yellow-500 mr-3"></i>
                                                    <span class="text-sm text-gray-600">Maintenance</span>
                                                </div>
                                                <span class="text-sm font-medium text-gray-900">2</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pending Tasks -->
                                <div class="bg-white shadow rounded-lg">
                                    <div class="px-4 py-5 sm:p-6">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Pending Tasks</h3>
                                        <div class="space-y-3">
                                            <div class="flex items-center p-3 bg-red-50 rounded-lg">
                                                <input type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                                <div class="ml-3">
                                                    <p class="text-sm font-medium text-gray-900">Room 105 - Late check-out</p>
                                                    <p class="text-xs text-gray-500">Due: 11:00 AM</p>
                                                </div>
                                            </div>
                                            <div class="flex items-center p-3 bg-yellow-50 rounded-lg">
                                                <input type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                                <div class="ml-3">
                                                    <p class="text-sm font-medium text-gray-900">VIP arrival at 3:00 PM</p>
                                                    <p class="text-xs text-gray-500">Suite 501 - Prepare amenities</p>
                                                </div>
                                            </div>
                                            <div class="flex items-center p-3 bg-indigo-50 rounded-lg">
                                                <input type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                                <div class="ml-3">
                                                    <p class="text-sm font-medium text-gray-900">Inventory check</p>
                                                    <p class="text-xs text-gray-500">Report due by end of day</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Contacts -->
                                <div class="bg-white shadow rounded-lg">
                                    <div class="px-4 py-5 sm:p-6">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Quick Contacts</h3>
                                        <div class="space-y-3">
                                            <a href="#" class="flex items-center p-2 hover:bg-gray-50 rounded-lg transition-colors">
                                                <i class="fas fa-phone text-indigo-500 w-6"></i>
                                                <span class="text-sm text-gray-700">Front Desk Manager</span>
                                            </a>
                                            <a href="#" class="flex items-center p-2 hover:bg-gray-50 rounded-lg transition-colors">
                                                <i class="fas fa-broom text-purple-500 w-6"></i>
                                                <span class="text-sm text-gray-700">Housekeeping</span>
                                            </a>
                                            <a href="#" class="flex items-center p-2 hover:bg-gray-50 rounded-lg transition-colors">
                                                <i class="fas fa-tools text-yellow-500 w-6"></i>
                                                <span class="text-sm text-gray-700">Maintenance</span>
                                            </a>
                                            <a href="#" class="flex items-center p-2 hover:bg-gray-50 rounded-lg transition-colors">
                                                <i class="fas fa-utensils text-green-500 w-6"></i>
                                                <span class="text-sm text-gray-700">Room Service</span>
                                            </a>
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


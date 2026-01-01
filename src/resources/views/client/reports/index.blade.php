<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports - BookEasy</title>
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
                                <input id="search-field" class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-0 focus:border-transparent" placeholder="Search reports..." type="search">
                            </div>
                        </form>
                    </div>
                    <div class="ml-4 flex items-center md:ml-6">
                        <button type="button" class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <span class="sr-only">View notifications</span>
                            <i class="fas fa-bell h-6 w-6"></i>
                        </button>
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
                        <div class="flex items-center justify-between mb-8">
                            <div>
                                <h1 class="text-2xl font-semibold text-gray-900">Reports & Analytics</h1>
                                <p class="mt-1 text-sm text-gray-500">Track your business performance and insights</p>
                            </div>
                            <div class="flex space-x-3">
                                <select class="block w-40 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                    <option>December 2024</option>
                                    <option>November 2024</option>
                                    <option>October 2024</option>
                                    <option>This Year</option>
                                    <option>Custom Range</option>
                                </select>
                                <button class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    <i class="fas fa-download mr-2"></i>
                                    Export
                                </button>
                                <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    <i class="fas fa-print mr-2"></i>
                                    Print
                                </button>
                            </div>
                        </div>

                        <!-- Key Metrics -->
                        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4 mb-8">
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-dollar-sign text-green-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Total Revenue</dt>
                                                <dd class="text-2xl font-bold text-gray-900">$124,520</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-green-600 font-medium">+15.3% </span>
                                        <span class="text-gray-500">vs last month</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-calendar-check text-blue-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Total Bookings</dt>
                                                <dd class="text-2xl font-bold text-gray-900">847</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-green-600 font-medium">+8.2% </span>
                                        <span class="text-gray-500">vs last month</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-percentage text-purple-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Occupancy Rate</dt>
                                                <dd class="text-2xl font-bold text-gray-900">78.5%</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-green-600 font-medium">+3.2% </span>
                                        <span class="text-gray-500">vs last month</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-user-friends text-orange-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Avg. Nightly Rate</dt>
                                                <dd class="text-2xl font-bold text-gray-900">$185</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-yellow-600 font-medium">-1.2% </span>
                                        <span class="text-gray-500">vs last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Charts Row -->
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                            <!-- Revenue Chart -->
                            <div class="bg-white shadow rounded-lg p-6">
                                <h3 class="text-lg font-medium text-gray-900 mb-4">Revenue Overview</h3>
                                <div class="h-64 flex items-end justify-between space-x-2">
                                    <div class="flex flex-col items-center">
                                        <div class="w-12 bg-blue-500 rounded-t" style="height: 60%"></div>
                                        <span class="text-xs text-gray-500 mt-1">Jan</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-12 bg-blue-500 rounded-t" style="height: 65%"></div>
                                        <span class="text-xs text-gray-500 mt-1">Feb</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-12 bg-blue-500 rounded-t" style="height: 70%"></div>
                                        <span class="text-xs text-gray-500 mt-1">Mar</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-12 bg-blue-500 rounded-t" style="height: 55%"></div>
                                        <span class="text-xs text-gray-500 mt-1">Apr</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-12 bg-blue-500 rounded-t" style="height: 75%"></div>
                                        <span class="text-xs text-gray-500 mt-1">May</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-12 bg-blue-500 rounded-t" style="height: 80%"></div>
                                        <span class="text-xs text-gray-500 mt-1">Jun</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-12 bg-blue-500 rounded-t" style="height: 85%"></div>
                                        <span class="text-xs text-gray-500 mt-1">Jul</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-12 bg-blue-500 rounded-t" style="height: 78%"></div>
                                        <span class="text-xs text-gray-500 mt-1">Aug</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-12 bg-blue-500 rounded-t" style="height: 88%"></div>
                                        <span class="text-xs text-gray-500 mt-1">Sep</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-12 bg-blue-500 rounded-t" style="height: 92%"></div>
                                        <span class="text-xs text-gray-500 mt-1">Oct</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-12 bg-blue-500 rounded-t" style="height: 95%"></div>
                                        <span class="text-xs text-gray-500 mt-1">Nov</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <div class="w-12 bg-blue-600 rounded-t" style="height: 100%"></div>
                                        <span class="text-xs text-gray-500 mt-1">Dec</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Occupancy Chart -->
                            <div class="bg-white shadow rounded-lg p-6">
                                <h3 class="text-lg font-medium text-gray-900 mb-4">Occupancy by Room Type</h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between text-sm mb-1">
                                            <span class="text-gray-600">Executive Suites</span>
                                            <span class="font-medium text-gray-900">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                                            <div class="bg-purple-600 h-2.5 rounded-full" style="width: 92%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between text-sm mb-1">
                                            <span class="text-gray-600">Deluxe Rooms</span>
                                            <span class="font-medium text-gray-900">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 85%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between text-sm mb-1">
                                            <span class="text-gray-600">Premium Rooms</span>
                                            <span class="font-medium text-gray-900">76%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                                            <div class="bg-green-600 h-2.5 rounded-full" style="width: 76%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between text-sm mb-1">
                                            <span class="text-gray-600">Standard Rooms</span>
                                            <span class="font-medium text-gray-900">68%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                                            <div class="bg-yellow-600 h-2.5 rounded-full" style="width: 68%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Detailed Reports -->
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                            <!-- Top Performing Rooms -->
                            <div class="bg-white shadow rounded-lg">
                                <div class="px-6 py-4 border-b border-gray-200">
                                    <h3 class="text-lg font-medium text-gray-900">Top Performing Rooms</h3>
                                </div>
                                <div class="p-6">
                                    <div class="space-y-4">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <div class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center mr-3">
                                                    <span class="text-sm font-medium text-purple-600">1</span>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-gray-900">Suite 501</p>
                                                    <p class="text-xs text-gray-500">Executive Suite</p>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <p class="text-sm font-medium text-gray-900">$18,520</p>
                                                <p class="text-xs text-green-600">+12%</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                                    <span class="text-sm font-medium text-blue-600">2</span>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-gray-900">Suite 201</p>
                                                    <p class="text-xs text-gray-500">Deluxe Room</p>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <p class="text-sm font-medium text-gray-900">$15,890</p>
                                                <p class="text-xs text-green-600">+8%</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center mr-3">
                                                    <span class="text-sm font-medium text-green-600">3</span>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-gray-900">Room 301</p>
                                                    <p class="text-xs text-gray-500">Premium Room</p>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <p class="text-sm font-medium text-gray-900">$12,340</p>
                                                <p class="text-xs text-green-600">+15%</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <div class="w-8 h-8 rounded-full bg-yellow-100 flex items-center justify-center mr-3">
                                                    <span class="text-sm font-medium text-yellow-600">4</span>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-gray-900">Room 105</p>
                                                    <p class="text-xs text-gray-500">Standard Room</p>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <p class="text-sm font-medium text-gray-900">$9,120</p>
                                                <p class="text-xs text-red-600">-2%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Booking Sources -->
                            <div class="bg-white shadow rounded-lg">
                                <div class="px-6 py-4 border-b border-gray-200">
                                    <h3 class="text-lg font-medium text-gray-900">Booking Sources</h3>
                                </div>
                                <div class="p-6">
                                    <div class="space-y-4">
                                        <div>
                                            <div class="flex justify-between text-sm mb-1">
                                                <span class="text-gray-600">Direct Website</span>
                                                <span class="font-medium text-gray-900">45%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2">
                                                <div class="bg-blue-600 h-2 rounded-full" style="width: 45%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between text-sm mb-1">
                                                <span class="text-gray-600">Booking.com</span>
                                                <span class="font-medium text-gray-900">25%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2">
                                                <div class="bg-green-600 h-2 rounded-full" style="width: 25%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between text-sm mb-1">
                                                <span class="text-gray-600">Expedia</span>
                                                <span class="font-medium text-gray-900">15%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2">
                                                <div class="bg-purple-600 h-2 rounded-full" style="width: 15%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between text-sm mb-1">
                                                <span class="text-gray-600">Phone/Email</span>
                                                <span class="font-medium text-gray-900">10%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2">
                                                <div class="bg-orange-600 h-2 rounded-full" style="width: 10%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between text-sm mb-1">
                                                <span class="text-gray-600">Other</span>
                                                <span class="font-medium text-gray-900">5%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2">
                                                <div class="bg-gray-500 h-2 rounded-full" style="width: 5%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Customer Insights -->
                            <div class="bg-white shadow rounded-lg">
                                <div class="px-6 py-4 border-b border-gray-200">
                                    <h3 class="text-lg font-medium text-gray-900">Customer Insights</h3>
                                </div>
                                <div class="p-6">
                                    <div class="space-y-4">
                                        <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                                            <div class="flex items-center">
                                                <i class="fas fa-star text-yellow-500 mr-3"></i>
                                                <span class="text-sm text-gray-700">Avg. Customer Rating</span>
                                            </div>
                                            <span class="text-sm font-bold text-gray-900">4.8/5</span>
                                        </div>
                                        <div class="flex items-center justify-between p-3 bg-green-50 rounded-lg">
                                            <div class="flex items-center">
                                                <i class="fas fa-user-plus text-green-500 mr-3"></i>
                                                <span class="text-sm text-gray-700">New Customers</span>
                                            </div>
                                            <span class="text-sm font-bold text-gray-900">+156</span>
                                        </div>
                                        <div class="flex items-center justify-between p-3 bg-purple-50 rounded-lg">
                                            <div class="flex items-center">
                                                <i class="fas fa-repeat text-purple-500 mr-3"></i>
                                                <span class="text-sm text-gray-700">Return Rate</span>
                                            </div>
                                            <span class="text-sm font-bold text-gray-900">42%</span>
                                        </div>
                                        <div class="flex items-center justify-between p-3 bg-orange-50 rounded-lg">
                                            <div class="flex items-center">
                                                <i class="fas fa-comments text-orange-500 mr-3"></i>
                                                <span class="text-sm text-gray-700">Reviews This Month</span>
                                            </div>
                                            <span class="text-sm font-bold text-gray-900">89</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Monthly Comparison Table -->
                        <div class="mt-8 bg-white shadow rounded-lg">
                            <div class="px-6 py-4 border-b border-gray-200">
                                <h3 class="text-lg font-medium text-gray-900">Monthly Comparison</h3>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-300">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Metric</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">This Month</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Month</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Change</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Year to Date</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Total Revenue</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$124,520</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$108,230</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">+15.0%</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$1,245,800</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Total Bookings</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">847</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">782</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">+8.3%</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">9,456</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Avg. Occupancy</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">78.5%</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">75.3%</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">+4.2%</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">72.8%</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Avg. Nightly Rate</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$185</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$187</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600">-1.1%</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$182</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Length of Stay</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">3.2 nights</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3.1 nights</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">+3.2%</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">3.0 nights</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>

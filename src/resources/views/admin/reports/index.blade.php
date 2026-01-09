<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Reports - Booking System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="fixed inset-0 z-40 bg-gray-600 bg-opacity-75 md:hidden hidden" id="mobile-sidebar-overlay"></div>

    <div class="min-h-screen flex">
        @include('admin.sidebar', ['active' => 'reports'])

        <!-- Main Content -->
        <div class="flex flex-col flex-1 overflow-hidden md:ml-0">
            <!-- Header -->
            <header class="relative z-10 flex-shrink-0 flex h-16 bg-white shadow">
                <button type="button" class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-500 md:hidden" id="mobile-menu-button">
                    <span class="sr-only">Open sidebar</span>
                    <i class="fas fa-bars"></i>
                </button>
                <div class="flex-1 px-4 flex justify-between">
                    <div class="flex-1 flex">
                        <!-- Date Range Filter -->
                        <div class="flex items-center space-x-4">
                            <div class="relative">
                                <input type="date" class="border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-green-500" value="2024-12-01">
                            </div>
                            <span class="text-gray-500">to</span>
                            <div class="relative">
                                <input type="date" class="border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-green-500" value="2024-12-31">
                            </div>
                            <button type="button" class="bg-green-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                <i class="fas fa-filter mr-2"></i>
                                Apply
                            </button>
                        </div>
                    </div>
                    <div class="ml-4 flex items-center md:ml-6">
                        <button type="button" class="bg-white text-gray-700 border border-gray-300 px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            <i class="fas fa-download mr-2"></i>
                            Export Report
                        </button>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 relative overflow-y-auto focus:outline-none">
                <div class="py-4 sm:py-6">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <!-- Page Header -->
                        <div class="mb-6 sm:mb-8">
                            <h1 class="text-xl sm:text-2xl font-semibold text-gray-900">System Reports & Analytics</h1>
                            <p class="mt-1 text-sm text-gray-500">Comprehensive system performance and user activity reports</p>
                        </div>

                        <!-- Report Navigation -->
                        <div class="mb-6">
                            <div class="border-b border-gray-200">
                                <nav class="-mb-px flex space-x-8 overflow-x-auto">
                                    <a href="#" class="border-green-500 text-green-600 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                        Overview
                                    </a>
                                    <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                        Revenue
                                    </a>
                                    <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                        Users
                                    </a>
                                    <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                        Bookings
                                    </a>
                                    <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                        Performance
                                    </a>
                                </nav>
                            </div>
                        </div>

                        <!-- Summary Stats -->
                        <div class="grid grid-cols-1 gap-4 sm:gap-5 sm:grid-cols-2 lg:grid-cols-4 mb-6 sm:mb-8">
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-dollar-sign text-green-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Total Revenue</dt>
                                                <dd class="text-lg font-medium text-gray-900">$1,284,500</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-green-600 font-medium">+15.3% </span>
                                        <span class="text-gray-500">vs last period</span>
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
                                                <dd class="text-lg font-medium text-gray-900">12,847</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-green-600 font-medium">+22.1% </span>
                                        <span class="text-gray-500">vs last period</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-users text-purple-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">New Users</dt>
                                                <dd class="text-lg font-medium text-gray-900">1,547</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-green-600 font-medium">+8.7% </span>
                                        <span class="text-gray-500">vs last period</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-percentage text-orange-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Occupancy Rate</dt>
                                                <dd class="text-lg font-medium text-gray-900">78.5%</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-green-600 font-medium">+5.2% </span>
                                        <span class="text-gray-500">vs last period</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <!-- Revenue Chart Placeholder -->
                            <div class="bg-white shadow rounded-lg">
                                <div class="px-4 py-5 sm:p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Revenue Overview</h3>
                                        <select class="border border-gray-300 rounded-md px-3 py-1 text-sm focus:outline-none focus:ring-1 focus:ring-green-500">
                                            <option>This Year</option>
                                            <option>Last Year</option>
                                            <option>All Time</option>
                                        </select>
                                    </div>
                                    <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                                        <div class="text-center">
                                            <i class="fas fa-chart-line text-4xl text-gray-300 mb-3"></i>
                                            <p class="text-gray-500">Revenue Chart Visualization</p>
                                            <p class="text-sm text-gray-400">Line chart showing revenue trends</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Bookings Chart Placeholder -->
                            <div class="bg-white shadow rounded-lg">
                                <div class="px-4 py-5 sm:p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Booking Statistics</h3>
                                        <select class="border border-gray-300 rounded-md px-3 py-1 text-sm focus:outline-none focus:ring-1 focus:ring-green-500">
                                            <option>This Month</option>
                                            <option>Last Month</option>
                                            <option>This Quarter</option>
                                        </select>
                                    </div>
                                    <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                                        <div class="text-center">
                                            <i class="fas fa-chart-bar text-4xl text-gray-300 mb-3"></i>
                                            <p class="text-gray-500">Bookings Chart Visualization</p>
                                            <p class="text-sm text-gray-400">Bar chart showing booking distribution</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Top Performing Rooms -->
                            <div class="bg-white shadow rounded-lg">
                                <div class="px-4 py-5 sm:p-6">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Top Performing Rooms</h3>
                                    <div class="space-y-4">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <span class="flex-shrink-0 h-8 w-8 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-700 font-bold text-xs">1</span>
                                                <div class="ml-3">
                                                    <p class="text-sm font-medium text-gray-900">Deluxe Suite</p>
                                                    <p class="text-xs text-gray-500">124 bookings</p>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <p class="text-sm font-medium text-gray-900">$37,200</p>
                                                <p class="text-xs text-green-600">+15%</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <span class="flex-shrink-0 h-8 w-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-700 font-bold text-xs">2</span>
                                                <div class="ml-3">
                                                    <p class="text-sm font-medium text-gray-900">Premium Room</p>
                                                    <p class="text-xs text-gray-500">98 bookings</p>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <p class="text-sm font-medium text-gray-900">$21,560</p>
                                                <p class="text-xs text-green-600">+8%</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <span class="flex-shrink-0 h-8 w-8 rounded-full bg-orange-100 flex items-center justify-center text-orange-700 font-bold text-xs">3</span>
                                                <div class="ml-3">
                                                    <p class="text-sm font-medium text-gray-900">Standard Room</p>
                                                    <p class="text-xs text-gray-500">87 bookings</p>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <p class="text-sm font-medium text-gray-900">$13,813</p>
                                                <p class="text-xs text-green-600">+12%</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <span class="flex-shrink-0 h-8 w-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-700 font-bold text-xs">4</span>
                                                <div class="ml-3">
                                                    <p class="text-sm font-medium text-gray-900">Family Room</p>
                                                    <p class="text-xs text-gray-500">65 bookings</p>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <p class="text-sm font-medium text-gray-900">$15,600</p>
                                                <p class="text-xs text-green-600">+5%</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <span class="flex-shrink-0 h-8 w-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-700 font-bold text-xs">5</span>
                                                <div class="ml-3">
                                                    <p class="text-sm font-medium text-gray-900">Economy Room</p>
                                                    <p class="text-xs text-gray-500">54 bookings</p>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <p class="text-sm font-medium text-gray-900">$7,020</p>
                                                <p class="text-xs text-red-600">-3%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- User Activity Summary -->
                            <div class="bg-white shadow rounded-lg">
                                <div class="px-4 py-5 sm:p-6">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">User Activity Summary</h3>
                                    <div class="space-y-4">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <i class="fas fa-user-plus text-green-500 mr-3"></i>
                                                <span class="text-sm text-gray-600">New Registrations</span>
                                            </div>
                                            <span class="text-sm font-bold text-gray-900">1,547</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <i class="fas fa-user-check text-blue-500 mr-3"></i>
                                                <span class="text-sm text-gray-600">Active Users</span>
                                            </div>
                                            <span class="text-sm font-bold text-gray-900">2,312</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <i class="fas fa-user-clock text-yellow-500 mr-3"></i>
                                                <span class="text-sm text-gray-600">Returning Users</span>
                                            </div>
                                            <span class="text-sm font-bold text-gray-900">892</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <i class="fas fa-sign-in-alt text-purple-500 mr-3"></i>
                                                <span class="text-sm text-gray-600">Daily Logins (Avg)</span>
                                            </div>
                                            <span class="text-sm font-bold text-gray-900">456</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <i class="fas fa-envelope text-gray-500 mr-3"></i>
                                                <span class="text-sm text-gray-600">Email Confirmations</span>
                                            </div>
                                            <span class="text-sm font-bold text-gray-900">1,423</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <i class="fas fa-key text-gray-500 mr-3"></i>
                                                <span class="text-sm text-gray-600">Password Resets</span>
                                            </div>
                                            <span class="text-sm font-bold text-gray-900">89</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Reports Section -->
                        <div class="mt-6">
                            <div class="bg-white shadow rounded-lg">
                                <div class="px-4 py-5 sm:p-6">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Available Reports</h3>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                                        <button class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                            <div class="flex-shrink-0">
                                                <i class="fas fa-file-invoice-dollar text-2xl text-green-600"></i>
                                            </div>
                                            <div class="ml-4 text-left">
                                                <p class="text-sm font-medium text-gray-900">Financial Report</p>
                                                <p class="text-xs text-gray-500">Revenue, expenses, and profits</p>
                                            </div>
                                        </button>
                                        <button class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                            <div class="flex-shrink-0">
                                                <i class="fas fa-users text-2xl text-blue-600"></i>
                                            </div>
                                            <div class="ml-4 text-left">
                                                <p class="text-sm font-medium text-gray-900">User Analytics</p>
                                                <p class="text-xs text-gray-500">User growth and engagement</p>
                                            </div>
                                        </button>
                                        <button class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                            <div class="flex-shrink-0">
                                                <i class="fas fa-calendar-check text-2xl text-purple-600"></i>
                                            </div>
                                            <div class="ml-4 text-left">
                                                <p class="text-sm font-medium text-gray-900">Booking Analysis</p>
                                                <p class="text-xs text-gray-500">Booking patterns and trends</p>
                                            </div>
                                        </button>
                                        <button class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                            <div class="flex-shrink-0">
                                                <i class="fas fa-bed text-2xl text-orange-600"></i>
                                            </div>
                                            <div class="ml-4 text-left">
                                                <p class="text-sm font-medium text-gray-900">Room Performance</p>
                                                <p class="text-xs text-gray-500">Occupancy and revenue by room</p>
                                            </div>
                                        </button>
                                        <button class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                            <div class="flex-shrink-0">
                                                <i class="fas fa-chart-pie text-2xl text-red-600"></i>
                                            </div>
                                            <div class="ml-4 text-left">
                                                <p class="text-sm font-medium text-gray-900">Occupancy Report</p>
                                                <p class="text-xs text-gray-500">Room utilization metrics</p>
                                            </div>
                                        </button>
                                        <button class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                            <div class="flex-shrink-0">
                                                <i class="fas fa-clipboard-check text-2xl text-teal-600"></i>
                                            </div>
                                            <div class="ml-4 text-left">
                                                <p class="text-sm font-medium text-gray-900">Audit Trail</p>
                                                <p class="text-xs text-gray-500">System activity logs</p>
                                            </div>
                                        </button>
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


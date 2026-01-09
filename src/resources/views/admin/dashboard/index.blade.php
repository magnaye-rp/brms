<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Booking System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans antialiased">
    <!-- Mobile sidebar overlay -->
    <div class="fixed inset-0 z-40 bg-gray-600 bg-opacity-75 md:hidden hidden" id="mobile-sidebar-overlay"></div>

    <div class="min-h-screen flex">
        @include('admin.sidebar', ['active' => 'dashboard'])

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
                        <form class="w-full flex md:ml-0" action="#" method="GET">
                            <label for="search-field" class="sr-only">Search</label>
                            <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                    <i class="fas fa-search h-5 w-5"></i>
                                </div>
                                <input id="search-field" class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-0 focus:border-transparent sm:text-sm" placeholder="Search users, admins, logs..." type="search">
                            </div>
                        </form>
                    </div>
                    <div class="ml-4 flex items-center md:ml-6">
                        <!-- Notifications -->
                        <button type="button" class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 relative">
                            <span class="sr-only">View notifications</span>
                            <i class="fas fa-bell h-6 w-6"></i>
                            <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-red-500 ring-2 ring-white"></span>
                        </button>

                        <!-- Quick Admin Actions -->
                        <div class="ml-3 relative">
                            <button type="button" class="bg-green-600 text-white px-3 py-1.5 rounded-md text-sm font-medium hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" onclick="window.location.href='{{ route('admin.admins') }}'">
                                <i class="fas fa-plus mr-1"></i>
                                Add Admin
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
                            <h1 class="text-xl sm:text-2xl font-semibold text-gray-900">Admin Dashboard</h1>
                            <p class="mt-1 text-sm text-gray-500">System overview and administrative metrics</p>
                        </div>

                        <!-- Statistics Cards -->
                        <div class="grid grid-cols-1 gap-4 sm:gap-5 sm:grid-cols-2 lg:grid-cols-4 mb-6 sm:mb-8">
                            <!-- Total Users -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-users text-blue-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Total Users</dt>
                                                <dd class="text-lg font-medium text-gray-900">2,547</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-green-600 font-medium">+156 </span>
                                        <span class="text-gray-500">this month</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Total Admins -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-user-shield text-green-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Active Admins</dt>
                                                <dd class="text-lg font-medium text-gray-900">12</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-gray-500">Super: 2 | Staff: 10</span>
                                    </div>
                                </div>
                            </div>

                            <!-- System Health -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-heartbeat text-red-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">System Health</dt>
                                                <dd class="text-lg font-medium text-gray-900">98.5%</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-green-600 font-medium"><i class="fas fa-check-circle"></i> </span>
                                        <span class="text-gray-500">All systems operational</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Today's Bookings -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-calendar-check text-purple-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Today's Bookings</dt>
                                                <dd class="text-lg font-medium text-gray-900">847</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-green-600 font-medium">+23% </span>
                                        <span class="text-gray-500">vs last week</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Secondary Stats -->
                        <div class="grid grid-cols-1 gap-4 sm:gap-5 sm:grid-cols-3 mb-6 sm:mb-8">
                            <!-- Revenue This Month -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-dollar-sign text-green-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Monthly Revenue</dt>
                                                <dd class="text-lg font-medium text-gray-900">$128,450</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-green-600 font-medium">+12.3% </span>
                                        <span class="text-gray-500">from last month</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Active Sessions -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-laptop text-blue-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Active Sessions</dt>
                                                <dd class="text-lg font-medium text-gray-900">342</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-blue-600 font-medium">247 </span>
                                        <span class="text-gray-500">users online now</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Support Tickets -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-ticket-alt text-yellow-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Open Tickets</dt>
                                                <dd class="text-lg font-medium text-gray-900">23</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <span class="text-yellow-600 font-medium">5 </span>
                                        <span class="text-gray-500">high priority</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                            <!-- Recent Admin Activity -->
                            <div class="lg:col-span-2">
                                <div class="bg-white shadow rounded-lg">
                                    <div class="px-4 py-5 sm:p-6">
                                        <div class="flex items-center justify-between mb-4">
                                            <h3 class="text-lg leading-6 font-medium text-gray-900">Recent Admin Activity</h3>
                                            <a href="{{ route('admin.logs') }}" class="text-sm font-medium text-green-600 hover:text-green-500">View all</a>
                                        </div>
                                        
                                        <!-- Activity Table -->
                                        <div class="overflow-x-auto shadow ring-1 ring-black ring-opacity-5 rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-300">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Admin</th>
                                                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Target</th>
                                                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Time</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <div class="flex-shrink-0 h-8 w-8">
                                                                    <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=John+Admin&background=10b981&color=fff" alt="">
                                                                </div>
                                                                <div class="ml-3">
                                                                    <div class="text-sm font-medium text-gray-900">John Admin</div>
                                                                    <div class="text-xs text-gray-500">Super Admin</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Created</span>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">New Admin Account</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">5 minutes ago</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <div class="flex-shrink-0 h-8 w-8">
                                                                    <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=Sarah+Manager&background=3b82f6&color=fff" alt="">
                                                                </div>
                                                                <div class="ml-3">
                                                                    <div class="text-sm font-medium text-gray-900">Sarah Manager</div>
                                                                    <div class="text-xs text-gray-500">Admin</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Updated</span>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">User Account #1245</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">15 minutes ago</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <div class="flex-shrink-0 h-8 w-8">
                                                                    <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=Mike+Support&background=8b5cf6&color=fff" alt="">
                                                                </div>
                                                                <div class="ml-3">
                                                                    <div class="text-sm font-medium text-gray-900">Mike Support</div>
                                                                    <div class="text-xs text-gray-500">Staff Admin</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Suspended</span>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">User Account #892</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1 hour ago</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <div class="flex-shrink-0 h-8 w-8">
                                                                    <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=Emma+Finance&background=ec4899&color=fff" alt="">
                                                                </div>
                                                                <div class="ml-3">
                                                                    <div class="text-sm font-medium text-gray-900">Emma Finance</div>
                                                                    <div class="text-xs text-gray-500">Admin</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-800">Report</span>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Monthly Revenue Report</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2 hours ago</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- System Status & Quick Actions -->
                            <div class="space-y-6">
                                <!-- System Status -->
                                <div class="bg-white shadow rounded-lg">
                                    <div class="px-4 py-5 sm:p-6">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">System Status</h3>
                                        <div class="space-y-4">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <i class="fas fa-server text-gray-400 mr-3"></i>
                                                    <span class="text-sm text-gray-600">Server Load</span>
                                                </div>
                                                <span class="text-sm font-medium text-green-600">32%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2">
                                                <div class="bg-green-600 h-2 rounded-full" style="width: 32%"></div>
                                            </div>

                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <i class="fas fa-database text-gray-400 mr-3"></i>
                                                    <span class="text-sm text-gray-600">Database</span>
                                                </div>
                                                <span class="text-sm font-medium text-green-600">Healthy</span>
                                            </div>

                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <i class="fas fa-memory text-gray-400 mr-3"></i>
                                                    <span class="text-sm text-gray-600">Memory Usage</span>
                                                </div>
                                                <span class="text-sm font-medium text-yellow-600">68%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2">
                                                <div class="bg-yellow-500 h-2 rounded-full" style="width: 68%"></div>
                                            </div>

                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <i class="fas fa-hdd text-gray-400 mr-3"></i>
                                                    <span class="text-sm text-gray-600">Storage</span>
                                                </div>
                                                <span class="text-sm font-medium text-green-600">45%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2">
                                                <div class="bg-green-600 h-2 rounded-full" style="width: 45%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Admin Actions -->
                                <div class="bg-white shadow rounded-lg">
                                    <div class="px-4 py-5 sm:p-6">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Quick Actions</h3>
                                        <div class="space-y-3">
                                            <button class="w-full flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                                <i class="fas fa-user-plus mr-2"></i>
                                                Add New Admin
                                            </button>
                                            <button class="w-full flex items-center justify-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                                <i class="fas fa-download mr-2"></i>
                                                Export User Report
                                            </button>
                                            <button class="w-full flex items-center justify-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                                <i class="fas fa-cog mr-2"></i>
                                                System Settings
                                            </button>
                                            <button class="w-full flex items-center justify-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                                <i class="fas fa-bell mr-2"></i>
                                                Send Announcement
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Recent Signups -->
                                <div class="bg-white shadow rounded-lg">
                                    <div class="px-4 py-5 sm:p-6">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Recent Signups</h3>
                                        <div class="space-y-4">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0">
                                                    <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=New+User&background=f3f4f6&color=374151" alt="">
                                                </div>
                                                <div class="ml-3 flex-1">
                                                    <p class="text-sm font-medium text-gray-900">john.doe@email.com</p>
                                                    <p class="text-xs text-gray-500">Just now</p>
                                                </div>
                                                <span class="text-xs text-green-600">New</span>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0">
                                                    <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=Jane+Smith&background=f3f4f6&color=374151" alt="">
                                                </div>
                                                <div class="ml-3 flex-1">
                                                    <p class="text-sm font-medium text-gray-900">jane.smith@email.com</p>
                                                    <p class="text-xs text-gray-500">5 mins ago</p>
                                                </div>
                                                <span class="text-xs text-green-600">New</span>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0">
                                                    <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=Bob+Wilson&background=f3f4f6&color=374151" alt="">
                                                </div>
                                                <div class="ml-3 flex-1">
                                                    <p class="text-sm font-medium text-gray-900">bob.wilson@email.com</p>
                                                    <p class="text-xs text-gray-500">15 mins ago</p>
                                                </div>
                                                <span class="text-xs text-green-600">New</span>
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


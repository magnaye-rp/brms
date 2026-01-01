<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar - BookEasy</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .calendar-day { min-height: 120px; }
        .calendar-day:hover { background-color: #f9fafb; }
    </style>
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
                    <div class="flex-1 flex items-center">
                        <!-- Month Navigation -->
                        <div class="flex items-center space-x-4">
                            <button class="p-2 rounded-full hover:bg-gray-100">
                                <i class="fas fa-chevron-left text-gray-600"></i>
                            </button>
                            <h2 class="text-xl font-semibold text-gray-900">December 2024</h2>
                            <button class="p-2 rounded-full hover:bg-gray-100">
                                <i class="fas fa-chevron-right text-gray-600"></i>
                            </button>
                        </div>
                    </div>
                    <div class="ml-4 flex items-center md:ml-6 space-x-4">
                        <button type="button" class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <span class="sr-only">View notifications</span>
                            <i class="fas fa-bell h-6 w-6"></i>
                        </button>
                        <button class="inline-flex items-center px-3 py-1.5 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                            <i class="fas fa-plus mr-1"></i>
                            New Booking
                        </button>
                        <div class="relative">
                            <button type="button" class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=John+Doe&background=3b82f6&color=fff" alt="User avatar">
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Area -->
            <main class="flex-1 relative overflow-y-auto focus:outline-none">
                <div class="py-6">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        <!-- Legend -->
                        <div class="flex items-center space-x-6 mb-6">
                            <div class="flex items-center">
                                <span class="w-3 h-3 rounded-full bg-green-500 mr-2"></span>
                                <span class="text-sm text-gray-600">Checked-in</span>
                            </div>
                            <div class="flex items-center">
                                <span class="w-3 h-3 rounded-full bg-blue-500 mr-2"></span>
                                <span class="text-sm text-gray-600">Confirmed</span>
                            </div>
                            <div class="flex items-center">
                                <span class="w-3 h-3 rounded-full bg-yellow-500 mr-2"></span>
                                <span class="text-sm text-gray-600">Pending</span>
                            </div>
                            <div class="flex items-center">
                                <span class="w-3 h-3 rounded-full bg-gray-400 mr-2"></span>
                                <span class="text-sm text-gray-600">Checked-out</span>
                            </div>
                            <div class="flex items-center">
                                <span class="w-3 h-3 rounded-full bg-red-500 mr-2"></span>
                                <span class="text-sm text-gray-600">Cancelled</span>
                            </div>
                        </div>

                        <!-- Calendar Grid -->
                        <div class="bg-white shadow rounded-lg">
                            <!-- Weekday Headers -->
                            <div class="grid grid-cols-7 border-b border-gray-200">
                                <div class="px-4 py-3 text-center text-sm font-medium text-gray-500">Sun</div>
                                <div class="px-4 py-3 text-center text-sm font-medium text-gray-500">Mon</div>
                                <div class="px-4 py-3 text-center text-sm font-medium text-gray-500">Tue</div>
                                <div class="px-4 py-3 text-center text-sm font-medium text-gray-500">Wed</div>
                                <div class="px-4 py-3 text-center text-sm font-medium text-gray-500">Thu</div>
                                <div class="px-4 py-3 text-center text-sm font-medium text-gray-500">Fri</div>
                                <div class="px-4 py-3 text-center text-sm font-medium text-gray-500">Sat</div>
                            </div>
                            
                            <!-- Calendar Days -->
                            <div class="grid grid-cols-7">
                                <!-- Week 1 -->
                                <div class="calendar-day border-b border-r border-gray-200 p-2 bg-gray-50">
                                    <span class="text-sm text-gray-400">29</span>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2 bg-gray-50">
                                    <span class="text-sm text-gray-400">30</span>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-900">1</span>
                                    </div>
                                    <div class="space-y-1">
                                        <div class="px-2 py-1 rounded text-xs bg-blue-100 text-blue-700 truncate">Room 101 - Smith</div>
                                        <div class="px-2 py-1 rounded text-xs bg-green-100 text-green-700 truncate">Room 201 - Johnson</div>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-900">2</span>
                                    </div>
                                    <div class="space-y-1">
                                        <div class="px-2 py-1 rounded text-xs bg-yellow-100 text-yellow-700 truncate">Room 105 - Chen</div>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-900">3</span>
                                    </div>
                                    <div class="space-y-1">
                                        <div class="px-2 py-1 rounded text-xs bg-blue-100 text-blue-700 truncate">Room 301 - Davis</div>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-900">4</span>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-900">5</span>
                                    </div>
                                </div>
                                
                                <!-- Week 2 -->
                                <div class="calendar-day border-b border-r border-gray-200 p-2 bg-gray-50">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm text-gray-400">6</span>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2 bg-gray-50">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm text-gray-400">7</span>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2 bg-gray-50">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm text-gray-400">8</span>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2 bg-gray-50">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm text-gray-400">9</span>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-900">10</span>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-900">11</span>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-900">12</span>
                                    </div>
                                </div>
                                
                                <!-- Week 3 -->
                                <div class="calendar-day border-b border-r border-gray-200 p-2 bg-gray-50">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm text-gray-400">13</span>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2 bg-gray-50">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm text-gray-400">14</span>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-900">15</span>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-900">16</span>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-900">17</span>
                                    </div>
                                    <div class="space-y-1">
                                        <div class="px-2 py-1 rounded text-xs bg-green-100 text-green-700 truncate">Suite 501 - Wilson</div>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-900">18</span>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-900">19</span>
                                    </div>
                                </div>
                                
                                <!-- Week 4 -->
                                <div class="calendar-day border-b border-r border-gray-200 p-2 bg-gray-50">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm text-gray-400">20</span>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2 bg-gray-50">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm text-gray-400">21</span>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-900">22</span>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-900">23</span>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-900">24</span>
                                    </div>
                                    <div class="space-y-1">
                                        <div class="px-2 py-1 rounded text-xs bg-blue-100 text-blue-700 truncate">Suite 201 - Brown</div>
                                        <div class="px-2 py-1 rounded text-xs bg-blue-100 text-blue-700 truncate">Room 302 - Garcia</div>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-900">25</span>
                                        <span class="text-xs bg-red-100 text-red-600 px-1.5 py-0.5 rounded">Xmas</span>
                                    </div>
                                    <div class="space-y-1">
                                        <div class="px-2 py-1 rounded text-xs bg-green-100 text-green-700 truncate">Suite 201 - Brown</div>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-900">26</span>
                                    </div>
                                    <div class="space-y-1">
                                        <div class="px-2 py-1 rounded text-xs bg-green-100 text-green-700 truncate">Suite 201 - Brown</div>
                                        <div class="px-2 py-1 rounded text-xs bg-blue-100 text-blue-700 truncate">Room 302 - Garcia</div>
                                    </div>
                                </div>
                                
                                <!-- Week 5 -->
                                <div class="calendar-day border-b border-r border-gray-200 p-2 bg-gray-50">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm text-gray-400">27</span>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-900">28</span>
                                        <span class="text-xs bg-blue-600 text-white px-1.5 py-0.5 rounded">Today</span>
                                    </div>
                                    <div class="space-y-1">
                                        <div class="px-2 py-1 rounded text-xs bg-green-100 text-green-700 truncate">Suite 201 - Johnson</div>
                                        <div class="px-2 py-1 rounded text-xs bg-yellow-100 text-yellow-700 truncate">Room 105 - Chen</div>
                                        <div class="px-2 py-1 rounded text-xs bg-blue-100 text-blue-700 truncate">Room 301 - Davis</div>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-900">29</span>
                                    </div>
                                    <div class="space-y-1">
                                        <div class="px-2 py-1 rounded text-xs bg-green-100 text-green-700 truncate">Suite 201 - Johnson</div>
                                        <div class="px-2 py-1 rounded text-xs bg-yellow-100 text-yellow-700 truncate">Room 105 - Chen</div>
                                        <div class="px-2 py-1 rounded text-xs bg-blue-100 text-blue-700 truncate">Room 301 - Davis</div>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-900">30</span>
                                    </div>
                                    <div class="space-y-1">
                                        <div class="px-2 py-1 rounded text-xs bg-blue-100 text-blue-700 truncate">Room 301 - Davis</div>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-900">31</span>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2 bg-gray-50">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm text-gray-400">1</span>
                                    </div>
                                </div>
                                <div class="calendar-day border-b border-r border-gray-200 p-2 bg-gray-50">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm text-gray-400">2</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Today's Schedule -->
                        <div class="mt-6 bg-white shadow rounded-lg">
                            <div class="px-6 py-4 border-b border-gray-200">
                                <h3 class="text-lg font-medium text-gray-900">Today's Schedule - December 28, 2024</h3>
                            </div>
                            <div class="p-6">
                                <div class="space-y-4">
                                    <div class="flex items-center p-4 bg-green-50 rounded-lg">
                                        <div class="flex-shrink-0 h-3 w-3 bg-green-600 rounded-full"></div>
                                        <div class="ml-4 flex-1">
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <p class="text-sm font-medium text-gray-900">Check-in: Sarah Johnson</p>
                                                    <p class="text-sm text-gray-500">Suite 201 - Deluxe Room</p>
                                                </div>
                                                <div class="text-right">
                                                    <p class="text-sm font-medium text-gray-900">3:00 PM</p>
                                                    <p class="text-sm text-gray-500">Confirmed</p>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="ml-4 text-green-600 hover:text-green-800">
                                            <i class="fas fa-check"></i>
                                        </button>
                                    </div>
                                    
                                    <div class="flex items-center p-4 bg-yellow-50 rounded-lg">
                                        <div class="flex-shrink-0 h-3 w-3 bg-yellow-600 rounded-full"></div>
                                        <div class="ml-4 flex-1">
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <p class="text-sm font-medium text-gray-900">Check-in: Michael Chen</p>
                                                    <p class="text-sm text-gray-500">Room 105 - Standard Room</p>
                                                </div>
                                                <div class="text-right">
                                                    <p class="text-sm font-medium text-gray-900">4:00 PM</p>
                                                    <p class="text-sm text-gray-500">Pending</p>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="ml-4 text-yellow-600 hover:text-yellow-800">
                                            <i class="fas fa-clock"></i>
                                        </button>
                                    </div>
                                    
                                    <div class="flex items-center p-4 bg-blue-50 rounded-lg">
                                        <div class="flex-shrink-0 h-3 w-3 bg-blue-600 rounded-full"></div>
                                        <div class="ml-4 flex-1">
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <p class="text-sm font-medium text-gray-900">Check-in: Emma Davis</p>
                                                    <p class="text-sm text-gray-500">Room 301 - Premium Room</p>
                                                </div>
                                                <div class="text-right">
                                                    <p class="text-sm font-medium text-gray-900">5:00 PM</p>
                                                    <p class="text-sm text-gray-500">Confirmed</p>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="ml-4 text-blue-600 hover:text-blue-800">
                                            <i class="fas fa-check"></i>
                                        </button>
                                    </div>
                                    
                                    <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                                        <div class="flex-shrink-0 h-3 w-3 bg-gray-600 rounded-full"></div>
                                        <div class="ml-4 flex-1">
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <p class="text-sm font-medium text-gray-900">Check-out: John Smith</p>
                                                    <p class="text-sm text-gray-500">Room 102 - Standard Room</p>
                                                </div>
                                                <div class="text-right">
                                                    <p class="text-sm font-medium text-gray-900">11:00 AM</p>
                                                    <p class="text-sm text-gray-500">Completed</p>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="ml-4 text-gray-600 hover:text-gray-800">
                                            <i class="fas fa-history"></i>
                                        </button>
                                    </div>
                                    
                                    <div class="flex items-center p-4 bg-purple-50 rounded-lg">
                                        <div class="flex-shrink-0 h-3 w-3 bg-purple-600 rounded-full"></div>
                                        <div class="ml-4 flex-1">
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <p class="text-sm font-medium text-gray-900">Room Cleaning</p>
                                                    <p class="text-sm text-gray-500">Rooms 102, 205, 308</p>
                                                </div>
                                                <div class="text-right">
                                                    <p class="text-sm font-medium text-gray-900">2:00 PM</p>
                                                    <p class="text-sm text-gray-500">In Progress</p>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="ml-4 text-purple-600 hover:text-purple-800">
                                            <i class="fas fa-broom"></i>
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

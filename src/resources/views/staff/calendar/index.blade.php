<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar - Staff Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .calendar-day:hover { background-color: #f3f4f6; }
        .calendar-day.has-event { position: relative; }
        .calendar-day.has-event::after {
            content: '';
            position: absolute;
            bottom: 4px;
            left: 50%;
            transform: translateX(-50%);
            width: 6px;
            height: 6px;
            background-color: #6366f1;
            border-radius: 50%;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="min-h-screen flex">
        @include('staff.sidebar', ['active' => 'calendar'])

        <!-- Main Content -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow">
                <div class="flex items-center justify-between px-4 py-4 h-16">
                    <div class="flex items-center space-x-4">
                        <h1 class="text-xl font-semibold text-gray-900">Calendar</h1>
                        <div class="flex items-center space-x-2">
                            <button class="p-1 hover:bg-gray-100 rounded"><i class="fas fa-chevron-left text-gray-600"></i></button>
                            <span class="text-lg font-medium text-gray-700">December 2024</span>
                            <button class="p-1 hover:bg-gray-100 rounded"><i class="fas fa-chevron-right text-gray-600"></i></button>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="bg-indigo-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-indigo-700">
                            <i class="fas fa-plus mr-2"></i>Add Event
                        </button>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 overflow-y-auto p-4 sm:p-6">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                    <!-- Calendar -->
                    <div class="lg:col-span-3 bg-white rounded-lg shadow">
                        <!-- Calendar Header -->
                        <div class="px-6 py-4 border-b border-gray-200">
                            <div class="grid grid-cols-7 gap-4 text-center">
                                <div class="text-sm font-medium text-gray-500">Sun</div>
                                <div class="text-sm font-medium text-gray-500">Mon</div>
                                <div class="text-sm font-medium text-gray-500">Tue</div>
                                <div class="text-sm font-medium text-gray-500">Wed</div>
                                <div class="text-sm font-medium text-gray-500">Thu</div>
                                <div class="text-sm font-medium text-gray-500">Fri</div>
                                <div class="text-sm font-medium text-gray-500">Sat</div>
                            </div>
                        </div>
                        
                        <!-- Calendar Grid -->
                        <div class="p-4">
                            <div class="grid grid-cols-7 gap-2">
                                <!-- Previous month days -->
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day text-gray-400">29</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day text-gray-400">30</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day text-gray-400">1</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day text-gray-400">2</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day text-gray-400">3</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day text-gray-400">4</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day text-gray-400">5</div>
                                
                                <!-- Current month -->
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day has-event">6</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day has-event">7</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day">8</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day">9</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day">10</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day has-event">11</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day">12</div>
                                
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day">13</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day">14</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day">15</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day">16</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day">17</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day has-event">18</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day">19</div>
                                
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day">20</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day">21</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day">22</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day">23</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day">24</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day">25</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day">26</div>
                                
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day">27</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day has-event bg-indigo-50 border-indigo-200">28</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day has-event bg-indigo-50 border-indigo-200">29</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day has-event bg-indigo-50 border-indigo-200">30</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day has-event bg-indigo-50 border-indigo-200">31</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day text-gray-400">1</div>
                                <div class="h-24 p-2 border border-gray-100 rounded-lg calendar-day text-gray-400">2</div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="space-y-6">
                        <!-- Today's Events -->
                        <div class="bg-white rounded-lg shadow p-4">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Today's Events</h3>
                            <div class="space-y-3">
                                <div class="flex items-start p-3 bg-green-50 rounded-lg">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-sign-in-alt text-green-600 mt-1"></i>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">Check-in: John Smith</p>
                                        <p class="text-xs text-gray-500">Room 201 • 9:00 AM</p>
                                    </div>
                                </div>
                                <div class="flex items-start p-3 bg-blue-50 rounded-lg">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-user-plus text-blue-600 mt-1"></i>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">Check-in: Sarah Johnson</p>
                                        <p class="text-xs text-gray-500">Suite 301 • 2:00 PM</p>
                                    </div>
                                </div>
                                <div class="flex items-start p-3 bg-yellow-50 rounded-lg">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-sign-out-alt text-yellow-600 mt-1"></i>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">Check-out: Mike Wilson</p>
                                        <p class="text-xs text-gray-500">Room 105 • 11:00 AM</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Upcoming Events -->
                        <div class="bg-white rounded-lg shadow p-4">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Upcoming Events</h3>
                            <div class="space-y-3">
                                <div class="flex items-center p-3 border border-gray-200 rounded-lg">
                                    <div class="flex-shrink-0 w-10 text-center">
                                        <div class="text-xs font-medium text-indigo-600">Dec</div>
                                        <div class="text-lg font-bold text-gray-900">29</div>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">New Year Eve Party</p>
                                        <p class="text-xs text-gray-500">Ballroom • 8:00 PM</p>
                                    </div>
                                </div>
                                <div class="flex items-center p-3 border border-gray-200 rounded-lg">
                                    <div class="flex-shrink-0 w-10 text-center">
                                        <div class="text-xs font-medium text-indigo-600">Dec</div>
                                        <div class="text-lg font-bold text-gray-900">31</div>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">VIP Gala Dinner</p>
                                        <p class="text-xs text-gray-500">Rooftop • 7:00 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Legend -->
                        <div class="bg-white rounded-lg shadow p-4">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Legend</h3>
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <span class="w-3 h-3 bg-green-500 rounded-full mr-2"></span>
                                    <span class="text-sm text-gray-600">Check-in</span>
                                </div>
                                <div class="flex items-center">
                                    <span class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></span>
                                    <span class="text-sm text-gray-600">Check-out</span>
                                </div>
                                <div class="flex items-center">
                                    <span class="w-3 h-3 bg-indigo-500 rounded-full mr-2"></span>
                                    <span class="text-sm text-gray-600">Events</span>
                                </div>
                                <div class="flex items-center">
                                    <span class="w-3 h-3 bg-purple-500 rounded-full mr-2"></span>
                                    <span class="text-sm text-gray-600">Maintenance</span>
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


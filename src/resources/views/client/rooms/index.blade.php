<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms & Services - BookEasy</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans antialiased">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="hidden md:flex md:w-64 md:flex-col">
            <div class="flex flex-col flex-grow pt-5 overflow-y-auto bg-white border-r border-gray-200">
                <!-- Logo -->
                <div class="flex items-center flex-shrink-0 px-4">
                    <i class="fas fa-calendar-check text-blue-600 text-2xl mr-3"></i>
                    <h1 class="text-xl font-bold text-gray-900">BookEasy</h1>
                </div>
                
                <!-- Navigation -->
                <div class="mt-8 flex-grow flex flex-col">
                    <nav class="flex-1 px-2 space-y-1">
                        <a href="/dashboard" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            <i class="fas fa-tachometer-alt text-gray-400 mr-3"></i>
                            Dashboard
                        </a>
                        <a href="/bookings" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            <i class="fas fa-calendar-alt text-gray-400 mr-3"></i>
                            Bookings
                        </a>
                        <a href="/rooms" class="bg-blue-50 border-r-4 border-blue-600 text-blue-700 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            <i class="fas fa-bed text-blue-500 mr-3"></i>
                            Rooms & Services
                        </a>
                        <a href="/customers" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            <i class="fas fa-users text-gray-400 mr-3"></i>
                            Customers
                        </a>
                        <a href="/calendar" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            <i class="fas fa-calendar text-gray-400 mr-3"></i>
                            Calendar
                        </a>
                        <a href="/reports" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            <i class="fas fa-chart-bar text-gray-400 mr-3"></i>
                            Reports
                        </a>
                        <a href="/settings" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                            <i class="fas fa-cog text-gray-400 mr-3"></i>
                            Settings
                        </a>
                    </nav>
                </div>
            </div>
        </div>

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
                                <input id="search-field" class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-0 focus:border-transparent" placeholder="Search rooms..." type="search">
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
                                <h1 class="text-2xl font-semibold text-gray-900">Rooms & Services</h1>
                                <p class="mt-1 text-sm text-gray-500">Manage your rooms and services</p>
                            </div>
                            <div class="flex space-x-3">
                                <button class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    <i class="fas fa-plus mr-2"></i>
                                    Add Room
                                </button>
                                <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    <i class="fas fa-plus mr-2"></i>
                                    Add Service
                                </button>
                            </div>
                        </div>

                        <!-- Room Stats -->
                        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4 mb-8">
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-bed text-blue-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Total Rooms</dt>
                                                <dd class="text-lg font-medium text-gray-900">50</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-check-circle text-green-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Available</dt>
                                                <dd class="text-lg font-medium text-gray-900">23</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-user-check text-purple-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Occupied</dt>
                                                <dd class="text-lg font-medium text-gray-900">25</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-tools text-orange-600 text-2xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Maintenance</dt>
                                                <dd class="text-lg font-medium text-gray-900">2</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tabs -->
                        <div class="mb-6 border-b border-gray-200">
                            <nav class="-mb-px flex space-x-8">
                                <button class="border-blue-500 text-blue-600 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                    Rooms
                                </button>
                                <button class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                    Services
                                </button>
                            </nav>
                        </div>

                        <!-- Rooms Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <!-- Room Card 1 -->
                            <div class="bg-white shadow rounded-lg overflow-hidden">
                                <div class="relative h-48 bg-gradient-to-br from-blue-500 to-blue-600">
                                    <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?w=400&h=300&fit=crop" alt="Deluxe Room" class="w-full h-full object-cover">
                                    <div class="absolute top-3 right-3">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            Available
                                        </span>
                                    </div>
                                    <div class="absolute bottom-3 left-3">
                                        <span class="text-white font-bold text-xl">$299</span>
                                        <span class="text-white text-sm">/night</span>
                                    </div>
                                </div>
                                <div class="p-5">
                                    <h3 class="text-lg font-semibold text-gray-900">Deluxe Room</h3>
                                    <p class="text-sm text-gray-500 mt-1">Suite 201 • Floor 2</p>
                                    <div class="flex items-center mt-3 space-x-4">
                                        <div class="flex items-center text-gray-500 text-sm">
                                            <i class="fas fa-user-friends mr-1"></i>
                                            <span>2 Guests</span>
                                        </div>
                                        <div class="flex items-center text-gray-500 text-sm">
                                            <i class="fas fa-expand mr-1"></i>
                                            <span>35 m²</span>
                                        </div>
                                        <div class="flex items-center text-gray-500 text-sm">
                                            <i class="fas fa-bed mr-1"></i>
                                            <span>1 King Bed</span>
                                        </div>
                                    </div>
                                    <div class="mt-4 flex space-x-2">
                                        <button class="flex-1 inline-flex justify-center items-center px-3 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                            <i class="fas fa-edit mr-1"></i>
                                            Edit
                                        </button>
                                        <button class="flex-1 inline-flex justify-center items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                                            <i class="fas fa-calendar-plus mr-1"></i>
                                            Book
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Room Card 2 -->
                            <div class="bg-white shadow rounded-lg overflow-hidden">
                                <div class="relative h-48 bg-gradient-to-br from-purple-500 to-purple-600">
                                    <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=400&h=300&fit=crop" alt="Premium Room" class="w-full h-full object-cover">
                                    <div class="absolute top-3 right-3">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                            Occupied
                                        </span>
                                    </div>
                                    <div class="absolute bottom-3 left-3">
                                        <span class="text-white font-bold text-xl">$219</span>
                                        <span class="text-white text-sm">/night</span>
                                    </div>
                                </div>
                                <div class="p-5">
                                    <h3 class="text-lg font-semibold text-gray-900">Premium Room</h3>
                                    <p class="text-sm text-gray-500 mt-1">Room 301 • Floor 3</p>
                                    <div class="flex items-center mt-3 space-x-4">
                                        <div class="flex items-center text-gray-500 text-sm">
                                            <i class="fas fa-user-friends mr-1"></i>
                                            <span>2 Guests</span>
                                        </div>
                                        <div class="flex items-center text-gray-500 text-sm">
                                            <i class="fas fa-expand mr-1"></i>
                                            <span>28 m²</span>
                                        </div>
                                        <div class="flex items-center text-gray-500 text-sm">
                                            <i class="fas fa-bed mr-1"></i>
                                            <span>1 Queen Bed</span>
                                        </div>
                                    </div>
                                    <div class="mt-4 flex space-x-2">
                                        <button class="flex-1 inline-flex justify-center items-center px-3 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                            <i class="fas fa-edit mr-1"></i>
                                            Edit
                                        </button>
                                        <button class="flex-1 inline-flex justify-center items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-gray-400 cursor-not-allowed">
                                            <i class="fas fa-calendar-plus mr-1"></i>
                                            Book
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Room Card 3 -->
                            <div class="bg-white shadow rounded-lg overflow-hidden">
                                <div class="relative h-48 bg-gradient-to-br from-green-500 to-green-600">
                                    <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?w=400&h=300&fit=crop" alt="Executive Suite" class="w-full h-full object-cover">
                                    <div class="absolute top-3 right-3">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            Available
                                        </span>
                                    </div>
                                    <div class="absolute bottom-3 left-3">
                                        <span class="text-white font-bold text-xl">$499</span>
                                        <span class="text-white text-sm">/night</span>
                                    </div>
                                </div>
                                <div class="p-5">
                                    <h3 class="text-lg font-semibold text-gray-900">Executive Suite</h3>
                                    <p class="text-sm text-gray-500 mt-1">Suite 501 • Floor 5</p>
                                    <div class="flex items-center mt-3 space-x-4">
                                        <div class="flex items-center text-gray-500 text-sm">
                                            <i class="fas fa-user-friends mr-1"></i>
                                            <span>4 Guests</span>
                                        </div>
                                        <div class="flex items-center text-gray-500 text-sm">
                                            <i class="fas fa-expand mr-1"></i>
                                            <span>65 m²</span>
                                        </div>
                                        <div class="flex items-center text-gray-500 text-sm">
                                            <i class="fas fa-bed mr-1"></i>
                                            <span>2 King Beds</span>
                                        </div>
                                    </div>
                                    <div class="mt-4 flex space-x-2">
                                        <button class="flex-1 inline-flex justify-center items-center px-3 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                            <i class="fas fa-edit mr-1"></i>
                                            Edit
                                        </button>
                                        <button class="flex-1 inline-flex justify-center items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                                            <i class="fas fa-calendar-plus mr-1"></i>
                                            Book
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Room Card 4 -->
                            <div class="bg-white shadow rounded-lg overflow-hidden">
                                <div class="relative h-48 bg-gradient-to-br from-orange-500 to-orange-600">
                                    <img src="https://images.unsplash.com/photo-1596394516093-501ba68a0ba6?w=400&h=300&fit=crop" alt="Standard Room" class="w-full h-full object-cover">
                                    <div class="absolute top-3 right-3">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                            Maintenance
                                        </span>
                                    </div>
                                    <div class="absolute bottom-3 left-3">
                                        <span class="text-white font-bold text-xl">$159</span>
                                        <span class="text-white text-sm">/night</span>
                                    </div>
                                </div>
                                <div class="p-5">
                                    <h3 class="text-lg font-semibold text-gray-900">Standard Room</h3>
                                    <p class="text-sm text-gray-500 mt-1">Room 105 • Floor 1</p>
                                    <div class="flex items-center mt-3 space-x-4">
                                        <div class="flex items-center text-gray-500 text-sm">
                                            <i class="fas fa-user-friends mr-1"></i>
                                            <span>2 Guests</span>
                                        </div>
                                        <div class="flex items-center text-gray-500 text-sm">
                                            <i class="fas fa-expand mr-1"></i>
                                            <span>22 m²</span>
                                        </div>
                                        <div class="flex items-center text-gray-500 text-sm">
                                            <i class="fas fa-bed mr-1"></i>
                                            <span>1 Double Bed</span>
                                        </div>
                                    </div>
                                    <div class="mt-4 flex space-x-2">
                                        <button class="flex-1 inline-flex justify-center items-center px-3 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                            <i class="fas fa-edit mr-1"></i>
                                            Edit
                                        </button>
                                        <button class="flex-1 inline-flex justify-center items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-gray-400 cursor-not-allowed">
                                            <i class="fas fa-calendar-plus mr-1"></i>
                                            Book
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Services Section -->
                        <div class="mt-12">
                            <h2 class="text-xl font-semibold text-gray-900 mb-6">Additional Services</h2>
                            <div class="bg-white shadow rounded-lg overflow-hidden">
                                <table class="min-w-full divide-y divide-gray-300">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Service</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Duration</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                                                        <i class="fas fa-spa text-blue-600"></i>
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">Spa & Massage</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">Full body massage and spa treatments</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$80 - $150</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">30-90 min</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <button class="text-blue-600 hover:text-blue-900 mr-2"><i class="fas fa-edit"></i></button>
                                                <button class="text-gray-600 hover:text-gray-900"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-green-100 flex items-center justify-center">
                                                        <i class="fas fa-utensils text-green-600"></i>
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">Room Service</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">24/7 in-room dining service</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$15 - $50</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">On demand</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <button class="text-blue-600 hover:text-blue-900 mr-2"><i class="fas fa-edit"></i></button>
                                                <button class="text-gray-600 hover:text-gray-900"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-purple-100 flex items-center justify-center">
                                                        <i class="fas fa-dumbbell text-purple-600"></i>
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">Gym Access</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">Access to fitness center and equipment</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Free</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">24 hours</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <button class="text-blue-600 hover:text-blue-900 mr-2"><i class="fas fa-edit"></i></button>
                                                <button class="text-gray-600 hover:text-gray-900"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-orange-100 flex items-center justify-center">
                                                        <i class="fas fa-swimming-pool text-orange-600"></i>
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">Pool Access</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">Access to rooftop pool and lounge area</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$25/day</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">6 AM - 10 PM</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Seasonal</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <button class="text-blue-600 hover:text-blue-900 mr-2"><i class="fas fa-edit"></i></button>
                                                <button class="text-gray-600 hover:text-gray-900"><i class="fas fa-trash"></i></button>
                                            </td>
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

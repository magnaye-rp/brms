<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - BookEasy</title>
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
                                <input id="search-field" class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-0 focus:border-transparent" placeholder="Search settings..." type="search">
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
                        <div class="mb-8">
                            <h1 class="text-2xl font-semibold text-gray-900">Settings</h1>
                            <p class="mt-1 text-sm text-gray-500">Manage your account and system preferences</p>
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                            <!-- Settings Navigation -->
                            <div class="lg:col-span-1">
                                <nav class="space-y-1">
                                    <a href="#" class="bg-blue-50 text-blue-700 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                        <i class="fas fa-user text-blue-500 mr-3"></i>
                                        Profile
                                    </a>
                                    <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                        <i class="fas fa-building text-gray-400 mr-3"></i>
                                        Property
                                    </a>
                                    <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                        <i class="fas fa-bed text-gray-400 mr-3"></i>
                                        Rooms
                                    </a>
                                    <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                        <i class="fas fa-bell text-gray-400 mr-3"></i>
                                        Notifications
                                    </a>
                                    <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                        <i class="fas fa-credit-card text-gray-400 mr-3"></i>
                                        Payments
                                    </a>
                                    <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                        <i class="fas fa-shield-alt text-gray-400 mr-3"></i>
                                        Security
                                    </a>
                                    <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                        <i class="fas fa-link text-gray-400 mr-3"></i>
                                        Integrations
                                    </a>
                                </nav>
                            </div>

                            <!-- Settings Content -->
                            <div class="lg:col-span-3 space-y-6">
                                <!-- Profile Settings -->
                                <div class="bg-white shadow rounded-lg">
                                    <div class="px-6 py-4 border-b border-gray-200">
                                        <h3 class="text-lg font-medium text-gray-900">Profile Settings</h3>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex items-center mb-6">
                                            <div class="flex-shrink-0">
                                                <img class="h-20 w-20 rounded-full" src="https://ui-avatars.com/api/?name=John+Doe&background=3b82f6&color=fff" alt="Profile picture">
                                            </div>
                                            <div class="ml-4">
                                                <button class="inline-flex items-center px-3 py-1.5 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                                    <i class="fas fa-upload mr-1"></i>
                                                    Change Photo
                                                </button>
                                                <p class="mt-1 text-xs text-gray-500">JPG, PNG or GIF. Max 2MB</p>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                                                <input type="text" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" value="John">
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                                                <input type="text" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" value="Doe">
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                                <input type="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" value="john.doe@bookeasy.com">
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                                                <input type="tel" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" value="+1 234-567-8900">
                                            </div>
                                            <div class="md:col-span-2">
                                                <label class="block text-sm font-medium text-gray-700 mb-1">Role</label>
                                                <select class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                                    <option>Administrator</option>
                                                    <option>Manager</option>
                                                    <option>Staff</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mt-6 flex justify-end">
                                            <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                                Save Changes
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Property Information -->
                                <div class="bg-white shadow rounded-lg">
                                    <div class="px-6 py-4 border-b border-gray-200">
                                        <h3 class="text-lg font-medium text-gray-900">Property Information</h3>
                                    </div>
                                    <div class="p-6">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                            <div class="md:col-span-2">
                                                <label class="block text-sm font-medium text-gray-700 mb-1">Property Name</label>
                                                <input type="text" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" value="BookEasy Hotel & Resort">
                                            </div>
                                            <div class="md:col-span-2">
                                                <label class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                                                <input type="text" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:500" value="123 Business Avenue">
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-1">City</label>
                                                <input type="text" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" value="New York">
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-1">State/Province</label>
                                                <input type="text" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" value="NY">
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-1">Zip Code</label>
                                                <input type="text" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" value="10001">
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-1">Country</label>
                                                <select class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                                    <option>United States</option>
                                                    <option>Canada</option>
                                                    <option>United Kingdom</option>
                                                    <option>Australia</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-1">Check-in Time</label>
                                                <input type="time" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" value="15:00">
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-1">Check-out Time</label>
                                                <input type="time" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" value="11:00">
                                            </div>
                                        </div>
                                        <div class="mt-6 flex justify-end">
                                            <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                                Save Changes
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Notification Preferences -->
                                <div class="bg-white shadow rounded-lg">
                                    <div class="px-6 py-4 border-b border-gray-200">
                                        <h3 class="text-lg font-medium text-gray-900">Notification Preferences</h3>
                                    </div>
                                    <div class="p-6">
                                        <div class="space-y-4">
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <p class="text-sm font-medium text-gray-900">Email Notifications</p>
                                                    <p class="text-sm text-gray-500">Receive email updates for new bookings</p>
                                                </div>
                                                <label class="relative inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" checked class="sr-only peer">
                                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                                </label>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <p class="text-sm font-medium text-gray-900">SMS Notifications</p>
                                                    <p class="text-sm text-gray-500">Receive SMS alerts for urgent updates</p>
                                                </div>
                                                <label class="relative inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" class="sr-only peer">
                                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                                </label>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <p class="text-sm font-medium text-gray-900">Daily Summary</p>
                                                    <p class="text-sm text-gray-500">Get a daily report of bookings and revenue</p>
                                                </div>
                                                <label class="relative inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" checked class="sr-only peer">
                                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                                </label>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <p class="text-sm font-medium text-gray-900">Low Room Availability Alert</p>
                                                    <p class="text-sm text-gray-500">Notify when occupancy reaches 90%</p>
                                                </div>
                                                <label class="relative inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" checked class="sr-only peer">
                                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mt-6 flex justify-end">
                                            <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                                Save Preferences
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Security Settings -->
                                <div class="bg-white shadow rounded-lg">
                                    <div class="px-6 py-4 border-b border-gray-200">
                                        <h3 class="text-lg font-medium text-gray-900">Security</h3>
                                    </div>
                                    <div class="p-6">
                                        <div class="space-y-6">
                                            <div>
                                                <h4 class="text-sm font-medium text-gray-900 mb-4">Change Password</h4>
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                    <div class="md:col-span-2">
                                                        <label class="block text-sm font-medium text-gray-700 mb-1">Current Password</label>
                                                        <input type="password" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                                    </div>
                                                    <div>
                                                        <label class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                                                        <input type="password" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                                    </div>
                                                    <div>
                                                        <label class="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
                                                        <input type="password" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-6 border-t border-gray-200">
                                                <h4 class="text-sm font-medium text-gray-900 mb-4">Two-Factor Authentication</h4>
                                                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                                                    <div class="flex items-center">
                                                        <i class="fas fa-shield-alt text-green-600 text-xl mr-3"></i>
                                                        <div>
                                                            <p class="text-sm font-medium text-gray-900">Two-factor authentication is enabled</p>
                                                            <p class="text-sm text-gray-500">Add an extra layer of security to your account</p>
                                                        </div>
                                                    </div>
                                                    <button class="text-sm text-blue-600 hover:text-blue-500 font-medium">Manage</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-6 flex justify-end">
                                            <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                                Update Password
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Danger Zone -->
                                <div class="bg-white shadow rounded-lg border border-red-200">
                                    <div class="px-6 py-4 border-b border-red-200 bg-red-50">
                                        <h3 class="text-lg font-medium text-red-800">Danger Zone</h3>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <p class="text-sm font-medium text-gray-900">Delete Account</p>
                                                <p class="text-sm text-gray-500">Permanently delete your account and all associated data</p>
                                            </div>
                                            <button class="inline-flex items-center px-4 py-2 border border-red-300 text-sm font-medium rounded-md text-red-700 bg-white hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                                <i class="fas fa-trash mr-2"></i>
                                                Delete Account
                                            </button>
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

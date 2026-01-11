<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings - Staff</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <div class="min-h-screen flex">
        @include('staff.sidebar', ['active' => 'bookings'])

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-900">Bookings</h1>
                <button class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                    <i class="fas fa-plus mr-2"></i>New Booking
                </button>
            </div>

            <!-- Filters -->
            <div class="bg-white rounded-lg shadow p-4 mb-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <input type="text" placeholder="Search..." class="border rounded px-3 py-2">
                    <select class="border rounded px-3 py-2">
                        <option>All Status</option>
                        <option>Confirmed</option>
                        <option>Pending</option>
                        <option>Checked-in</option>
                    </select>
                    <input type="date" class="border rounded px-3 py-2">
                    <button class="bg-gray-200 px-4 py-2 rounded hover:bg-gray-300">Filter</button>
                </div>
            </div>

            <!-- Bookings Table -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr class="text-left text-sm text-gray-500">
                            <th class="px-6 py-3">Booking ID</th>
                            <th class="px-6 py-3">Guest</th>
                            <th class="px-6 py-3">Room</th>
                            <th class="px-6 py-3">Check-in</th>
                            <th class="px-6 py-3">Status</th>
                            <th class="px-6 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900">#BK-001</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <img class="h-8 w-8 rounded-full mr-2" src="https://ui-avatars.com/api/?name=John+Smith&background=6366f1&color=fff">
                                    <span class="text-sm text-gray-900">John Smith</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">Room 201</td>
                            <td class="px-6 py-4 text-sm text-gray-900">Dec 28, 2024</td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Checked-in</span></td>
                            <td class="px-6 py-4">
                                <button class="text-indigo-600 hover:text-indigo-900 mr-2"><i class="fas fa-edit"></i></button>
                                <button class="text-gray-600 hover:text-gray-900"><i class="fas fa-eye"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900">#BK-002</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <img class="h-8 w-8 rounded-full mr-2" src="https://ui-avatars.com/api/?name=Sarah+Johnson&background=6366f1&color=fff">
                                    <span class="text-sm text-gray-900">Sarah Johnson</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">Suite 301</td>
                            <td class="px-6 py-4 text-sm text-gray-900">Dec 29, 2024</td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">Confirmed</span></td>
                            <td class="px-6 py-4">
                                <button class="text-indigo-600 hover:text-indigo-900 mr-2"><i class="fas fa-edit"></i></button>
                                <button class="text-gray-600 hover:text-gray-900"><i class="fas fa-eye"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>


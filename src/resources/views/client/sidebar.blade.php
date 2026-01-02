<!-- Sidebar -->
<div class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-gray-200 transform transition-transform duration-300 ease-in-out md:translate-x-0 md:static md:inset-0">
    <div class="flex flex-col h-full pt-5 overflow-y-auto">
        <!-- Logo -->
        <div class="flex items-center flex-shrink-0 px-4">
            <i class="fas fa-calendar-check text-blue-600 text-2xl mr-3"></i>
            <h1 class="text-xl font-bold text-gray-900">BookEasy</h1>
        </div>

        <!-- Navigation -->
        <div class="mt-8 flex-grow flex flex-col">
            <nav class="flex-1 px-2 space-y-1">
                <a href="{{ route('dashboard') }}" class="{{ ($active ?? '') === 'dashboard' ? 'bg-blue-50 border-r-4 border-blue-600 text-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200">
                    <i class="fas fa-tachometer-alt {{ ($active ?? '') === 'dashboard' ? 'text-blue-500' : 'text-gray-400' }} mr-3"></i>
                    Dashboard
                </a>
                <a href="{{ route('bookings') }}" class="{{ ($active ?? '') === 'bookings' ? 'bg-blue-50 border-r-4 border-blue-600 text-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200">
                    <i class="fas fa-calendar-alt {{ ($active ?? '') === 'bookings' ? 'text-blue-500' : 'text-gray-400' }} mr-3"></i>
                    Bookings
                </a>
                <a href="{{ route('rooms') }}" class="{{ ($active ?? '') === 'rooms' ? 'bg-blue-50 border-r-4 border-blue-600 text-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200">
                    <i class="fas fa-bed {{ ($active ?? '') === 'rooms' ? 'text-blue-500' : 'text-gray-400' }} mr-3"></i>
                    Rooms & Services
                </a>
                <a href="{{ route('customers') }}" class="{{ ($active ?? '') === 'customers' ? 'bg-blue-50 border-r-4 border-blue-600 text-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200">
                    <i class="fas fa-users {{ ($active ?? '') === 'customers' ? 'text-blue-500' : 'text-gray-400' }} mr-3"></i>
                    Customers
                </a>
                <a href="{{ route('calendar') }}" class="{{ ($active ?? '') === 'calendar' ? 'bg-blue-50 border-r-4 border-blue-600 text-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200">
                    <i class="fas fa-calendar {{ ($active ?? '') === 'calendar' ? 'text-blue-500' : 'text-gray-400' }} mr-3"></i>
                    Calendar
                </a>
                <a href="{{ route('reports') }}" class="{{ ($active ?? '') === 'reports' ? 'bg-blue-50 border-r-4 border-blue-600 text-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200">
                    <i class="fas fa-chart-bar {{ ($active ?? '') === 'reports' ? 'text-blue-500' : 'text-gray-400' }} mr-3"></i>
                    Reports
                </a>
                <a href="{{ route('settings') }}" class="{{ ($active ?? '') === 'settings' ? 'bg-blue-50 border-r-4 border-blue-600 text-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200">
                    <i class="fas fa-cog {{ ($active ?? '') === 'settings' ? 'text-blue-500' : 'text-gray-400' }} mr-3"></i>
                    Settings
                </a>
            </nav>
        </div>
    </div>
</div>

<!-- Mobile overlay -->
<div class="fixed inset-0 z-40 bg-gray-600 bg-opacity-75 md:hidden" style="display: none;"></div>


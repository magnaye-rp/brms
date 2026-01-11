<!-- Staff Sidebar -->
<div class="fixed inset-y-0 left-0 z-50 w-64 bg-indigo-900 border-r border-indigo-800 transform transition-transform duration-300 ease-in-out md:translate-x-0 md:static md:inset-0">
    <div class="flex flex-col h-full pt-5 overflow-y-auto">
        <!-- Logo -->
        <div class="flex items-center flex-shrink-0 px-4">
            <i class="fas fa-concierge-bell text-indigo-400 text-2xl mr-3"></i>
            <h1 class="text-xl font-bold text-white">Staff Panel</h1>
        </div>

        <!-- Navigation -->
        <div class="mt-8 flex-grow flex flex-col">
            <nav class="flex-1 px-2 space-y-1">
                <a href="{{ route('staff.dashboard') }}" class="{{ ($active ?? '') === 'dashboard' ? 'bg-indigo-800 border-r-4 border-indigo-400 text-white' : 'text-indigo-200 hover:bg-indigo-800 hover:text-white' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200">
                    <i class="fas fa-home {{ ($active ?? '') === 'dashboard' ? 'text-indigo-400' : 'text-indigo-400' }} mr-3"></i>
                    Dashboard
                </a>
                <a href="{{ route('staff.bookings') }}" class="{{ ($active ?? '') === 'bookings' ? 'bg-indigo-800 border-r-4 border-indigo-400 text-white' : 'text-indigo-200 hover:bg-indigo-800 hover:text-white' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200">
                    <i class="fas fa-calendar-alt {{ ($active ?? '') === 'bookings' ? 'text-indigo-400' : 'text-indigo-400' }} mr-3"></i>
                    Bookings
                </a>
                <a href="{{ route('staff.rooms') }}" class="{{ ($active ?? '') === 'rooms' ? 'bg-indigo-800 border-r-4 border-indigo-400 text-white' : 'text-indigo-200 hover:bg-indigo-800 hover:text-white' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200">
                    <i class="fas fa-bed {{ ($active ?? '') === 'rooms' ? 'text-indigo-400' : 'text-indigo-400' }} mr-3"></i>
                    Rooms
                </a>
            </nav>
        </div>

        <!-- Staff Info -->
        <div class="p-4 border-t border-indigo-800">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=Staff&background=6366f1&color=fff" alt="Staff avatar">
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-white">Staff Member</p>
                    <p class="text-xs text-indigo-300">Front Desk</p>
                </div>
            </div>
            <div class="mt-3">
                <a href="{{ route('logout') }}" class="text-sm text-indigo-300 hover:text-white flex items-center">
                    <i class="fas fa-sign-out-alt mr-2"></i>
                    Sign out
                </a>
            </div>
        </div>
    </div>
</div>


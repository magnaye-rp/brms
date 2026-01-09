<!-- Admin Sidebar -->
<div class="fixed inset-y-0 left-0 z-50 w-64 bg-gray-900 border-r border-gray-800 transform transition-transform duration-300 ease-in-out md:translate-x-0 md:static md:inset-0">
    <div class="flex flex-col h-full pt-5 overflow-y-auto">
        <!-- Logo -->
        <div class="flex items-center flex-shrink-0 px-4">
            <i class="fas fa-shield-alt text-green-500 text-2xl mr-3"></i>
            <h1 class="text-xl font-bold text-white">BookEasy Admin</h1>
        </div>

        <!-- Navigation -->
        <div class="mt-8 flex-grow flex flex-col">
            <nav class="flex-1 px-2 space-y-1">
                <a href="{{ route('admin.dashboard') }}" class="{{ ($active ?? '') === 'dashboard' ? 'bg-gray-800 border-r-4 border-green-500 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200">
                    <i class="fas fa-tachometer-alt {{ ($active ?? '') === 'dashboard' ? 'text-green-500' : 'text-gray-400' }} mr-3"></i>
                    Dashboard
                </a>
                <a href="{{ route('admin.admins') }}" class="{{ ($active ?? '') === 'admins' ? 'bg-gray-800 border-r-4 border-green-500 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200">
                    <i class="fas fa-user-shield {{ ($active ?? '') === 'admins' ? 'text-green-500' : 'text-gray-400' }} mr-3"></i>
                    Admins
                </a>
                <a href="{{ route('admin.users') }}" class="{{ ($active ?? '') === 'users' ? 'bg-gray-800 border-r-4 border-green-500 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200">
                    <i class="fas fa-users {{ ($active ?? '') === 'users' ? 'text-green-500' : 'text-gray-400' }} mr-3"></i>
                    Users
                </a>
                <a href="{{ route('admin.reports') }}" class="{{ ($active ?? '') === 'reports' ? 'bg-gray-800 border-r-4 border-green-500 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200">
                    <i class="fas fa-chart-bar {{ ($active ?? '') === 'reports' ? 'text-green-500' : 'text-gray-400' }} mr-3"></i>
                    Reports
                </a>
                <a href="{{ route('admin.logs') }}" class="{{ ($active ?? '') === 'logs' ? 'bg-gray-800 border-r-4 border-green-500 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200">
                    <i class="fas fa-clipboard-list {{ ($active ?? '') === 'logs' ? 'text-green-500' : 'text-gray-400' }} mr-3"></i>
                    Audit Logs
                </a>
                <a href="{{ route('admin.settings') }}" class="{{ ($active ?? '') === 'settings' ? 'bg-gray-800 border-r-4 border-green-500 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200">
                    <i class="fas fa-cog {{ ($active ?? '') === 'settings' ? 'text-green-500' : 'text-gray-400' }} mr-3"></i>
                    Settings
                </a>
            </nav>
        </div>

        <!-- Admin Info -->
        <div class="p-4 border-t border-gray-800">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=Admin+User&background=10b981&color=fff" alt="Admin avatar">
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-white">Admin User</p>
                    <p class="text-xs text-gray-400">Super Administrator</p>
                </div>
            </div>
            <div class="mt-3">
                <a href="{{ route('logout') }}" class="text-sm text-gray-400 hover:text-white flex items-center">
                    <i class="fas fa-sign-out-alt mr-2"></i>
                    Sign out
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Mobile overlay -->
<div class="fixed inset-0 z-40 bg-gray-600 bg-opacity-75 md:hidden" style="display: none;"></div>


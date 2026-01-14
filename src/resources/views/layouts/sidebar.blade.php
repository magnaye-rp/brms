{{-- 
    Sidebar Layout Partial
    Usage: @include('layouts.sidebar', ['navItems' => [...], 'user' => [...]])
--}}
<div class="fixed inset-y-0 left-0 z-50 w-64 {{ $bgClass ?? 'bg-white' }} border-r {{ $borderClass ?? 'border-gray-200' }} transform transition-transform duration-300 ease-in-out md:translate-x-0 md:static md:inset-0">
    <div class="flex flex-col h-full pt-5 overflow-y-auto">
        <!-- Logo -->
        <div class="flex items-center flex-shrink-0 px-4">
            <i class="{{ $iconClass ?? 'fas fa-calendar-check' }} {{ $iconColorClass ?? 'text-blue-600' }} text-2xl mr-3"></i>
            <h1 class="text-xl font-bold {{ $textClass ?? 'text-gray-900' }}">{{ $title ?? 'BRMS' }}</h1>
        </div>

        <!-- Navigation -->
        <div class="mt-8 flex-grow flex flex-col">
            <nav class="flex-1 px-2 space-y-1">
                @foreach($navItems as $item)
                <a href="{{ $item['route'] }}" 
                   class="{{ ($active ?? '') === $item['active'] 
                       ? $item['activeClass'] ?? 'bg-blue-50 border-r-4 border-blue-600 text-blue-700' 
                       : $item['inactiveClass'] ?? 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }} 
                       group flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200">
                    <i class="{{ $item['icon'] }} {{ ($active ?? '') === $item['active'] ? ($item['iconActiveClass'] ?? 'text-blue-500') : ($item['iconInactiveClass'] ?? 'text-gray-400') }} mr-3"></i>
                    {{ $item['label'] }}
                </a>
                @endforeach
            </nav>
        </div>

        <!-- User Info -->
        @if(isset($user))
        <div class="p-4 border-t {{ $userBorderClass ?? 'border-gray-200' }}">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="{{ $user['avatar'] ?? 'https://ui-avatars.com/api/?name=' . urlencode($user['name'] ?? 'User') }}" alt="{{ $user['name'] ?? 'User' }}">
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium {{ $userTextClass ?? 'text-gray-900' }}">{{ $user['name'] ?? 'User' }}</p>
                    <p class="text-xs {{ $userRoleClass ?? 'text-gray-500' }}">{{ $user['role'] ?? '' }}</p>
                </div>
            </div>
            @if(isset($logoutRoute))
            <div class="mt-3">
                <a href="{{ $logoutRoute }}" class="text-sm {{ $logoutTextClass ?? 'text-gray-500 hover:text-gray-900' }} flex items-center">
                    <i class="fas fa-sign-out-alt mr-2"></i>
                    Sign out
                </a>
            </div>
            @endif
        </div>
        @endif
    </div>
</div>

<!-- Mobile overlay -->
<div class="fixed inset-0 z-40 bg-gray-600 bg-opacity-75 md:hidden" style="display: none;"></div>


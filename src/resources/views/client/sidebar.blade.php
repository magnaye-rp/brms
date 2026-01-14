@include('layouts.sidebar', [
    'bgClass' => 'bg-white',
    'borderClass' => 'border-gray-200',
    'iconClass' => 'fas fa-calendar-check',
    'iconColorClass' => 'text-blue-600',
    'textClass' => 'text-gray-900',
    'title' => 'BookEasy',
    'navItems' => [
        ['route' => route('dashboard'), 'active' => 'dashboard', 'icon' => 'fas fa-tachometer-alt', 'label' => 'Dashboard'],
        ['route' => route('bookings'), 'active' => 'bookings', 'icon' => 'fas fa-calendar-alt', 'label' => 'Bookings'],
        ['route' => route('rooms'), 'active' => 'rooms', 'icon' => 'fas fa-bed', 'label' => 'Rooms & Services'],
        ['route' => route('customers'), 'active' => 'customers', 'icon' => 'fas fa-users', 'label' => 'Customers'],
        ['route' => route('calendar'), 'active' => 'calendar', 'icon' => 'fas fa-calendar', 'label' => 'Calendar'],
        ['route' => route('reports'), 'active' => 'reports', 'icon' => 'fas fa-chart-bar', 'label' => 'Reports'],
        ['route' => route('settings'), 'active' => 'settings', 'icon' => 'fas fa-cog', 'label' => 'Settings'],
    ],
    'user' => ['name' => 'Client User', 'role' => 'Customer'],
    'userBorderClass' => 'border-gray-200',
    'userTextClass' => 'text-gray-900',
    'userRoleClass' => 'text-gray-500',
    'logoutRoute' => route('logout'),
    'logoutTextClass' => 'text-gray-500 hover:text-gray-900',
])


@include('layouts.sidebar', [
    'title' => 'BRMS',
    'navItems' => [
        ['route' => route('dashboard'), 'active' => 'dashboard', 'icon' => 'fas fa-home', 'label' => 'Dashboard'],
        ['route' => route('bookings'), 'active' => 'bookings', 'icon' => 'fas fa-calendar', 'label' => 'Bookings'],
        ['route' => route('rooms'), 'active' => 'rooms', 'icon' => 'fas fa-bed', 'label' => 'Rooms'],
        ['route' => route('calendar'), 'active' => 'calendar', 'icon' => 'fas fa-calendar-alt', 'label' => 'Calendar'],
        ['route' => route('reports'), 'active' => 'reports', 'icon' => 'fas fa-chart-bar', 'label' => 'Reports'],
        ['route' => route('settings'), 'active' => 'settings', 'icon' => 'fas fa-cog', 'label' => 'Settings'],
    ],
    'user' => ['name' => 'User'],
])


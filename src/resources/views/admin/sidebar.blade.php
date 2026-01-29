@include('layouts.sidebar', [
    'bgClass' => 'bg-gray-900',
    'borderClass' => 'border-gray-800',
    'iconClass' => 'fas fa-shield-alt',
    'iconColorClass' => 'text-green-500',
    'title' => 'Admin',
    'navItems' => [
        ['route' => route('admin.dashboard'), 'active' => 'dashboard', 'icon' => 'fas fa-home', 'label' => 'Dashboard'],
        ['route' => route('admin.admins'), 'active' => 'admins', 'icon' => 'fas fa-users-cog', 'label' => 'Admins'],
        ['route' => route('admin.users'), 'active' => 'users', 'icon' => 'fas fa-users', 'label' => 'Users'],
        ['route' => route('admin.reports'), 'active' => 'reports', 'icon' => 'fas fa-chart-pie', 'label' => 'Reports'],
        ['route' => route('admin.logs'), 'active' => 'logs', 'icon' => 'fas fa-list', 'label' => 'Logs'],
        ['route' => route('admin.settings'), 'active' => 'settings', 'icon' => 'fas fa-cog', 'label' => 'Settings'],
    ],
    'user' => ['name' => 'Admin', 'role' => 'Administrator'],
])


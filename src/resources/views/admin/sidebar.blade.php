@include('layouts.sidebar', [
    'bgClass' => 'bg-gray-900',
    'borderClass' => 'border-gray-800',
    'iconClass' => 'fas fa-shield-alt',
    'iconColorClass' => 'text-green-500',
    'textClass' => 'text-white',
    'title' => 'BookEasy Admin',
    'active' => $active ?? '',
    'navItems' => [
        ['route' => route('admin.dashboard'), 'active' => 'dashboard', 'icon' => 'fas fa-tachometer-alt', 'activeClass' => 'bg-gray-800 border-r-4 border-green-500 text-white', 'inactiveClass' => 'text-gray-300 hover:bg-gray-800 hover:text-white', 'iconActiveClass' => 'text-green-500', 'iconInactiveClass' => 'text-gray-400', 'label' => 'Dashboard'],
        ['route' => route('admin.admins'), 'active' => 'admins', 'icon' => 'fas fa-user-shield', 'activeClass' => 'bg-gray-800 border-r-4 border-green-500 text-white', 'inactiveClass' => 'text-gray-300 hover:bg-gray-800 hover:text-white', 'iconActiveClass' => 'text-green-500', 'iconInactiveClass' => 'text-gray-400', 'label' => 'Admins'],
        ['route' => route('admin.users'), 'active' => 'users', 'icon' => 'fas fa-users', 'activeClass' => 'bg-gray-800 border-r-4 border-green-500 text-white', 'inactiveClass' => 'text-gray-300 hover:bg-gray-800 hover:text-white', 'iconActiveClass' => 'text-green-500', 'iconInactiveClass' => 'text-gray-400', 'label' => 'Users'],
        ['route' => route('admin.reports'), 'active' => 'reports', 'icon' => 'fas fa-chart-bar', 'activeClass' => 'bg-gray-800 border-r-4 border-green-500 text-white', 'inactiveClass' => 'text-gray-300 hover:bg-gray-800 hover:text-white', 'iconActiveClass' => 'text-green-500', 'iconInactiveClass' => 'text-gray-400', 'label' => 'Reports'],
        ['route' => route('admin.logs'), 'active' => 'logs', 'icon' => 'fas fa-clipboard-list', 'activeClass' => 'bg-gray-800 border-r-4 border-green-500 text-white', 'inactiveClass' => 'text-gray-300 hover:bg-gray-800 hover:text-white', 'iconActiveClass' => 'text-green-500', 'iconInactiveClass' => 'text-gray-400', 'label' => 'Audit Logs'],
        ['route' => route('admin.settings'), 'active' => 'settings', 'icon' => 'fas fa-cog', 'activeClass' => 'bg-gray-800 border-r-4 border-green-500 text-white', 'inactiveClass' => 'text-gray-300 hover:bg-gray-800 hover:text-white', 'iconActiveClass' => 'text-green-500', 'iconInactiveClass' => 'text-gray-400', 'label' => 'Settings'],
    ],
    'user' => ['name' => 'Admin User', 'role' => 'Super Administrator', 'avatar' => 'https://ui-avatars.com/api/?name=Admin+User&background=10b981&color=fff'],
    'userBorderClass' => 'border-gray-800',
    'userTextClass' => 'text-white',
    'userRoleClass' => 'text-gray-400',
    'logoutRoute' => route('logout'),
    'logoutTextClass' => 'text-gray-400 hover:text-white',
])


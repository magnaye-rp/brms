@include('layouts.sidebar', [
    'bgClass' => 'bg-indigo-900',
    'borderClass' => 'border-indigo-800',
    'iconClass' => 'fas fa-concierge-bell',
    'iconColorClass' => 'text-indigo-400',
    'textClass' => 'text-white',
    'title' => 'Staff Panel',
    'active' => $active ?? '',
    'navItems' => [
        ['route' => route('staff.dashboard'), 'active' => 'dashboard', 'icon' => 'fas fa-home', 'activeClass' => 'bg-indigo-800 border-r-4 border-indigo-400 text-white', 'inactiveClass' => 'text-indigo-200 hover:bg-indigo-800 hover:text-white', 'iconActiveClass' => 'text-indigo-400', 'iconInactiveClass' => 'text-indigo-400', 'label' => 'Dashboard'],
        ['route' => route('staff.bookings'), 'active' => 'bookings', 'icon' => 'fas fa-calendar-alt', 'activeClass' => 'bg-indigo-800 border-r-4 border-indigo-400 text-white', 'inactiveClass' => 'text-indigo-200 hover:bg-indigo-800 hover:text-white', 'iconActiveClass' => 'text-indigo-400', 'iconInactiveClass' => 'text-indigo-400', 'label' => 'Bookings'],
        ['route' => route('staff.rooms'), 'active' => 'rooms', 'icon' => 'fas fa-bed', 'activeClass' => 'bg-indigo-800 border-r-4 border-indigo-400 text-white', 'inactiveClass' => 'text-indigo-200 hover:bg-indigo-800 hover:text-white', 'iconActiveClass' => 'text-indigo-400', 'iconInactiveClass' => 'text-indigo-400', 'label' => 'Rooms'],
    ],
    'user' => ['name' => 'Staff Member', 'role' => 'Front Desk', 'avatar' => 'https://ui-avatars.com/api/?name=Staff&background=6366f1&color=fff'],
    'userBorderClass' => 'border-indigo-800',
    'userTextClass' => 'text-white',
    'userRoleClass' => 'text-indigo-300',
    'logoutRoute' => route('logout'),
    'logoutTextClass' => 'text-indigo-300 hover:text-white',
])


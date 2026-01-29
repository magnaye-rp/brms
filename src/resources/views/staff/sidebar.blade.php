@include('layouts.sidebar', [
    'bgClass' => 'bg-indigo-900',
    'borderClass' => 'border-indigo-800',
    'title' => 'Staff',
    'navItems' => [
        ['route' => route('staff.dashboard'), 'active' => 'dashboard', 'icon' => 'fas fa-home', 'label' => 'Dashboard'],
        ['route' => route('staff.bookings'), 'active' => 'bookings', 'icon' => 'fas fa-calendar-check', 'label' => 'Bookings'],
        ['route' => route('staff.rooms'), 'active' => 'rooms', 'icon' => 'fas fa-bed', 'label' => 'Rooms'],
    ],
    'user' => ['name' => 'Staff', 'role' => 'Front Desk'],
])


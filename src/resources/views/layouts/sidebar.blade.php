<div class="sidebar {{ $bgClass ?? 'bg-white' }} {{ $borderClass ?? 'border-gray-200' }}">
    <div class="sidebar-header">
        <i class="{{ $iconClass ?? 'fas fa-calendar-check' }} {{ $iconColorClass ?? 'text-blue-600' }}"></i>
        <span>{{ $title ?? 'BRMS' }}</span>
    </div>
    
    <nav class="sidebar-nav">
        @foreach($navItems as $item)
        <a href="{{ $item['route'] }}" class="nav-item {{ ($active ?? '') === $item['active'] ? 'active' : '' }}">
            <i class="{{ $item['icon'] }}"></i>
            <span>{{ $item['label'] }}</span>
        </a>
        @endforeach
    </nav>
    
    @if(isset($user))
    <div class="sidebar-user">
        <img src="{{ $user['avatar'] ?? 'https://ui-avatars.com/api/?name=' . urlencode($user['name'] ?? 'U') }}" alt="User">
        <div>
            <p>{{ $user['name'] ?? 'User' }}</p>
            <small>{{ $user['role'] ?? '' }}</small>
        </div>
        @if(isset($logoutRoute))
        <a href="{{ $logoutRoute }}" class="logout-btn">
            <i class="fas fa-sign-out-alt"></i>
        </a>
        @endif
    </div>
    @endif
</div>


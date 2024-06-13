<!-- resources/views/partials/navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #000 !important;">
    <div class="container-fluid justify-content-between">
        <a class="navbar-brand" href="#">
            <div class="brand-text" style="display: inline-block; margin-left: 10px; color: #f5f5f5;">
                <img src="img/bestchurch.png" alt="" style="width: 60%;">
            </div>
        </a>
        <div class="navbar-nav mx-auto" style="text-align: center;">
            <ul class="navbar-nav" style="margin-bottom: 10px;">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}" style="margin-right: 20px;">
                    <a class="nav-link" href="/" style="color: #f5f5f5;">Home</a>
                </li>
                <li class="nav-item dropdown {{ Request::is('yess', 'komsel', 'bareng') ? 'active' : '' }}"
                    style="margin-right: 20px;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" style="color: #f5f5f5;">
                        YESS
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="/yess" style="color: #000;">YESS</a></li>
                        <li><a class="dropdown-item" href="/komsel" style="color: #000;">Komsel</a></li>
                        <li><a class="dropdown-item" href="/bareng" style="color: #000;">Bareng</a></li>
                    </ul>
                </li>
                <li class="nav-item {{ Request::is('jadwal') ? 'active' : '' }}" style="margin-right: 20px;">
                    <a class="nav-link" href="/jadwal" style="color: #f5f5f5;">Jadwal</a>
                </li>
                <li class="nav-item {{ Request::is('ladies-devotion') ? 'active' : '' }}" style="margin-right: 20px;">
                    <a class="nav-link" href="/ladies-devotion" style="color: #f5f5f5;">Ladies Devotion</a>
                </li>
                <li class="nav-item {{ Request::is('sunday-school') ? 'active' : '' }}" style="margin-right: 20px;">
                    <a class="nav-link" href="/sunday-school" style="color: #f5f5f5;">Sunday School</a>
                </li>
                <li class="nav-item {{ Request::is('event') ? 'active' : '' }}" style="margin-right: 20px;">
                    <a class="nav-link" href="/event" style="color: #f5f5f5;">Event</a>
                </li>
                <li class="nav-item {{ Request::is('pelayanan') ? 'active' : '' }}" style="margin-right: 20px;">
                    <a class="nav-link" href="/pelayanan" style="color: #f5f5f5;">Pelayanan</a>
                </li>
            </ul>
        </div>
        <div class="navbar-nav" style="text-align: right;">
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item dropdown" style="margin-right: 20px;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="color: #f5f5f5;">
                            Welcome, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/profile" style="color: #000;">Profile</a></li>
                            @if (auth()->user()->is_admin)
                                <li><a class="dropdown-item" href="/admin" style="color: #000;">Admin Dashboard</a></li>
                            @endif
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item" style="color: #000;">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link login-link-border" href="/login"
                            style="color: #f5f5f5; border: 1px solid #fff; border-radius: 5px; padding: 8px 20px;">Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

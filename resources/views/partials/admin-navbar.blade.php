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
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}" href="/admin">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('event-admin') ? 'active' : '' }}" href="/event-admin">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('penjadwalan-admin') ? 'active' : '' }}" href="/penjadwalan-admin">Penjadwalan</a>
                </li>
                <li class="nav-item dropdown {{ Request::is('list-jemaat', 'list-pendeta') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Database
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                            <a class="nav-link" href="/list-pendeta">List Pendeta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/list-jemaat">List Jemaat</a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('penjadwalan-admin*') ? 'active' : '' }}" href="#" id="penjadwalanDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Penjadwalan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="penjadwalanDropdown">
                        <li><a class="dropdown-item" href="/penjadwalan-admin">Penjadwalan</a></li>
                        <li><a class="dropdown-item" href="/penjadwalan-umum-admin">Umum</a></li>
                        <li><a class="dropdown-item" href="/penjadwalan-yess-admin">YESS</a></li>
                        <li><a class="dropdown-item" href="/penjadwalan-night-admin">Worship Night</a></li>
                    </ul>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('komsel-admin') ? 'active' : '' }}" href="/komsel-admin">KomSel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('bareng-admin') ? 'active' : '' }}" href="/bareng-admin">Bareng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('daftar-pelayanan-admin') ? 'active' : '' }}" href="/daftar-pelayanan-admin">Daftar Pelayanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('analisis-admin') ? 'active' : '' }}" href="/analisis-admin">Analisis</a>
                </li>
            </ul>
        </div>
        <div class="navbar-nav" style="text-align: right;">
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item dropdown" style="margin-right: 20px;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #f5f5f5;">
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
                        <a class="nav-link login-link-border" href="/login" style="color: #f5f5f5; border: 1px solid #fff; border-radius: 5px; padding: 8px 20px;">Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

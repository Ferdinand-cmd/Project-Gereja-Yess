<!-- resources/views/partials/admin-navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="z-index: 1000;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <div class="brand-text">
                <img src="img/logo_putih.png" alt="" style="width: 20%; margin-left: 10px;">
                <div class="lora-font">BEST CHURCH</div>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" style="text-align:center;" id="navbarNav">
            <ul class="navbar-nav" style="margin-bottom:10px;">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}" href="/admin">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('pelayanan-admin') ? 'active' : '' }}"
                        href="/pelayanan-admin">Pelayanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('komsel-admin') ? 'active' : '' }}"
                        href="/komsel-admin">KomSel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('bareng-admin') ? 'active' : '' }}"
                        href="/bareng-admin">Bareng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('event-admin') ? 'active' : '' }}" href="/event-admin">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('penjadwalan-admin') ? 'active' : '' }}"
                        href="/penjadwalan-admin">Penjadwalan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('analisis-admin') ? 'active' : '' }}"
                        href="/analisis-admin">Analisis</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Admin, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/profile">Profile</a></li>
                            <li><a class="dropdown-item" href="/">Switch to User View</a></li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

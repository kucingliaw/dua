<nav class="navbar navbar-dark bg-dark navbar-expand-lg py-3">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Eperpus</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'Home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'Kategori' ? 'active' : '' }}"
                        href="{{ route('kategori') }}">Kategori</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                {{-- Jika sudah login, tampilkan nama user dan logout --}}
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome back, {{ auth()->user()->fullname }}
                        </a>
                        <ul class="dropdown-menu">

                            {{-- Dashboard --}}
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}">My Profile</a></li>
                            <hr class="dropdown-divider">

                            {{-- Logout button --}}
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    {{-- Jika belum login, tampilkan login --}}
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link {{ Request::is('login') ? 'active' : '' }}">Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

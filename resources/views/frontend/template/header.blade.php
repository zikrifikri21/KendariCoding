    <header id="header" class="fixed-top {{ request()->is('class*') ? 'header-inner-pages' : '' }}">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="#">Kendari Coding</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto {{ request()->is('/*') ? 'active' : '' }}" href="/">Beranda</a>
                    </li>
                    <li><a
                            class="nav-link scrollto {{ request()->is('class*') ? 'active' : '' }}"href="/class">Kelas</a>
                    </li>
                    <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#faq">Alur Belajar</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li><a class="nav-link getstarted" href="{{ route('login') }}">Login</a></li>
                    <li><a class="getstarted scrollto" href="{{ route('register') }}">Daftar</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

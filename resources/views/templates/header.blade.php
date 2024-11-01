    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark py-3"
            style="background-color: #8E7AB5!important;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><strong class="px-4">S I A P !!</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto mb-2 mb-md-0 px-3">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                                href="/">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('books') ? 'active' : '' }}" href="/books">Katalog
                                Buku</a>
                        </li>
                        @if (Auth()->user())
                        @if (Auth()->user()->role=="member")
                        <li class="nav-item">
                            <div class="dropdown">
                                <a href="#" class=" btn btn-outline-dark text-decoration-none dropdown-toggle"
                                    data-bs-toggle="dropdown">{{Auth()->user()->name}}</a>
                                <ul class="dropdown-menu text-small">
                                    <li><a class="dropdown-item" href="/history">Riwayat Peminjaman</a></li>
                                    <li><a class="dropdown-item" href="/profile">Profil</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/logout">Keluar</a></li>
                                </ul>
                            </div>
                        </li>
                        @else
                        <li class="nav-item">
                            <div class="dropdown">
                                <a href="#" class=" btn btn-outline-dark text-decoration-none dropdown-toggle"
                                    data-bs-toggle="dropdown">{{Auth()->user()->name}}</a>
                                <ul class="dropdown-menu text-small">
                                    <li><a class="dropdown-item" href="/dashboard">Pustakawan</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/logout">Keluar</a></li>
                                </ul>
                            </div>
                        </li>
                        @endif
                        @else
                        <li class="nav-item">
                            <a class="btn btn-outline-dark" href="/login">Masuk</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
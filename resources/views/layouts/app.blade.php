<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Portofolio Rofiq Syaifurrohman | Web Developer')</title>
    <meta name="description" content="@yield('meta_desc', 'Portofolio Rofiq Syaifurrohman - Web Developer, Fullstack Laravel Specialist.')">

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('styles')
</head>
<body>

    <!-- Header & Navigation -->
    <header class="site-header">
        <div class="container">
            <nav class="navbar">
                <a href="{{ route('home') }}" class="brand-logo" id="brand-logo">
                    <div class="brand-badge">R</div>
                    <span class="brand-text">Rofiq<span> Portofolio</span></span>
                </a>

                <button class="mobile-toggle" id="mobile-toggle" aria-label="Buka Menu Navigasi">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <ul class="nav-menu" id="nav-menu">
                    <li>
                        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" id="nav-home">
                            <i class="fa-solid fa-house"></i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" id="nav-about">
                            <i class="fa-solid fa-user"></i>
                            <span>Data Diri & Foto</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('activities') }}" class="nav-link {{ request()->routeIs('activities') ? 'active' : '' }}" id="nav-activities">
                            <i class="fa-solid fa-briefcase"></i>
                            <span>Aktivitas</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" id="nav-contact">
                            <i class="fa-solid fa-envelope"></i>
                            <span>Kontak</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('cv.download') }}" class="btn btn-primary btn-sm" id="nav-btn-cv" style="padding: 0.45rem 1.15rem; font-size: 0.85rem;" title="Unduh Curriculum Vitae Rofiq Syaifurrohman">
                            <i class="fa-solid fa-file-arrow-down"></i>
                            <span>Unduh CV</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="brand-logo">
                    <div class="brand-badge" style="width:32px; height:32px; font-size: 0.9rem;">R</div>
                    <span class="brand-text">Rofiq Syaifurrohman</span>
                </div>
                <ul class="footer-nav">
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('about') }}">Data Diri</a></li>
                    <li><a href="{{ route('activities') }}">Aktivitas</a></li>
                    <li><a href="{{ route('contact') }}">Kontak</a></li>
                    <li><a href="{{ route('cv.download') }}"><i class="fa-solid fa-file-arrow-down" style="margin-right: 0.35rem;"></i>Unduh CV (PDF)</a></li>
                </ul>
                <p>&copy; {{ date('Y') }} Rofiq Syaifurrohman. Dibuat dengan antarmuka modern menggunakan Framework Laravel.</p>
            </div>
        </div>
    </footer>

    <!-- Interactive Navigation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggle = document.getElementById('mobile-toggle');
            const menu = document.getElementById('nav-menu');

            if (toggle && menu) {
                toggle.addEventListener('click', function () {
                    menu.classList.toggle('active');
                    const icon = toggle.querySelector('i');
                    if (menu.classList.contains('active')) {
                        icon.classList.remove('fa-bars');
                        icon.classList.add('fa-xmark');
                    } else {
                        icon.classList.remove('fa-xmark');
                        icon.classList.add('fa-bars');
                    }
                });
            }
        });
    </script>
    @yield('scripts')
</body>
</html>

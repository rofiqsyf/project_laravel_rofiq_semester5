@extends('layouts.app')

@section('title', 'Beranda | Portofolio Rofiq Syaifurrohman')
@section('meta_desc', 'Selamat datang di web portofolio resmi Rofiq Syaifurrohman - Mahasiswa Teknik Informatika, Desainer Grafis BNSP & Web Developer.')

@section('content')
    <!-- Hero Section: Selamat Datang -->
    <section class="hero-section">
        <div class="hero-info">
            <div class="hero-welcome">
                <span class="pulse-dot"></span>
                <span>Selamat Datang di Portofolio Saya!</span>
            </div>

            <h1 class="hero-title">
                Halo, Saya <span class="gradient-text">{{ $nama }}</span>
            </h1>

            <p class="hero-role" style="font-size: 1.25rem; font-weight: 700; color: #a5b4fc; margin-bottom: 1rem;">
                {{ $role }}
            </p>

            <p class="hero-desc">
                {{ $tagline }} Senang Anda berkunjung ke situs portofolio saya. Di sini Anda dapat melihat biodata resmi, rekam jejak pelatihan, pengalaman organisasi, serta mengunduh Curriculum Vitae (CV) lengkap saya.
            </p>

            <div class="hero-actions">
                <a href="{{ route('cv.download') }}" class="btn btn-primary" id="btn-hero-download-cv">
                    <i class="fa-solid fa-file-arrow-down"></i>
                    <span>Unduh CV (PDF)</span>
                </a>
                <a href="{{ route('about') }}" class="btn btn-outline" id="btn-hero-about">
                    <i class="fa-solid fa-user"></i>
                    <span>Lihat Data Diri</span>
                </a>
                <a href="{{ route('activities') }}" class="btn btn-outline" id="btn-hero-activities">
                    <i class="fa-solid fa-laptop-code"></i>
                    <span>Eksplor Rekam Jejak</span>
                </a>
                <a href="{{ route('contact') }}" class="btn btn-outline" id="btn-hero-contact">
                    <i class="fa-solid fa-paper-plane"></i>
                    <span>Hubungi Saya</span>
                </a>
            </div>
        </div>

        <div class="hero-visual">
            <div class="avatar-wrapper">
                <div class="avatar-backdrop"></div>
                <img src="{{ asset('images/profile.jpeg') }}" alt="{{ $nama }}" class="avatar-img">

                <div class="floating-pill top-right">
                    <i class="fa-solid fa-award" style="color: #f59e0b; font-size: 1.2rem;"></i>
                    <span>Sertifikasi Profesi</span>
                </div>

                <div class="floating-pill bottom-left">
                    <i class="fa-solid fa-laptop-code" style="color: #10b981; font-size: 1.1rem;"></i>
                    <span>Web & Network Dev</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Grid -->
    <section class="stats-grid">
        @foreach ($stats as $stat)
            <div class="glass-card stat-card">
                <div class="stat-value gradient-text">{{ $stat['value'] }}</div>
                <div class="stat-label">{{ $stat['label'] }}</div>
            </div>
        @endforeach
    </section>

    <!-- Highlight Layanan / Keahlian -->
    <section class="highlights-section">
        <div class="section-head">
            <div class="page-badge">Kompetensi Utama</div>
            <h2>Fokus & Spesialisasi</h2>
            <p class="page-subtitle">Dedikasi dalam rekayasa perangkat lunak, perancangan desain komunikasi visual berstandar industri, dan administrasi sistem komputer.</p>
        </div>

        <div class="highlights-grid">
            @foreach ($highlights as $item)
                <div class="glass-card highlight-card">
                    <div class="highlight-icon">
                        @if ($item['icon'] === 'code')
                            <i class="fa-solid fa-code"></i>
                        @elseif ($item['icon'] === 'database')
                            <i class="fa-solid fa-server"></i>
                        @else
                            <i class="fa-solid fa-layer-group"></i>
                        @endif
                    </div>
                    <h3>{{ $item['title'] }}</h3>
                    <p>{{ $item['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </section>
@endsection


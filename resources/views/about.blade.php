@extends('layouts.app')

@section('title', 'Data Diri & Profil | Portofolio Rofiq Syaifurrohman')
@section('meta_desc', 'Profil lengkap, biodata resmi, latar belakang pendidikan, keahlian teknis, dan sertifikasi BNSP Rofiq Syaifurrohman.')

@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="page-badge">
            <i class="fa-solid fa-id-card"></i>
            <span>Profil Personal</span>
        </div>
        <h1 class="page-title">Data Diri & <span class="gradient-text">Foto Profil</span></h1>
        <p class="page-subtitle">Mengenal lebih dekat latar belakang, biodata, keahlian teknis, dan dedikasi profesional saya sesuai rekam jejak resmi.</p>
    </div>

    <!-- Main About Grid: Photo & Biodata -->
    <div class="about-grid">
        <!-- Sidebar Card: Photo & Quick Status -->
        <div class="glass-card profile-card">
            <div class="profile-photo-lg">
                <img src="{{ $biodata['foto'] }}" alt="{{ $biodata['nama_lengkap'] }}">
            </div>

            <h2>{{ $biodata['nama_lengkap'] }}</h2>
            <div class="profile-role">Informatics Student • Graphic & Web Designer</div>

            <div class="profile-status">
                <span class="badge badge-green">
                    <i class="fa-solid fa-circle-check" style="margin-right: 0.35rem;"></i>
                    {{ $biodata['status'] }}
                </span>
            </div>

            <div class="profile-quick-actions">
                <a href="{{ route('cv.download') }}" class="btn btn-primary btn-sm" id="btn-about-download-cv">
                    <i class="fa-solid fa-file-arrow-down"></i>
                    <span>Unduh CV (PDF)</span>
                </a>
                <a href="{{ route('contact') }}" class="btn btn-outline btn-sm" id="btn-about-contact">
                    <i class="fa-solid fa-paper-plane"></i>
                    <span>Kirim Pesan</span>
                </a>
                <a href="https://wa.me/{{ $biodata['whatsapp'] }}?text=Halo%20Rofiq,%20saya%20melihat%20portofolio%20Anda" target="_blank" class="btn btn-outline btn-sm">
                    <i class="fa-brands fa-whatsapp" style="color: #22c55e;"></i>
                    <span>Chat WhatsApp</span>
                </a>
            </div>
        </div>

        <!-- Detail Card: Bio & Biodata Table -->
        <div class="glass-card biodata-card">
            <div>
                <h3 style="font-size: 1.45rem; font-weight: 800; margin-bottom: 1rem;">
                    Tentang <span class="gradient-text">Saya</span>
                </h3>
                <p class="bio-text">
                    {{ $biodata['bio'] }}
                </p>
            </div>

            <!-- Biodata Table Grid -->
            <div>
                <h4 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 1rem; color: #cbd5e1;">
                    <i class="fa-solid fa-address-book" style="color: #818cf8; margin-right: 0.5rem;"></i>
                    Informasi Biodata Lengkap
                </h4>

                <div class="info-table">
                    <div class="info-item">
                        <span class="info-label">Nama Lengkap</span>
                        <span class="info-value">{{ $biodata['nama_lengkap'] }}</span>
                    </div>

                    <div class="info-item">
                        <span class="info-label">Nama Panggilan</span>
                        <span class="info-value">{{ $biodata['panggilan'] }}</span>
                    </div>

                    <div class="info-item">
                        <span class="info-label">Domisili</span>
                        <span class="info-value">{{ $biodata['domisili'] }}</span>
                    </div>

                    <div class="info-item">
                        <span class="info-label">Pendidikan</span>
                        <span class="info-value">{{ $biodata['pendidikan_terakhir'] }}</span>
                    </div>

                    <div class="info-item">
                        <span class="info-label">Email Resmi</span>
                        <span class="info-value"><a href="mailto:{{ $biodata['email'] }}">{{ $biodata['email'] }}</a></span>
                    </div>

                    <div class="info-item">
                        <span class="info-label">Nomor Telepon / WA</span>
                        <span class="info-value"><a href="https://wa.me/{{ $biodata['whatsapp'] }}">{{ $biodata['telepon'] }}</a></span>
                    </div>

                    <div class="info-item">
                        <span class="info-label">Kewarganegaraan</span>
                        <span class="info-value">Indonesia (WNI)</span>
                    </div>

                    <div class="info-item">
                        <span class="info-label">Kemampuan Bahasa</span>
                        <span class="info-value">Bahasa Indonesia (Native), English (Intermediate)</span>
                    </div>
                </div>
            </div>

            <!-- Perangkat Lunak & Tools -->
            <div>
                <h4 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 0.75rem; color: #cbd5e1;">
                    <i class="fa-solid fa-screwdriver-wrench" style="color: #06b6d4; margin-right: 0.5rem;"></i>
                    Software & Alat Kerja Utama
                </h4>
                <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                    @foreach ($biodata['software_tools'] as $tool)
                        <span class="tag-item" style="font-size: 0.85rem; padding: 0.35rem 0.75rem; background: rgba(99, 102, 241, 0.12); border-color: rgba(99, 102, 241, 0.25); color: #c7d2fe;">
                            <i class="fa-solid fa-check" style="font-size: 0.7rem; color: #818cf8; margin-right: 0.25rem;"></i>
                            {{ $tool }}
                        </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Skills & Education Section -->
    <div class="about-sections-grid">
        <!-- Keahlian Teknis -->
        <div class="glass-card">
            <h3 style="font-size: 1.35rem; font-weight: 800; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.6rem;">
                <i class="fa-solid fa-code" style="color: #6366f1;"></i>
                <span>Keahlian & Penguasaan Kompetensi</span>
            </h3>

            <div class="skill-list">
                @foreach ($biodata['skills'] as $skill)
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>{{ $skill['name'] }}</span>
                            <span style="color: #a5b4fc;">{{ $skill['level'] }}%</span>
                        </div>
                        <div class="skill-bar-bg">
                            <div class="skill-bar-fill" style="width: {{ $skill['level'] }}%;"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Riwayat Pendidikan -->
        <div class="glass-card">
            <h3 style="font-size: 1.35rem; font-weight: 800; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.6rem;">
                <i class="fa-solid fa-graduation-cap" style="color: #ec4899;"></i>
                <span>Riwayat Pendidikan Formal</span>
            </h3>

            <div class="edu-timeline">
                @foreach ($biodata['education'] as $edu)
                    <div class="edu-item">
                        <span class="edu-year">{{ $edu['year'] }}</span>
                        <h4>{{ $edu['degree'] }}</h4>
                        <div class="edu-institution">{{ $edu['institution'] }}</div>
                        <p class="edu-desc">{{ $edu['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Pengalaman Organisasi & Kepemimpinan -->
    <div class="glass-card" style="margin-top: 2.5rem;">
        <h3 style="font-size: 1.35rem; font-weight: 800; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.6rem;">
            <i class="fa-solid fa-users" style="color: #10b981;"></i>
            <span>Pengalaman Organisasi & Kepemimpinan</span>
        </h3>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
            @foreach ($biodata['organizations'] as $org)
                <div style="background: rgba(255, 255, 255, 0.02); border: 1px solid var(--border-card); border-radius: var(--radius-md); padding: 1.5rem; transition: var(--transition);">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 0.5rem;">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff;">{{ $org['role'] }}</h4>
                        <span class="badge badge-purple" style="font-size: 0.75rem;">{{ $org['period'] }}</span>
                    </div>
                    <div style="color: #818cf8; font-weight: 600; font-size: 0.9rem; margin-bottom: 0.75rem;">
                        <i class="fa-regular fa-building" style="margin-right: 0.35rem;"></i>
                        {{ $org['org'] }}
                    </div>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">
                        {{ $org['desc'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
@endsection


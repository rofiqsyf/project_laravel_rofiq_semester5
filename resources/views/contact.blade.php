@extends('layouts.app')

@section('title', 'Hubungi Saya | Portofolio Rofiq Syaifurrohman')
@section('meta_desc', 'Hubungi Rofiq Syaifurrohman untuk kerja sama proyek, konsultasi web development, atau peluang profesional.')

@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="page-badge">
            <i class="fa-solid fa-paper-plane"></i>
            <span>Get In Touch</span>
        </div>
        <h1 class="page-title">Informasi <span class="gradient-text">Kontak</span></h1>
        <p class="page-subtitle">Mari terhubung dan mendiskusikan peluang proyek, solusi web development, maupun kolaborasi kreatif.</p>
    </div>

    <!-- Alert Notifikasi Flash Session -->
    @if(session('success'))
        <div class="alert-success">
            <i class="fa-solid fa-circle-check" style="font-size: 1.25rem;"></i>
            <div>{{ session('success') }}</div>
        </div>
    @endif

    <div class="contact-layout">
        <!-- Kolom Kiri: Detail Kontak Langsung -->
        <div>
            <div class="glass-card" style="margin-bottom: 2rem;">
                <h2 style="font-size: 1.45rem; font-weight: 800; margin-bottom: 1.5rem;">
                    Saluran Komunikasi
                </h2>

                <div class="contact-info-list">
                    <!-- Email -->
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="contact-meta">
                            <h4>Email Resmi</h4>
                            <p><a href="mailto:{{ $contactInfo['email'] }}">{{ $contactInfo['email'] }}</a></p>
                        </div>
                    </div>

                    <!-- Telepon / WhatsApp -->
                    <div class="contact-item">
                        <div class="contact-icon" style="background: rgba(34, 197, 94, 0.15); border-color: rgba(34, 197, 94, 0.3); color: #4ade80;">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <div class="contact-meta">
                            <h4>WhatsApp / Telepon</h4>
                            <p><a href="https://wa.me/{{ $contactInfo['whatsapp'] }}?text=Halo%20Rofiq,%20saya%20tertarik%20bekerja%20sama" target="_blank">{{ $contactInfo['phone'] }}</a></p>
                        </div>
                    </div>

                    <!-- Lokasi -->
                    <div class="contact-item">
                        <div class="contact-icon" style="background: rgba(236, 72, 153, 0.15); border-color: rgba(236, 72, 153, 0.3); color: #f472b6;">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="contact-meta">
                            <h4>Lokasi & Domisili</h4>
                            <p>{{ $contactInfo['location'] }}</p>
                        </div>
                    </div>

                    <!-- Jam Kerja -->
                    <div class="contact-item">
                        <div class="contact-icon" style="background: rgba(6, 182, 212, 0.15); border-color: rgba(6, 182, 212, 0.3); color: #22d3ee;">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <div class="contact-meta">
                            <h4>Waktu Respon</h4>
                            <p>{{ $contactInfo['availability'] }}</p>
                        </div>
                    </div>
                </div>

                <h4 style="font-size: 0.95rem; font-weight: 700; margin-bottom: 0.75rem; color: #cbd5e1;">
                    Ikuti Saya di Media Sosial:
                </h4>
                <div class="social-links">
                    <a href="{{ $contactInfo['github'] }}" target="_blank" class="social-btn" title="GitHub">
                        <i class="fa-brands fa-github"></i>
                    </a>
                    <a href="{{ $contactInfo['linkedin'] }}" target="_blank" class="social-btn" title="LinkedIn">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <a href="{{ $contactInfo['instagram'] }}" target="_blank" class="social-btn" title="Instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/{{ $contactInfo['whatsapp'] }}" target="_blank" class="social-btn" title="WhatsApp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan: Formulir Kirim Pesan -->
        <div>
            <div class="glass-card">
                <h2 style="font-size: 1.45rem; font-weight: 800; margin-bottom: 0.5rem;">
                    Kirimkan Pesan Langsung
                </h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.75rem;">
                    Silakan isi formulir di bawah ini untuk pertanyaan, penawaran proyek, atau sekadar berdiskusi.
                </p>

                <form action="{{ route('contact.submit') }}" method="POST" id="contact-form">
                    @csrf

                    <div class="form-group">
                        <label for="nama" class="form-label">Nama Lengkap <span style="color:#f43f5e;">*</span></label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}" placeholder="Contoh: Budi Santoso" required>
                        @error('nama')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Alamat Email <span style="color:#f43f5e;">*</span></label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="nama@perusahaan.com" required>
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="subjek" class="form-label">Subjek / Topik <span style="color:#f43f5e;">*</span></label>
                        <input type="text" name="subjek" id="subjek" class="form-control" value="{{ old('subjek') }}" placeholder="Contoh: Penawaran Kerja Sama Web App" required>
                        @error('subjek')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="pesan" class="form-label">Isi Pesan <span style="color:#f43f5e;">*</span></label>
                        <textarea name="pesan" id="pesan" class="form-control" placeholder="Tuliskan pesan detail atau kebutuhan proyek Anda di sini..." required>{{ old('pesan') }}</textarea>
                        @error('pesan')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%;" id="btn-submit-contact">
                        <i class="fa-solid fa-paper-plane"></i>
                        <span>Kirim Pesan Sekarang</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

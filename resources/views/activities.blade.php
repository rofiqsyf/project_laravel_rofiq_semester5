@extends('layouts.app')

@section('title', 'Aktivitas & Portofolio | Rofiq Syaifurrohman')
@section('meta_desc', 'Daftar aktivitas profesional, proyek aplikasi web, workshop, dan kegiatan sertifikasi Rofiq Syaifurrohman.')

@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <a href="https://github.com/rofiqsyf" target="_blank" class="page-badge" style="cursor: pointer; text-decoration: none; transition: var(--transition);">
            <i class="fa-brands fa-github"></i>
            <span>GitHub Profile: rofiqsyf • 11+ Repositories</span>
        </a>
        <h1 class="page-title">Proyek & <span class="gradient-text">Rekam Jejak</span></h1>
        <p class="page-subtitle">Koleksi karya aplikasi web, sistem informasi, eksplorasi kecerdasan buatan, pelatihan sertifikasi, serta kepemimpinan komunitas yang telah saya bangun.</p>
    </div>

    <!-- Filter Buttons -->
    <div style="display: flex; justify-content: center; gap: 0.75rem; flex-wrap: wrap; margin-bottom: 2.5rem;">
        <button class="btn btn-primary btn-sm filter-btn active" data-filter="all" id="filter-all">
            Semua Aktivitas & Proyek ({{ count($activities) }})
        </button>
        <button class="btn btn-outline btn-sm filter-btn" data-filter="Proyek Web" id="filter-proyek">
            <i class="fa-solid fa-laptop-code"></i> Proyek Aplikasi & Web
        </button>
        <button class="btn btn-outline btn-sm filter-btn" data-filter="Komunitas & Berbagi" id="filter-komunitas">
            <i class="fa-solid fa-users"></i> Organisasi & Komunitas
        </button>
        <button class="btn btn-outline btn-sm filter-btn" data-filter="Pelatihan & Sertifikasi" id="filter-sertifikasi">
            <i class="fa-solid fa-award"></i> Pelatihan & Riset AI
        </button>
    </div>

    <!-- Activities Grid -->
    <div class="activities-grid">
        @foreach ($activities as $act)
            <div class="glass-card activity-card" data-category="{{ $act['category'] }}">
                <div style="flex: 1;">
                    <div class="activity-header">
                        <span class="badge {{ $act['status'] === 'Aktif' ? 'badge-green' : ($act['status'] === 'Tersertifikasi' ? 'badge-purple' : 'badge-blue') }}">
                            {{ $act['category'] }} • {{ $act['status'] }}
                        </span>
                        <span class="activity-date">
                            <i class="fa-regular fa-calendar-days" style="margin-right: 0.3rem;"></i>
                            {{ $act['date'] }}
                        </span>
                    </div>

                    <h3 class="activity-title">{{ $act['title'] }}</h3>
                    <p class="activity-desc">{{ $act['desc'] }}</p>
                </div>

                <div>
                    <div class="activity-tags" style="margin-bottom: 0.75rem;">
                        @foreach ($act['tags'] as $tag)
                            <span class="tag-item">#{{ $tag }}</span>
                        @endforeach
                    </div>

                    @if(!empty($act['github_url']) || !empty($act['demo_url']))
                        <div style="display: flex; gap: 0.6rem; flex-wrap: wrap; padding-top: 0.75rem; border-top: 1px solid var(--border-card);">
                            @if(!empty($act['github_url']))
                                <a href="{{ $act['github_url'] }}" target="_blank" class="btn btn-outline btn-sm" style="padding: 0.35rem 0.85rem; font-size: 0.8rem; border-radius: var(--radius-sm);">
                                    <i class="fa-brands fa-github"></i>
                                    <span>Lihat Kode (Repo)</span>
                                </a>
                            @endif
                            @if(!empty($act['demo_url']))
                                <a href="{{ $act['demo_url'] }}" target="_blank" class="btn btn-primary btn-sm" style="padding: 0.35rem 0.85rem; font-size: 0.8rem; border-radius: var(--radius-sm);">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    <span>Buka Live Demo</span>
                                </a>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>

    <!-- Tambahan Banner Aktivitas Rutin -->
    <div class="glass-card" style="margin-top: 3.5rem; text-align: center; padding: 3rem 2rem; background: linear-gradient(180deg, rgba(99, 102, 241, 0.08) 0%, rgba(18, 24, 43, 0.8) 100%);">
        <h3 style="font-size: 1.6rem; font-weight: 800; margin-bottom: 0.75rem;">
            Punya Rencana Kolaborasi atau Ide Proyek Baru?
        </h3>
        <p style="color: var(--text-muted); max-width: 600px; margin: 0 auto 1.75rem;">
            Seluruh repositori dan source code proyek dapat dieksplorasi secara terbuka melalui profil GitHub resmi saya. Saya selalu siap mendiskusikan implementasi teknologi web terkini.
        </p>
        <div style="display: flex; gap: 0.75rem; justify-content: center; flex-wrap: wrap;">
            <a href="https://github.com/rofiqsyf" target="_blank" class="btn btn-outline">
                <i class="fa-brands fa-github"></i>
                <span>Kunjungi GitHub @rofiqsyf</span>
            </a>
            <a href="{{ route('contact') }}" class="btn btn-primary" id="btn-activities-contact">
                <i class="fa-solid fa-comments"></i>
                <span>Mulai Diskusi Sekarang</span>
            </a>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const cards = document.querySelectorAll('.activity-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                // Update active state
                filterBtns.forEach(b => {
                    b.classList.remove('btn-primary');
                    b.classList.add('btn-outline');
                });
                this.classList.remove('btn-outline');
                this.classList.add('btn-primary');

                const filter = this.getAttribute('data-filter');

                cards.forEach(card => {
                    const category = card.getAttribute('data-category');
                    if (filter === 'all' || category.includes(filter)) {
                        card.style.display = 'flex';
                        card.style.opacity = '1';
                    } else {
                        card.style.display = 'none';
                        card.style.opacity = '0';
                    }
                });
            });
        });
    });
</script>
@endsection

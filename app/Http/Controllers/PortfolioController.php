<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Halaman Beranda (Ucapan Selamat Datang & Ringkasan)
     */
    public function index()
    {
        $data = [
            'nama' => 'Rofiq Syaifurrohman',
            'role' => 'Informatics Student • Tech Enthusiast & Graphic Designer',
            'tagline' => 'Lulusan Teknik Komputer dan Jaringan (TKJ) serta mahasiswa S1 Teknik Informatika yang berfokus pada pengembangan sistem, web development, dan desain grafis tersertifikasi BNSP.',
            'stats' => [
                ['label' => 'Pendidikan', 'value' => 'S1 TI'],
                ['label' => 'Repositori & Proyek', 'value' => '11+'],
                ['label' => 'Sertifikasi Keahlian', 'value' => 'BNSP'],
                ['label' => 'Tingkat Dedikasi', 'value' => '100%'],
            ],
            'highlights' => [
                [
                    'title' => 'Graphic & UI/UX Design',
                    'desc' => 'Tersertifikasi BNSP Desainer Grafis Muda. Terbiasa memproduksi aset grafis, visual branding, serta perancangan antarmuka berbasis Figma.',
                    'icon' => 'layout'
                ],
                [
                    'title' => 'Web & System Development',
                    'desc' => 'Pemahaman praktikum PHP Native, Laravel Framework, HTML/CSS, JavaScript, serta pengembangan sistem berbasis arsitektur terstruktur.',
                    'icon' => 'code'
                ],
                [
                    'title' => 'Jaringan & IT Troubleshooting',
                    'desc' => 'Instalasi, konfigurasi jaringan (Mikrotik & Debian), pemeliharaan dan perbaikan hardware/software laptop/PC sesuai standar SOP.',
                    'icon' => 'database'
                ],
            ]
        ];

        return view('home', $data);
    }

    /**
     * Halaman Data Diri & Foto
     */
    public function about()
    {
        $biodata = [
            'nama_lengkap' => 'Rofiq Syaifurrohman',
            'panggilan' => 'Rofiq',
            'tempat_lahir' => 'Wonosobo',
            'domisili' => 'Wonosobo, Jawa Tengah, Indonesia',
            'status' => 'Terbuka untuk Peluang Magang / Entry-Level / Proyek',
            'email' => 'rofiqsyf@mhs.unsiq.ac.id',
            'telepon' => '+62 858-7899-1811',
            'whatsapp' => '6285878991811',
            'pendidikan_terakhir' => 'Sedang menempuh S1 Teknik Informatika (UNSIQ)',
            'foto' => asset('images/profile.jpeg'),
            'bio' => 'Lulusan Teknik Komputer dan Jaringan (TKJ) SMK Negeri 1 Wonosobo yang sedang menempuh pendidikan S1 Teknik Informatika di Universitas Sains Al-Qur\'an (UNSIQ). Berpengalaman dalam instalasi, konfigurasi, dan pemeliharaan jaringan serta mampu melakukan troubleshooting perangkat keras dan lunak secara efektif. Studi yang sedang berjalan memberikan pemahaman tambahan mengenai pemrograman dan pengembangan sistem untuk mendukung penyelesaian masalah yang lebih sistematis. Termotivasi untuk mengimplementasikan kompetensi teknis dan akademis dalam mengembangkan ilmu di posisi magang atau entry-level untuk dapat berkontribusi secara positif bagi perusahaan.',
            'skills' => [
                ['name' => 'Graphic Design (CorelDraw, Photoshop, Illustrator - BNSP)', 'level' => 95],
                ['name' => 'Hardware & Software Troubleshooting (SOP Kemenperin)', 'level' => 90],
                ['name' => 'Jaringan Komputer & Sysadmin (Mikrotik & Debian)', 'level' => 88],
                ['name' => 'UI/UX Design (Figma & Wireframing)', 'level' => 85],
                ['name' => 'Web Development (PHP Native, Laravel, HTML/CSS, JS)', 'level' => 80],
                ['name' => 'Leadership, Teamwork & Critical Thinking', 'level' => 92],
            ],
            'software_tools' => [
                'CorelDraw', 'Figma', 'Adobe Photoshop', 'Adobe Illustrator', 'Affinity',
                'VS Code', 'Antigravity IDE', 'Mikrotik Winbox', 'SPSS', 'Microsoft Office'
            ],
            'education' => [
                [
                    'degree' => 'S1 Teknik Informatika',
                    'institution' => 'Universitas Sains Al-Qur\'an (UNSIQ)',
                    'year' => 'Sept 2024 – Sekarang',
                    'desc' => 'Menempuh studi di Fakultas Teknik dan Ilmu Komputer (Fastikom). Memperdalam pemahaman rekayasa sistem perangkat lunak, arsitektur basis data, dan metode pemecahan masalah komputasional secara sistematis.'
                ],
                [
                    'degree' => 'Teknik Komputer dan Jaringan (TKJ)',
                    'institution' => 'SMK Negeri 1 Wonosobo',
                    'year' => 'Jul 2021 – Mei 2024',
                    'desc' => 'Mendalami perancangan sistem jaringan komputer, instalasi dan konfigurasi server Linux Debian serta Mikrotik, perakitan PC, dan troubleshooting perangkat keras serta perangkat lunak.'
                ]
            ],
            'organizations' => [
                [
                    'role' => 'Staff Ahli Divisi Media Kreatif',
                    'org' => 'Kamadiksi KIP-K Wonosobo',
                    'period' => 'Jan 2025 – Sekarang',
                    'desc' => 'Bertanggung jawab dalam menyusun strategi konten visual untuk platform media sosial, serta mengelola kalender konten bulanan guna memastikan distribusi informasi organisasi berjalan tepat waktu dan relevan.'
                ],
                [
                    'role' => 'Ketua Panitia DiscoverIT 2025 & Staff PSDM',
                    'org' => 'HIMTI Fastikom UNSIQ',
                    'period' => 'Oktober 2025',
                    'desc' => 'Memimpin dan mengoordinasi lebih dari 25 panitia dan 12 relawan menyelenggarakan masa orientasi 135 mahasiswa baru. Aktif di Divisi Pengembangan Sumber Daya Mahasiswa berfokus pada pelatihan dan kaderisasi.'
                ],
                [
                    'role' => 'Divisi Media Kreatif (Admin)',
                    'org' => 'WLC (Wonosobo Literacy Club)',
                    'period' => 'Mar 2025 – Sekarang',
                    'desc' => 'Bertanggung jawab dalam memproduksi konten visual harian untuk media sosial komunitas literasi, termasuk desain feed, stories, dan aset video kreatif.'
                ]
            ]
        ];

        return view('about', compact('biodata'));
    }

    /**
     * Halaman Aktivitas & Rekam Jejak Proyek
     */
    public function activities()
    {
        $activities = [
            [
                'title' => 'Portal E-PPID PT Bhakti Husada Wonosobo (Perseroda)',
                'category' => 'Proyek Web',
                'date' => 'Agustus – September 2026',
                'desc' => 'Sistem Informasi & Layanan Keterbukaan Informasi Publik (KIP) resmi BUMD Wonosobo. Dibangun dengan arsitektur Laravel Clean Code, SEO-optimized, responsif di semua perangkat, dengan fitur katalog dokumen publik dan pengajuan permohonan informasi secara daring.',
                'tags' => ['Laravel 11/12', 'Blade', 'Clean Code', 'E-PPID', 'Public Service'],
                'status' => 'Selesai',
                'github_url' => 'https://github.com/rofiqsyf/Layanan-Informasi-Publik-PT-Bhakti-Husada-Wonosobo-Perseroda',
                'demo_url' => null,
            ],
            [
                'title' => 'LMS UNSIQ (Enterprise Learning Management System)',
                'category' => 'Proyek Web',
                'date' => 'Juni 2026',
                'desc' => 'Platform manajemen pembelajaran kampus kelas enterprise yang dirancang dengan arsitektur PHP Native MVC, standar PSR-4 Autoloading, Singleton Database (PDO), sistem autentikasi berlapis, serta antarmuka modern bernuansa dark glassmorphism.',
                'tags' => ['PHP Native', 'MVC Architecture', 'PSR-4', 'MySQL PDO', 'Glassmorphism'],
                'status' => 'Selesai',
                'github_url' => 'https://github.com/rofiqsyf/lms_unsiq',
                'demo_url' => null,
            ],
            [
                'title' => 'SIMPEKAB JOMOKERTO (Sistem Manajemen Kepegawaian)',
                'category' => 'Proyek Web',
                'date' => 'Juni 2026',
                'desc' => 'Aplikasi web Sistem Informasi Manajemen Kepegawaian Kabupaten Jomokerto berbasis PHP & MySQL dengan Role-Based Access Control (RBAC), pengelolaan data ASN/pegawai, mutasi berkala, jabatan struktural, dan riwayat dinas.',
                'tags' => ['PHP', 'MySQL', 'RBAC', 'Web App', 'Fastikom UNSIQ'],
                'status' => 'Selesai',
                'github_url' => 'https://github.com/rofiqsyf/simpekab-jomokerto',
                'demo_url' => null,
            ],
            [
                'title' => 'Portal Keketatan SNPMB v3.0 (Analitik Seleksi PTN)',
                'category' => 'Proyek Web',
                'date' => 'Agustus 2026',
                'desc' => 'Portal analitik dan komparasi data keketatan seleksi masuk Perguruan Tinggi Negeri (jalur SNBT & SNBP) se-Indonesia untuk membantu calon mahasiswa menentukan strategi pemilihan program studi berdasarkan rasio penerimaan.',
                'tags' => ['HTML5', 'CSS3', 'JavaScript', 'Data Analytics', 'GitHub Pages'],
                'status' => 'Selesai',
                'github_url' => 'https://github.com/rofiqsyf/Portal_Keketatan_SNPMB',
                'demo_url' => null,
            ],
            [
                'title' => 'PhotoIn Photobooth (Interactive Web Photobooth)',
                'category' => 'Proyek Web',
                'date' => 'Juli 2026',
                'desc' => 'Aplikasi photobooth interaktif modern berbasis web yang berjalan di sisi klien (frontend). Menghadirkan pengalaman berfoto ala studio langsung via peramban dengan dukungan kamera depan/belakang, timer, frame estetik, filter efek, dan unduh foto instan.',
                'tags' => ['JavaScript', 'HTML5 Canvas', 'WebRTC Camera', 'Frontend UI/UX'],
                'status' => 'Selesai',
                'github_url' => 'https://github.com/rofiqsyf/PhotoIn-Photobooth',
                'demo_url' => null,
            ],
            [
                'title' => 'BijakBelanja (AI Smart Shopping Assistant)',
                'category' => 'Proyek Web',
                'date' => 'Mei 2026',
                'desc' => 'Aplikasi asisten belanja cerdas berbasis AI (#juaravibecoding) yang dibangun menggunakan TypeScript dan integrasi Google Gemini API (Google AI Studio) untuk perbandingan belanja hemat, rekomendasi anggaran, dan analisis efisiensi pengeluaran.',
                'tags' => ['TypeScript', 'Google Gemini API', 'AI Studio', 'Smart Budgeting'],
                'status' => 'Selesai',
                'github_url' => 'https://github.com/rofiqsyf/BijakBelanja',
                'demo_url' => null,
            ],
            [
                'title' => 'SAQUNA (Sistem Akademik Universitas Sains Al-Qur\'an)',
                'category' => 'Proyek Web',
                'date' => 'Mei – Juni 2026',
                'desc' => 'Pengembangan portal sistem akademik kampus UNSIQ berbasis PHP untuk administrasi perkuliahan, pengelolaan jadwal kuliah, data mahasiswa, serta pencatatan nilai dan Kartu Hasil Studi (KHS).',
                'tags' => ['PHP', 'MySQL', 'Sistem Akademik', 'UNSIQ'],
                'status' => 'Selesai',
                'github_url' => 'https://github.com/rofiqsyf/SAQUNA',
                'demo_url' => null,
            ],
            [
                'title' => 'Analisis Sentimen Aplikasi JNN (Algoritma Naive Bayes)',
                'category' => 'Pelatihan & Sertifikasi',
                'date' => 'Juli 2026',
                'desc' => 'Riset komputasi dan analisis sentimen ulasan pengguna aplikasi JNN pada Google Play Store menggunakan algoritma Machine Learning Naive Bayes, preprocessing teks (tokenizing, filtering, stemming), dan visualisasi matriks evaluasi akurasi.',
                'tags' => ['Python', 'Jupyter Notebook', 'Naive Bayes', 'NLP', 'Data Science'],
                'status' => 'Selesai',
                'github_url' => 'https://github.com/rofiqsyf/Analisis-Sentimen-Aplikasi-JNN-Menggunakan-Algoritma-Naive-Bayes',
                'demo_url' => null,
            ],
            [
                'title' => 'Praktik Kerja Lapangan di PT Dieng Cyber Indonesia',
                'category' => 'Proyek Web',
                'date' => 'Maret – Mei 2023',
                'desc' => 'Melaksanakan pembuatan artikel website resmi, praktikum PHP Native & PHP Framework, administrasi jaringan Mikrotik & Linux Debian, pembuatan desain tampilan website berbasis Figma, serta penawaran jasa pembuatan website instansi & e-commerce.',
                'tags' => ['PHP Framework', 'Mikrotik', 'Linux Debian', 'Figma', 'Web Development'],
                'status' => 'Selesai',
                'github_url' => null,
                'demo_url' => null,
            ],
            [
                'title' => 'Pelatihan BLK & Sertifikasi BNSP Desainer Grafis Muda',
                'category' => 'Pelatihan & Sertifikasi',
                'date' => 'Juli – Agustus 2023',
                'desc' => 'Mengikuti pelatihan kejuruan Desainer Grafis Muda di Balai Latihan Kerja Wonosobo. Menguasai CorelDraw, Photoshop, Illustrator, pembuatan logo, tipografi, gambar ilustrasi, iklan, dan kemasan produk, serta resmi memperoleh Sertifikat Kompetensi BNSP.',
                'tags' => ['BNSP Certified', 'CorelDraw', 'Photoshop', 'Illustrator', 'Branding'],
                'status' => 'Tersertifikasi',
                'github_url' => null,
                'demo_url' => null,
            ],
            [
                'title' => 'Bimtek Wirausaha Service Komputer/Laptop Kemenperin RI',
                'category' => 'Pelatihan & Sertifikasi',
                'date' => 'Agustus 2023',
                'desc' => 'Bimbingan teknis service laptop dan komputer oleh Kementerian Perindustrian. Menganalisis kerusakan perangkat keras/lunak sesuai prosedur, perbaikan berbasis SOP, serta pengujian kelayakan operasional perangkat (testing).',
                'tags' => ['Kemenperin', 'Hardware Repair', 'Troubleshooting', 'Quality Testing'],
                'status' => 'Tersertifikasi',
                'github_url' => null,
                'demo_url' => null,
            ],
            [
                'title' => 'Bootcamp Telkom DigiUp Digital Graphic Designer',
                'category' => 'Pelatihan & Sertifikasi',
                'date' => 'Oktober 2023',
                'desc' => 'Bootcamp intensif desain grafis digital, meliputi implementasi prinsip-prinsip desain, rancangan materi visual promosi, logo, brosur, poster event, serta uji kompetensi sertifikasi profesi BNSP.',
                'tags' => ['Telkom DigiUp', 'Graphic Design', 'Visual Campaign', 'BNSP'],
                'status' => 'Tersertifikasi',
                'github_url' => null,
                'demo_url' => null,
            ],
            [
                'title' => 'Ketua Panitia DiscoverIT 2025 & Staff PSDM HIMTI UNSIQ',
                'category' => 'Komunitas & Berbagi',
                'date' => 'Oktober 2025',
                'desc' => 'Memimpin dan mengoordinasi lebih dari 25 panitia dan 12 relawan menyelenggarakan rangkaian orientasi mahasiswa baru bagi 135 peserta. Aktif merancang program pelatihan keilmuan dan kaderisasi mahasiswa.',
                'tags' => ['Leadership', 'Event Organizer', 'HIMTI UNSIQ', 'Teamwork', 'PSDM'],
                'status' => 'Aktif',
                'github_url' => null,
                'demo_url' => null,
            ],
            [
                'title' => 'Staff Ahli Media Kreatif Kamadiksi KIP-K & Admin WLC',
                'category' => 'Komunitas & Berbagi',
                'date' => 'Januari 2025 – Sekarang',
                'desc' => 'Menyusun strategi konten visual platform media sosial, memproduksi feed harian dan stories edukatif, serta menjaga konsistensi identitas visual organisasi kemahasiswaan dan komunitas literasi.',
                'tags' => ['Social Media', 'Creative Design', 'Visual Identity', 'Kamadiksi', 'WLC'],
                'status' => 'Aktif',
                'github_url' => null,
                'demo_url' => null,
            ]
        ];

        return view('activities', compact('activities'));
    }

    /**
     * Halaman Kontak
     */
    public function contact()
    {
        $contactInfo = [
            'email' => 'rofiqsyf@mhs.unsiq.ac.id',
            'phone' => '+62 858-7899-1811',
            'whatsapp' => '6285878991811',
            'location' => 'Wonosobo, Jawa Tengah, Indonesia',
            'github' => 'https://github.com/rofiqsyf',
            'linkedin' => 'https://www.linkedin.com/in/rofiq-syaifurrohman',
            'instagram' => 'https://instagram.com/rofiqsyf',
            'availability' => 'Senin - Sabtu (08:00 - 18:00 WIB)'
        ];

        return view('contact', compact('contactInfo'));
    }

    /**
     * Memproses Pengiriman Pesan Kontak
     */
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'subjek' => 'required|string|max:150',
            'pesan' => 'required|string|min:10|max:2000',
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'email.required' => 'Alamat email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'subjek.required' => 'Subjek pesan wajib diisi.',
            'pesan.required' => 'Isi pesan wajib diisi.',
            'pesan.min' => 'Pesan minimal terdiri dari 10 karakter.',
        ]);

        // Dalam implementasi nyata, pesan dapat disimpan ke DB atau dikirim via Mailable
        return redirect()->route('contact')
            ->with('success', 'Terima kasih, ' . e($validated['nama']) . '! Pesan Anda telah berhasil terkirim. Saya akan segera menghubungi Anda.');
    }

    /**
     * Mengunduh Berkas CV (Curriculum Vitae) PDF
     */
    public function downloadCv()
    {
        $filePath = public_path('document/CV_RofiqSyaifurrohman.pdf');

        if (!file_exists($filePath)) {
            abort(404, 'Berkas CV belum tersedia di direktori penyimpanan.');
        }

        return response()->download($filePath, 'CV_Rofiq_Syaifurrohman.pdf', [
            'Content-Type' => 'application/pdf',
        ]);
    }
}

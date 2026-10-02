# Dokumentasi Lengkap Pengembangan Web Portofolio
**Pengembang:** Rofiq Syaifurrohman  
**Framework:** Laravel 12  
**Direktori Proyek:** `d:/laravel_rofiq/laravel - Copy`  
**Pembaruan Terakhir:** September 2026  

---

## 1. Ringkasan Proyek
Proyek ini merupakan pengembangan website portofolio profesional berbasis **Laravel 12** yang dirancang dengan antarmuka modern (*dark tech palette* & *glassmorphism*), responsif, dan interaktif. Data diri, pengalaman kerja, pendidikan, riwayat organisasi, serta kompetensi teknis di dalam website ini telah **disinkronkan 100% dengan berkas resmi Curriculum Vitae** (`public/document/CV_RofiqSyaifurrohman.pdf`).

Website ini memiliki 4 halaman utama dan 1 fitur unduh dokumen:
1. **Halaman Beranda (`/`):** Menyajikan headline perkenalan resmi, status akademik, sertifikasi BNSP, statistik ringkasan, tombol Call-to-Action (termasuk tombol Unduh CV), kartu foto dinamis, dan kompetensi utama.
2. **Halaman Data Diri & Foto (`/tentang-saya`):** Menyajikan foto profil developer, biografi resmi sesuai CV, tabel biodata komprehensif, daftar software & tools kerja, visualisasi bar penguasaan keahlian teknis (*skill bars*), riwayat pendidikan formal, dan kartu rekam jejak organisasi & kepemimpinan.
3. **Halaman Aktivitas (`/aktivitas`):** Menyajikan rekam jejak nyata berupa Praktik Kerja Lapangan di industri, pelatihan kejuruan & sertifikasi profesi BNSP, bimbingan teknis Kemenperin, kepemimpinan kepanitiaan kampus, serta kontribusi divisi media kreatif komunitas. Dilengkapi filter kategori dinamis interaktif.
4. **Halaman Kontak (`/kontak`):** Menyediakan saluran komunikasi langsung (Email resmi, WhatsApp dengan direct chat generator, lokasi domisili Wonosobo, jam respon), media sosial terverifikasi, serta formulir pengiriman pesan langsung dengan validasi data dan feedback session.
5. **Fitur Unduh CV (`/download-cv`):** Fitur langsung untuk mengunduh dokumen resmi Curriculum Vitae (PDF) secara instan melalui server backend Laravel.

---

## 2. Struktur Berkas Proyek

```
laravel - Copy/
├── app/
│   └── Http/
│       └── Controllers/
│           └── PortfolioController.php          [DIPERBARUI] Controller data CV & method downloadCv()
├── public/
│   ├── css/
│   │   └── style.css                            [DIPERBARUI] Styling kustom modern (Glassmorphism & Responsif)
│   ├── document/
│   │   └── CV_RofiqSyaifurrohman.pdf            [SUMBER DATA] Berkas resmi Curriculum Vitae
│   └── images/
│       ├── profile.jpeg                         [ASSET] Foto profil developer
│       └── profile.jpg                          [ASSET] Cadangan foto profil
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php                    [DIPERBARUI] Master layout (Navbar + Tombol Unduh CV, Footer)
│       ├── home.blade.php                       [DIPERBARUI] View Beranda (Hero + Tombol Unduh CV)
│       ├── about.blade.php                      [DIPERBARUI] View Data Diri (Sinkron CV, Tools, Organisasi, Unduh CV)
│       ├── activities.blade.php                 [DIPERBARUI] View Aktivitas & Rekam Jejak Sinkron CV
│       └── contact.blade.php                    [DIPERBARUI] View Kontak & Formulir Pesan
├── routes/
│   └── web.php                                  [DIPERBARUI] Pendaftaran rute web & rute download-cv
└── DOKUMENTASI_PORTOFOLIO.md                    [DIPERBARUI] Dokumentasi resmi sistem
```

---

## 3. Rincian Pembaruan Sistem Sesuai CV Resmi

### A. Penyelarasan Profil Sesuai Isi CV (`CV_RofiqSyaifurrohman.pdf`)
* **Nama Lengkap:** Rofiq Syaifurrohman
* **Panggilan:** Rofiq
* **Domisili:** Wonosobo, Jawa Tengah, Indonesia
* **Kontak Email:** `rofiqsyf@mhs.unsiq.ac.id` (Email Resmi Kampus UNSIQ)
* **Nomor Telepon / WhatsApp:** `+62 858-7899-1811` / `085878991811`
* **Status Profesional:** Terbuka untuk Peluang Magang / Entry-Level / Proyek
* **Ringkasan Biografi:**
  > *"Lulusan Teknik Komputer dan Jaringan (TKJ) SMK Negeri 1 Wonosobo yang sedang menempuh pendidikan S1 Teknik Informatika di Universitas Sains Al-Qur'an (UNSIQ). Berpengalaman dalam instalasi, konfigurasi, dan pemeliharaan jaringan serta mampu melakukan troubleshooting perangkat keras dan lunak secara efektif. Studi yang sedang berjalan memberikan pemahaman tambahan mengenai pemrograman dan pengembangan sistem untuk mendukung penyelesaian masalah yang lebih sistematis. Termotivasi untuk mengimplementasikan kompetensi teknis dan akademis dalam mengembangkan ilmu di posisi magang atau entry-level untuk dapat berkontribusi secara positif bagi perusahaan."*

### B. Riwayat Pendidikan Formal
1. **S1 Teknik Informatika - Universitas Sains Al-Qur’an (UNSIQ), Wonosobo**
   - *Periode:* Sept 2024 – Sekarang (Aktif)
   - *Fakultas:* Fakultas Teknik dan Ilmu Komputer (Fastikom)
   - *Fokus:* Rekayasa sistem perangkat lunak, arsitektur basis data, algoritma, dan komputasi sistematis.
2. **Teknik Komputer dan Jaringan (TKJ) - SMK Negeri 1 Wonosobo**
   - *Periode:* Jul 2021 – Mei 2024 (Lulus)
   - *Fokus:* Instalasi dan konfigurasi server Linux Debian serta Mikrotik, perakitan komputer, pemeliharaan infrastruktur jaringan, dan troubleshooting hardware/software.

### C. Kompetensi, Sertifikasi & Alat Kerja
* **Sertifikasi BNSP:** Sertifikat Kompetensi Badan Nasional Sertifikasi Profesi untuk Kejuruan Desainer Grafis Muda (Balai Latihan Kerja Wonosobo & Bootcamp Telkom DigiUp).
* **Bimtek Kemenperin:** Bimbingan Teknis Service Komputer/Laptop oleh Kementerian Perindustrian (analisis masalah, reparasi berbasis SOP, dan testing).
* **Software & Tools Kerja:**
  - *Desain & Grafis:* CorelDraw, Figma, Adobe Photoshop, Adobe Illustrator, Affinity.
  - *Code Editor & IDE:* VS Code, Antigravity IDE, Sublime Text.
  - *Jaringan & Sistem:* Mikrotik Winbox, Linux Debian.
  - *Office & Data:* Microsoft Office (Word, Excel, PowerPoint), SPSS (Basic Statistics).

### D. Rekam Jejak Pengalaman Organisasi & Kepemimpinan
1. **Ketua Panitia DiscoverIT 2025 & Staff PSDM HIMTI UNSIQ (Januari 2025 – Sekarang):** Memimpin 25+ panitia dan 12 relawan menyelenggarakan masa orientasi 135 mahasiswa baru Fastikom UNSIQ.
2. **Staff Ahli Divisi Media Kreatif Kamadiksi KIP-K Wonosobo (Januari 2025 – Sekarang):** Mengelola kalender konten bulanan, strategi konten visual, dan identitas visual media sosial.
3. **Divisi Media Kreatif (Admin) Wonosobo Literacy Club (Maret 2025 – Sekarang):** Memproduksi konten visual harian edukatif dan media komunikasi literasi.

### E. Portofolio Proyek Terpublikasi di GitHub (@rofiqsyf)
Seluruh proyek yang tercatat di repositori GitHub `https://github.com/rofiqsyf?tab=repositories` telah diintegrasikan ke dalam halaman Aktivitas:
1. **Portal E-PPID PT Bhakti Husada Wonosobo (Perseroda):** Layanan Keterbukaan Informasi Publik (KIP) BUMD Wonosobo (Laravel 11/12, Blade, Clean Code).
2. **LMS UNSIQ (Enterprise Learning Management System):** Platform e-learning kampus berarsitektur PHP Native MVC, PSR-4 Autoloading, dan MySQL PDO.
3. **SIMPEKAB JOMOKERTO:** Sistem Informasi Manajemen Kepegawaian Kabupaten Jomokerto berbasis PHP & MySQL dengan Role-Based Access Control (RBAC).
4. **Portal Keketatan SNPMB v3.0:** Portal analitik komparasi keketatan SNBT & SNBP perguruan tinggi negeri se-Indonesia (HTML5, CSS3, JS, Live Demo GitHub Pages).
5. **PhotoIn Photobooth:** Aplikasi web photobooth interaktif modern sisi peramban dengan dukungan dual camera WebRTC, filter kreatif, dan ekspor instan.
6. **BijakBelanja (AI Smart Shopping Assistant):** Aplikasi perencanaan belanja dan analisis anggaran berbasis TypeScript & Google Gemini API (#juaravibecoding).
7. **SAQUNA:** Sistem Informasi Akademik Universitas Sains Al-Qur'an berbasis PHP & MySQL untuk administrasi perkuliahan dan KHS.
8. **Analisis Sentimen Aplikasi JNN:** Riset Machine Learning Naive Bayes untuk analisis ulasan aplikasi pada Google Play Store berbasis Python/Jupyter Notebook.

---

## 4. Implementasi Fitur Baru: Unduh Berkas CV (Download CV)

Fitur unduh CV dirancang agar pengunjung/klien dapat mengunduh berkas fisik PDF Curriculum Vitae secara instan dan aman.

### A. Rute Web (`routes/web.php`)
```php
// Fitur Unduh CV
Route::get('/download-cv', [PortfolioController::class, 'downloadCv'])->name('cv.download');
```

### B. Logika Controller (`PortfolioController.php`)
```php
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
```

### C. Penempatan Tombol Unduh CV pada Tampilan Antarmuka
1. **Navbar Header (`app.blade.php`):** Ditambahkan tombol primer `Unduh CV` di pojok kanan navigasi, dapat diakses dari halaman mana pun.
2. **Hero Section Beranda (`home.blade.php`):** Ditempatkan sebagai tombol Call-to-Action utama berdampingan dengan tombol navigasi lainnya.
3. **Sidebar Profil Data Diri (`about.blade.php`):** Ditempatkan di bawah foto profil sebagai tombol aksi tercepat.
4. **Footer Situs (`app.blade.php`):** Ditambahkan tautan download CV pada baris menu navigasi bawah.

---

## 5. Rangkuman Daftar Rute Aplikasi

| Metode | URL | Nama Rute | Controller & Method | Keterangan |
| :--- | :--- | :--- | :--- | :--- |
| `GET` | `/` | `home` | `PortfolioController@index` | Halaman Beranda (Hero & Ringkasan) |
| `GET` | `/tentang-saya` | `about` | `PortfolioController@about` | Data Diri, Bio, Skills, Edukasi & Organisasi |
| `GET` | `/aktivitas` | `activities` | `PortfolioController@activities` | Rekam Jejak, Proyek, Sertifikasi & Pelatihan |
| `GET` | `/kontak` | `contact` | `PortfolioController@contact` | Info Kontak & Formulir Pesan |
| `POST` | `/kontak` | `contact.submit` | `PortfolioController@submitContact` | Validasi & Pengiriman Formulir Pesan |
| `GET` | `/download-cv` | `cv.download` | `PortfolioController@downloadCv` | Mengunduh CV PDF (`CV_Rofiq_Syaifurrohman.pdf`) |

---

## 6. Pengujian & Validasi Teknis

* **Kompilasi Template Blade (`php artisan view:cache`):** Status **OK / Sukses**.
* **Pengecekan Keberadaan Berkas Fisik CV:** Berkas `public/document/CV_RofiqSyaifurrohman.pdf` berstatus **Tersedia (True)**.
* **Pembersihan Cache Tampilan (`php artisan view:clear`):** Berhasil dijalankan tanpa galat.
* **Daftar Rute Laravel (`php artisan route:list`):** Seluruh 6 rute utama portofolio terdaftar dan terikat pada controller dengan tepat.

---

## 7. Panduan Menjalankan Aplikasi

Jalankan perintah berikut pada terminal PowerShell:

```powershell
# 1. Pindah ke direktori proyek
cd "d:\laravel_rofiq\laravel - Copy"

# 2. Jalankan server Laravel
php artisan serve
```

Akses melalui web browser:
* **Beranda:** [http://127.0.0.1:8000](http://127.0.0.1:8000)
* **Data Diri:** [http://127.0.0.1:8000/tentang-saya](http://127.0.0.1:8000/tentang-saya)
* **Aktivitas:** [http://127.0.0.1:8000/aktivitas](http://127.0.0.1:8000/aktivitas)
* **Kontak:** [http://127.0.0.1:8000/kontak](http://127.0.0.1:8000/kontak)
* **Unduh CV Langsung:** [http://127.0.0.1:8000/download-cv](http://127.0.0.1:8000/download-cv)

---

## 8. Log Riwayat Pembaruan Sistem

* **28 September 2026 (Integrasi Proyek Repositori GitHub pada Halaman Aktivitas):**
  - Mengambil dan mengintegrasikan 8 proyek unggulan dari profil GitHub resmi `rofiqsyf` (`https://github.com/rofiqsyf?tab=repositories`) ke dalam controller `PortfolioController@activities`.
  - Menambahkan tautan tombol langsung menuju repositori GitHub masing-masing proyek (`github_url`) dan tombol Live Demo (`demo_url`) untuk proyek yang memiliki demo langsung (seperti Portal Keketatan SNPMB di GitHub Pages).
  - Memperbarui badge profil GitHub dan penghitung proyek pada filter interaktif di `activities.blade.php`.
  - Memperbarui metrik statistik di halaman Beranda menjadi `11+ Repositori & Proyek`.
* **28 September 2026 (Pembaruan Email Kampus):**
  - Mengubah seluruh kontak email pada sistem ([PortfolioController.php](file:///d:/laravel_rofiq/laravel%20-%20Copy/app/Http/Controllers/PortfolioController.php), halaman Data Diri, dan halaman Kontak) menjadi email kampus resmi: `rofiqsyf@mhs.unsiq.ac.id`.
  - Memperbarui dokumentasi terkait rincian kontak resmi.
* **28 September 2026 (Sinkronisasi CV & Fitur Unduh CV):**
  - Sinkronisasi data profil, pendidikan, dan rekam jejak sesuai berkas fisik `public/document/CV_RofiqSyaifurrohman.pdf`.
  - Pembuatan fitur dan rute `GET /download-cv` (`route('cv.download')`) beserta tombol pada Navbar, Beranda, Data Diri, dan Footer.


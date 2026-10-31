# Trial Rizal — maintenance Falcon

Child theme untuk Falcon Theme. Source ini tidak mengaktifkan theme, membuat Page, atau mengubah homepage. Ini versi awal yang belum diterima di WordPress hosting. Tampilan berasal dari referensi HTML yang diberikan; email sengaja tidak ditampilkan.

## Menyiapkan konten untuk trial

Di Falcon Content Builder, buat field group untuk **Page**. Buat field berikut secara manual (import schema dari paket belum didukung). Set setiap field sebagai **public**, tidak wajib, dengan default kosong. Jangan mengubah field existing yang memakai key sama tanpa memeriksa kontraknya. Nilai kosong tidak ditampilkan. Field publik dapat dibaca melalui jalur publik Falcon; jangan mengisinya dengan informasi rahasia.

| Key | Jenis | Isi referensi awal untuk trial |
|---|---|---|
| `rm_hero_title` | text | Rizal Maulana |
| `rm_brand_suffix` | text | Engineering |
| `rm_tagline` | text | Precision in Every Structure |
| `rm_profession_1` | text | Structural Engineer |
| `rm_profession_2` | text | Civil Engineering Lecturer |
| `rm_profession_3` | text | Researcher |
| `rm_whatsapp` | URL | https://wa.me/628186360014 |
| `rm_line_1` | text | The full experience is being crafted |
| `rm_line_2` | text | with the same care as every structure I design. |
| `rm_launch` | text | Launching Soon |
| `rm_instagram` | URL | https://www.instagram.com/rizalmaulana13/ |
| `rm_footer` | text | © 2025 Rizal Maulana Engineering |
| `rm_domain` | text | rizalmaulana.id |

Judul Page dapat tetap `maintenance`, sedangkan teks hero diisi terpisah melalui `rm_hero_title`. Jika field hero belum ada atau kosong, judul Page dipakai sebagai fallback. Pilih named template **Rizal Maintenance**. Data pada tabel merupakan isi referensi yang perlu ditinjau pemilik; bukan otomatis dibuat atau diverifikasi. Falcon memakai classic editor untuk tipe yang memiliki field Falcon. Bila field belum dibuat/diisi, bagian terkait kosong. Email tidak memiliki field atau tombol pada versi ini.

Untuk beranda, manusia memilih Page tersebut sebagai static homepage di WordPress dan memilih template yang sama. Child `front-page.php` menangani assignment itu; untuk pilihan lain ia meneruskan ke parent Falcon Theme. Review perubahan homepage dan theme di staging terlebih dahulu. Template meminta noindex melalui `wp_robots`.

## Font dan motion

Roboto dimuat dari Google Fonts; jika tidak tersedia, browser memakai sans-serif fallback dan tampilan dapat berbeda. Ini memerlukan akses jaringan dari browser dan pemeriksaan privasi/lisensi sebelum distribusi. Builder proyek alpha.19 tidak memaketkan file font atau JS mandiri; motion didaftarkan sebagai inline script melalui WordPress dari file PHP yang terdaftar dalam runtime. Preferensi reduced motion menghentikan animasi. Indikator memakai panah seperti yang terlihat pada referensi browser.

## Build dan distribusi

Gunakan builder Falcon yang cocok dengan source ini, dengan output di luar source. `project.json` menggunakan project ID dan theme slug `trialrizal`, versi `0.1.0-alpha.3`, parent `falcon-theme`, dan batas kompatibilitas konservatif sesuai baseline. Setelah source di-commit dan bersih, build manifest/ZIP, periksa isi dan unggah keduanya ke GitHub Release dengan tag yang cocok (`v0.1.0-alpha.3`). Falcon memerlukan manifest dari source bersih untuk instalasi remote. Build dari checkout tanpa commit hanyalah pemeriksaan lokal. Publish/upload, instalasi, aktivasi theme, dan perubahan homepage membutuhkan instruksi terpisah.

## Pemeriksaan yang masih diperlukan

Uji render WordPress lokal, perbandingan browser dengan referensi di desktop dan HP, isi panjang/kosong, validasi link, keyboard, reduced motion, preview dan pengaturan static homepage; lalu uji distribusi release di staging. Jangan menyatakan hasil identik atau pemasangan hosting berhasil sebelum pengujian tersebut selesai.

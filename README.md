# Trial Rizal — maintenance Falcon

Child theme `trialrizal` alpha.5, parent `falcon-theme`. Memerlukan FP minimal alpha.22 dan FT minimal alpha.7, keduanya di bawah 0.2.0. Prerelease untuk local/staging; versi dan kesiapan hosting diperiksa terpisah.

## Setup dengan blueprint

1. Pasang paket melalui alur Falcon yang kompatibel; preview lalu aktifkan child theme secara eksplisit.
2. Falcon → Halaman & Desain → Setup website dari paket.
3. Petakan role `maintenance` ke Page existing bila ada, atau pilih draft baru. Pilih struktur paket jika ingin memakai template Rizal Maintenance.
4. Review definisi, lalu konfirmasi Apply. Blueprint membawa 13 field publik optional, khusus Page role maintenance. Nilai referensi berasal dari HTML awal dan perlu review pemilik. Default tidak menimpa nilai existing.
5. Edit Page: periksa hero, tagline, profesi, WhatsApp, pesan coming soon, Instagram, copyright, dan domain. Semua field beserta default ada di `falcon-blueprint.json`. Email tetap belum ditampilkan sesuai versi sebelumnya.
6. Preview desktop/HP/keyboard, lalu pilih homepage dan publish secara manual. Template meminta noindex tanpa mengubah visibility seluruh situs.

Judul Page boleh Maintenance dan slug boleh berbeda; hero menggunakan `rm_hero_title` dengan fallback judul Page, suffix menggunakan `rm_brand_suffix`. Body native tidak dirender template maintenance. SEO title/canonical mengikuti owner WordPress/FT, tidak diturunkan dari hero secara paksa. Tidak ada form pengiriman.

## Migrasi alpha.3

Key 13 field `rm_*` dan named template tetap dipertahankan. Sebelum Apply, periksa group manual existing. Jika key sudah dimiliki group lama, pertahankan definisi/nilai existing dan review konflik; jangan membuat group duplikat atau menghapus data untuk memaksa setup. Group existing global yang dipertahankan dapat tetap tampil pada Page lain; pembatasan role baru memerlukan review pengelola. Update ZIP tidak otomatis menjalankan blueprint. Field private/tidak berlaku tidak dirender, melalui helper resmi `FalconTheme\field`.

## Aset dan fallback

CSS dan JavaScript di-enqueue melalui WordPress; motion kini `assets/motion.js`, tanpa runtime bundle HTML/React. Reduced motion menonaktifkan gerak saat halaman dimuat; tanpa JavaScript isi tetap terlihat. Roboto masih memakai Google Fonts seperti alpha.3; memerlukan jaringan dan review lisensi/privasi sebelum distribusi. Jika font gagal, gunakan sans-serif. Bila FP/helper tidak tersedia, template hanya memiliki fallback judul dan dekorasi, tanpa mengeluarkan private metadata.

## Build dan distribusi

Dari checkout core Falcon yang cocok:

```sh
npm run build:project -- --source /absolute/path/trialrizal --output /absolute/path/output
```

Seluruh runtime terdaftar di `project.json`. Output harus di luar source. Build dari source dirty hanya preview lokal, tidak memenuhi provenance release remote. Rilis berikutnya perlu commit bersih, build ulang dan ZIP/manifest yang cocok. GitHub Actions kini membuat prerelease otomatis pada push main. Naikkan versi di project.json dan falcon-blueprint.json, tambah release-notes/<versi>.md, commit lalu push. Tidak perlu upload ZIP/manifest manual. Rilis existing tidak ditimpa; perubahan berikutnya memerlukan versi baru. Pemasangan paket, aktivasi, Apply blueprint dan publish adalah langkah terpisah.

## Validasi

Build resmi memeriksa kontrak paket/blueprint. Uji render WordPress, migrasi group existing, setup idempotent, nilai kosong/panjang, static homepage, noindex, private/password-protected, desktop/HP/keyboard dan distribusi receiver tetap perlu bukti tersendiri. Lihat catatan validasi di luar runtime; jangan menganggap build lulus berarti hosting lulus.

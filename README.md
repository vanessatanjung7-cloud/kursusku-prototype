# KursusKu Prototype

Proyek Praktikum Pemrograman Web III / Bahasa Pemrograman III (PHP & MySQL).
Prodi Pendidikan Teknik Informatika dan Komputer (PTIK) - UIN Sjech M. Djamil Djambek Bukittinggi.

## Rumus Bisnis Estimasi Biaya (Minggu 3)
- **Subtotal**: `biaya_per_peserta * jumlah_peserta`
- **Diskon**: `subtotal * persen_diskon / 100`
- **Total Akhir**: `subtotal - diskon + biaya_admin`

## Fitur Pertemuan 4
- Katalog Kursus berbasis Array PHP (6 Kursus).
- Fungsi Reusable Helpers:
  1. `rupiah()`: Menformat integer angka ke Format Rupiah.
  2. `statusKursus()`: Menentukan status kursus ('Tersedia' atau 'Penuh').
  3. `sisaKursi()`: Menghitung sisa kursi tersisa (`quota - registered`).
  4. `formatTanggal()`: Mengubah format tanggal ISO (`YYYY-MM-DD`) menjadi `DD-MM-YYYY`.
- Pengujian fungsi otomatis via `test-functions.php` (6 PASS).
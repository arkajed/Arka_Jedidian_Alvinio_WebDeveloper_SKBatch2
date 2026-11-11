# Recruitment Landing Page - Sekolah Karir Batch 2 (Web Developer)

Satu section landing page recruitment yang responsive, dibangun dengan **PHP 8.2+ dan Laravel 11**.

## Cara Menjalankan

Prasyarat: PHP 8.2+, Composer, dan Git (opsional).

1. Buat project Laravel baru:
   ```bash
   composer create-project laravel/laravel sekolahkarir-app
   cd sekolahkarir-app
   ```
2. Salin file-file dari repo ini ke project tersebut, dengan struktur yang sama:
   - `app/Http/Controllers/RecruitmentController.php`
   - `config/recruitment.php`
   - `routes/web.php` (ganti isi file default dengan isi file ini)
   - `resources/views/recruitment/index.blade.php`
   - `public/css/recruitment.css`
3. Jalankan server lokal:
   ```bash
   php artisan serve
   ```
4. Buka `http://127.0.0.1:8000` di browser. Untuk mengecek responsivitas, gunakan DevTools (Ctrl+Shift+M / Cmd+Shift+M).

## Keputusan Utama

- **Konten dari config, bukan hardcode di view.** Headline, CTA, dan daftar role disimpan di `config/recruitment.php`. Dengan begitu, copy bisa diubah tanpa menyentuh template, dan tidak perlu database untuk scope sekecil ini.
- **Mock data saja.** Tidak ada data pribadi atau data nyata perusahaan.
- **Controller tipis.** `RecruitmentController` hanya mengambil config dan meneruskannya ke view. Logika tampilan tetap di Blade.
- **CSS biasa, tanpa build step.** Tidak memakai Vite atau Tailwind agar reviewer bisa langsung menjalankan project tanpa `npm install`. Trade-off-nya, styling tidak memakai utility class.
- **Mobile-first.** Default 1 kolom, lalu 2 kolom di tablet (≥640px) dan 3 kolom di desktop (≥1024px) dengan media query.
- **Semantik dan aksesibilitas dasar.** Memakai `section`, `article`, `h1`/`h2`, `aria-labelledby`, `aria-label` pada tombol, dan `focus-visible` untuk navigasi keyboard.
- **Desain tombol CTA.** Tombol utama di hero dan tombol per role menggunakan style yang berbeda agar hierarki visual jelas.

## Catatan Penggunaan AI

- Tool: Claude
- Bagaimana membantu: Menyusun struktur awal project, draft CSS responsive, dan review README
- Bagian yang saya ubah dan pahami sendiri: Penyesuaian copy, breakpoint, dan struktur config

```markdown
# Instalasi dan Migrasi Proyek Laravel 11

Proyek ini adalah aplikasi Laravel 11 yang berfokus pada cara melakukan instalasi dan migrasi database. Petunjuk di bawah ini akan membimbing Anda melalui proses instalasi dan migrasi database.

## Langkah-langkah Instalasi

1. **Clone repositori**  
   Clone repositori yang ada dengan menjalankan perintah berikut:

   ```bash
   git clone https://github.com/username/nama-repo.git
   ```

2. **Masuk ke direktori proyek**  
   Pindah ke direktori proyek yang sudah di-clone:

   ```bash
   cd nama-repo
   ```

3. **Instalasi dependensi Laravel**  
   Instal dependensi yang diperlukan dengan Composer. Pastikan Composer sudah terinstal di sistem Anda:

   ```bash
   composer install
   ```

4. **Salin file `.env`**  
   Salin file `.env.example` menjadi `.env` untuk konfigurasi lingkungan:

   ```bash
   cp .env.example .env
   ```

5. **Konfigurasi database**  
   Sesuaikan pengaturan database di file `.env` dengan konfigurasi database lokal Anda:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database
   DB_USERNAME=root
   DB_PASSWORD=password
   ```

6. **Generate application key**  
   Generate application key dengan perintah berikut:

   ```bash
   php artisan key:generate
   ```

## Migrasi Database

Setelah konfigurasi selesai, ikuti langkah-langkah berikut untuk memigrasikan database:

1. **Jalankan migrasi**  
   Migrasikan skema database dengan perintah:

   ```bash
   php artisan migrate
   ```

2. **Jalankan server lokal**  
   Setelah migrasi selesai, jalankan aplikasi Laravel di server lokal:

   ```bash
   php artisan serve
   ```

   Aplikasi dapat diakses di [http://localhost:8000](http://localhost:8000).

## Cara Mengunggah Perubahan ke GitHub

Jika Anda ingin mengunggah perubahan ke GitHub setelah melakukan instalasi dan migrasi, ikuti langkah-langkah berikut:

1. **Tambahkan file ke staging**  
   Tambahkan semua perubahan ke staging area:

   ```bash
   git add .
   ```

2. **Commit perubahan**  
   Commit perubahan dengan pesan yang jelas:

   ```bash
   git commit -m "Instalasi Laravel dan migrasi database"
   ```

3. **Push perubahan ke repositori GitHub**  
   Push perubahan ke branch `main` atau `master`:

   ```bash
   git push origin main
   ```

   Jika menggunakan branch `master`:

   ```bash
   git push origin master
   ```

## Catatan

- Pastikan Anda memiliki Composer dan PHP yang sudah terinstal di sistem.
- Konfigurasi database bisa diubah sesuai kebutuhan proyek, misalnya MySQL, PostgreSQL, atau SQLite.
```

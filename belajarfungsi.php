<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="UTF-8">
    <title>Aplikasi Sederhana Penerapan Fungsi</title>
</head>
<body>
<h1>Aplikasi Sederhana Penerapan Fungsi</h1>

<?php
function hitungVolumeKubus($sisi1,$sisi2,$sisi3) {
    return($sisi1*$sisi2*$sisi3);
}

$sisi1=10;
$sisi2=20;
$sisi3=10;

$Volume=hitungVolumeKubus($sisi1,$sisi2,$sisi3);

echo"volume kubus dengan sisi1 $sisi1, sisi2 $sisi2, dan sisi3 $sisi3 adalah $Volume ";
?>
</body>
</html> 

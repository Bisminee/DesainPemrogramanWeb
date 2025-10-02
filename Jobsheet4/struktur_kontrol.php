<?php
$nilaiNumerik = 92;

if($nilaiNumerik >= 90 && $nilaiNumerik <=100){
    echo "Nilai huruf: A";
} elseif($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai huruf: B";
} elseif($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf: C";
} elseif($nilaiNumerik < 70){
    echo "Nilai huruf: D";
}

//-----------------------------------------

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "<br>Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

//-----------------------------------------

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i < $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "<br>Jumlah buah yang akan dipanen adalah: $jumlahBuah";

//-----------------------------------------

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach($skorUjian as $skor){
    $totalSkor += $skor;
}

echo "<br>Total skor ujian adalah: $totalSkor<br><br>";

//-----------------------------------------

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach($nilaiSiswa as $nilai){
    if($nilai < 60){
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

//-----------------------------------------

$nilaiMTKSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$max1 = 0;
$max2 = 0;
$min1 = 100;
$min2 = 100;
$nilaiTotal = 0;

foreach($nilaiMTKSiswa as $nilaiSiswa){
    //nilai terbesar
    foreach ($nilaiMTKSiswa as $nilai) {
        if ($nilai > $max1) {
            $max2 = $max1;
            $max1 = $nilai;
        } elseif ($nilai > $max2 && $nilai < $max1) {
            $max2 = $nilai;
        }
    }
    
    //nilai terkecil
    foreach ($nilaiMTKSiswa as $nilai) {
        if ($nilai < $min1) {
            $min2 = $min1;
            $min1 = $nilai;
        } elseif ($nilai < $min2 && $nilai > $min1) {
            $min2 = $nilai;
        }
    }
    
    if($nilaiSiswa != $max1 && $nilaiSiswa != $max2 && $nilaiSiswa != $min1 && $nilaiSiswa != $min2){
        $nilaiTotal += $nilaiSiswa;
    }
}

echo "<br>Rata-rata Nilai Total: " . $nilaiTotal/6;

//-----------------------------------------

$hargaProduk = 120000;
$diskon = 0;
if($hargaProduk > 100000){
    $diskon = 0.2;
}
$hargaBayar = $hargaProduk - ($hargaProduk * $diskon);

echo "<br><br>Barang anda memiliki harga: $hargaProduk<br>";
echo "Anda mendapatkan diskon: " . $diskon * 100 . "%<br>";
echo "Sehingga anda hanya membayar: $hargaBayar"

?>
<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "nilai a = $a<br>";
echo "nilai b = $b<br>";
echo "Hasil jumlah a dan b = $hasilTambah<br>";
echo "Hasil Kurang a dan b = $hasilKurang<br>";
echo "Hasil kali a dan b = $hasilKali<br>";
echo "Hasil bagi a dan b = $hasilBagi<br>";
echo "Hasil a pangkat b = $pangkat<br><br>";

echo "Nilai a = $a<br>";
echo "Nilai b = $b<br><br>";
echo "Hasil jika nilai a==b?: $hasilSama<br>";
echo "Hasil jika nilai a==b?: $hasilTidakSama<br>";
echo "Hasil jika nilai a==b?: $hasilLebihKecil<br>";
echo "Hasil jika nilai a==b?: $hasilLebihBesar<br>";
echo "Hasil jika nilai a==b?: $hasilLebihKecilSama<br>";
echo "Hasil jika nilai a==b?: $hasilLebihBesarSama<br><br>";

echo "Hasil logika and a && b = $hasilAnd<br>";
echo "Hasil logika and a || b = $hasilOr<br>";
echo "Hasil logika and !a = $hasilNotA<br>";
echo "Hasil logika and !b = $hasilNotB<br><br>";

echo "Nilai a = $a<br>";
echo "Nilai b = $b<br><br>";

$a += $b;
echo "nilai a+=b = $a<br>";
$a = 10;
$b = 5;

$a -= $b;
echo "nilai a-=b = $a<br>";
$a = 10;
$b = 5;

$a *= $b;
echo "nilai a*=b = $a<br>";
$a = 10;
$b = 5;

$a /= $b;
echo "nilai a/=b = $a<br>";
$a = 10;
$b = 5;

$a %= $b;
echo "nilai a%=b = $a<br>";
$a = 10;
$b = 5;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<br>Hasil ketika a identik dengan b: $hasilIdentik<br>";
echo "<br>Hasil ketika a tidak identik dengan b: $hasilTidakIdentik<br><br>";

$kursi = 45;
$kursiTerpakai = 28;
$persentaseKusrsiKosong = ($kursi-$kursiTerpakai) / $kursi * 100;
echo "Persentase kursi tersisa: " . $persentaseKusrsiKosong . "%";
?>
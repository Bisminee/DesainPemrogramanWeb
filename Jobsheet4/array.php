<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus) . "<br><br>";

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ' ,
$karyawanPengalamanLimaTahun) . "<br><br>";

$daftarNilai = [
    'Matematika' => [
        ['Alice',85],
        ['Bob',92],
        ['Charlie',78],
    ],
    'Fisika'=> [
        ['Alice',90],
        ['Bob',88],
        ['Charlie',75],
    ],
    'Kimia'=> [
        ['Alice',92],
        ['Bob',80],
        ['Charlie',85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai Mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

echo "<br>";

$daftarNilaiMTK = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$totalNilaiMTK = 0;
foreach ($daftarNilaiMTK as $nilaiMatematika){
    $totalNilaiMTK += $nilaiMatematika[1];
}
$rataRataNilai = $totalNilaiMTK/5;

echo "Daftar nilai Mahasiswa dalam mata kuliah Matematika yang di atas rata-rata: <br>";

foreach ($daftarNilaiMTK as $nilaiMatematika){
    if ($nilaiMatematika[1] >= $rataRataNilai) {
        echo "Nama: {$nilaiMatematika[0]}, Nilai: {$nilaiMatematika[1]} <br>";
    }
}
?>
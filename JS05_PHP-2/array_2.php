<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewpoint" content="width=device-width, initial">
        <title></title>
        <link rel="stylesheet" href="style_array_2.css">
    </head>
    <body>
        <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];

            echo "<table>";
            echo "<tr><th>NAMA</th><th>DOMISILI</th><th>Jenis Kelamin</th></tr>";
            echo "<tr><td>{$Dosen['nama']}</td>";
            echo "<td>{$Dosen['domisili']}</td>";
            echo "<td>{$Dosen['jenis_kelamin']}</td>";
            echo "</table>";
    ?>
    </body>
</html>
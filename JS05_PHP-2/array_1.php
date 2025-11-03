<!DOCTYPE html>
<html>

<head>

<body>
    <h2>Array Terindeks</h2>
    <?php
    $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
    $i = 0;
    while ($i < count($Listdosen)) {
        echo $Listdosen[$i] . "<br>";
        $i++;
    }
    ?>
</body>
</head>

</html>
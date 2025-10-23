<?php
include("db_connect.php");

// Ambil data dari view
$query = "SELECT nasabah_id, no_rekening, saldo FROM view_saldo_nasabah ORDER BY nasabah_id ASC";
$result = pg_query($conn, $query);

if (!$result) {
    die("Query gagal: " . pg_last_error($conn));
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Saldo Nasabah</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f2f4f7;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            width: 80%;
            background: white;
            padding: 20px 30px;
            border-radius: 16px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #0078d7;
            color: white;
        }
        tr:hover {
            background-color: #f1f7ff;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #0078d7;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Saldo Nasabah</h2>

        <table>
            <tr>
                <th>ID Nasabah</th>
                <th>No. Rekening</th>
                <th>Saldo</th>
            </tr>

            <?php
            if (pg_num_rows($result) > 0) {
                while ($row = pg_fetch_assoc($result)) {
                    $id = $row['nasabah_id'] ?? '';
                    $norek = $row['no_rekening'] ?? '';
                    $saldo = $row['saldo'] ?? 0;

                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($id) . "</td>";
                    echo "<td>" . htmlspecialchars($norek) . "</td>";
                    echo "<td>Rp " . number_format((float)$saldo, 2, ',', '.') . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3' style='text-align:center;'>Belum ada data</td></tr>";
            }

            pg_close($conn);
            ?>
        </table>

        <a href='index.html'>Kembali ke Beranda</a>
    </div>
</body>
</html>

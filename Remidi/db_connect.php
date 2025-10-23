<?php
$host = "localhost";
$port = "5432";
$dbname = "db_mobile_banking";
$user = "postgres";
$password = "Pvessadu04.$";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
  die("Koneksi gagal: " . pg_last_error());
}
?>

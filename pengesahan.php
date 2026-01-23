<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$harga = 2500;
$slot = $_POST['slot'];
$jumlah = $harga * $slot;
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Pengesahan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="confirm-box">
    <h2>Pengesahan Pendaftaran</h2>

    <p><strong>Nama:</strong> <?= $_POST['nama']; ?></p>
    <p><strong>Email:</strong> <?= $_POST['email']; ?></p>
    <p><strong>No Telefon:</strong> <?= $_POST['telefon']; ?></p>
    <p><strong>Kategori:</strong> <?= $_POST['kategori']; ?></p>
    <p><strong>Bilangan Slot:</strong> <?= $slot; ?></p>

    <hr>

    <p><strong>Harga satu slot:</strong> RM 2,500.00</p>
    <p><strong>Jumlah Yuran:</strong> RM <?= number_format($jumlah, 2); ?></p>

    <p style="color:green;"><strong>Pendaftaran berjaya!</strong></p>
</div>

</body>
</html>

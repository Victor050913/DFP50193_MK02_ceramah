<?php
$harga_unit = 2500;
$slot = $_POST['slot'];
$jumlah = $harga_unit * $slot;
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Pengesahan Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="box">
    <h2>Pengesahan Pendaftaran</h2>

    <p><strong>Nama:</strong> <?php echo $_POST['nama']; ?></p>
    <p><strong>E-mel:</strong> <?php echo $_POST['email']; ?></p>
    <p><strong>No Telefon:</strong> <?php echo $_POST['telefon']; ?></p>
    <p><strong>Kategori:</strong> <?php echo $_POST['kategori']; ?></p>
    <p><strong>Bilangan Slot:</strong> <?php echo $slot; ?></p>

    <hr>

    <p><strong>Harga Seunit:</strong> RM 2,500.00</p>
    <p><strong>Jumlah Yuran:</strong> RM <?php echo number_format($jumlah, 2); ?></p>

    <p style="color:green;"><strong>Pendaftaran berjaya.</strong></p>
</div>

</body>
</html>

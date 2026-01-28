<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

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

<div class="confirm-box">

    <h2>Pengesahan Pendaftaran Ceramah</h2>

    <h3>Maklumat Ceramah</h3>
    <table>
        <tr><td><strong>Tajuk</strong></td><td>Ceramah Profesional Teknologi Digital</td></tr>
        <tr><td><strong>Penceramah</strong></td><td>SABRI BIN SAEP</td></tr>
        <tr><td><strong>Tarikh</strong></td><td>15 Mei 2026</td></tr>
        <tr><td><strong>Masa</strong></td><td>9.00 pagi – 4.00 petang</td></tr>
        <tr><td><strong>Lokasi</strong></td><td>Dewan Seminar Utama</td></tr>
    </table>

    <h3>Maklumat Peserta</h3>
    <table>
        <tr><td><strong>Nama</strong></td><td><?= $_POST['nama']; ?></td></tr>
        <tr><td><strong>Email</strong></td><td><?= $_POST['email']; ?></td></tr>
        <tr><td><strong>No Telefon</strong></td><td><?= $_POST['telefon']; ?></td></tr>
        <tr><td><strong>Kategori</strong></td><td><?= $_POST['kategori']; ?></td></tr>
    </table>

    <h3>Maklumat Bayaran</h3>
    <table>
        <tr><td><strong>Harga Seunit</strong></td><td>RM 2,500.00</td></tr>
        <tr><td><strong>Bilangan Slot</strong></td><td><?= $slot; ?></td></tr>
        <tr><td><strong>Jumlah Yuran</strong></td>
            <td><strong>RM <?= number_format($jumlah, 2); ?></strong></td></tr>
    </table>

    <div class="success">
        <strong>Pendaftaran berjaya!</strong><br>
        Sila simpan maklumat ini sebagai rujukan. Pihak penganjur akan
        menghubungi anda melalui e-mel.
    </div>

</div>

</body>
</html>

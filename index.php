<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Ceramah Berbayar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>

<body>

<div class="container">

    <h1>CERAMAH PROFESIONAL TEKNOLOGI DIGITAL</h1>

    <div class="speaker">
        <img src="sabri.jpeg" alt="Penceramah">
        <div>
            <p><strong>SABRI BIN SAEP</strong></p>
            <p>Pensyarah Teknologi Maklumat</p>
            <p>Kepakaran: Pembangunan Web & Sistem Maklumat</p>
        </div>
    </div>

    <div class="info">
        <h2>Sinopsis</h2>
        <p>
            Ceramah ini bertujuan memberi pendedahan kepada peserta
            mengenai teknologi digital semasa, kemahiran industri,
            dan persediaan kerjaya profesional.
        </p>
    </div>

    <div class="info">
        <h2>Maklumat Logistik</h2>
        <p><strong>Tarikh:</strong> 15 Mei 2026</p>
        <p><strong>Masa:</strong> 9.00 pagi – 4.00 petang</p>
        <p><strong>Lokasi:</strong> Dewan Seminar Utama</p>
    </div>

    <div class="info">
        <h2>Yuran</h2>
        <p><strong>RM 2,500.00</strong> bagi setiap slot</p>
    </div>

    <div class="info">
        <h2>Hubungi</h2>
        <p>Email: ceramah@kolej.edu.my</p>
        <p>Telefon: 012-3456789</p>
    </div>

    <h2>Borang Pendaftaran</h2>

    <form action="pengesahan.php" method="POST" enctype="multipart/form-data">

        <label>Nama Penuh</label>
        <input type="text" name="nama" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>No Telefon</label>
        <input type="text" name="telefon" required>

        <label>Kategori Peserta</label>
        <select name="kategori" required>
            <option value="">-- Pilih --</option>
            <option>Pelajar</option>
            <option>Pensyarah</option>
            <option>Orang Awam</option>
            <option>Korporat</option>
        </select>

        <label>Bilangan Slot</label>
        <input type="number" name="slot" id="slot" min="1" required oninput="kiraJumlah()">

        <div id="jumlah" class="total">Jumlah Yuran: RM 0.00</div>

        <label>Bukti Pembayaran</label>
        <input type="file" name="resit" required>

        <label>
            <input type="checkbox" required>
            Saya bersetuju dengan Terma & Syarat
        </label>

        <button type="submit">Hantar Pendaftaran</button>
    </form>

</div>

</body>
</html>

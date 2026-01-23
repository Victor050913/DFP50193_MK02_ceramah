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

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- JAVASCRIPT -->
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
            <p>Kepakaran: Pembangunan Web</p>
        </div>
    </div>

    <div class="info">
        <h2>Sinopsis</h2>
        <p>
            Ceramah ini memberi pendedahan tentang kemahiran digital
            dan persediaan kerjaya profesional.
        </p>
    </div>

    <div class="info">
        <h2>Logistik</h2>
        <p>Tarikh: 15 Jan 2030</p>
        <p>Masa: 9.00 pagi – 4.00 petang</p>
        <p>Lokasi: Dewan Seminar Utama</p>
    </div>

    <div class="info">
        <h2>Yuran</h2>
        <p>RM 2,500.00 / slot</p>
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
        <input type="number"
               name="slot"
               id="slot"
               min="1"
               required
               oninput="kiraJumlah()">

        <div id="jumlah" class="total">
            Jumlah Yuran: RM 0.00
        </div>

        <label>Bukti Pembayaran</label>
        <input type="file" name="resit" required>

        <label>
            <input type="checkbox" required>
            Saya bersetuju dengan Terma & Syarat
        </label>

        <button type="submit">Hantar</button>
    </form>

</div>

</body>
</html>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Ceramah Profesional Berbayar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LINK CSS -->
    <link rel="stylesheet" href="style.css">

    <script>
        function kiraJumlah() {
            let harga = 2500;
            let slot = document.getElementById("slot").value;
            let jumlah = harga * slot;
            document.getElementById("jumlah").innerHTML =
                "Jumlah Yuran: RM " + jumlah.toFixed(2);
        }
    </script>
</head>

<body>

<div class="container">

    <h1>CERAMAH PROFESIONAL: KEJAYAAN DALAM DUNIA DIGITAL</h1>

    <div class="speaker">
        <img src="pensyarah.jpg" alt="Penceramah">
        <div>
            <h3>Dr. Ahmad Firdaus</h3>
            <p><strong>Jawatan:</strong> Pensyarah Kanan Teknologi Maklumat</p>
            <p><strong>Kepakaran:</strong> Sistem Maklumat, Pembangunan Web, Keselamatan Siber</p>
        </div>
    </div>

    <div class="info-box">
        <h2>Sinopsis Ceramah</h2>
        <p>
            Ceramah ini memberi pendedahan menyeluruh tentang strategi kejayaan
            dalam dunia digital dan persediaan kerjaya profesional.
        </p>
    </div>

    <div class="info-box">
        <h2>Maklumat Logistik</h2>
        <p><strong>Tarikh:</strong> 15 Mei 2026</p>
        <p><strong>Masa:</strong> 9.00 pagi – 4.00 petang</p>
        <p><strong>Lokasi:</strong> Dewan Seminar Utama</p>
    </div>

    <div class="info-box">
        <h2>Yuran</h2>
        <p><strong>RM 2,500.00</strong> / slot</p>
    </div>

    <div class="info-box">
        <h2>Hubungi Kami</h2>
        <p>E-mel: ceramah@kolej.edu.my</p>
        <p>Telefon: 012-3456789</p>
    </div>

    <h2>Borang Pendaftaran</h2>

    <form action="pengesahan.php" method="POST" enctype="multipart/form-data">

        <label>Nama Penuh</label>
        <input type="text" name="nama" required>

        <label>Alamat E-mel</label>
        <input type="email" name="email" required>

        <label>Nombor Telefon</label>
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
            <input type="checkbox" name="terma" required>
            Saya bersetuju dengan Terma & Syarat
        </label>

        <button type="submit">Hantar</button>
    </form>

</div>

</body>
</html>

<?php
$hasil = "";
if (isset($_GET['search'])) {
    $keyword = strtolower($_GET['search']);

    $berita = [
        "Parrot OS swap memory",
        "Text Cut Off and Extra Spacing When Exporting HTML to PDF with html2pdf",
        "Cara benerin DOM Order",
        "ART Sahroni Terluka?????"
    ];

    foreach ($berita as $b) {
        if (strpos(strtolower($b), $keyword) !== false) {
            $hasil .= "<li>$b</li>";
        }
    }

    if ($hasil == "") {
        $hasil = "<p>Tidak ada hasil ditemukan.</p>";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-index.css">
    <title>Website Kelompok StackOverflow</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="banner">
                <img src="https://static.vecteezy.com/system/resources/previews/011/220/346/non_2x/rocket-launch-banner-horizontal-concept-start-up-and-future-office-illustration-vector.jpg" alt="Banner" class="banner-img">
            </div>
            <div class="navbar">
                <li><a href="index.php" class="nav">Menu</a></li>
                <li><a href="data-diri.php" class="nav">Data Diri</a></li>
                <li><a href="gallery.php" class="nav">Gallery Foto</a></li>
                <li><a href="mitra.php" class="nav">Mitra Kerja</a></li>
                <li><a href="cerita.php" class="nav">Goresan Cerita</a></li>
                <li><a href="video.php" class="nav">Video</a></li>
                <li><a href="kontak.php" class="nav">Kontak</a></li>
            </div>
            <div class="text-marquee">
                <marquee behavior="alternate" direction="left">Selamat Datang di Website Kelompokku</marquee>
            </div>
        </div>

        <div class="isi">
            <div class="link">
                <h3 class="berita-terkini">BERITA TERKINI</h3>
                <div class="berita-utama">
                    <p><a href="https://stackoverflow.com/questions/79758844/parrot-os-swap-memory" class="berita">Parrot OS swap memory</a></p>
                    <p><a href="https://stackoverflow.com/questions/79758773/text-cut-off-and-extra-spacing-when-exporting-html-to-pdf-with-html2pdf" class="berita">
                        Text Cut Off and Extra Spacing  Exporting HTML to PDF with html2pdf
                    </a></p>
                    <p><a href="https://stackoverflow.com/questions/79758482/css-grid-layout-items-reorder-unexpectedly-how-to-preserve-dom-order" class="berita">Cara benerin DOM Order</a></p>
                    <img src="https://media.suara.com/pictures/653x366/2025/09/07/54061-ahmad-sahroni.webp" alt="Foto Berita" class="foto-berita">
                    <p><a href="https://www.suara.com/news/2025/09/08/120806/cek-fakta-benarkah-art-ahmad-sahroni-luka-parah-saat-penjarahan-rumahnya" class="berita">ART Sahroni Terluka?????</a></p>
                </div>
            </div>

            <div class="center">
                <h2>Data Pribadi </h2>
                <img src="junn.jpg" alt="Foto Profil" class="foto-profil">
                <p>
                    Nama : Junio Moses Nathanael
                    <br>
                    Kelas : X PPLG 1
                    <br>
                    Hobi : Tidur
                    <br>
                    Tempat, Tanggal Lahir : Jakarta, 8 April 2010   
                </p>
                <img src="rell.jpg" alt="Foto Profil" class="foto-profil">
                <p>
                    Nama : Aurel Nadia Susanto
                    <br>
                    Kelas : X PPLG 1
                    <br>
                    Hobi : Denger musik
                    <br>
                    Tempat tanggal lahir : Tangerang, 9 November 2010
                </p>
                <img src="call.jpg" alt="Foto Profil" class="foto-profil">
                <p>
                    nama: Callysta Felycia Chen
                    <br>
                    kelas: 10
                    <br>
                    hobi: banyak
                    <br>
                    tempat, tanggal lahir: Tangerang, 30 Januari
                </p>
                <img src="img 3.jpg" alt="Foto Profil" class="foto-profil">
                <p>
                    nama: Gabriel Antonius Suryadi
                    <br>
                    kelas: X PPLG 1
                    <br>
                    hobi: Robotics
                    <br>
                    tempat, tanggal lahir:  Jakarta, 25 Juni
                </p>
            </div>

            <div class="search">
                <h3>Pencarian</h3>
                <form method="get">
                    <input type="text" name="search" placeholder="Cari berita...">
                    <button type="submit">Go</button>
                </form>
                <?php if (isset($_GET['search'])): ?>
                    <div class="hasil">
                        <h4>Hasil Pencarian:</h4>
                        <ul>
                            <?= $hasil ?>
                        </ul>
                    </div>
                <?php endif; ?>

            </div>
        </div>

        <div class="footer">
            <p>&copy; 2025 Website Gabriel Antonius Suryadi</p>
        </div>
    </div>
</body>
</html>

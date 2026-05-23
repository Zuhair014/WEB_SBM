<?php include 'components/navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sate Madura</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<!-- LOADING -->
<div class="loader">
    <div class="spinner"></div>
</div>

<!-- HERO -->
<section class="hero" id="beranda">
    <div class="hero-text">
        <h1>Sate Madura Legendaris dengan Cita Rasa Autentik</h1>
        <p>
            Menyajikan sate ayam dan kambing dengan bumbu khas Madura yang
            gurih, manis, dan menggugah selera.
        </p>

        <div class="hero-btn">
            <a href="#menu" class="btn primary">Pesan Sekarang</a>
            <a href="#menu" class="btn secondary">Lihat Menu</a>
        </div>
    </div>

    <div class="hero-image">
        <img src="assets/img/hero.jpg" alt="">
    </div>
</section>

<!-- MENU -->
<section class="menu-section" id="menu">
    <h2>Menu</h2>

    <div class="menu-container">

        <div class="menu-card">
            <img src="assets/img/sate1.jpg">
            <h3>Sate Ayam</h3>
            <p>Rp 25.000</p>
            <a href="#" class="btn-menu">Pesan</a>
        </div>

        <div class="menu-card">
            <img src="assets/img/sate2.jpg">
            <h3>Sate Kambing</h3>
            <p>Rp 35.000</p>
            <a href="#" class="btn-menu">Pesan</a>
        </div>

    </div>
</section>

<!-- ABOUT -->
<section class="about" id="tentang-kami">

    <div class="about-image">
        <img src="assets/img/hero.jpg">
    </div>

    <div class="about-text">
        <h2>Tentang Kami</h2>

        <p>
            Sate Madura hadir sejak tahun 2007 dengan resep turun-temurun khas Madura.
            Kami selalu menggunakan bahan segar dan bumbu autentik untuk menjaga kualitas rasa.
        </p>

        <div class="social-btn">
            <a href="https://wa.me/6281234567890" class="wa" target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
                WhatsApp
            </a>

        </div>
    </div>

</section>

<!-- LOKASI -->
<section class="lokasi" id="lokasi">

    <h2>Lokasi Kami</h2>

    <div class="lokasi-container">

        <div class="lokasi-card">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.1724499881134!2d103.58241079999999!3d-1.6457877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e25872e10336121%3A0xdaaa9fc1e5145b76!2sSate%20Madura%20Cak%20Marzuki!5e0!3m2!1sid!2sid!4v1779492200463"
                allowfullscreen=""
                loading="lazy">
            </iframe>

            <h3>Sate Madura Cak Marzuki</h3>
            <p>Jl. Sk. Rd. Syahbudin No.36, Mayang Mangurai, Kec. Kota Baru, Kota Jambi</p>
        </div>

        <div class="lokasi-card">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249.2652271995871!2d103.5776760370307!3d-1.609801104035303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1779493113195!5m2!1sen!2sid" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>

            <h3>Cabang Telanai</h3>
            <p>Jl jenral abdul thalib, simpang karya, Kec. Telanaipura, Kota Jambi</p>
        </div>

    </div>

</section>

<!-- ARTIKEL -->
<section class="artikel" id="artikel">

    <h2>Artikel</h2>

    <div class="artikel-container">

        <!-- Artikel 1 -->
        <div class="artikel-card">

            <img src="assets/img/sate1.jpg" alt="">

            <div class="artikel-content">
                <span class="artikel-date">
                    <i class="fa-regular fa-calendar"></i>
                    12 Mei 2026
                </span>

                <h3>Rahasia Bumbu Kacang Khas Sate Madura</h3>

                <p>
                    Bumbu kacang khas Madura memiliki cita rasa gurih,
                    manis, dan sedikit smoky yang membuat sate semakin lezat.
                </p>

                <a href="#" class="btn-artikel">
                    Baca Selengkapnya
                </a>
            </div>

        </div>

        <!-- Artikel 2 -->
        <div class="artikel-card">

            <img src="assets/img/sate2.jpg" alt="">

            <div class="artikel-content">

                <span class="artikel-date">
                    <i class="fa-regular fa-calendar"></i>
                    15 Mei 2026
                </span>

                <h3>Tips Membakar Sate Agar Tidak Gosong</h3>

                <p>
                    Teknik membakar sate yang tepat dapat menghasilkan
                    aroma khas dan tekstur daging yang empuk.
                </p>

                <a href="#" class="btn-artikel">
                    Baca Selengkapnya
                </a>

            </div>

        </div>

        <!-- Artikel 3 -->
        <div class="artikel-card">

            <img src="assets/img/sate3.jpg" alt="">

            <div class="artikel-content">

                <span class="artikel-date">
                    <i class="fa-regular fa-calendar"></i>
                    20 Mei 2026
                </span>

                <h3>Mengapa Sate Madura Sangat Populer?</h3>

                <p>
                    Sate Madura dikenal karena perpaduan bumbu autentik,
                    kecap manis, dan aroma bakaran arang yang khas.
                </p>

                <a href="#" class="btn-artikel">
                    Baca Selengkapnya
                </a>

            </div>

        </div>

    </div>

</section>

<!-- TESTIMONI -->
<section class="testimoni" id="testimoni">

    <h2>Keunggulan Kami</h2>

    <div class="testi-container">

        <div class="testi-card">
            <p>
                “Sate terenak di Jambi, bumbunya sangat khas dan dagingnya empuk.”
            </p>

            <h3>- Syawal</h3>
            <span>Walikota Jambi</span>
        </div>

        <div class="testi-card">
            <p>
                “Pelayanan cepat dan rasanya autentik seperti di Madura.”
            </p>

            <h3>- Zuher</h3>
            <span>Bupati Kerinci</span>
        </div>

        <div class="testi-card">
            <p>
                “Tempat nyaman dan cocok untuk keluarga.”
            </p>

            <h3>- Arif</h3>
            <span>CEO</span>
        </div>

    </div>

</section>

<!-- FLOATING WHATSAPP -->
<a href="https://wa.me/6281234567890"
   class="floating-wa"
   target="_blank">

    <i class="fa-brands fa-whatsapp"></i>

</a>

<?php include 'components/footer.php'; ?>

<script src="assets/js/script.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AnemiaCare | Sistem Deteksi Dini Penyakit Anemia</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            color: #222;
            background: #fff;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.96);
            border-bottom: 1px solid #eeeeee;
            backdrop-filter: blur(10px);
        }

        .nav-container {
            max-width: 1200px;
            height: 75px;
            margin: auto;
            padding: 0 30px;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* LOGO */

        .logo {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #c8102e;
            font-size: 20px;
            font-weight: bold;
        }

        .logo-icon {
            width: 36px;
            height: 36px;
            border: 3px solid #c8102e;
            border-radius: 50%;
            position: relative;
        }

        .logo-icon::before {
            content: "♥";
            position: absolute;
            color: #c8102e;
            font-size: 21px;
            top: 3px;
            left: 5px;
        }

        .logo-text small {
            display: block;
            font-size: 6px;
            letter-spacing: 1px;
            font-weight: normal;
        }

        /* MENU */

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 35px;
        }

        .nav-menu a {
            font-size: 14px;
            position: relative;
            padding: 8px 0;
        }

        .nav-menu a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 2px;
            background: #c8102e;
            transition: .3s;
        }

        .nav-menu a:hover {
            color: #c8102e;
        }

        .nav-menu a:hover::after {
            width: 100%;
        }

        .login-admin {
            border: 1px solid #888;
            padding: 9px 24px;
            border-radius: 6px;
            font-size: 13px;
            transition: .3s;
        }

        .login-admin:hover {
            background: #c8102e;
            border-color: #c8102e;
            color: white;
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            min-height: 590px;

            background:
                radial-gradient(
                    circle at 85% 45%,
                    rgba(255,255,255,.7) 0,
                    rgba(255,255,255,.7) 20%,
                    transparent 20.5%
                ),
                linear-gradient(
                    135deg,
                    #ffffff 0%,
                    #ffe9eb 45%,
                    #ffc8cd 100%
                );
        }

        .hero-container {
            max-width: 1200px;
            min-height: 590px;
            margin: auto;
            padding: 60px 30px;

            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 50px;
        }

        .hero-content {
            max-width: 580px;
        }

        .hero-welcome {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 22px;
        }

        .hero-welcome i {
            font-weight: bold;
        }

        .hero h1 {
            font-size: 45px;
            line-height: 1.15;
            margin-bottom: 22px;
        }

        .hero-description {
            font-size: 17px;
            line-height: 1.7;
            color: #444;
            margin-bottom: 30px;
        }

        .btn-screening {
            display: inline-flex;
            align-items: center;
            gap: 20px;

            background: #c8102e;
            color: white;

            padding: 13px 22px;
            border-radius: 7px;

            font-size: 14px;
            font-weight: bold;

            box-shadow: 0 8px 20px rgba(200,16,46,.2);

            transition: .3s;
        }

        .btn-screening:hover {
            background: #a90e27;
            transform: translateY(-3px);
        }

        .arrow {
            font-size: 20px;
        }

        /* HERO IMAGE */

        .hero-image {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-image img {
            width: 440px;
            height: 440px;
            object-fit: cover;

            border-radius: 50%;

            border: 14px solid rgba(255,255,255,.55);

            box-shadow: 0 15px 40px rgba(100,0,20,.1);
        }

        /* =========================
           SECTION
        ========================= */

        .section {
            padding: 85px 30px;
        }

        .container {
            max-width: 1200px;
            margin: auto;
        }

        .section-title {
            font-size: 29px;
            margin-bottom: 35px;
        }

        /* =========================
           INFORMASI ANEMIA
        ========================= */

        .information {
            background: linear-gradient(
                180deg,
                #ffd9dc 0%,
                #fff 100%
            );
        }

        .anemia-card {
            max-width: 1050px;
            margin: auto;

            display: grid;
            grid-template-columns: 210px 1fr;
            gap: 35px;

            align-items: center;

            background: rgba(255,255,255,.7);

            border-radius: 20px;

            padding: 25px;

            box-shadow: 0 10px 30px rgba(0,0,0,.07);

            border: 1px solid rgba(255,255,255,.8);
        }

        .anemia-card img {
            width: 200px;
            height: 155px;

            object-fit: cover;

            border-radius: 17px;
        }

        .anemia-card h2 {
            font-size: 25px;
            margin-bottom: 15px;
        }

        .anemia-card p {
            font-size: 15px;
            line-height: 1.7;
        }

        /* =========================
           GEJALA
        ========================= */

        .symptom-section {
            margin-top: 45px;
        }

        .symptom-section h2 {
            font-size: 26px;
            margin-bottom: 30px;
        }

        .symptoms {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .symptom {
            text-align: center;

            padding: 20px 10px;

            border-radius: 16px;

            transition: .3s;
        }

        .symptom:hover {
            background: white;

            transform: translateY(-5px);

            box-shadow: 0 10px 25px rgba(0,0,0,.08);
        }

        .symptom-icon {
            width: 70px;
            height: 70px;

            margin: auto;
            margin-bottom: 13px;

            border-radius: 50%;

            background: white;

            display: flex;
            justify-content: center;
            align-items: center;

            font-size: 32px;

            box-shadow: 0 5px 15px rgba(0,0,0,.08);
        }

        .symptom p {
            font-size: 14px;
            font-weight: 600;
        }

        /* =========================
           PENYEBAB
        ========================= */

        .causes {
            position: relative;

            background:
                linear-gradient(
                    135deg,
                    #fff 0%,
                    #ffe0e3 100%
                );

            overflow: hidden;
        }

        .causes::before {
            content: "";

            position: absolute;

            width: 450px;
            height: 450px;

            left: -200px;
            bottom: -230px;

            border-radius: 50%;

            background: rgba(200,16,46,.12);
        }

        .cause-box {
            position: relative;
            z-index: 1;

            max-width: 1100px;
            margin: auto;

            padding: 30px 35px;

            background: rgba(255,255,255,.7);

            border: 1px solid #777;

            border-radius: 18px;

            box-shadow: 0 10px 30px rgba(0,0,0,.06);
        }

        .cause {
            display: grid;
            grid-template-columns: 30px 1fr;
            gap: 12px;

            margin-bottom: 20px;
        }

        .cause:last-child {
            margin-bottom: 0;
        }

        .cause-number {
            color: #c8102e;
            font-weight: bold;
            font-size: 17px;
        }

        .cause p {
            font-size: 15px;
            line-height: 1.6;
        }

        /* =========================
           PENCEGAHAN
        ========================= */

        .prevention {
            background: #fff;
        }

        .prevention-list {
            max-width: 900px;
            margin: auto;

            display: grid;
            grid-template-columns: repeat(3, 1fr);

            gap: 35px;
        }

        .prevention-card {
            min-height: 220px;

            background: #fafafa;

            border: 1px solid #ccc;

            border-radius: 18px;

            display: flex;
            flex-direction: column;

            align-items: center;
            justify-content: center;

            text-align: center;

            transition: .3s;
        }

        .prevention-card:hover {
            background: white;

            transform: translateY(-7px);

            border-color: #e49ba5;

            box-shadow: 0 12px 30px rgba(0,0,0,.09);
        }

        .prevention-icon {
            width: 80px;
            height: 80px;

            border-radius: 18px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: white;

            font-size: 42px;

            margin-bottom: 15px;
        }

        .prevention-card h3 {
            font-size: 16px;
            line-height: 1.5;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            background: #171717;
            color: white;

            padding: 35px 30px;
        }

        .footer-container {
            max-width: 1200px;
            margin: auto;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-logo {
            color: #ffb7c0;
        }

        .footer-text {
            font-size: 13px;
            color: #ccc;
        }

        /* =========================
           RESPONSIVE TABLET
        ========================= */

        @media(max-width: 900px) {

            .nav-menu {
                gap: 15px;
            }

            .hero-container {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-content {
                margin: auto;
            }

            .hero-image {
                order: -1;
            }

            .hero-image img {
                width: 330px;
                height: 330px;
            }

            .symptoms {
                grid-template-columns: repeat(2, 1fr);
            }

            .anemia-card {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .anemia-card img {
                margin: auto;
            }

            .prevention-list {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        /* =========================
           RESPONSIVE HP
        ========================= */

        @media(max-width: 600px) {

            .nav-container {
                padding: 0 18px;
            }

            .nav-menu {
                display: none;
            }

            .login-admin {
                padding: 8px 12px;
                font-size: 12px;
            }

            .hero-container {
                padding: 55px 20px;
            }

            .hero h1 {
                font-size: 34px;
            }

            .hero-description {
                font-size: 15px;
            }

            .hero-image img {
                width: 280px;
                height: 280px;
            }

            .section {
                padding: 65px 18px;
            }

            .section-title {
                font-size: 25px;
            }

            .symptoms {
                grid-template-columns: repeat(2, 1fr);
                gap: 10px;
            }

            .prevention-list {
                grid-template-columns: 1fr;
            }

            .cause-box {
                padding: 22px 18px;
            }

            .cause p {
                font-size: 14px;
            }

            .footer-container {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
        }
    </style>
</head>


<body>

<!-- ==================================================
     NAVBAR
================================================== -->

<header class="navbar">

    <div class="nav-container">

        <a href="#" class="logo">

            <div class="logo-icon"></div>

            <div class="logo-text">
                AnemiaCare

                <small>
                    Kenali Gejala. Jaga Kesehatanmu
                </small>
            </div>

        </a>


        <nav class="nav-menu">

    <a href="{{ route('home') }}" class="nav-link">
        Informasi Anemia
    </a>

    <a href="{{ route('tentang.sistem') }}" class="nav-link">
        Tentang Sistem
    </a>

    <a href="{{ route('skrining') }}" class="nav-link">
        Skrining Anemia
    </a>

</nav>


        <a href="#" class="login-admin">
            Login Admin
        </a>

    </div>

</header>



<!-- ==================================================
     HERO
================================================== -->

<section class="hero">

    <div class="hero-container">

        <div class="hero-content">

            <div class="hero-welcome">

                Selamat Datang, Sistem Deteksi
                <br>

                <i>
                    Dini Penyakit Anemia
                </i>

            </div>


            <h1>
                Yuk, jaga kesehatan Anda
                sejak dini!
            </h1>


            <p class="hero-description">

                Sistem ini membantu Anda melakukan
                deteksi dini anemia menggunakan
                Algoritma Naive Bayes

            </p>


            <a href="#skrining" class="btn-screening">

                Mulai Skrining

                <span class="arrow">
                    →
                </span>

            </a>

        </div>



        <div class="hero-image">

            <!--
                Ganti src gambar ini dengan gambar
                yang ingin digunakan pada website.
            -->

            <img
                src="hero-woman.png"
                alt="Ilustrasi gejala anemia"
            >

        </div>

    </div>

</section>



<!-- ==================================================
     INFORMASI ANEMIA
================================================== -->

<section class="section information" id="informasi">

    <div class="container">


        <div class="anemia-card">

            <img
                src="anemia-woman.png"
                alt="Ilustrasi anemia"
            >


            <div>

                <h2>
                    Apa itu Anemia?
                </h2>


                <p>

                    Anemia adalah suatu kejadian dimana
                    tubuh memiliki jumlah sel darah merah
                    (eritrosit) yang terlalu sedikit, dimana
                    sel darah merah mengandung hemoglobin
                    (Hb) yang berfungsi sebagai pembawa
                    oksigen ke seluruh jaringan tubuh

                </p>

            </div>

        </div>



        <!-- GEJALA -->

        <div class="symptom-section" id="tentang">

            <h2>
                Apa Saja Gejala Anemia
            </h2>


            <div class="symptoms">


                <div class="symptom">

                    <div class="symptom-icon">
                        🧍
                    </div>

                    <p>
                        Kelemahan & Kelelahan
                    </p>

                </div>



                <div class="symptom">

                    <div class="symptom-icon">
                        💓
                    </div>

                    <p>
                        Jantung Berdebar
                    </p>

                </div>



                <div class="symptom">

                    <div class="symptom-icon">
                        😮‍💨
                    </div>

                    <p>
                        Sesak Nafas
                    </p>

                </div>



                <div class="symptom">

                    <div class="symptom-icon">
                        😟
                    </div>

                    <p>
                        Pucat
                    </p>

                </div>



                <div class="symptom">

                    <div class="symptom-icon">
                        🤕
                    </div>

                    <p>
                        Pusing
                    </p>

                </div>



                <div class="symptom">

                    <div class="symptom-icon">
                        🩺
                    </div>

                    <p>
                        Hipotensi
                    </p>

                </div>



                <div class="symptom">

                    <div class="symptom-icon">
                        🩸
                    </div>

                    <p>
                        Perubahan Warna Tinja
                    </p>

                </div>


            </div>

        </div>

    </div>

</section>



<!-- ==================================================
     PENYEBAB ANEMIA
================================================== -->

<section class="section causes">

    <div class="container">

        <h2 class="section-title">
            Apa Sih Penyebab Anemia?
        </h2>


        <div class="cause-box">


            <div class="cause">

                <div class="cause-number">
                    1
                </div>

                <p>

                    Hilangnya darah dari pembuluh darah
                    (Pendarahan). Anemia dapat disebabkan
                    oleh hematemesis, melena atau perdarahan
                    yang terjadi dalam rongga abdomen,
                    toraks, usus, dan jaringan lunak.

                </p>

            </div>



            <div class="cause">

                <div class="cause-number">
                    2
                </div>

                <p>

                    Anemia akibat peningkatan destruksi atau
                    kerusakan sel darah merah (eritrosit)
                    terjadi ketika penghancuran eritrosit
                    melebihi kemampuan sumsum tulang untuk
                    memproduksi eritrosit baru. Kondisi tersebut
                    dapat disebabkan oleh peningkatan aktivitas
                    Sistem Retikuloendotelial (Reticuloendothelial
                    System/RES), terutama di limpa dan hati,
                    yang berperan dalam menghancurkan eritrosit
                    yang abnormal atau rusak. Contoh anemia
                    yang termasuk dalam kelompok ini adalah
                    anemia hemolitik dan anemia sel sabit
                    (sickle cell anemia).

                </p>

            </div>



            <div class="cause">

                <div class="cause-number">
                    3
                </div>

                <p>

                    Anemia karena menurunnya produksi sel darah
                    merah, anemia tersebut dapat disebabkan
                    karena kekurangan unsur penyusun sel darah
                    merah (asam folat, vitamin B12 dan zat besi),
                    gangguan fungsi sum-sum tulang seperti adanya
                    tumor, pengobatan, toksin serta berkurangnya
                    eritropoitin (pada penyakit ginjal kronik).
                    Contohnya yaitu anemia defisiensi besi,
                    anemia megaloblastik, anemia aplastik

                </p>

            </div>


        </div>

    </div>

</section>



<!-- ==================================================
     PENCEGAHAN
================================================== -->

<section class="section prevention" id="skrining">

    <div class="container">

        <h2 class="section-title">

            Bagaimana Cara Mencegah Anemia?

        </h2>


        <div class="prevention-list">


            <div class="prevention-card">

                <div class="prevention-icon">
                    🥗
                </div>

                <h3>

                    Konsumsi
                    <br>
                    Makanan
                    <br>
                    Bergizi

                </h3>

            </div>



            <div class="prevention-card">

                <div class="prevention-icon">
                    💊
                </div>

                <h3>

                    Konsumsi
                    <br>
                    Tablet
                    <br>
                    Tambah
                    <br>
                    Darah

                </h3>

            </div>



            <div class="prevention-card">

                <div class="prevention-icon">
                    🏸
                </div>

                <h3>

                    Rutin
                    <br>
                    Olahraga

                </h3>

            </div>


        </div>

    </div>

</section>



<!-- ==================================================
     FOOTER
================================================== -->

<footer>

    <div class="footer-container">

        <div class="logo footer-logo">

            <div class="logo-icon"></div>

            <div class="logo-text">

                AnemiaCare

                <small>
                    Kenali Gejala. Jaga Kesehatanmu
                </small>

            </div>

        </div>


        <div class="footer-text">

            Sistem Deteksi Dini Penyakit Anemia

        </div>

    </div>

</footer>

</body>
</html>
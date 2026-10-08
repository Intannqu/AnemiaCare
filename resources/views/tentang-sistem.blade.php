<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tentang Sistem | AnemiaCare</title>

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
            line-height: 1.6;
        }

        /* =========================================
           NAVBAR
        ========================================= */

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;

            width: 100%;
            height: 76px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 7%;

            background: rgba(255, 255, 255, 0.96);
            border-bottom: 1px solid #eeeeee;

            backdrop-filter: blur(10px);
        }

        /* LOGO */

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;

            text-decoration: none;
            color: #c8102e;
        }

        .logo-symbol {
            width: 40px;
            height: 40px;

            border: 3px solid #c8102e;
            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 23px;
            font-weight: bold;
        }

        .logo-name {
            font-size: 22px;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .logo-name span {
            color: #ef6b78;
        }

        .logo-tagline {
            display: block;

            margin-top: -4px;

            font-size: 6px;
            letter-spacing: 1px;

            color: #c8102e;
        }

        /* MENU */

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 32px;
        }

        .nav-menu a {
            position: relative;

            text-decoration: none;
            color: #333;

            font-size: 14px;
            font-weight: 500;

            padding: 8px 0;

            transition: 0.3s;
        }

        .nav-menu a:hover {
            color: #c8102e;
        }

        .nav-menu a.active {
            color: #c8102e;
            font-weight: 600;
        }

        .nav-menu a.active::after {
            content: "";

            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;

            height: 2px;

            background: #c8102e;
            border-radius: 10px;
        }

        .login-btn {
            padding: 9px 24px !important;

            border: 1px solid #555;
            border-radius: 7px;

            color: #222 !important;

            transition: 0.3s;
        }

        .login-btn:hover {
            background: #c8102e;
            border-color: #c8102e;

            color: white !important;
        }


        /* =========================================
           HERO
        ========================================= */

        .hero {
            position: relative;

            overflow: hidden;

            padding: 90px 7%;

            background:
                radial-gradient(
                    circle at 90% 20%,
                    rgba(255, 174, 184, 0.55),
                    transparent 30%
                ),
                linear-gradient(
                    135deg,
                    #fff7f8,
                    #ffe0e5
                );
        }

        .hero::before {
            content: "";

            position: absolute;

            width: 350px;
            height: 350px;

            right: -120px;
            bottom: -180px;

            border-radius: 50%;

            background: rgba(255, 255, 255, 0.45);
        }

        .hero-container {
            position: relative;
            z-index: 2;

            max-width: 1200px;
            margin: auto;

            display: grid;
            grid-template-columns: 1.5fr 0.7fr;

            align-items: center;
            gap: 60px;
        }

        .hero-label {
            display: inline-block;

            margin-bottom: 20px;

            padding: 7px 16px;

            border-radius: 30px;

            background: white;
            color: #c8102e;

            font-size: 12px;
            font-weight: 700;

            letter-spacing: 1px;

            box-shadow: 0 6px 20px rgba(200, 16, 46, 0.08);
        }

        .hero h1 {
            font-size: clamp(40px, 5vw, 62px);

            line-height: 1.08;

            margin-bottom: 22px;

            color: #191919;
        }

        .hero h1 span {
            color: #ef6877;
            font-style: italic;
        }

        .hero-description {
            max-width: 750px;

            font-size: 18px;

            color: #555;

            line-height: 1.8;
        }

        .hero-illustration {
            width: 240px;
            height: 240px;

            margin: auto;

            border-radius: 50%;

            background: rgba(255, 255, 255, 0.75);

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 100px;

            box-shadow:
                0 20px 50px rgba(200, 16, 46, 0.10);
        }


        /* =========================================
           SECTION GENERAL
        ========================================= */

        .section {
            padding: 90px 7%;
        }

        .section-container {
            max-width: 1150px;
            margin: auto;
        }

        .section-heading {
            margin-bottom: 45px;
        }

        .section-label {
            color: #c8102e;

            font-size: 12px;
            font-weight: 700;

            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .section-heading h2 {
            margin-top: 8px;

            font-size: 36px;

            line-height: 1.2;
        }

        .section-heading h2 span {
            color: #ef6877;
            font-style: italic;
        }

        .section-heading p {
            max-width: 700px;

            margin-top: 12px;

            color: #666;
        }


        /* =========================================
           ABOUT SECTION
        ========================================= */

        .about-section {
            background: #fff;
        }

        .about-grid {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 70px;

            align-items: start;
        }

        .about-text p {
            font-size: 17px;

            color: #555;

            line-height: 1.9;

            margin-bottom: 22px;
        }

        .warning-box {
            margin-top: 30px;

            padding: 22px 25px;

            background: #fff5f6;

            border-left: 4px solid #c8102e;

            border-radius: 0 12px 12px 0;
        }

        .warning-box strong {
            display: block;

            margin-bottom: 7px;

            color: #c8102e;

            font-size: 15px;
        }

        .warning-box p {
            margin: 0;

            font-size: 14px;
            line-height: 1.7;
        }


        /* =========================================
           KEUNGGULAN
        ========================================= */

        .advantages-section {
            background: #fff7f8;
        }

        .advantages-header {
            text-align: center;
            margin-bottom: 45px;
        }

        .advantages-header h2 {
            font-size: 36px;
        }

        .advantages-header p {
            color: #666;

            margin-top: 10px;
        }

        .advantages-grid {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 25px;
        }

        .advantage-card {
            position: relative;

            padding: 32px;

            background: white;

            border: 1px solid #f0e1e3;

            border-radius: 18px;

            transition: 0.3s;
        }

        .advantage-card:hover {
            transform: translateY(-7px);

            box-shadow:
                0 18px 40px rgba(200, 16, 46, 0.10);

            border-color: #efb1b9;
        }

        .advantage-icon {
            width: 58px;
            height: 58px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin-bottom: 20px;

            border-radius: 15px;

            background: #fff0f2;

            font-size: 27px;
        }

        .advantage-number {
            position: absolute;

            top: 25px;
            right: 25px;

            color: #e9c9cd;

            font-size: 14px;
            font-weight: 700;
        }

        .advantage-card h3 {
            font-size: 20px;

            margin-bottom: 12px;
        }

        .advantage-card p {
            color: #666;

            font-size: 14px;

            line-height: 1.8;
        }


        /* =========================================
           HOW IT WORKS
        ========================================= */

        .workflow-section {
            background: white;
        }

        .workflow {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 25px;
        }

        .workflow-card {
            padding: 30px;

            border: 1px solid #eeeeee;

            border-radius: 18px;

            background: #fff;

            text-align: center;
        }

        .workflow-number {
            width: 50px;
            height: 50px;

            margin: 0 auto 18px;

            border-radius: 50%;

            background: #c8102e;
            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            font-weight: bold;
        }

        .workflow-card h3 {
            margin-bottom: 8px;

            font-size: 18px;
        }

        .workflow-card p {
            color: #666;

            font-size: 14px;
        }


        /* =========================================
           CTA
        ========================================= */

        .cta-section {
            padding: 70px 7%;
        }

        .cta {
            max-width: 1100px;

            margin: auto;

            padding: 50px;

            border-radius: 24px;

            background:
                linear-gradient(
                    135deg,
                    #c8102e,
                    #ed6575
                );

            color: white;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 30px;
        }

        .cta h2 {
            font-size: 30px;

            margin-bottom: 8px;
        }

        .cta p {
            color: #ffe8eb;

            max-width: 600px;
        }

        .cta-button {
            flex-shrink: 0;

            display: inline-block;

            padding: 13px 25px;

            border-radius: 8px;

            background: white;

            color: #c8102e;

            text-decoration: none;

            font-weight: 600;

            transition: 0.3s;
        }

        .cta-button:hover {
            transform: translateY(-2px);

            box-shadow:
                0 10px 25px rgba(0, 0, 0, 0.15);
        }


        /* =========================================
           FOOTER
        ========================================= */

        footer {
            padding: 45px 7% 25px;

            background: #21171a;

            color: white;
        }

        .footer-container {
            max-width: 1150px;

            margin: auto;

            display: flex;

            justify-content: space-between;

            gap: 40px;
        }

        .footer-logo {
            color: #ffb4be;

            font-size: 22px;
            font-weight: 700;

            margin-bottom: 8px;
        }

        .footer-description {
            max-width: 400px;

            color: #cfcfcf;

            font-size: 13px;
        }

        .footer-links {
            display: flex;

            flex-direction: column;

            gap: 8px;
        }

        .footer-links a {
            color: #d8d8d8;

            text-decoration: none;

            font-size: 13px;
        }

        .footer-links a:hover {
            color: #ffb4be;
        }

        .copyright {
            max-width: 1150px;

            margin: 30px auto 0;

            padding-top: 20px;

            border-top: 1px solid rgba(255,255,255,0.1);

            color: #999;

            font-size: 12px;
        }


        /* =========================================
           RESPONSIVE
        ========================================= */

        @media (max-width: 900px) {

            .navbar {
                padding: 15px 5%;

                height: auto;

                flex-direction: column;

                gap: 15px;
            }

            .nav-menu {
                flex-wrap: wrap;

                justify-content: center;

                gap: 18px;
            }

            .hero {
                padding: 70px 6%;
            }

            .hero-container {
                grid-template-columns: 1fr;

                text-align: center;
            }

            .hero-description {
                margin: auto;
            }

            .about-grid {
                grid-template-columns: 1fr;

                gap: 35px;
            }

            .advantages-grid {
                grid-template-columns: 1fr;
            }

            .workflow {
                grid-template-columns: 1fr;
            }

            .cta {
                flex-direction: column;

                text-align: center;
            }

            .footer-container {
                flex-direction: column;
            }
        }


        @media (max-width: 600px) {

            .nav-menu {
                gap: 12px;
            }

            .nav-menu a {
                font-size: 12px;
            }

            .hero h1 {
                font-size: 40px;
            }

            .section {
                padding: 65px 6%;
            }

            .section-heading h2 {
                font-size: 30px;
            }

            .cta {
                padding: 35px 25px;
            }

            .cta h2 {
                font-size: 25px;
            }
        }

    </style>
</head>


<body>


<!-- ==================================================
     NAVBAR
================================================== -->

<header class="navbar">

    <a href="/" class="logo">

        <div class="logo-symbol">
            ♡
        </div>

        <div>

            <div class="logo-name">
                Anemia<span>Care</span>
            </div>

            <small class="logo-tagline">
                Kenali Gejalanya • Jaga Kesehatanmu
            </small>

        </div>

    </a>


    <nav class="nav-menu">

    <a href="{{ route('home') }}"
       class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
        Informasi Anemia
    </a>

    <a href="{{ route('tentang.sistem') }}"
       class="nav-link {{ request()->routeIs('tentang.sistem') ? 'active' : '' }}">
        Tentang Sistem
    </a>

    <a href="{{ route('skrining') }}"
       class="nav-link {{ request()->routeIs('skrining') ? 'active' : '' }}">
        Skrining Anemia
    </a>

</nav>

</header>



<!-- ==================================================
     HERO
================================================== -->

<section class="hero">

    <div class="hero-container">

        <div>

            <div class="hero-label">
                TENTANG SISTEM ANEMIACARE
            </div>

            <h1>
                Mengenal Sistem
                <span>AnemiaCare</span>
            </h1>

            <p class="hero-description">
                Sistem deteksi dini berbasis website yang
                memanfaatkan data rekam medis dan algoritma
                Naive Bayes.
            </p>

        </div>


        <div class="hero-illustration">
            🩺
        </div>

    </div>

</section>



<!-- ==================================================
     APA ITU ANEMIACARE
================================================== -->

<section class="section about-section">

    <div class="section-container">

        <div class="section-heading">

            <span class="section-label">
                Tentang AnemiaCare
            </span>

            <h2>
                Apa itu <span>AnemiaCare</span>?
            </h2>

        </div>


        <div class="about-grid">


            <div class="about-text">

                <p>
                    <strong>AnemiaCare</strong> merupakan sistem
                    deteksi dini yang membantu mengenali kemungkinan
                    anemia berdasarkan tanda dan gejala yang dirasakan.
                    Sistem menggunakan algoritma Naive Bayes untuk
                    mengolah gejala dan memberikan informasi awal
                    mengenai kemungkinan anemia.
                </p>


                <div class="warning-box">

                    <strong>
                        Penting untuk diketahui
                    </strong>

                    <p>
                        Hasil sistem bukan diagnosis medis dan tidak
                        menggantikan pemeriksaan dokter. Jika mengalami
                        gejala yang mengarah pada anemia, disarankan
                        melakukan pemeriksaan lebih lanjut kepada
                        tenaga kesehatan.
                    </p>

                </div>

            </div>


            <div>

                <div class="about-card">

                    <div class="section-label">
                        Cara Kerja Sistem
                    </div>

                    <h3 style="font-size: 25px; margin: 10px 0 15px;">
                        Membantu memberikan informasi awal
                    </h3>

                    <p style="color:#666; line-height:1.8;">
                        AnemiaCare memanfaatkan data rekam medis
                        sebagai salah satu sumber informasi dan
                        menggunakan algoritma Naive Bayes untuk
                        melakukan klasifikasi berdasarkan gejala
                        yang dimasukkan pengguna.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ==================================================
     KEUNGGULAN
================================================== -->

<section class="section advantages-section">

    <div class="section-container">

        <div class="advantages-header">

            <span class="section-label">
                Mengapa AnemiaCare?
            </span>

            <h2>
                Keunggulan Sistem
            </h2>

            <p>
                Beberapa keunggulan yang dimiliki oleh sistem
                deteksi dini AnemiaCare.
            </p>

        </div>


        <div class="advantages-grid">


            <!-- CARD 1 -->

            <div class="advantage-card">

                <span class="advantage-number">
                    01
                </span>

                <div class="advantage-icon">
                    🗄️
                </div>

                <h3>
                    Menggunakan Data Rekam Medis
                </h3>

                <p>
                    Sistem memanfaatkan data rekam medis pasien
                    untuk analisis.
                </p>

            </div>


            <!-- CARD 2 -->

            <div class="advantage-card">

                <span class="advantage-number">
                    02
                </span>

                <div class="advantage-icon">
                    🧠
                </div>

                <h3>
                    Menggunakan Algoritma Naive Bayes
                </h3>

                <p>
                    Metode klasifikasi yang efektif dalam mengolah
                    data gejala dan memberikan hasil prediksi.
                </p>

            </div>


            <!-- CARD 3 -->

            <div class="advantage-card">

                <span class="advantage-number">
                    03
                </span>

                <div class="advantage-icon">
                    🛡️
                </div>

                <h3>
                    Mudah Digunakan
                </h3>

                <p>
                    Antarmuka yang sederhana dan memudahkan
                    pengguna.
                </p>

            </div>


        </div>

    </div>

</section>



<!-- ==================================================
     ALUR SISTEM
================================================== -->

<section class="section workflow-section">

    <div class="section-container">

        <div class="section-heading">

            <span class="section-label">
                Sistem AnemiaCare
            </span>

            <h2>
                Bagaimana Sistem Bekerja?
            </h2>

        </div>


        <div class="workflow">


            <div class="workflow-card">

                <div class="workflow-number">
                    01
                </div>

                <h3>
                    Input Gejala
                </h3>

                <p>
                    Pengguna memasukkan tanda dan gejala
                    yang dialami melalui halaman skrining.
                </p>

            </div>


            <div class="workflow-card">

                <div class="workflow-number">
                    02
                </div>

                <h3>
                    Proses Naive Bayes
                </h3>

                <p>
                    Sistem mengolah data gejala menggunakan
                    algoritma Naive Bayes.
                </p>

            </div>


            <div class="workflow-card">

                <div class="workflow-number">
                    03
                </div>

                <h3>
                    Hasil Skrining
                </h3>

                <p>
                    Sistem memberikan informasi awal mengenai
                    kemungkinan anemia.
                </p>

            </div>


        </div>

    </div>

</section>



<!-- ==================================================
     CTA
================================================== -->

<section class="cta-section">

    <div class="cta">

        <div>

            <h2>
                Kenali Kondisi Anda Sejak Dini
            </h2>

            <p>
                Gunakan AnemiaCare untuk melakukan skrining
                awal berdasarkan gejala yang Anda alami.
            </p>

        </div>


        <a href="/skrining" class="cta-button">
            Mulai Skrining →
        </a>

    </div>

</section>



<!-- ==================================================
     FOOTER
================================================== -->

<footer>

    <div class="footer-container">

        <div>

            <div class="footer-logo">
                AnemiaCare
            </div>

            <p class="footer-description">
                Sistem deteksi dini penyakit anemia berbasis
                website menggunakan algoritma Naive Bayes.
            </p>

        </div>


        <div class="footer-links">

            <a href="/">
                Beranda
            </a>

            <a href="/informasi-anemia">
                Informasi Anemia
            </a>

            <a href="/tentang-sistem">
                Tentang Sistem
            </a>

            <a href="/skrining">
                Skrining Anemia
            </a>

        </div>

    </div>


    <div class="copyright">

        © 2026 AnemiaCare. Sistem Deteksi Dini Penyakit Anemia.

    </div>

</footer>


</body>
</html>
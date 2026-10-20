
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | AnemiaCare</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #ffffff;
            color: #111111;
        }

        .dashboard {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */
        .sidebar {
            width: 332px;
            min-height: 100vh;
            background: #eab1b1;
            padding: 24px 21px;
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 86px;
        }

        .logo img {
            width: 100%;
            max-width: 285px;
            height: auto;
            object-fit: contain;
        }

        .logo-text {
            color: #a71926;
            font-size: 30px;
            font-weight: 800;
            letter-spacing: -1px;
        }

        .logo-caption {
            font-size: 10px;
            color: #a71926;
            letter-spacing: 1px;
            margin-top: 3px;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 17px;
        }

        .menu a {
            text-decoration: none;
            color: #111111;
            font-size: 20px;
            padding: 12px 23px;
            border: 1px solid transparent;
            border-radius: 12px;
            transition: 0.2s;
        }

        .menu a:hover,
        .menu a.active {
            border-color: #111111;
            background: rgba(255, 255, 255, 0.08);
        }

        .sidebar-bottom {
            margin-top: auto;
            padding-top: 40px;
        }

        .admin-profile {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 23px;
        }

        .avatar {
            width: 65px;
            height: 65px;
            border: 3px solid #111111;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 38px;
        }

        .admin-name {
            font-size: 19px;
        }

        .admin-role {
            font-size: 14px;
            margin-top: 5px;
        }

        .logout {
            display: flex;
            align-items: center;
            gap: 13px;
            padding-left: 9px;
            font-size: 19px;
            color: #111111;
            text-decoration: none;
        }

        .logout-icon {
            width: 31px;
            height: 31px;
            border: 2px solid #111111;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
        }

        /* KONTEN UTAMA */
        .main-content {
            flex: 1;
            min-width: 0;
            padding: 37px 40px 50px 43px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 35px;
        }

        .page-title {
            font-size: 40px;
            font-weight: 700;
        }

        .profile-icon {
            width: 50px;
            height: 50px;
            border: 3px solid #111111;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            flex-shrink: 0;
        }

        .welcome {
            margin-bottom: 50px;
        }

        .welcome h2 {
            font-size: 20px;
            margin-bottom: 7px;
        }

        .welcome p {
            font-size: 20px;
            line-height: 1.5;
        }

        /* KARTU STATISTIK */
        .stats {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 34px;
            margin-bottom: 56px;
        }

        .stat-card {
            min-height: 176px;
            border: 1px solid #d0c5c5;
            border-radius: 29px;
            padding: 11px 18px 15px;
            display: flex;
            flex-direction: column;
        }

        .total-card {
            background: #faf0f0;
        }

        .positive-card {
            background: #f5dddd;
        }

        .negative-card {
            background: #eafbea;
        }

        .stat-title {
            font-size: 20px;
            line-height: 1.4;
            min-height: 42px;
        }

        .stat-number {
            font-size: 40px;
            font-weight: 400;
            margin-top: 14px;
            margin-bottom: auto;
            padding-bottom: 10px;
        }

        .stat-description {
            font-size: 15px;
            line-height: 1.4;
        }

        /* GRAFIK */
        .chart-card {
            width: 100%;
            min-height: 470px;
            border: 1px solid #aaaaaa;
            border-radius: 4px;
            padding: 20px 36px 28px;
        }

        .chart-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .chart-area {
            width: 100%;
            height: 365px;
        }

        .chart-area svg {
            width: 100%;
            height: 100%;
            display: block;
            overflow: visible;
        }

        .chart-label {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            fill: #111111;
        }

        .chart-line {
            fill: none;
            stroke: #111111;
            stroke-width: 1.1;
            vector-effect: non-scaling-stroke;
        }

        /* RESPONSIVE */
        @media (max-width: 1100px) {
            .sidebar {
                width: 260px;
            }

            .main-content {
                padding: 30px 25px;
            }

            .stats {
                gap: 15px;
            }

            .stat-title {
                font-size: 17px;
            }

            .stat-number {
                font-size: 34px;
            }
        }

        @media (max-width: 760px) {
            .dashboard {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                min-height: auto;
                padding: 18px;
            }

            .logo {
                margin-bottom: 20px;
                justify-content: flex-start;
            }

            .logo img {
                max-width: 220px;
            }

            .menu {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 8px;
            }

            .menu a {
                font-size: 14px;
                padding: 11px;
            }

            .sidebar-bottom {
                display: none;
            }

            .main-content {
                padding: 25px 18px;
            }

            .page-title {
                font-size: 28px;
            }

            .welcome {
                margin-bottom: 28px;
            }

            .welcome h2,
            .welcome p {
                font-size: 16px;
            }

            .stats {
                grid-template-columns: 1fr;
                gap: 15px;
                margin-bottom: 28px;
            }

            .stat-card {
                min-height: 150px;
            }

            .chart-card {
                min-height: 360px;
                padding: 18px 12px;
            }

            .chart-area {
                height: 280px;
            }

            .chart-label {
                font-size: 13px;
            }
        }
    </style>
</head>

<body>
<div class="dashboard">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="logo">
            <!-- Jika sudah memiliki logo, letakkan file di public/images -->
            <img src="{{ asset('images/anemiacare-logo.png') }}"
                 alt="Logo AnemiaCare"
                 onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">

            <div style="display:none;">
                <div class="logo-text">♥ AnemiaCare</div>
                <div class="logo-caption">
                    Kenali Gejalanya, Jaga Kesehatanmu
                </div>
            </div>
        </div>

        <nav class="menu">
            <a href="{{ url('/admin/dashboard') }}" class="active">
                Dashboard
            </a>

            <a href="{{ url('/admin/informasi-anemia') }}">
                Informasi Anemia
            </a>

            <a href="{{ url('/admin/data-gejala') }}">
                Data Gejala
            </a>

            <a href="{{ url('/admin/riwayat-pasien') }}">
                Riwayat Pasien
            </a>
        </nav>

        <div class="sidebar-bottom">
            <div class="admin-profile">
                <div class="avatar">♙</div>
                <div>
                    <div class="admin-name">Kennan</div>
                    <div class="admin-role">keluar</div>
                </div>
            </div>

            <a href="{{ url('/logout') }}" class="logout">
                <span class="logout-icon">→</span>
                <span>Keluar</span>
            </a>
        </div>

    </aside>

    <!-- KONTEN DASHBOARD -->
    <main class="main-content">

        <header class="topbar">
            <h1 class="page-title">Dashboard Admin</h1>
            <div class="profile-icon">♙</div>
        </header>

        <section class="welcome">
            <h2>Selamat Datang, Admin!</h2>
            <p>
                Kelola Informasi, Gejala dan Riwayat Pasien Pada Sistem.
            </p>
        </section>

        <!-- KARTU STATISTIK -->
        <section class="stats">

            <div class="stat-card total-card">
                <div class="stat-title">Total Pasien</div>
                <div class="stat-number">222</div>
                <div class="stat-description">
                    Data Pasien Terdaftar
                </div>
            </div>

            <div class="stat-card positive-card">
                <div class="stat-title">Hasil Positif Anemia</div>
                <div class="stat-number">44</div>
                <div class="stat-description">
                    Pasien Terdeteksi Anemia
                </div>
            </div>

            <div class="stat-card negative-card">
                <div class="stat-title">Hasil Negatif</div>
                <div class="stat-number">522</div>
                <div class="stat-description">
                    Tidak Terdeteksi Anemia
                </div>
            </div>

        </section>

        <!-- GRAFIK TREN SKRINING -->
        <section class="chart-card">
            <h2 class="chart-title">Tren Skrining Pasien</h2>

            <div class="chart-area">
                <svg viewBox="0 0 800 340"
                     preserveAspectRatio="none"
                     role="img"
                     aria-label="Grafik tren skrining pasien Januari sampai Agustus">

                    <!-- Label sumbu vertikal -->
                    <g class="chart-label" text-anchor="start">
                        <text x="0" y="38">40</text>
                        <text x="0" y="96">30</text>
                        <text x="0" y="154">20</text>
                        <text x="0" y="212">10</text>
                        <text x="0" y="270">0</text>
                    </g>

                    <!-- Garis grafik -->
                    <polyline class="chart-line"
                        points="
                        85,260
                        165,246
                        245,246
                        325,232
                        405,207
                        485,176
                        565,136
                        645,89
                        725,43
                        "/>

                    <!-- Label bulan -->
                    <g class="chart-label" text-anchor="middle">
                        <text x="85" y="310">Jan</text>
                        <text x="165" y="310">Feb</text>
                        <text x="245" y="310">Mar</text>
                        <text x="325" y="310">Apr</text>
                        <text x="405" y="310">Mei</text>
                        <text x="485" y="310">Jun</text>
                        <text x="565" y="310">Jul</text>
                        <text x="645" y="310">Agu</text>
                    </g>

                </svg>
            </div>
        </section>

    </main>
</div>
</body>
</html>
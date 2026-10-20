
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | AnemiaCare</title>

    <style>
        :root {
            --primary: #b42332;
            --sidebar: #fff7f7;
            --background: #faf8f8;
            --text: #242124;
            --muted: #777078;
            --border: #eee3e4;
            --green: #178454;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: var(--background);
            color: var(--text);
            line-height: 1.5;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .app {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */
        .sidebar {
            width: 258px;
            flex-shrink: 0;
            background: var(--sidebar);
            border-right: 1px solid var(--border);
            padding: 25px 17px 18px;
            display: flex;
            flex-direction: column;
        }

        .brand {
            padding: 3px 10px 30px;
        }

        .brand-name {
            display: flex;
            align-items: center;
            gap: 9px;
            color: var(--primary);
        }

        .brand-mark {
            display: grid;
            place-items: center;
            width: 39px;
            height: 39px;
            border-radius: 13px;
            background: var(--primary);
            color: white;
            font-size: 25px;
        }

        .brand-name strong {
            font-size: 23px;
            letter-spacing: -.8px;
        }

        .brand small {
            display: block;
            color: #9e525a;
            font-size: 10px;
            margin: 4px 0 0 48px;
        }

        .nav-label {
            padding: 0 12px 10px;
            color: #a39a9c;
            font-size: 10px;
            font-weight: bold;
            letter-spacing: 1.2px;
            text-transform: uppercase;
        }

        .menu {
            display: grid;
            gap: 7px;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 13px;
            border-radius: 11px;
            font-size: 14px;
            color: #62585b;
            transition: .2s;
        }

        .nav-icon {
            width: 23px;
            text-align: center;
            font-size: 18px;
        }

        .menu a:hover {
            background: #f9e8e9;
            color: var(--primary);
        }

        .menu a.active {
            background: var(--primary);
            color: white;
            font-weight: 600;
            box-shadow: 0 6px 14px #b4233226;
        }

        .sidebar-bottom {
            margin-top: auto;
            padding-top: 25px;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 11px;
            padding: 13px 10px;
            border-top: 1px solid var(--border);
        }

        .avatar {
            width: 39px;
            height: 39px;
            border-radius: 50%;
            background: #f5d7da;
            color: var(--primary);
            display: grid;
            place-items: center;
            font-weight: bold;
        }

        .profile-info {
            flex: 1;
            min-width: 0;
        }

        .profile-info strong {
            display: block;
            font-size: 13px;
        }

        .profile-info span {
            color: var(--muted);
            font-size: 11px;
        }

        .logout {
            display: flex;
            gap: 11px;
            padding: 10px 13px;
            color: #776b6d;
            font-size: 13px;
            border-radius: 10px;
        }

        .logout:hover {
            color: var(--primary);
            background: #f9e8e9;
        }

        /* KONTEN UTAMA */
        .main {
            flex: 1;
            min-width: 0;
            padding: 30px clamp(20px, 4vw, 48px) 40px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .eyebrow {
            color: var(--primary);
            font-size: 11px;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1.3px;
            margin-bottom: 4px;
        }

        h1 {
            font-size: clamp(25px, 3vw, 32px);
            letter-spacing: -.9px;
            line-height: 1.2;
        }

        .topbar p {
            color: var(--muted);
            font-size: 13px;
            margin-top: 7px;
        }

        .top-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .date-pill {
            border: 1px solid var(--border);
            background: white;
            padding: 10px 13px;
            border-radius: 10px;
            color: #655b5d;
            font-size: 12px;
            white-space: nowrap;
        }

        .top-avatar {
            width: 43px;
            height: 43px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            background: #f6e0e2;
            color: var(--primary);
            font-weight: bold;
        }

        /* SAPAAN ADMIN */
        .welcome {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 21px 24px;
            margin-bottom: 23px;
            border-radius: 16px;
            background: linear-gradient(110deg, #fff0f1, #fffafa);
            border: 1px solid #f4dfe1;
        }

        .welcome h2 {
            font-size: 17px;
            margin-bottom: 4px;
        }

        .welcome p {
            color: #75696b;
            font-size: 13px;
        }

        .welcome-icon {
            width: 48px;
            height: 48px;
            flex-shrink: 0;
            border-radius: 15px;
            background: white;
            color: var(--primary);
            display: grid;
            place-items: center;
            font-size: 25px;
        }

        /* STATISTIK */
        .section-heading {
            margin: 25px 0 14px;
        }

        .section-heading h2 {
            font-size: 16px;
        }

        .section-heading p {
            font-size: 12px;
            color: var(--muted);
            margin-top: 3px;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
        }

        .stat-card {
            padding: 20px;
            background: white;
            border: 1px solid var(--border);
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(70, 25, 30, .05);
        }

        .stat-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .stat-label {
            color: #74696b;
            font-size: 12px;
            font-weight: 600;
        }

        .stat-icon {
            width: 38px;
            height: 38px;
            border-radius: 12px;
            display: grid;
            place-items: center;
            font-size: 18px;
        }

        .icon-total {
            background: #f7e6e8;
            color: var(--primary);
        }

        .icon-positive {
            background: #fff0f0;
            color: #c33c49;
        }

        .icon-negative {
            background: #eaf8f0;
            color: var(--green);
        }

        .stat-number {
            font-size: 31px;
            font-weight: 750;
            margin-top: 15px;
            line-height: 1.2;
        }

        .stat-note {
            font-size: 11px;
            color: var(--muted);
            margin-top: 8px;
        }

        /* GRAFIK DAN RINGKASAN */
        .content-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.6fr) minmax(240px, .9fr);
            gap: 17px;
            margin-top: 23px;
        }

        .panel {
            background: white;
            border: 1px solid var(--border);
            border-radius: 15px;
            padding: 21px;
            box-shadow: 0 8px 24px rgba(70, 25, 30, .05);
            min-width: 0;
        }

        .panel-header {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 15px;
        }

        .panel-header h2 {
            font-size: 15px;
        }

        .panel-header p {
            color: var(--muted);
            font-size: 11px;
            margin-top: 4px;
        }

        .period {
            border: 1px solid var(--border);
            border-radius: 8px;
            background: white;
            color: #6c6062;
            padding: 7px 9px;
            font-size: 11px;
            white-space: nowrap;
        }

        .chart-wrap {
            width: 100%;
            height: 260px;
        }

        .chart-wrap svg {
            width: 100%;
            height: 100%;
            display: block;
        }

        .grid-line {
            stroke: #f0e9ea;
            stroke-width: 1;
        }

        .axis-label {
            font-size: 10px;
            fill: #93888a;
        }

        .trend-line {
            fill: none;
            stroke: var(--primary);
            stroke-width: 3;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .trend-area {
            fill: url(#chartFill);
        }

        .point {
            fill: white;
            stroke: var(--primary);
            stroke-width: 2;
        }

        .legend {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #786c6e;
            font-size: 11px;
        }

        .legend-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--primary);
        }

        .result-list {
            display: grid;
            gap: 20px;
            margin-top: 22px;
        }

        .result-row {
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: center;
            gap: 8px;
        }

        .result-name,
        .result-count {
            font-size: 12px;
        }

        .result-name {
            font-weight: 600;
        }

        .result-count {
            font-weight: bold;
        }

        .progress {
            grid-column: 1 / -1;
            height: 8px;
            background: #f3eeee;
            border-radius: 20px;
            overflow: hidden;
        }

        .progress span {
            display: block;
            height: 100%;
            border-radius: inherit;
        }

        .progress-positive {
            width: 5.58%;
            background: #d34b58;
        }

        .progress-negative {
            width: 94.42%;
            background: #39a777;
        }

        .result-help {
            font-size: 11px;
            color: var(--muted);
            line-height: 1.6;
            padding: 12px;
            background: #faf7f7;
            border-radius: 10px;
            margin-top: 22px;
        }

        .footer-note {
            text-align: center;
            color: #a19799;
            font-size: 11px;
            margin-top: 24px;
        }

        /* RESPONSIVE */
        @media (max-width: 1050px) {
            .sidebar {
                width: 225px;
                flex-basis: 225px;
            }

            .stats {
                gap: 11px;
            }

            .stat-card {
                padding: 16px;
            }

            .content-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 720px) {
            .app {
                display: block;
            }

            .sidebar {
                width: 100%;
                min-height: auto;
                padding: 15px;
                border-right: 0;
                border-bottom: 1px solid var(--border);
            }

            .brand {
                padding: 0 5px 16px;
            }

            .brand-name strong {
                font-size: 21px;
            }

            .brand small {
                margin-left: 47px;
            }

            .nav-label {
                display: none;
            }

            .menu {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 6px;
            }

            .menu a {
                padding: 10px;
                font-size: 12px;
                gap: 7px;
            }

            .sidebar-bottom {
                display: none;
            }

            .main {
                padding: 23px 15px 30px;
            }

            .topbar {
                align-items: flex-start;
                margin-bottom: 22px;
            }

            .topbar p {
                max-width: 300px;
            }

            .date-pill {
                display: none;
            }

            .welcome {
                padding: 17px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .stat-card {
                padding: 17px;
            }

            .stat-number {
                font-size: 28px;
            }

            .panel {
                padding: 16px;
            }

            .chart-wrap {
                height: 220px;
            }
        }

        @media (max-width: 380px) {
            .menu a {
                font-size: 11px;
            }

            .top-avatar {
                width: 37px;
                height: 37px;
            }

            .welcome-icon {
                display: none;
            }
        }
    </style>
</head>

<body>
<div class="app">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <a class="brand" href="{{ url('/admin/dashboard') }}">
            <div class="brand-name">
                <span class="brand-mark">♥</span>
                <strong>AnemiaCare</strong>
            </div>
            <small>Kenali Gejalanya, Jaga Kesehatanmu</small>
        </a>

        <div class="nav-label">Menu utama</div>

        <nav class="menu" aria-label="Navigasi admin">
            <a href="{{ url('/admin/dashboard') }}" class="active">
                <span class="nav-icon">▦</span>
                Dashboard
            </a>

            <a href="{{ url('/admin/informasi-anemia') }}">
                <span class="nav-icon">♡</span>
                Informasi Anemia
            </a>

            <a href="{{ url('/admin/data-gejala') }}">
                <span class="nav-icon">☷</span>
                Data Gejala
            </a>

            <a href="{{ url('/admin/riwayat-pasien') }}">
                <span class="nav-icon">◷</span>
                Riwayat Deteksi
            </a>
        </nav>

        <div class="sidebar-bottom">
            <div class="profile">
                <div class="avatar">A</div>

                <div class="profile-info">
                    <strong>{{ Auth::user()->name ?? 'Admin' }}</strong>
                    <span>Administrator</span>
                </div>
            </div>

            <a class="logout" href="{{ url('/logout') }}">
                <span>↪</span>
                Keluar dari akun
            </a>
        </div>

    </aside>

    <!-- KONTEN UTAMA -->
    <main class="main">

        <header class="topbar">
            <div>
                <div class="eyebrow">AnemiaCare / Admin</div>
                <h1>Dashboard</h1>
                <p>Pantau aktivitas skrining dan kelola informasi anemia.</p>
            </div>

            <div class="top-actions">
                <div class="date-pill">◷ &nbsp; Ringkasan skrining</div>
                <div class="top-avatar" title="Administrator">A</div>
            </div>
        </header>

        <!-- SAPAAN ADMIN -->
        <section class="welcome">
            <div>
                <h2>
                    Selamat datang,
                    {{ Auth::user()->name ?? 'Admin' }}! 👋
                </h2>

                <p>
                    Berikut ringkasan aktivitas deteksi dini anemia pada sistem Anda.
                </p>
            </div>

            <div class="welcome-icon">♡</div>
        </section>

        <!-- STATISTIK -->
        <div class="section-heading">
            <h2>Ringkasan Skrining</h2>
            <p>Ikhtisar hasil deteksi yang tercatat di sistem.</p>
        </div>

        <section class="stats">

            <article class="stat-card">
                <div class="stat-top">
                    <span class="stat-label">Total Deteksi</span>
                    <span class="stat-icon icon-total">▦</span>
                </div>

                <div class="stat-number">788</div>
                <div class="stat-note">Total aktivitas deteksi tercatat</div>
            </article>

            <article class="stat-card">
                <div class="stat-top">
                    <span class="stat-label">Hasil Mengarah Anemia</span>
                    <span class="stat-icon icon-positive">♡</span>
                </div>

                <div class="stat-number">44</div>
                <div class="stat-note">Hasil skrining positif</div>
            </article>

            <article class="stat-card">
                <div class="stat-top">
                    <span class="stat-label">Hasil Tidak Mengarah Anemia</span>
                    <span class="stat-icon icon-negative">✓</span>
                </div>

                <div class="stat-number">744</div>
                <div class="stat-note">Hasil skrining negatif</div>
            </article>

        </section>

        <!-- GRAFIK DAN RINGKASAN -->
        <section class="content-grid">

            <article class="panel">
                <div class="panel-header">
                    <div>
                        <h2>Tren Skrining Pasien</h2>
                        <p>Jumlah skrining per bulan</p>
                    </div>

                    <span class="period">Jan – Agu</span>
                </div>

                <div class="chart-wrap">
                    <svg viewBox="0 0 620 250"
                         role="img"
                         aria-label="Grafik tren skrining Januari sampai Agustus">

                        <defs>
                            <linearGradient id="chartFill" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0%" stop-color="#b42332" stop-opacity=".18"/>
                                <stop offset="100%" stop-color="#b42332" stop-opacity="0"/>
                            </linearGradient>
                        </defs>

                        <g>
                            <line class="grid-line" x1="44" y1="25" x2="600" y2="25"/>
                            <line class="grid-line" x1="44" y1="70" x2="600" y2="70"/>
                            <line class="grid-line" x1="44" y1="115" x2="600" y2="115"/>
                            <line class="grid-line" x1="44" y1="160" x2="600" y2="160"/>
                            <line class="grid-line" x1="44" y1="205" x2="600" y2="205"/>
                        </g>

                        <g class="axis-label" text-anchor="end">
                            <text x="35" y="29">40</text>
                            <text x="35" y="74">30</text>
                            <text x="35" y="119">20</text>
                            <text x="35" y="164">10</text>
                            <text x="35" y="209">0</text>
                        </g>

                        <path class="trend-area"
                              d="M55 196 L130 187 L205 187 L280 174 L355 151 L430 123 L505 86 L580 42 L580 205 L55 205 Z"/>

                        <polyline class="trend-line"
                                  points="55,196 130,187 205,187 280,174 355,151 430,123 505,86 580,42"/>

                        <g>
                            <circle class="point" cx="55" cy="196" r="4"/>
                            <circle class="point" cx="130" cy="187" r="4"/>
                            <circle class="point" cx="205" cy="187" r="4"/>
                            <circle class="point" cx="280" cy="174" r="4"/>
                            <circle class="point" cx="355" cy="151" r="4"/>
                            <circle class="point" cx="430" cy="123" r="4"/>
                            <circle class="point" cx="505" cy="86" r="4"/>
                            <circle class="point" cx="580" cy="42" r="4"/>
                        </g>

                        <g class="axis-label" text-anchor="middle">
                            <text x="55" y="231">Jan</text>
                            <text x="130" y="231">Feb</text>
                            <text x="205" y="231">Mar</text>
                            <text x="280" y="231">Apr</text>
                            <text x="355" y="231">Mei</text>
                            <text x="430" y="231">Jun</text>
                            <text x="505" y="231">Jul</text>
                            <text x="580" y="231">Agu</text>
                        </g>
                    </svg>
                </div>

                <div class="legend">
                    <span class="legend-dot"></span>
                    Jumlah skrining
                </div>
            </article>

            <article class="panel">
                <div class="panel-header">
                    <div>
                        <h2>Ringkasan Hasil</h2>
                        <p>Perbandingan hasil skrining</p>
                    </div>
                </div>

                <div class="result-list">

                    <div class="result-row">
                        <span class="result-name">Mengarah anemia</span>
                        <span class="result-count">44</span>

                        <div class="progress">
                            <span class="progress-positive"></span>
                        </div>
                    </div>

                    <div class="result-row">
                        <span class="result-name">Tidak mengarah anemia</span>
                        <span class="result-count">744</span>

                        <div class="progress">
                            <span class="progress-negative"></span>
                        </div>
                    </div>

                </div>

                <div class="result-help">
                    <strong>Catatan:</strong>
                    Hasil deteksi dini merupakan informasi awal berdasarkan
                    gejala, bukan diagnosis medis. Pengguna dengan keluhan
                    disarankan berkonsultasi dengan tenaga kesehatan.
                </div>
            </article>

        </section>

        <div class="footer-note">
            AnemiaCare · Sistem Deteksi Dini Anemia Berbasis Website
        </div>

    </main>
</div>
</body>
</html>

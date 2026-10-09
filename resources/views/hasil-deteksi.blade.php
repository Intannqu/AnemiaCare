
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Deteksi Anemia | AnemiaCare</title>

    <style>
        /* RESET */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Poppins", "Segoe UI", Arial, sans-serif;
            background: #ffffff;
            color: #171717;
            font-size: 15px;
            line-height: 1.6;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        /* NAVBAR */
        .navbar {
            width: 100%;
            background: #ffffff;
        }

        .navbar-container {
            max-width: 1360px;
            min-height: 110px;
            padding: 20px 36px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-shrink: 0;
        }

        .logo-symbol {
            font-size: 49px;
            color: #c91e36;
            font-weight: bold;
            line-height: 1;
        }

        .logo-name {
            font-size: 27px;
            font-weight: 800;
            letter-spacing: -1px;
            color: #a71926;
            line-height: 1.15;
        }

        .logo-name span {
            color: #e65360;
        }

        .logo-tagline {
            font-size: 8px;
            color: #a71926;
            letter-spacing: .5px;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .nav-link {
            font-size: 14px;
            white-space: nowrap;
            padding: 8px 0;
            border-bottom: 2px solid transparent;
        }

        .nav-link:hover,
        .nav-link.active {
            border-bottom-color: #292020;
        }

        .login-button {
            border: 1px solid #333333;
            border-radius: 5px;
            min-width: 170px;
            padding: 7px 18px;
            text-align: center;
            font-size: 14px;
            white-space: nowrap;
            transition: background .2s;
        }

        .login-button:hover {
            background: #fff0f0;
        }

        /* AREA KONTEN */
        .page-container {
            width: 100%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 15px 32px 55px;
        }

        .page-heading {
            font-size: 25px;
            font-weight: 700;
            margin: 0 7px 20px;
        }

        /* KARTU HASIL DAN REKOMENDASI */
        .result-card {
            border: 1px solid #c8c8c8;
            border-radius: 23px;
            padding: 21px 24px 16px;
            margin-bottom: 27px;
            background: #ffffff;
        }

        .result-banner {
            min-height: 156px;
            border-radius: 13px;
            padding: 22px 20px;
            display: grid;
            grid-template-columns: 105px minmax(0, 1fr);
            align-items: center;
            gap: 15px;
            text-align: center;
        }

        .result-banner.negative {
            background: #c1fac9;
            color: #139b32;
        }

        .result-banner.positive {
            background: #b86e70;
            color: #a51e1e;
        }

        .result-icon {
            font-size: 70px;
            line-height: 1;
        }

        .result-copy h2 {
            font-size: 24px;
            font-weight: 700;
            line-height: 1.4;
            margin-bottom: 19px;
        }

        .result-copy p {
            color: #171717;
            font-size: 17px;
            line-height: 1.6;
        }

        .recommendation {
            padding: 25px 38px 0;
        }

        .recommendation h3 {
            text-align: center;
            font-size: 23px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .recommendation p {
            font-size: 14px;
            line-height: 1.65;
            color: #292929;
        }

        /* IDENTITAS PASIEN */
        .identity-card {
            background: #f2f2f2;
            border-radius: 12px;
            padding: 9px 35px 15px;
            margin: 0 7px 47px;
        }

        .identity-card h2 {
            text-align: center;
            font-size: 23px;
            font-weight: 600;
            margin-bottom: 7px;
        }

        .identity-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 23px 50px;
            max-width: 760px;
            margin: auto;
        }

        .identity-item {
            display: flex;
            align-items: center;
            gap: 17px;
            min-width: 0;
        }

        .identity-icon {
            width: 48px;
            min-width: 48px;
            text-align: center;
            font-size: 33px;
            line-height: 1.2;
        }

        .identity-label {
            font-size: 14px;
            color: #555555;
            margin-bottom: 2px;
        }

        .identity-value {
            font-size: 15px;
            font-weight: 500;
            overflow-wrap: anywhere;
        }

        /* DAFTAR GEJALA */
        .symptoms-card {
            border: 1px solid #c8c8c8;
            border-radius: 23px;
            padding: 14px 34px 30px;
            margin: 0 -8px 20px;
        }

        .symptoms-card h2 {
            text-align: center;
            font-size: 23px;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .symptom-list {
            display: flex;
            flex-direction: column;
            gap: 11px;
        }

        .symptom-item {
            display: grid;
            grid-template-columns: minmax(0, 455px) minmax(120px, 1fr);
            align-items: center;
            gap: 85px;
            max-width: 800px;
            margin: 0 auto;
            width: 100%;
        }

        .symptom-name {
            min-height: 52px;
            padding: 11px 10px;
            border-radius: 16px;
            background: #fff5f6;
            display: flex;
            align-items: center;
            font-size: 14px;
            line-height: 1.5;
        }

        .symptom-answer {
            display: flex;
            align-items: center;
            gap: 16px;
            font-size: 14px;
        }

        .status-icon {
            width: 28px;
            height: 28px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: #ffffff;
            font-size: 21px;
            font-weight: 800;
            line-height: 1;
            flex-shrink: 0;
        }

        .status-icon.yes {
            background: #35c94b;
        }

        .status-icon.no {
            background: #dc242b;
        }

        /* TOMBOL */
        .action-buttons {
            display: flex;
            gap: 34px;
            margin-left: 55px;
            flex-wrap: wrap;
        }

        .action-button {
            min-width: 175px;
            min-height: 41px;
            border: 1px solid #171717;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
            padding: 8px 20px;
            background: #ffffff;
            color: #171717;
            font-size: 14px;
            cursor: pointer;
            transition: background .2s, transform .2s;
        }

        .action-button:hover {
            background: #f7eeee;
        }

        .action-button.primary {
            background: #fa8588;
        }

        .action-button.primary:hover {
            background: #f16d74;
        }

        .action-arrow {
            font-size: 20px;
            line-height: 1;
        }

        /* RESPONSIVE TABLET */
        @media (max-width: 950px) {
            .navbar-container {
                flex-wrap: wrap;
                gap: 18px;
            }

            .nav-menu {
                gap: 16px;
            }

            .page-container {
                padding: 18px 24px 45px;
            }

            .symptom-item {
                gap: 35px;
            }

            .recommendation {
                padding-left: 15px;
                padding-right: 15px;
            }
        }

        /* RESPONSIVE HP */
        @media (max-width: 600px) {
            .navbar-container {
                padding: 16px;
                min-height: auto;
            }

            .logo-name {
                font-size: 23px;
            }

            .logo-symbol {
                font-size: 40px;
            }

            .nav-menu {
                width: 100%;
                flex-wrap: wrap;
                gap: 8px 17px;
            }

            .nav-link {
                font-size: 12px;
            }

            .login-button {
                min-width: 130px;
                font-size: 12px;
            }

            .page-container {
                padding: 18px 15px 35px;
            }

            .page-heading {
                font-size: 23px;
                margin-left: 0;
            }

            .result-card {
                padding: 12px;
                border-radius: 16px;
            }

            .result-banner {
                grid-template-columns: 1fr;
                gap: 10px;
                padding: 20px 13px;
            }

            .result-icon {
                font-size: 50px;
            }

            .result-copy h2 {
                font-size: 20px;
                margin-bottom: 10px;
            }

            .result-copy p {
                font-size: 14px;
            }

            .recommendation {
                padding: 20px 4px 0;
            }

            .recommendation h3,
            .identity-card h2,
            .symptoms-card h2 {
                font-size: 20px;
            }

            .recommendation p {
                font-size: 13px;
            }

            .identity-card {
                margin: 0 0 25px;
                padding: 13px;
            }

            .identity-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .identity-icon {
                font-size: 29px;
            }

            .symptoms-card {
                margin: 0 0 20px;
                padding: 15px 12px 20px;
                border-radius: 16px;
            }

            .symptom-item {
                grid-template-columns: minmax(0, 1fr);
                gap: 8px;
                padding-bottom: 10px;
                border-bottom: 1px solid #f0e3e4;
            }

            .symptom-name {
                font-size: 13px;
                min-height: 45px;
            }

            .symptom-answer {
                padding-left: 8px;
            }

            .action-buttons {
                margin-left: 0;
                gap: 12px;
            }

            .action-button {
                flex: 1;
                min-width: 0;
                padding: 9px 12px;
            }
        }
    </style>
</head>

<body>

    @php
        /*
         * Nilai default untuk pratinjau halaman.
         * Nanti data ini dihubungkan ke hasil deteksi yang sebenarnya.
         */
        $hasil = request('hasil', 'negatif') === 'positif'
            ? 'positif'
            : 'negatif';

        $nama = request('nama', 'Nama Pasien');
        $jenisKelamin = request('jenis_kelamin', 'Belum diisi');
        $usia = request('usia', 'Belum diisi');
        $tanggalLahir = request('tanggal_lahir', 'Belum diisi');

        $gejala = [
            'kelemahan_kelelahan' => 'Apakah anda sering merasakan kelemahan dan kelelahan',
            'jantung_berdebar' => 'Apakah anda merasakan jantung berdebar-debar (palpitasi)',
            'sesak_nafas' => 'Apakah anda sering merasa sesak napas',
            'pucat' => 'Apakah anda terlihat pucat',
            'pusing' => 'Apakah anda sering merasakan pusing',
            'perubahan_warna_tinja' => 'Apakah anda sering mengalami perubahan warna tinja',
            'hipotensi' => 'Apakah anda mengalami hipotensi (tekanan darah rendah)',
        ];

        $jawaban = request()->input('gejala', [
            'kelemahan_kelelahan' => 'Tidak',
            'jantung_berdebar' => 'Ya',
            'sesak_nafas' => 'Tidak',
            'pucat' => 'Tidak',
            'pusing' => 'Tidak',
            'perubahan_warna_tinja' => 'Tidak',
            'hipotensi' => 'Tidak',
        ]);

        if (!is_array($jawaban)) {
            $jawaban = [];
        }
    @endphp

    <!-- NAVBAR -->
    <header class="navbar">
        <div class="navbar-container">

            <a href="{{ route('home') }}" class="logo">
                <div class="logo-symbol">♡</div>
                <div>
                    <div class="logo-name">Anemia<span>Care</span></div>
                    <div class="logo-tagline">
                        Kenali Gejalanya. Jaga Kesehatanmu
                    </div>
                </div>
            </a>

            <nav class="nav-menu">
                <a href="{{ route('home') }}" class="nav-link">
                    Informasi Anemia
                </a>

                <a href="{{ route('tentang.sistem') }}" class="nav-link">
                    Tentang Sistem
                </a>

                <a href="{{ route('skrining') }}" class="nav-link active">
                    Skrining Anemia
                </a>
            </nav>

            <a href="#" class="login-button">Login Admin</a>

        </div>
    </header>

    <!-- KONTEN HALAMAN -->
    <main class="page-container">

        <h1 class="page-heading">Hasil Deteksi Anemia</h1>

        <!-- HASIL DETEKSI -->
        <section class="result-card">

            @if($data['hasil'] === 'anemia')
                <div class="result-banner positive">
                    <div class="result-icon" aria-hidden="true">⚠️</div>

                    <div class="result-copy">
                        <h2>Kemungkinan Terdapat Gejala Anemia</h2>
                        <p>
                            Berdasarkan gejala yang Anda masukkan, terdapat
                            kemungkinan Anda mengalami anemia.
                        </p>
                    </div>
                </div>
            @else
                <div class="result-banner negative">
                    <div class="result-icon" aria-hidden="true">💚</div>

                    <div class="result-copy">
                        <h2>Kemungkinan Tidak Terdapat Gejala Anemia</h2>
                        <p>
                            Berdasarkan gejala yang Anda masukkan, tidak
                            ditemukan indikasi gejala yang mengarah pada anemia.
                        </p>
                    </div>
                </div>
            @endif

            <div class="recommendation">
                <h3>Rekomendasi Tindakan</h3>

                @if ($hasil === 'positif')
                    <p>
                        Hasil skrining berdasarkan kondisi dan gejala yang Anda
                        laporkan menunjukkan adanya indikasi yang berpotensi
                        mengarah pada anemia. Perlu diketahui bahwa
                        <strong>hasil ini tidak dapat dijadikan sebagai diagnosis medis</strong>.
                        Disarankan berkonsultasi dengan dokter atau tenaga
                        kesehatan untuk pemeriksaan lebih lanjut di RSUD Kertosono.
                    </p>
                @else
                    <p>
                        Berdasarkan jawaban yang Anda berikan, hasil skrining
                        tidak menunjukkan indikasi gejala yang mengarah pada
                        anemia. Namun, hasil skrining ini
                        <strong>bukan merupakan diagnosis medis</strong>.
                        Tetap jaga kesehatan dengan mengonsumsi makanan bergizi
                        seimbang, mencukupi waktu istirahat, dan menerapkan pola
                        hidup sehat. Konsultasikan dengan tenaga kesehatan jika
                        memiliki keluhan.
                    </p>
                @endif
            </div>

        </section>

        <!-- IDENTITAS PASIEN -->
        <section class="identity-card">

            <h2>Identitas Pasien</h2>

            <div class="identity-grid">

                <div class="identity-item">
                    <div class="identity-icon" aria-hidden="true">👤</div>
                    <div>
                        <div class="identity-label">Nama</div>
                        <div class="identity-value">{{ $nama }}</div>
                    </div>
                </div>

                <div class="identity-item">
                    <div class="identity-icon" aria-hidden="true">🧍</div>
                    <div>
                        <div class="identity-label">Usia</div>
                        <div class="identity-value">{{ $usia }}</div>
                    </div>
                </div>

                <div class="identity-item">
                    <div class="identity-icon" aria-hidden="true">👫</div>
                    <div>
                        <div class="identity-label">Jenis Kelamin</div>
                        <div class="identity-value">{{ $jenisKelamin }}</div>
                    </div>
                </div>

                <div class="identity-item">
                    <div class="identity-icon" aria-hidden="true">📅</div>
                    <div>
                        <div class="identity-label">Tanggal Lahir</div>
                        <div class="identity-value">{{ $tanggalLahir }}</div>
                    </div>
                </div>

            </div>
        </section>

        <!-- GEJALA KLINIS -->
        <section class="symptoms-card">

            <h2>Gejala Klinis</h2>

            <div class="symptom-list">

                @foreach ($gejala as $kode => $pertanyaan)
                    @php
                        $nilai = $jawaban[$kode] ?? 'Tidak';
                        $nilai = $nilai === 'Ya' ? 'Ya' : 'Tidak';
                    @endphp

                    <div class="symptom-item">

                        <div class="symptom-name">
                            {{ $pertanyaan }}
                        </div>

                        <div class="symptom-answer">
                            @if ($nilai === 'Ya')
                                <span class="status-icon yes" aria-label="Ya">
                                    ✓
                                </span>
                                <span>Ya</span>
                            @else
                                <span class="status-icon no" aria-label="Tidak">
                                    ×
                                </span>
                                <span>No</span>
                            @endif
                        </div>

                    </div>
                @endforeach

            </div>
        </section>

        <!-- TOMBOL NAVIGASI -->
        <div class="action-buttons">

            <a href="{{ route('skrining') }}" class="action-button">
                Kembali
            </a>

            <a href="{{ route('skrining') }}" class="action-button primary">
                <span>Mulai Ulang</span>
                <span class="action-arrow">→</span>
            </a>

        </div>

    </main>

</body>
</html>
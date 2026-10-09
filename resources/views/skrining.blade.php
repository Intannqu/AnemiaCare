
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skrining Anemia | AnemiaCare</title>

    <style>
        /* ===== PENGATURAN DASAR ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Poppins", "Segoe UI", Arial, sans-serif;
            color: #20191a;
            background: #ffffff;
            font-size: 15px;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button, input, select {
            font: inherit;
        }

        /* ===== NAVBAR ===== */
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
            color: #c91e36;
            font-size: 48px;
            font-weight: bold;
            line-height: 1;
        }

        .logo-name {
            color: #a71926;
            font-size: 27px;
            font-weight: 800;
            letter-spacing: -1px;
            line-height: 1.1;
        }

        .logo-name span {
            color: #e65360;
        }

        .logo-tagline {
            color: #a71926;
            font-size: 8px;
            letter-spacing: .5px;
            margin-top: 3px;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .nav-link {
            padding: 9px 0;
            white-space: nowrap;
            font-size: 14px;
            border-bottom: 2px solid transparent;
        }

        .nav-link:hover,
        .nav-link.active {
            border-bottom-color: #292020;
        }

        .login-button {
            border: 1px solid #302727;
            border-radius: 5px;
            min-width: 170px;
            padding: 8px 18px;
            text-align: center;
            font-size: 14px;
            white-space: nowrap;
        }

        .login-button:hover {
            background: #fff0f0;
        }

        /* ===== KONTEN HALAMAN ===== */
        .page-container {
            max-width: 1360px;
            margin: auto;
            padding: 22px 32px 65px;
        }

        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            font-size: 15px;
        }

        .back-link:hover {
            color: #c91e36;
        }

        .page-heading {
            margin-bottom: 16px;
        }

        .page-heading h1 {
            font-size: 25px;
            font-weight: 700;
            margin-bottom: 3px;
        }

        .page-heading p {
            font-size: 17px;
        }

        /* ===== LAYOUT UTAMA ===== */
        .screening-layout {
            display: grid;
            grid-template-columns: minmax(0, 2fr) minmax(280px, 1fr);
            gap: 16px;
            align-items: start;
        }

        .screening-main {
            min-width: 0;
        }

        /* ===== KARTU ===== */
        .screening-card {
            background: #fff6f7;
            border-radius: 16px;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .card-title {
            background: #f8e4df;
            border-bottom: 1px solid #e9c9c3;
            padding: 8px 13px;
            font-size: 23px;
            font-weight: 600;
        }

        .card-content {
            padding: 13px 10px 20px;
        }

        /* ===== FORM DATA DIRI ===== */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 20px 35px;
        }

        .form-field {
            display: flex;
            flex-direction: column;
            min-width: 0;
        }

        .form-field label {
            font-size: 17px;
            margin: 0 4px 3px;
        }

        .form-field input,
        .form-field select {
            width: 100%;
            min-height: 35px;
            padding: 6px 8px;
            border: 1px solid #c9baba;
            border-radius: 2px;
            background: #ffffff;
            color: #282020;
            outline: none;
        }

        .form-field input:focus,
        .form-field select:focus {
            border-color: #e65360;
            box-shadow: 0 0 0 2px #f9dddd;
        }

        .form-field input[readonly] {
            background: #f3eeee;
        }

        /* ===== DAFTAR GEJALA ===== */
        .instruction {
            font-size: 17px;
            margin: -7px 5px 30px;
        }

        .symptom-list {
            display: flex;
            flex-direction: column;
            gap: 27px;
        }

        .symptom-row {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 145px;
            align-items: center;
            gap: 10px;
        }

        .symptom-question {
            min-height: 52px;
            display: flex;
            align-items: center;
            padding: 12px 15px;
            border-radius: 16px;
            background: #f0eaea;
            font-size: 15px;
            line-height: 1.5;
            overflow-wrap: anywhere;
        }

        .radio-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .radio-group label {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            white-space: nowrap;
            font-size: 12px;
            color: #645b5b;
            cursor: pointer;
        }

        .radio-group input {
            width: 16px;
            height: 16px;
            accent-color: #fa555b;
            cursor: pointer;
        }

        /* ===== TOMBOL ===== */
        .button-container {
            padding: 0 20px;
            margin-top: -14px;
            margin-bottom: 30px;
        }

        .result-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
            min-width: 175px;
            padding: 9px 16px;
            border: 1px solid #1d1515;
            background: #fa8588;
            color: #1d1515;
            cursor: pointer;
            font-size: 14px;
            transition: background .2s;
        }

        .result-button:hover {
            background: #f36d74;
        }

        .button-arrow {
            font-size: 20px;
        }

        /* ===== PANEL KANAN ===== */
        .screening-sidebar {
            display: flex;
            flex-direction: column;
            gap: 24px;
            min-width: 0;
        }

        .sidebar-card {
            padding: 15px 13px;
            background: #fff0f0;
            border-radius: 17px;
        }

        .sidebar-title {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 12px;
            font-size: 18px;
            font-weight: 600;
        }

        .sidebar-icon {
            font-size: 22px;
        }

        .instruction-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .instruction-item {
            display: grid;
            grid-template-columns: 16px minmax(0, 1fr);
            gap: 12px;
            align-items: start;
        }

        .instruction-dot {
            width: 15px;
            height: 15px;
            margin-top: 5px;
            border: 1px solid #775858;
            border-radius: 50%;
            background: #d99a9a;
        }

        .instruction-item p {
            font-size: 14px;
            line-height: 1.6;
        }

        .blood-pressure-card p {
            font-size: 14px;
            line-height: 1.6;
        }

        /* ===== PESAN VALIDASI ===== */
        .message {
            display: none;
            padding: 12px 14px;
            margin: 0 0 20px;
            border-radius: 8px;
            font-size: 14px;
        }

        .message.error {
            display: block;
            color: #9e1b2b;
            background: #ffe7e9;
            border: 1px solid #f1b5bc;
        }

        /* ===== RESPONSIVE TABLET ===== */
        @media (max-width: 950px) {
            .navbar-container {
                flex-wrap: wrap;
                gap: 18px;
            }

            .nav-menu {
                gap: 16px;
            }

            .screening-layout {
                grid-template-columns: 1fr;
            }

            .screening-sidebar {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                align-items: start;
            }
        }

        /* ===== RESPONSIVE HP ===== */
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
                justify-content: flex-start;
                gap: 8px 18px;
            }

            .nav-link {
                font-size: 13px;
            }

            .login-button {
                min-width: 130px;
            }

            .page-container {
                padding: 18px 15px 35px;
            }

            .page-heading h1 {
                font-size: 23px;
            }

            .page-heading p {
                font-size: 15px;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 13px;
            }

            .card-title {
                font-size: 21px;
            }

            .symptom-row {
                grid-template-columns: 1fr;
                gap: 9px;
            }

            .symptom-question {
                font-size: 14px;
            }

            .radio-group {
                justify-content: flex-start;
                gap: 30px;
                padding-left: 8px;
            }

            .radio-group label {
                font-size: 13px;
            }

            .symptom-list {
                gap: 22px;
            }

            .screening-sidebar {
                grid-template-columns: 1fr;
            }

            .button-container {
                padding: 0 5px;
            }
        }
    </style>
</head>

<body>

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

    <!-- KONTEN -->
    <main class="page-container">

        <a href="{{ route('home') }}" class="back-link">
            ← Kembali
        </a>

        <section class="page-heading">
            <h1>Deteksi Dini Anemia</h1>
            <p>Silahkan isi gejala yang anda rasakan saat ini.</p>
        </section>

        <div class="screening-layout">

            <!-- BAGIAN KIRI -->
            <div class="screening-main">

                <!-- DATA DIRI -->
                <section class="screening-card">
                    <div class="card-title">Data Diri</div>

                    <div class="card-content">
                        <div class="form-grid">

                            <div class="form-field">
                                <label for="nama">Nama</label>
                                <input type="text" id="nama" name="nama"
                                    placeholder="Tulis Nama Anda">
                            </div>

                            <div class="form-field">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="form-field">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" id="tanggal_lahir"
                                    name="tanggal_lahir" onchange="hitungUsia()">
                            </div>

                            <div class="form-field">
                                <label for="usia">Usia</label>
                                <input type="text" id="usia" name="usia"
                                    placeholder="Terhitung otomatis" readonly>
                            </div>

                        </div>
                    </div>
                </section>

                <!-- GEJALA -->
                <section class="screening-card">
                    <div class="card-title">Gejala</div>

                    <div class="card-content">
                        <p class="instruction">
                            Pilih gejala yang anda rasakan saat ini dengan jujur!
                        </p>

                        <div id="pesan-error" class="message"></div>

                        <div class="symptom-list">

                            <div class="symptom-row">
                                <div class="symptom-question">
                                    Apakah anda sering merasakan kelemahan dan kelelahan
                                </div>
                                <div class="radio-group">
                                    <label><input type="radio" name="kelemahan_kelelahan" value="Ya"> Ya</label>
                                    <label><input type="radio" name="kelemahan_kelelahan" value="Tidak"> Tidak</label>
                                </div>
                            </div>

                            <div class="symptom-row">
                                <div class="symptom-question">
                                    Apakah anda merasakan jantung berdebar-debar (palpitasi)
                                </div>
                                <div class="radio-group">
                                    <label><input type="radio" name="jantung_berdebar" value="Ya"> Ya</label>
                                    <label><input type="radio" name="jantung_berdebar" value="Tidak"> Tidak</label>
                                </div>
                            </div>

                            <div class="symptom-row">
                                <div class="symptom-question">
                                    Apakah anda sering merasa sesak napas
                                </div>
                                <div class="radio-group">
                                    <label><input type="radio" name="sesak_nafas" value="Ya"> Ya</label>
                                    <label><input type="radio" name="sesak_nafas" value="Tidak"> Tidak</label>
                                </div>
                            </div>

                            <div class="symptom-row">
                                <div class="symptom-question">
                                    Apakah anda terlihat pucat
                                </div>
                                <div class="radio-group">
                                    <label><input type="radio" name="pucat" value="Ya"> Ya</label>
                                    <label><input type="radio" name="pucat" value="Tidak"> Tidak</label>
                                </div>
                            </div>

                            <div class="symptom-row">
                                <div class="symptom-question">
                                    Apakah anda sering merasakan pusing
                                </div>
                                <div class="radio-group">
                                    <label><input type="radio" name="pusing" value="Ya"> Ya</label>
                                    <label><input type="radio" name="pusing" value="Tidak"> Tidak</label>
                                </div>
                            </div>

                            <div class="symptom-row">
                                <div class="symptom-question">
                                    Apakah anda mengalami hipotensi (tekanan darah rendah)
                                </div>
                                <div class="radio-group">
                                    <label><input type="radio" name="hipotensi" value="Ya"> Ya</label>
                                    <label><input type="radio" name="hipotensi" value="Tidak"> Tidak</label>
                                </div>
                            </div>

                            <div class="symptom-row">
                                <div class="symptom-question">
                                    Apakah anda sering mengalami perubahan warna tinja
                                </div>
                                <div class="radio-group">
                                    <label><input type="radio" name="perubahan_warna_tinja" value="Ya"> Ya</label>
                                    <label><input type="radio" name="perubahan_warna_tinja" value="Tidak"> Tidak</label>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <div class="button-container">
                    <button type="button" class="result-button" onclick="periksaHasil()">
                        <span>Periksa Hasil</span>
                        <span class="button-arrow">→</span>
                    </button>
                </div>

            </div>

            <!-- SIDEBAR KANAN -->
            <aside class="screening-sidebar">

                <section class="sidebar-card">
                    <div class="sidebar-title">
                        <span class="sidebar-icon">💡</span>
                        Petunjuk Pengisian
                    </div>

                    <div class="instruction-list">
                        <div class="instruction-item">
                            <span class="instruction-dot"></span>
                            <p>Jawablah pertanyaan sesuai dengan kondisi anda</p>
                        </div>

                        <div class="instruction-item">
                            <span class="instruction-dot"></span>
                            <p>Jika anda mengalami gejala tersebut pilih "Ya"</p>
                        </div>

                        <div class="instruction-item">
                            <span class="instruction-dot"></span>
                            <p>Jika anda tidak mengalami gejala tersebut pilih "Tidak"</p>
                        </div>

                        <div class="instruction-item">
                            <span class="instruction-dot"></span>
                            <p>Pastikan seluruh pertanyaan telah terisi sebelum melanjutkan</p>
                        </div>

                        <div class="instruction-item">
                            <span class="instruction-dot"></span>
                            <p>Tekan tombol "Periksa Hasil" untuk melihat prediksi</p>
                        </div>
                    </div>
                </section>

                <section class="sidebar-card blood-pressure-card">
                    <div class="sidebar-title">
                        <span class="sidebar-icon">🩺</span>
                        Tekanan Darah
                    </div>

                    <p>
                        Menurut Kementerian Kesehatan (Kemenkes), tekanan darah
                        yang normal adalah antara 90/60 mmHg dan 120/80 mmHg.
                    </p>
                </section>

            </aside>
        </div>
    </main>

    <!-- JAVASCRIPT -->
    <script>
        function hitungUsia() {
            const inputTanggal = document.getElementById('tanggal_lahir');
            const inputUsia = document.getElementById('usia');

            if (!inputTanggal.value) {
                inputUsia.value = '';
                return;
            }

            const lahir = new Date(inputTanggal.value + 'T00:00:00');
            const sekarang = new Date();

            if (lahir > sekarang) {
                inputUsia.value = '';
                tampilkanPesan('Tanggal lahir tidak boleh di masa depan.');
                return;
            }

            let usia = sekarang.getFullYear() - lahir.getFullYear();
            const selisihBulan = sekarang.getMonth() - lahir.getMonth();

            if (
                selisihBulan < 0 ||
                (selisihBulan === 0 && sekarang.getDate() < lahir.getDate())
            ) {
                usia--;
            }

            inputUsia.value = usia + ' tahun';
            hapusPesan();
        }

        function tampilkanPesan(pesan) {
            const elemen = document.getElementById('pesan-error');
            elemen.textContent = pesan;
            elemen.className = 'message error';
        }

        function hapusPesan() {
            const elemen = document.getElementById('pesan-error');
            elemen.textContent = '';
            elemen.className = 'message';
        }

        function periksaHasil() {
            hapusPesan();

            const nama = document.getElementById('nama').value.trim();
            const jenisKelamin = document.getElementById('jenis_kelamin').value;
            const tanggalLahir = document.getElementById('tanggal_lahir').value;

            if (!nama || !jenisKelamin || !tanggalLahir) {
                tampilkanPesan('Silakan lengkapi nama, jenis kelamin, dan tanggal lahir.');
                return;
            }

            if (!document.getElementById('usia').value) {
                tampilkanPesan('Tanggal lahir belum valid. Silakan periksa kembali.');
                return;
            }

            const daftarGejala = [
                'kelemahan_kelelahan',
                'jantung_berdebar',
                'sesak_nafas',
                'pucat',
                'pusing',
                'hipotensi',
                'perubahan_warna_tinja'
            ];

            for (const gejala of daftarGejala) {
                const pilihan = document.querySelector(
                    'input[name="' + gejala + '"]:checked'
                );

                if (!pilihan) {
                    tampilkanPesan('Silakan jawab seluruh pertanyaan gejala sebelum melanjutkan.');
                    const pertama = document.querySelector(
                        'input[name="' + gejala + '"]'
                    );
                    pertama.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    return;
                }
            }

            tampilkanPesan(
                'Data sudah lengkap. Proses prediksi Naive Bayes belum dihubungkan ke halaman ini.'
            );
        }
    </script>

</body>
</html>
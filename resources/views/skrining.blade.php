<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Deteksi Dini Anemia - AnemiaCare</title>

    @vite(['resources/css/app.css',  'resources/css/skrining.css', 'resources/js/app.js'])
</head>

<body>

    <!-- ================= NAVBAR ================= -->
    <header class="navbar">

        <div class="navbar-container">

            <!-- LOGO -->
            <a href="/" class="logo">

                <div class="logo-symbol">
                    ♡
                </div>

                <div class="logo-information">
                    <div class="logo-name">
                        Anemia<span>Care</span>
                    </div>

                    <div class="logo-tagline">
                        Kenali Gejalanya. Jaga Kesehatanmu
                    </div>
                </div>

            </a>


            <!-- MENU -->
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


            <!-- LOGIN -->
            <a href="#" class="login-button">
                Login Admin
            </a>

        </div>

    </header>



    <!-- ================= MAIN ================= -->

    <main class="page-container">

        <!-- KEMBALI -->
        <a href="/" class="back-link">
            ← Kembali
        </a>


        <!-- JUDUL -->
        <section class="page-heading">

            <h1>
                Deteksi Dini Anemia
            </h1>

            <p>
                Silahkan isi gejala yang anda rasakan saat ini.
            </p>

        </section>



        <!-- ================= LAYOUT ================= -->

        <div class="screening-layout">


            <!-- ================= BAGIAN KIRI ================= -->

            <div class="screening-main">


                <!-- DATA DIRI -->

                <section class="screening-card">

                    <div class="card-title">
                        Data Diri
                    </div>


                    <div class="card-content">

                        <div class="form-grid">


                            <!-- NAMA -->
                            <div class="form-field">

                                <label for="nama">
                                    Nama
                                </label>

                                <input
                                    type="text"
                                    id="nama"
                                    name="nama"
                                    placeholder="Tulis Nama Anda"
                                    value="{{ old('nama') }}"
                                >

                            </div>



                            <!-- JENIS KELAMIN -->
                            <div class="form-field">

                                <label for="jenis_kelamin">
                                    Jenis Kelamin
                                </label>

                                <select
                                    id="jenis_kelamin"
                                    name="jenis_kelamin"
                                >

                                    <option value="">
                                        Pilih Jenis Kelamin
                                    </option>

                                    <option value="Laki-laki">
                                        Laki-laki
                                    </option>

                                    <option value="Perempuan">
                                        Perempuan
                                    </option>

                                </select>

                            </div>



                            <!-- TANGGAL LAHIR -->
                            <div class="form-field">

                                <label for="tanggal_lahir">
                                    Tanggal Lahir
                                </label>

                                <input
                                    type="date"
                                    id="tanggal_lahir"
                                    name="tanggal_lahir"
                                    onchange="hitungUsia()"
                                >

                            </div>



                            <!-- USIA -->
                            <div class="form-field">

                                <label for="usia">
                                    Usia
                                </label>

                                <input
                                    type="text"
                                    id="usia"
                                    name="usia"
                                    placeholder="Terhitung otomatis"
                                    readonly
                                >

                            </div>

                        </div>

                    </div>

                </section>



                <!-- ================= GEJALA ================= -->

                <section class="screening-card">

                    <div class="card-title">
                        Gejala
                    </div>


                    <div class="card-content">

                        <p class="instruction">
                            Pilih gejala yang anda rasakan saat ini dengan jujur!.
                        </p>


                        <div class="symptom-list">


                            <!-- GEJALA 1 -->

                            <div class="symptom-row">

                                <div class="symptom-question">
                                    Apakah anda sering merasakan kelemahan dan kelelahan
                                </div>

                                <div class="radio-group">

                                    <label>
                                        <input
                                            type="radio"
                                            name="kelemahan_kelelahan"
                                            value="Ya"
                                        >
                                        <span>Ya</span>
                                    </label>

                                    <label>
                                        <input
                                            type="radio"
                                            name="kelemahan_kelelahan"
                                            value="Tidak"
                                        >
                                        <span>Tidak</span>
                                    </label>

                                </div>

                            </div>



                            <!-- GEJALA 2 -->

                            <div class="symptom-row">

                                <div class="symptom-question">
                                    Apakah anda merasakan jantung berdebar debar (palpitasi)
                                </div>

                                <div class="radio-group">

                                    <label>
                                        <input
                                            type="radio"
                                            name="jantung_berdebar"
                                            value="Ya"
                                        >
                                        <span>Ya</span>
                                    </label>

                                    <label>
                                        <input
                                            type="radio"
                                            name="jantung_berdebar"
                                            value="Tidak"
                                        >
                                        <span>Tidak</span>
                                    </label>

                                </div>

                            </div>



                            <!-- GEJALA 3 -->

                            <div class="symptom-row">

                                <div class="symptom-question">
                                    Apakah anda sering merasa sesak nafas
                                </div>

                                <div class="radio-group">

                                    <label>
                                        <input
                                            type="radio"
                                            name="sesak_nafas"
                                            value="Ya"
                                        >
                                        <span>Ya</span>
                                    </label>

                                    <label>
                                        <input
                                            type="radio"
                                            name="sesak_nafas"
                                            value="Tidak"
                                        >
                                        <span>Tidak</span>
                                    </label>

                                </div>

                            </div>



                            <!-- GEJALA 4 -->

                            <div class="symptom-row">

                                <div class="symptom-question">
                                    Apakah anda terlihat pucat
                                </div>

                                <div class="radio-group">

                                    <label>
                                        <input
                                            type="radio"
                                            name="pucat"
                                            value="Ya"
                                        >
                                        <span>Ya</span>
                                    </label>

                                    <label>
                                        <input
                                            type="radio"
                                            name="pucat"
                                            value="Tidak"
                                        >
                                        <span>Tidak</span>
                                    </label>

                                </div>

                            </div>



                            <!-- GEJALA 5 -->

                            <div class="symptom-row">

                                <div class="symptom-question">
                                    Apakah anda sering merasakan pusing
                                </div>

                                <div class="radio-group">

                                    <label>
                                        <input
                                            type="radio"
                                            name="pusing"
                                            value="Ya"
                                        >
                                        <span>Ya</span>
                                    </label>

                                    <label>
                                        <input
                                            type="radio"
                                            name="pusing"
                                            value="Tidak"
                                        >
                                        <span>Tidak</span>
                                    </label>

                                </div>

                            </div>



                            <!-- GEJALA 6 -->

                            <div class="symptom-row">

                                <div class="symptom-question">
                                    Apakah anda mengalami hipotensi (tekanan darah rendah)
                                </div>

                                <div class="radio-group">

                                    <label>
                                        <input
                                            type="radio"
                                            name="hipotensi"
                                            value="Ya"
                                        >
                                        <span>Ya</span>
                                    </label>

                                    <label>
                                        <input
                                            type="radio"
                                            name="hipotensi"
                                            value="Tidak"
                                        >
                                        <span>Tidak</span>
                                    </label>

                                </div>

                            </div>



                            <!-- GEJALA 7 -->

                            <div class="symptom-row">

                                <div class="symptom-question">
                                    Apakah anda sering mengalami perubahan warna tinja
                                </div>

                                <div class="radio-group">

                                    <label>
                                        <input
                                            type="radio"
                                            name="perubahan_warna_tinja"
                                            value="Ya"
                                        >
                                        <span>Ya</span>
                                    </label>

                                    <label>
                                        <input
                                            type="radio"
                                            name="perubahan_warna_tinja"
                                            value="Tidak"
                                        >
                                        <span>Tidak</span>
                                    </label>

                                </div>

                            </div>


                        </div>

                    </div>

                </section>



                <!-- BUTTON -->

                <div class="button-container">

                    <button
                        type="button"
                        class="result-button"
                        onclick="periksaHasil()"
                    >

                        <span>
                            Periksa Hasil
                        </span>

                        <span class="button-arrow">
                            →
                        </span>

                    </button>

                </div>


            </div>



            <!-- ================= SIDEBAR ================= -->

            <aside class="screening-sidebar">


                <!-- PETUNJUK -->

                <div class="sidebar-card">

                    <div class="sidebar-title">

                        <span class="sidebar-icon">
                            💡
                        </span>

                        Petunjuk Pengisian

                    </div>


                    <div class="instruction-list">

                        <div class="instruction-item">

                            <span class="instruction-number">
                                1
                            </span>

                            <p>
                                Jawablah pertanyaan sesuai dengan kondisi anda
                            </p>

                        </div>


                        <div class="instruction-item">

                            <span class="instruction-number">
                                2
                            </span>

                            <p>
                                Jika anda mengalami gejala tersebut pilih "Ya"
                            </p>

                        </div>


                        <div class="instruction-item">

                            <span class="instruction-number">
                                3
                            </span>

                            <p>
                                Jika anda tidak mengalami gejala tersebut pilih "Tidak"
                            </p>

                        </div>


                        <div class="instruction-item">

                            <span class="instruction-number">
                                4
                            </span>

                            <p>
                                Pastikan seluruh pertanyaan telah terisi sebelum melanjutkan
                            </p>

                        </div>


                        <div class="instruction-item">

                            <span class="instruction-number">
                                5
                            </span>

                            <p>
                                Tekan tombol "Periksa Hasil" untuk melihat prediksi
                            </p>

                        </div>

                    </div>

                </div>



                <!-- TEKANAN DARAH -->

                <div class="sidebar-card blood-pressure-card">

                    <div class="sidebar-title">

                        <span class="sidebar-icon">
                            🩺
                        </span>

                        Tekanan Darah

                    </div>


                    <p>
                        Menurut Kementerian Kesehatan (Kemenkes)
                        tekanan darah yang normal adalah antara
                        90/60 mm/Hg dan 120/80 mm/Hg.
                    </p>

                </div>


            </aside>

        </div>

    </main>



    <!-- ================= JAVASCRIPT ================= -->

    <script>

        function hitungUsia() {

            const tanggalLahir =
                document.getElementById('tanggal_lahir').value;

            if (!tanggalLahir) {
                document.getElementById('usia').value = '';
                return;
            }

            const lahir = new Date(tanggalLahir);
            const sekarang = new Date();

            let usia =
                sekarang.getFullYear() -
                lahir.getFullYear();

            const bulan =
                sekarang.getMonth() -
                lahir.getMonth();

            if (
                bulan < 0 ||
                (
                    bulan === 0 &&
                    sekarang.getDate() < lahir.getDate()
                )
            ) {
                usia--;
            }

            document.getElementById('usia').value =
                usia + ' tahun';
        }



        function periksaHasil() {

            const nama =
                document.getElementById('nama').value.trim();

            const jenisKelamin =
                document.getElementById('jenis_kelamin').value;

            const tanggalLahir =
                document.getElementById('tanggal_lahir').value;

            const gejala = [
                'kelemahan_kelelahan',
                'jantung_berdebar',
                'sesak_nafas',
                'pucat',
                'pusing',
                'hipotensi',
                'perubahan_warna_tinja'
            ];

            if (
                nama === '' ||
                jenisKelamin === '' ||
                tanggalLahir === ''
            ) {

                alert(
                    'Silakan lengkapi Data Diri terlebih dahulu.'
                );

                return;
            }


            for (let i = 0; i < gejala.length; i++) {

                const pilihan =
                    document.querySelector(
                        'input[name="' + gejala[i] + '"]:checked'
                    );

                if (!pilihan) {

                    alert(
                        'Silakan jawab seluruh pertanyaan gejala terlebih dahulu.'
                    );

                    return;
                }
            }


            /*
             * Untuk sementara tombol menampilkan pesan.
             * Bagian ini nanti dapat dihubungkan
             * dengan proses Naive Bayes Laravel.
             */

            alert(
                'Data telah lengkap dan siap diproses.'
            );

        }

    </script>

</body>

</html>
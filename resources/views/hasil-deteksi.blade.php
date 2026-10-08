<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Hasil Deteksi Anemia - AnemiaCare</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body>

    <!-- =====================================================
         NAVBAR
    ====================================================== -->

    <header class="navbar">

        <div class="navbar-container">

            <a href="{{ route('home') }}" class="logo">

                <div class="logo-icon">
                    ♥
                </div>

                <div class="logo-text">
                    <strong>Anemia<span>Care</span></strong>

                    <small>
                        Kenali Gejalanya. Jaga Kesehatanmu
                    </small>
                </div>

            </a>


            <nav class="nav-menu">

                <a href="{{ route('home') }}">
                    Informasi Anemia
                </a>

                <a href="{{ route('tentang.sistem') }}">
                    Tentang Sistem
                </a>

                <a href="{{ route('skrining') }}"
                   class="active">
                    Skrining Anemia
                </a>

                <a href="#" class="login-button">
                    Login Admin
                </a>

            </nav>

        </div>

    </header>



    <!-- =====================================================
         CONTENT
    ====================================================== -->

    <main class="result-container">


        <!-- JUDUL -->

        <div class="page-heading">

            <span>Hasil Skrining</span>

            <h1>
                Hasil Deteksi Anemia
            </h1>

            <p>
                Berikut adalah hasil skrining berdasarkan
                gejala yang Anda masukkan.
            </p>

        </div>



        <!-- =================================================
             HASIL PREDIKSI
        ================================================== -->

        @if($data['hasil'] === 'anemia')

            <!-- ===============================
                 HASIL ANEMIA
            ================================ -->

            <section class="result-card">

                <div class="result-alert anemia-alert">

                    <div class="result-icon warning-icon">
                        !
                    </div>

                    <div>

                        <h2>
                            Kemungkinan Terdapat Gejala Anemia
                        </h2>

                        <p>
                            Berdasarkan Gejala yang Anda Masukkan,
                            Terdapat Kemungkinan Anda Mengalami Anemia
                        </p>

                    </div>

                </div>


                <div class="recommendation">

                    <h2>
                        Rekomendasi Tindakan
                    </h2>

                    <p>
                        Hasil skrining berdasarkan kondisi dan gejala
                        yang Anda laporkan menunjukkan adanya indikasi
                        yang berpotensi mengarah pada anemia.
                        Perlu diketahui bahwa
                        <strong>
                            hasil ini tidak dapat dijadikan sebagai
                            diagnosis medis
                        </strong>,
                        sehingga untuk memastikan kondisi Anda,
                        disarankan melakukan konsultasi dengan dokter
                        atau tenaga kesehatan dan mempertimbangkan
                        pemeriksaan lebih lanjut di RSUD Kertosono.
                    </p>

                </div>

            </section>


        @else

            <!-- ===============================
                 HASIL TIDAK ANEMIA
            ================================ -->

            <section class="result-card">

                <div class="result-alert healthy-alert">

                    <div class="result-icon success-icon">
                        ✓
                    </div>

                    <div>

                        <h2>
                            Kemungkinan Tidak Terdapat Gejala Anemia
                        </h2>

                        <p>
                            Berdasarkan Gejala yang Anda Masukkan,
                            Tidak Terdapat Kemungkinan Anda Mengalami
                            Anemia
                        </p>

                    </div>

                </div>


                <div class="recommendation">

                    <h2>
                        Rekomendasi Tindakan
                    </h2>

                    <p>
                        Berdasarkan jawaban yang Anda berikan,
                        hasil skrining menunjukkan bahwa tidak
                        ditemukan indikasi gejala yang mengarah
                        pada anemia. Namun, hasil skrining ini
                        <strong>
                            bukan merupakan diagnosis medis
                        </strong>,
                        sehingga tetap penting untuk menjaga
                        kesehatan dengan mengonsumsi makanan
                        bergizi seimbang, mencukupi waktu istirahat,
                        dan menerapkan pola hidup sehat.
                    </p>

                </div>

            </section>

        @endif



        <!-- =================================================
             IDENTITAS PASIEN
        ================================================== -->

        <section class="patient-card">

            <h2>
                Identitas Pasien
            </h2>


            <div class="patient-grid">


                <div class="patient-item">

                    <div class="patient-icon">
                        👤
                    </div>

                    <div>

                        <span>
                            Nama
                        </span>

                        <strong>
                            {{ $data['nama'] }}
                        </strong>

                    </div>

                </div>



                <div class="patient-item">

                    <div class="patient-icon">
                        🎂
                    </div>

                    <div>

                        <span>
                            Usia
                        </span>

                        <strong>
                            {{ $data['usia'] }} Tahun
                        </strong>

                    </div>

                </div>



                <div class="patient-item">

                    <div class="patient-icon">
                        ⚥
                    </div>

                    <div>

                        <span>
                            Jenis Kelamin
                        </span>

                        <strong>
                            {{ $data['jenis_kelamin'] }}
                        </strong>

                    </div>

                </div>



                <div class="patient-item">

                    <div class="patient-icon">
                        📅
                    </div>

                    <div>

                        <span>
                            Tanggal Lahir
                        </span>

                        <strong>
                            {{ $data['tanggal_lahir'] }}
                        </strong>

                    </div>

                </div>

            </div>

        </section>



        <!-- =================================================
             GEJALA KLINIS
        ================================================== -->

        <section class="symptom-card">

            <div class="section-title">

                <span class="section-number">
                    01
                </span>

                <div>

                    <h2>
                        Gejala Klinis
                    </h2>

                    <p>
                        Ringkasan jawaban gejala yang Anda masukkan
                    </p>

                </div>

            </div>



            <div class="symptom-list">


                <!-- Kelemahan -->

                <div class="symptom-item">

                    <div class="symptom-question">

                        Apakah anda sering merasakan
                        kelemahan dan kelelahan

                    </div>

                    @if($data['gejala']['kelemahan'] === 'Ya')

                        <div class="answer yes">
                            ✓
                            <span>Ya</span>
                        </div>

                    @else

                        <div class="answer no">
                            ×
                            <span>Tidak</span>
                        </div>

                    @endif

                </div>



                <!-- Jantung -->

                <div class="symptom-item">

                    <div class="symptom-question">

                        Apakah anda merasakan jantung
                        berdebar debar (palpitasi)

                    </div>

                    @if($data['gejala']['jantung'] === 'Ya')

                        <div class="answer yes">
                            ✓
                            <span>Ya</span>
                        </div>

                    @else

                        <div class="answer no">
                            ×
                            <span>Tidak</span>
                        </div>

                    @endif

                </div>



                <!-- Sesak -->

                <div class="symptom-item">

                    <div class="symptom-question">

                        Apakah anda sering merasa
                        sesak nafas

                    </div>

                    @if($data['gejala']['sesak'] === 'Ya')

                        <div class="answer yes">
                            ✓
                            <span>Ya</span>
                        </div>

                    @else

                        <div class="answer no">
                            ×
                            <span>Tidak</span>
                        </div>

                    @endif

                </div>



                <!-- Pucat -->

                <div class="symptom-item">

                    <div class="symptom-question">

                        Apakah anda terlihat pucat

                    </div>

                    @if($data['gejala']['pucat'] === 'Ya')

                        <div class="answer yes">
                            ✓
                            <span>Ya</span>
                        </div>

                    @else

                        <div class="answer no">
                            ×
                            <span>Tidak</span>
                        </div>

                    @endif

                </div>



                <!-- Pusing -->

                <div class="symptom-item">

                    <div class="symptom-question">

                        Apakah anda sering merasakan
                        pusing

                    </div>

                    @if($data['gejala']['pusing'] === 'Ya')

                        <div class="answer yes">
                            ✓
                            <span>Ya</span>
                        </div>

                    @else

                        <div class="answer no">
                            ×
                            <span>Tidak</span>
                        </div>

                    @endif

                </div>



                <!-- Hipotensi -->

                <div class="symptom-item">

                    <div class="symptom-question">

                        Apakah anda mengalami hipotensi
                        (tekanan darah rendah)

                    </div>

                    @if($data['gejala']['hipotensi'] === 'Ya')

                        <div class="answer yes">
                            ✓
                            <span>Ya</span>
                        </div>

                    @else

                        <div class="answer no">
                            ×
                            <span>Tidak</span>
                        </div>

                    @endif

                </div>



                <!-- Warna tinja -->

                <div class="symptom-item">

                    <div class="symptom-question">

                        Apakah anda sering mengalami
                        perubahan warna tinja

                    </div>

                    @if($data['gejala']['warna_tinja'] === 'Ya')

                        <div class="answer yes">
                            ✓
                            <span>Ya</span>
                        </div>

                    @else

                        <div class="answer no">
                            ×
                            <span>Tidak</span>
                        </div>

                    @endif

                </div>


            </div>

        </section>



        <!-- =================================================
             BUTTON
        ================================================== -->

        <div class="result-buttons">

            <a href="{{ route('skrining') }}"
               class="btn btn-back">

                ←
                <span>Kembali</span>

            </a>


            <a href="{{ route('skrining') }}"
               class="btn btn-repeat">

                <span>
                    Mulai Ulang
                </span>

                →

            </a>

        </div>


    </main>



    <!-- FOOTER -->

    <footer>

        <div class="footer-content">

            <strong>
                Anemia<span>Care</span>
            </strong>

            <p>
                Kenali Gejalanya. Jaga Kesehatanmu
            </p>

            <small>
                © {{ date('Y') }} AnemiaCare
            </small>

        </div>

    </footer>


</body>

</html>
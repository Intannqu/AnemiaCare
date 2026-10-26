
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Gejala | AnemiaCare</title>

<style>
:root {
    --primary: #b42332;
    --primary-dark: #921b28;
    --pink: #edb4b5;
    --pink-light: #fff4f4;
    --bg: #ffffff;
    --text: #30272a;
    --muted: #81767a;
    --border: #eadcde;
    --green: #18864b;
}

body {
    font-family: "Segoe UI", Arial, sans-serif;
    background: #ffffff;
    color: var(--text);
    line-height: 1.5;
}

button, input, textarea, select {
    font: inherit;
}

button {
    cursor: pointer;
}

a {
    color: inherit;
    text-decoration: none;
}

.app {
    min-height: 100vh;
}

/* SIDEBAR */
.sidebar {
    width: 250px;
    position: fixed;
    inset: 0 auto 0 0;
    padding: 25px 18px;
    background: #edb4b5;
    display: flex;
    flex-direction: column;
    z-index: 10;
    border-radius: 0;
}

.brand {
    display: flex;
    align-items: center;
    gap: 9px;
    padding: 5px 3px 45px;
}

.brand-icon {
    width: 43px;
    height: 43px;
    background: var(--primary);
    color: white;
    border-radius: 50%;
    display: grid;
    place-items: center;
    font-size: 24px;
}

.brand-name {
    color: var(--primary);
    font-size: 21px;
    font-weight: 800;
    letter-spacing: -.7px;
}

.brand small {
    display: block;
    font-size: 9px;
    color: #76222b;
    margin-top: -2px;
}

.menu-title {
    color: #87454a;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 1px;
    margin: 0 10px 10px;
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
    padding: 12px;
    border: 1px solid transparent;
    border-radius: 10px;
    font-size: 14px;
    transition: .2s;
}

.menu a:hover {
    background: #f6d1d1;
}

.menu a.active:hover {
    background: #f8dddd;
}

.menu a.active {
    background: #f8dddd;
    border: 1px solid #b42332;
    color: #921b28;
    font-weight: 650;
    box-shadow: none;
}

.menu-icon {
    width: 22px;
    text-align: center;
    font-size: 18px;
}

.sidebar-bottom {
    margin-top: auto;
}

.profile {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 15px 5px;
    border-top: 1px solid #d99b9e;
}

.avatar {
    width: 40px;
    height: 40px;
    border: 2px solid #5a272c;
    border-radius: 50%;
    display: grid;
    place-items: center;
    font-size: 20px;
}

.profile strong {
    display: block;
    font-size: 13px;
}

.profile small {
    color: #654044;
    font-size: 11px;
}

.logout {
    display: block;
    padding: 10px 7px;
    font-size: 13px;
}

/* MAIN CONTENT */
.main {
    margin-left: 250px;
    padding: 30px clamp(20px, 3vw, 42px);
}

.topbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
    margin-bottom: 27px;
}

.heading {
    display: flex;
    align-items: center;
    gap: 12px;
}

.back {
    width: 38px;
    height: 38px;
    display: grid;
    place-items: center;
    border: 1px solid var(--border);
    border-radius: 10px;
    background: white;
    color: var(--primary);
    font-size: 22px;
}

h1 {
    font-size: clamp(25px, 2.5vw, 32px);
    line-height: 1.2;
}

.subtitle {
    margin-top: 7px;
    font-size: 14px;
    color: var(--muted);
}

.user-button {
    width: 43px;
    height: 43px;
    border: 1px solid var(--border);
    border-radius: 50%;
    display: grid;
    place-items: center;
    background: white;
    font-size: 22px;
}

/* INTRO */
.intro {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 17px;
    margin-bottom: 20px;
    border: 1px solid #f0d7d9;
    border-radius: 14px;
    background: linear-gradient(110deg, #fff0f1, #fffafa);
}

.intro-icon {
    width: 43px;
    height: 43px;
    flex-shrink: 0;
    display: grid;
    place-items: center;
    background: white;
    color: var(--primary);
    border-radius: 12px;
    font-size: 22px;
}

.intro h2 {
    font-size: 15px;
    margin-bottom: 3px;
}

.intro p {
    font-size: 12px;
    color: var(--muted);
}

/* STATISTICS */
.stats {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 14px;
    margin-bottom: 22px;
}

.stat-card {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 17px;
    background: white;
    border: 1px solid var(--border);
    border-radius: 13px;
    box-shadow: 0 4px 15px #3d11100a;
}

.stat-icon {
    width: 42px;
    height: 42px;
    display: grid;
    place-items: center;
    background: #fff0f1;
    color: var(--primary);
    border-radius: 11px;
    font-size: 20px;
}

.stat-card small {
    display: block;
    font-size: 11px;
    color: var(--muted);
}

.stat-card strong {
    display: block;
    font-size: 23px;
}

/* TABLE */
.panel {
    background: white;
    border: 1px solid var(--border);
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 20px #46191e08;
}

.panel-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 18px;
    padding: 21px;
    border-bottom: 1px solid var(--border);
}

.panel-header h2 {
    font-size: 17px;
}

.panel-header p {
    font-size: 12px;
    color: var(--muted);
    margin-top: 4px;
}

.tools {
    display: flex;
    align-items: center;
    gap: 10px;
}

.search {
    position: relative;
    width: 230px;
}

.search input {
    width: 100%;
    height: 42px;
    padding: 10px 12px;
    border: 1px solid var(--border);
    border-radius: 10px;
    outline: none;
    font-size: 12px;
}

.search input:focus,
.form-control:focus {
    border-color: var(--primary);
    box-shadow: 0 0 0 3px #b4233214;
}

.btn {
    min-height: 42px;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    gap: 7px;
    padding: 10px 15px;
    border: 1px solid transparent;
    border-radius: 10px;
    font-size: 12px;
    font-weight: 650;
}

.btn-primary {
    background: var(--primary);
    color: white;
}

.btn-primary:hover {
    background: var(--primary-dark);
}

.btn-secondary {
    background: white;
    border-color: var(--border);
    color: var(--text);
}

.table-wrap {
    width: 100%;
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
}

thead {
    background: #f9e2df;
}

th {
    padding: 14px 16px;
    color: #57484b;
    font-size: 11px;
    text-transform: uppercase;
    white-space: nowrap;
}

td {
    padding: 15px 16px;
    border-bottom: 1px solid #f1e8e9;
    font-size: 12px;
    vertical-align: middle;
}

tbody tr:hover {
    background: #fffafa;
}

.no {
    color: #9a898d;
    font-weight: 650;
}

.symptom-name {
    font-size: 13px;
    font-weight: 650;
}

.description {
    min-width: 180px;
    max-width: 280px;
    color: var(--muted);
    line-height: 1.6;
}

.status {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 5px 9px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 650;
    white-space: nowrap;
}

.status::before {
    content: "";
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: currentColor;
}

.status.active {
    color: var(--green);
    background: #eaf8ef;
}

.status.inactive {
    color: #74686b;
    background: #f1eeee;
}

.actions {
    display: flex;
    gap: 6px;
}

.icon-btn {
    width: 33px;
    height: 33px;
    display: grid;
    place-items: center;
    border: 1px solid transparent;
    border-radius: 8px;
    background: transparent;
    font-size: 17px;
}

.icon-btn.edit {
    color: #347fc4;
}

.icon-btn.edit:hover {
    background: #edf6ff;
}

.icon-btn.delete {
    color: #d63848;
}

.icon-btn.delete:hover {
    background: #fff0f1;
}

.table-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 12px;
    padding: 15px 21px;
    border-top: 1px solid var(--border);
    background: #fffdfd;
}

.table-info {
    color: var(--muted);
    font-size: 11px;
}

.empty-state {
    padding: 30px;
    text-align: center;
    color: var(--muted);
    font-size: 13px;
}

.footer {
    margin-top: 22px;
    text-align: center;
    font-size: 11px;
    color: #a19799;
}

/* MODAL */
.modal-overlay {
    position: fixed;
    inset: 0;
    z-index: 100;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 18px;
    background: #2415188c;
    backdrop-filter: blur(3px);
}

.modal-overlay.show {
    display: flex;
}

.modal {
    width: 100%;
    max-width: 540px;
    max-height: 90vh;
    overflow-y: auto;
    background: white;
    border-radius: 16px;
    box-shadow: 0 25px 70px #21070b33;
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 14px;
    padding: 22px 24px;
    border-bottom: 1px solid var(--border);
}

.modal-header h2 {
    font-size: 19px;
}

.modal-header p {
    margin-top: 4px;
    color: var(--muted);
    font-size: 12px;
}

.close-btn {
    width: 34px;
    height: 34px;
    border: 0;
    border-radius: 9px;
    background: #f8f2f3;
    color: #6d5c60;
    font-size: 22px;
}

.modal-body {
    padding: 23px 24px;
}

.form-group {
    margin-bottom: 19px;
}

.form-group label {
    display: block;
    margin-bottom: 7px;
    font-size: 12px;
    font-weight: 700;
}

.required {
    color: var(--primary);
}

.form-control {
    width: 100%;
    padding: 12px 13px;
    border: 1px solid var(--border);
    border-radius: 10px;
    outline: none;
    font-size: 13px;
    color: var(--text);
}

textarea.form-control {
    min-height: 105px;
    resize: vertical;
}

.hint {
    margin-top: 6px;
    font-size: 11px;
    color: var(--muted);
}

.modal-footer {
    display: flex;
    justify-content: flex-end;
    gap: 9px;
    padding: 17px 24px 22px;
    border-top: 1px solid var(--border);
    background: #fffdfd;
}

.form-error {
    display: none;
    padding: 10px 12px;
    margin-bottom: 14px;
    border-radius: 9px;
    background: #fff0f1;
    color: #9b1f2c;
    font-size: 12px;
}

.form-error.show {
    display: block;
}

@media (max-width: 1050px) {
    .sidebar { width: 220px; }
    .main { margin-left: 220px; }
    .panel-header { align-items: flex-start; flex-direction: column; }
    .tools { width: 100%; justify-content: space-between; }
    .search { flex: 1; }
}

@media (max-width: 720px) {
    .sidebar {
        position: relative;
        width: 100%;
        padding: 15px;
    }
    .brand { padding-bottom: 18px; }
    .menu-title, .sidebar-bottom { display: none; }
    .menu { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    .menu a { padding: 10px; font-size: 12px; }
    .main { margin-left: 0; padding: 22px 14px; }
    h1 { font-size: 23px; }
    .stats { grid-template-columns: 1fr; gap: 9px; }
    .stat-card { padding: 13px; }
    .tools { align-items: stretch; flex-direction: column; }
    .search { width: 100%; }
    .btn-primary { width: 100%; }
    table { min-width: 700px; }
    .modal-header, .modal-body { padding: 19px; }
    .modal-footer { padding: 16px 19px 19px; }
    .modal-footer .btn { flex: 1; }
}

/* PERBAIKAN WARNA SIDEBAR ANEMIACARE */
html body .app .sidebar {
    background-color: #edb4b5 !important;
    background-image: none !important;
    border-radius: 0 !important;
}

/* Menu biasa */
html body .app .sidebar .menu a {
    background-color: transparent !important;
    color: #30272a !important;
    border: 1px solid transparent !important;
    box-shadow: none !important;
}

/* Menu yang sedang dipilih */
html body .app .sidebar .menu a.active {
    background-color: #f8dddd !important;
    color: #921b28 !important;
    border: 1px solid #b42332 !important;
    box-shadow: none !important;
}

/* Efek ketika kursor diarahkan ke menu */
html body .app .sidebar .menu a:hover {
    background-color: #f6d1d1 !important;
}

html body .app .sidebar .menu a.active:hover {
    background-color: #f8dddd !important;
}

/* Latar area konten */
html body .app .main {
    background-color: #ffffff !important;
}
</style>
</head>

<body>
<div class="app">

<aside class="sidebar">
    <a href="{{ url('/admin/dashboard') }}" class="brand">
        <div class="brand-icon">♥</div>
        <div>
            <div class="brand-name">AnemiaCare</div>
            <small>Kenali Gejalanya, Jaga Kesehatanmu</small>
        </div>
    </a>

    <div class="menu-title">Menu utama</div>
    <nav class="menu">
        <a href="{{ url('/admin/dashboard') }}">
            <span class="menu-icon">▦</span> Dashboard
        </a>
        <a href="{{ url('/admin/informasi-anemia') }}">
            <span class="menu-icon">♡</span> Informasi Anemia
        </a>
        <a href="{{ url('/admin/data-gejala') }}" class="active">
            <span class="menu-icon">☷</span> Data Gejala
        </a>
        <a href="{{ url('/admin/riwayat-pasien') }}">
            <span class="menu-icon">◷</span> Riwayat Pasien
        </a>
    </nav>

    <div class="sidebar-bottom">
        <div class="profile">
            <div class="avatar">♙</div>
            <div>
                <strong>{{ Auth::user()->name ?? 'Admin' }}</strong>
                <small>Administrator</small>
            </div>
        </div>
        <a href="{{ url('/logout') }}" class="logout">↪ &nbsp; Keluar</a>
    </div>
</aside>

<main class="main">
    <header class="topbar">
        <div>
            <div class="heading">
                <a href="{{ url('/admin/dashboard') }}" class="back" aria-label="Kembali">←</a>
                <h1>Data Gejala</h1>
            </div>
            <p class="subtitle">Kelola data gejala yang digunakan pada sistem.</p>
        </div>
        <div class="user-button" title="Admin">♙</div>
    </header>

    <section class="intro">
        <div class="intro-icon">☷</div>
        <div>
            <h2>Pengelolaan Data Gejala</h2>
            <p>Kelola nama, deskripsi, dan status gejala untuk sistem deteksi dini anemia.</p>
        </div>
    </section>

    <section class="stats">
        <div class="stat-card">
            <div class="stat-icon">☷</div>
            <div><small>Total gejala</small><strong id="totalCount">5</strong></div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">✓</div>
            <div><small>Gejala aktif</small><strong id="activeCount">5</strong></div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">○</div>
            <div><small>Gejala nonaktif</small><strong id="inactiveCount">0</strong></div>
        </div>
    </section>

    <section class="panel">
        <div class="panel-header">
            <div>
                <h2>Daftar Gejala</h2>
                <p>Tambah, edit, atau hapus data gejala pada sistem.</p>
            </div>
            <div class="tools">
                <label class="search">
                    <input id="searchInput" type="search" placeholder="Cari nama gejala..." aria-label="Cari gejala">
                </label>
                <button type="button" class="btn btn-primary" onclick="openAddModal()">＋ Tambah Gejala</button>
            </div>
        </div>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama gejala</th>
                        <th>Deskripsi singkat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="symptomTable">
                    <tr>
                        <td class="no">1.</td>
                        <td><div class="symptom-name">Usia</div></td>
                        <td><div class="description">Usia saat ini.</div></td>
                        <td><span class="status active">Aktif</span></td>
                        <td><div class="actions">
                            <button class="icon-btn edit" type="button" onclick="openEditModal(this)" title="Edit">✎</button>
                            <button class="icon-btn delete" type="button" onclick="deleteSymptom(this)" title="Hapus">♜</button>
                        </div></td>
                    </tr>
                    <tr>
                        <td class="no">2.</td>
                        <td><div class="symptom-name">Jenis Kelamin</div></td>
                        <td><div class="description">Perbedaan seks yang didapat sejak lahir yang dibedakan antara laki laki dan perempuan..</div></td>
                        <td><span class="status active">Aktif</span></td>
                        <td><div class="actions">
                            <button class="icon-btn edit" type="button" onclick="openEditModal(this)" title="Edit">✎</button>
                            <button class="icon-btn delete" type="button" onclick="deleteSymptom(this)" title="Hapus">♜</button>
                        </div></td>
                    </tr>
                    <tr>
                        <td class="no">3.</td>
                        <td><div class="symptom-name">Kelemahan &amp; Kelelahan</div></td>
                        <td><div class="description">Tubuh terasa lemah, lesu, dan mudah lelah saat beraktivitas.</div></td>
                        <td><span class="status active">Aktif</span></td>
                        <td><div class="actions">
                            <button class="icon-btn edit" type="button" onclick="openEditModal(this)" title="Edit">✎</button>
                            <button class="icon-btn delete" type="button" onclick="deleteSymptom(this)" title="Hapus">♜</button>
                        </div></td>
                    </tr>
                    <tr>
                        <td class="no">4.</td>
                        <td><div class="symptom-name">Pusing</div></td>
                        <td><div class="description">Kepala terasa pusing atau berkunang-kunang.</div></td>
                        <td><span class="status active">Aktif</span></td>
                        <td><div class="actions">
                            <button class="icon-btn edit" type="button" onclick="openEditModal(this)" title="Edit">✎</button>
                            <button class="icon-btn delete" type="button" onclick="deleteSymptom(this)" title="Hapus">♜</button>
                        </div></td>
                    </tr>
                    <tr>
                        <td class="no">5.</td>
                        <td><div class="symptom-name">Jantung Berdebar</div></td>
                        <td><div class="description">Jantung terasa berdebar lebih cepat dari biasanya.</div></td>
                        <td><span class="status active">Aktif</span></td>
                        <td><div class="actions">
                            <button class="icon-btn edit" type="button" onclick="openEditModal(this)" title="Edit">✎</button>
                            <button class="icon-btn delete" type="button" onclick="deleteSymptom(this)" title="Hapus">♜</button>
                        </div></td>
                    </tr>
                    <tr>
                        <td class="no">6.</td>
                        <td><div class="symptom-name">Sesak Napas</div></td>
                        <td><div class="description">Napas terasa pendek atau sulit saat beraktivitas.</div></td>
                        <td><span class="status active">Aktif</span></td>
                        <td><div class="actions">
                            <button class="icon-btn edit" type="button" onclick="openEditModal(this)" title="Edit">✎</button>
                            <button class="icon-btn delete" type="button" onclick="deleteSymptom(this)" title="Hapus">♜</button>
                        </div></td>
                    </tr>
                    <tr>
                        <td class="no">7.</td>
                        <td><div class="symptom-name">Hipotensi</div></td>
                        <td><div class="description">Kondisi ketika tekanan darah rendah (sistolik, diastolik, ataupun keduanya) lebih rendah dari nilai normal). .</div></td>
                        <td><span class="status active">Aktif</span></td>
                        <td><div class="actions">
                            <button class="icon-btn edit" type="button" onclick="openEditModal(this)" title="Edit">✎</button>
                            <button class="icon-btn delete" type="button" onclick="deleteSymptom(this)" title="Hapus">♜</button>
                        </div></td>
                    </tr>
                    <tr>
                        <td class="no">8.</td>
                        <td><div class="symptom-name">Perubahan Warna Tinja</div></td>
                        <td><div class="description">Kondisi dimana tinja berwarna hitam, lengket serta berbau menyengat, atau berwarna merah maroon hingga tampak bercampur darah.</div></td>
                        <td><span class="status active">Aktif</span></td>
                        <td><div class="actions">
                            <button class="icon-btn edit" type="button" onclick="openEditModal(this)" title="Edit">✎</button>
                            <button class="icon-btn delete" type="button" onclick="deleteSymptom(this)" title="Hapus">♜</button>
                        </div></td>
                    </tr>
                    <tr>
                        <td class="no">9.</td>
                        <td><div class="symptom-name">Pucat</div></td>
                        <td><div class="description">Kulit atau bagian dalam kelopak mata tampak lebih pucat.</div></td>
                        <td><span class="status active">Aktif</span></td>
                        <td><div class="actions">
                            <button class="icon-btn edit" type="button" onclick="openEditModal(this)" title="Edit">✎</button>
                            <button class="icon-btn delete" type="button" onclick="deleteSymptom(this)" title="Hapus">♜</button>
                        </div></td>
                    </tr>
                </tbody>
            </table>
            <div class="empty-state" id="emptyState" hidden>Data gejala tidak ditemukan.</div>
        </div>

        <div class="table-footer">
            <div class="table-info" id="tableInfo">Menampilkan 1–5 dari 5 data</div>
            <div>Halaman 1</div>
        </div>
    </section>

    <footer class="footer">AnemiaCare · Sistem Deteksi Dini Anemia Berbasis Website</footer>
</main>
</div>

<!-- POP-UP TAMBAH / EDIT -->
<div class="modal-overlay" id="symptomModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div class="modal">
        <div class="modal-header">
            <div>
                <h2 id="modalTitle">Tambah Gejala</h2>
                <p id="modalSubtitle">Isi data gejala dengan lengkap dan jelas.</p>
            </div>
            <button type="button" class="close-btn" onclick="closeModal()" aria-label="Tutup">×</button>
        </div>

        <form id="symptomForm">
            <div class="modal-body">
                <div class="form-error" id="formError"></div>

                <div class="form-group">
                    <label for="symptomName">Nama gejala <span class="required">*</span></label>
                    <input class="form-control" id="symptomName" type="text" maxlength="120" placeholder="Contoh: Pusing" required>
                    <p class="hint">Gunakan nama gejala yang singkat dan mudah dipahami.</p>
                </div>

                <div class="form-group">
                    <label for="symptomDescription">Deskripsi singkat <span class="required">*</span></label>
                    <textarea class="form-control" id="symptomDescription" maxlength="1000" placeholder="Jelaskan gejala secara singkat..." required></textarea>
                </div>

                <div class="form-group">
                    <label for="symptomStatus">Status <span class="required">*</span></label>
                    <select class="form-control" id="symptomStatus">
                        <option value="Aktif">Aktif</option>
                        <option value="Nonaktif">Nonaktif</option>
                    </select>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeModal()">Batal</button>
                <button type="submit" class="btn btn-primary" id="saveButton">Simpan Gejala</button>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const table = document.getElementById('symptomTable');
    const modal = document.getElementById('symptomModal');
    const form = document.getElementById('symptomForm');
    const nameInput = document.getElementById('symptomName');
    const descriptionInput = document.getElementById('symptomDescription');
    const statusInput = document.getElementById('symptomStatus');
    const errorBox = document.getElementById('formError');
    const searchInput = document.getElementById('searchInput');

    let mode = 'add';
    let currentRow = null;

    function updateTable() {
        const rows = Array.from(table.querySelectorAll('tr'));
        let activeCount = 0;

        rows.forEach(function (row, index) {
            row.querySelector('.no').textContent = (index + 1) + '.';

            if (row.querySelector('.status').textContent.trim() === 'Aktif') {
                activeCount++;
            }
        });

        document.getElementById('totalCount').textContent = rows.length;
        document.getElementById('activeCount').textContent = activeCount;
        document.getElementById('inactiveCount').textContent = rows.length - activeCount;

        filterTable();
    }

    function filterTable() {
        const keyword = searchInput.value.toLowerCase().trim();
        const rows = Array.from(table.querySelectorAll('tr'));
        let visibleCount = 0;

        rows.forEach(function (row) {
            const matches = row.textContent.toLowerCase().includes(keyword);
            row.style.display = matches ? '' : 'none';

            if (matches) visibleCount++;
        });

        document.getElementById('emptyState').hidden = visibleCount > 0;

        document.getElementById('tableInfo').textContent = keyword
            ? 'Menampilkan ' + visibleCount + ' hasil pencarian'
            : 'Menampilkan ' + (visibleCount ? '1–' + visibleCount : '0') + ' dari ' + rows.length + ' data';
    }

    function showModal() {
        errorBox.classList.remove('show');
        errorBox.textContent = '';
        modal.classList.add('show');
        document.body.style.overflow = 'hidden';

        setTimeout(function () {
            nameInput.focus();
        }, 100);
    }

    window.openAddModal = function () {
        mode = 'add';
        currentRow = null;
        form.reset();

        document.getElementById('modalTitle').textContent = 'Tambah Gejala';
        document.getElementById('modalSubtitle').textContent = 'Isi data gejala dengan lengkap dan jelas.';
        document.getElementById('saveButton').textContent = 'Simpan Gejala';

        showModal();
    };

    window.openEditModal = function (button) {
        const row = button.closest('tr');

        if (!row) return;

        currentRow = row;
        mode = 'edit';

        nameInput.value = row.querySelector('.symptom-name').textContent.trim();
        descriptionInput.value = row.querySelector('.description').textContent.trim();
        statusInput.value = row.querySelector('.status').textContent.trim();

        document.getElementById('modalTitle').textContent = 'Edit Data Gejala';
        document.getElementById('modalSubtitle').textContent = 'Perbarui informasi gejala yang dipilih.';
        document.getElementById('saveButton').textContent = 'Simpan Perubahan';

        showModal();
    };

    window.closeModal = function () {
        modal.classList.remove('show');
        document.body.style.overflow = '';
        errorBox.classList.remove('show');
        currentRow = null;
    };

    function createCell(tag, className, value) {
        const cell = document.createElement(tag);
        cell.className = className;
        cell.textContent = value;
        return cell;
    }

    function createActionButton(className, symbol, label, handler) {
        const button = document.createElement('button');
        button.type = 'button';
        button.className = 'icon-btn ' + className;
        button.textContent = symbol;
        button.title = label;
        button.setAttribute('aria-label', label);
        button.addEventListener('click', handler);
        return button;
    }

    function createRow(name, description, status) {
        const row = document.createElement('tr');

        row.appendChild(createCell('td', 'no', ''));

        const nameCell = document.createElement('td');
        nameCell.appendChild(createCell('div', 'symptom-name', name));

        const descriptionCell = document.createElement('td');
        descriptionCell.appendChild(createCell('div', 'description', description));

        const statusCell = document.createElement('td');
        statusCell.appendChild(createCell(
            'span',
            'status ' + (status === 'Aktif' ? 'active' : 'inactive'),
            status
        ));

        const actionCell = document.createElement('td');
        const actions = document.createElement('div');
        actions.className = 'actions';

        actions.appendChild(createActionButton('edit', '✎', 'Edit gejala', function () {
            window.openEditModal(this);
        }));

        actions.appendChild(createActionButton('delete', '♜', 'Hapus gejala', function () {
            window.deleteSymptom(this);
        }));

        actionCell.appendChild(actions);
        row.append(nameCell, descriptionCell, statusCell, actionCell);

        return row;
    }

    window.deleteSymptom = function (button) {
        const row = button.closest('tr');

        if (!row) return;

        const name = row.querySelector('.symptom-name').textContent.trim();

        if (confirm('Apakah kamu yakin ingin menghapus gejala "' + name + '"?')) {
            row.remove();
            updateTable();
        }
    };

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const name = nameInput.value.trim();
        const description = descriptionInput.value.trim();
        const status = statusInput.value;

        if (!name || !description) {
            errorBox.textContent = 'Nama gejala dan deskripsi wajib diisi.';
            errorBox.classList.add('show');
            return;
        }

        if (mode === 'edit') {
            if (!currentRow || !currentRow.isConnected) {
                errorBox.textContent = 'Data tidak ditemukan. Silakan pilih Edit kembali.';
                errorBox.classList.add('show');
                return;
            }

            currentRow.querySelector('.symptom-name').textContent = name;
            currentRow.querySelector('.description').textContent = description;

            const badge = currentRow.querySelector('.status');
            badge.textContent = status;
            badge.className = 'status ' + (status === 'Aktif' ? 'active' : 'inactive');
        } else {
            table.appendChild(createRow(name, description, status));
        }

        updateTable();
        window.closeModal();
        form.reset();

        alert(mode === 'edit'
            ? 'Data gejala berhasil diperbarui pada tampilan.'
            : 'Data gejala berhasil ditambahkan pada tampilan.');
    });

    searchInput.addEventListener('input', filterTable);

    modal.addEventListener('click', function (event) {
        if (event.target === modal) window.closeModal();
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && modal.classList.contains('show')) {
            window.closeModal();
        }
    });

    updateTable();
});
</script>
</body>
</html>

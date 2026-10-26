
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Riwayat Pasien | AnemiaCare</title>

<style>
:root {
    --primary: #b42332;
    --primary-dark: #921b28;
    --sidebar-pink: #edb4b5;
    --active-pink: #f8dddd;
    --page-bg: #ffffff;
    --surface: #ffffff;
    --table-bg: #fff7f7;
    --table-head: #f5dfda;
    --text: #282326;
    --muted: #81767a;
    --border: #e5d7d9;
    --green: #26964d;
    --red-light: #fff0f1;
}

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: "Segoe UI", Arial, sans-serif;
    color: var(--text);
    background: var(--page-bg);
    line-height: 1.5;
}

button, input, select {
    font: inherit;
}

button {
    cursor: pointer;
}

a {
    color: inherit;
    text-decoration: none;
}

/* =========================
   SIDEBAR PINK
========================= */

.sidebar {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    width: 330px;
    padding: 28px 30px 22px;
    display: flex;
    flex-direction: column;
    background: #edb4b5 !important;
    border-radius: 0 !important;
    z-index: 20;
}

.brand {
    display: flex;
    align-items: center;
    gap: 9px;
    margin-bottom: 91px;
}

.brand-symbol {
    width: 68px;
    height: 68px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 38px;
    background: var(--primary);
    border-radius: 50%;
}

.brand-name {
    color: #a71928;
    font-size: 29px;
    font-weight: 800;
    letter-spacing: -1.2px;
    line-height: 1.1;
}

.brand-tagline {
    margin-top: 5px;
    color: #7b252e;
    font-size: 9px;
    white-space: nowrap;
}

.menu-heading {
    margin: 0 10px 18px;
    color: #98575c;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.2px;
}

.sidebar-menu {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.sidebar-menu a {
    display: flex;
    align-items: center;
    gap: 13px;
    min-height: 49px;
    padding: 10px 15px;
    border: 1px solid transparent;
    border-radius: 10px;
    color: #292225;
    font-size: 16px;
    transition: background .2s, border-color .2s;
}

.sidebar-menu a:hover {
    background: #f4cccc;
}

.sidebar-menu a.active {
    background: #f8dddd;
    border: 1px solid #b42332;
    color: #921b28;
    font-weight: 650;
    box-shadow: none;
}

.menu-icon {
    width: 21px;
    text-align: center;
    font-size: 19px;
}

.sidebar-bottom {
    margin-top: auto;
}

.profile {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 17px 0;
    border-top: 1px solid #d99b9e;
}

.profile-avatar {
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px solid #512b30;
    border-radius: 50%;
    color: #512b30;
    font-size: 25px;
}

.profile-name {
    font-size: 15px;
    font-weight: 650;
}

.profile-role {
    color: #70464a;
    font-size: 12px;
}

.logout {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 9px 3px;
    font-size: 15px;
}

.logout:hover {
    color: var(--primary-dark);
}

/* =========================
   KONTEN UTAMA
========================= */

.main {
    min-height: 100vh;
    margin-left: 330px;
    padding: 38px 38px 30px;
    background: #fff;
}

.topbar {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 20px;
    margin-bottom: 27px;
}

.title-group {
    display: flex;
    align-items: flex-start;
    gap: 13px;
}

.back-button {
    width: 35px;
    height: 38px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    color: #111;
    font-size: 29px;
    line-height: 1;
}

.page-title {
    font-size: 37px;
    font-weight: 750;
    letter-spacing: -1px;
    line-height: 1.2;
}

.page-subtitle {
    margin-top: 7px;
    color: #383034;
    font-size: 17px;
}

.user-button {
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px solid #242024;
    border-radius: 50%;
    color: #242024;
    font-size: 27px;
    flex-shrink: 0;
}

/* =========================
   RINGKASAN
========================= */

.summary-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 15px;
    margin-bottom: 23px;
}

.summary-card {
    display: flex;
    align-items: center;
    gap: 13px;
    padding: 17px;
    background: #fffafa;
    border: 1px solid var(--border);
    border-radius: 13px;
}

.summary-icon {
    width: 43px;
    height: 43px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    border-radius: 11px;
    background: #f9e5e5;
    color: var(--primary);
    font-size: 21px;
}

.summary-label {
    color: var(--muted);
    font-size: 12px;
}

.summary-value {
    margin-top: 2px;
    font-size: 25px;
    font-weight: 750;
    line-height: 1.3;
}

.summary-card small {
    display: block;
    margin-top: 3px;
    color: var(--muted);
    font-size: 10px;
}

/* =========================
   PANEL TABEL
========================= */

.panel {
    overflow: hidden;
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: 17px;
    box-shadow: 0 5px 20px #4a1b1e08;
}

.panel-heading {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
    padding: 22px 24px;
}

.panel-heading h2 {
    font-size: 19px;
}

.panel-heading p {
    margin-top: 4px;
    color: var(--muted);
    font-size: 12px;
}

.filters {
    display: flex;
    align-items: center;
    gap: 11px;
}

.search-box {
    width: 250px;
}

.search-box input,
.date-filter input {
    width: 100%;
    height: 42px;
    padding: 10px 13px;
    outline: none;
    border: 1px solid #bcb4b6;
    border-radius: 10px;
    background: #fff;
    font-size: 13px;
}

.search-box input:focus,
.date-filter input:focus {
    border-color: var(--primary);
    box-shadow: 0 0 0 3px #b4233214;
}

.date-filter {
    width: 185px;
}

.btn {
    min-height: 39px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    padding: 9px 13px;
    border: 1px solid transparent;
    border-radius: 9px;
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

.btn-outline {
    border-color: var(--border);
    background: white;
    color: var(--text);
}

.btn-outline:hover {
    background: #fff4f4;
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
    background: var(--table-head);
}

th {
    padding: 15px 13px;
    color: #292326;
    font-size: 13px;
    font-weight: 700;
    white-space: nowrap;
}

td {
    padding: 15px 13px;
    border-bottom: 1px solid #eee4e5;
    font-size: 13px;
    vertical-align: middle;
}

tbody tr:hover {
    background: #fffafa;
}

tbody tr:last-child td {
    border-bottom: 0;
}

.check-cell {
    width: 42px;
    text-align: center;
}

.row-check,
#selectAll {
    width: 16px;
    height: 16px;
    accent-color: var(--primary);
    cursor: pointer;
}

.patient-name {
    font-weight: 650;
    white-space: nowrap;
}

.gender {
    white-space: nowrap;
}

.date-cell {
    white-space: nowrap;
    color: #554b4e;
}

.symptom-text {
    max-width: 150px;
    color: #75696c;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}

.result {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 10px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 700;
    white-space: nowrap;
}

.result::before {
    content: "";
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: currentColor;
}

.result.anemia {
    background: #fff0f1;
    color: #c52e3c;
}

.result.non-anemia {
    background: #eaf8ef;
    color: #218447;
}

.action-buttons {
    display: flex;
    align-items: center;
    gap: 6px;
}

.action-btn {
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid transparent;
    border-radius: 8px;
    background: transparent;
    font-size: 17px;
}

.action-btn.detail {
    color: #2878b7;
}

.action-btn.detail:hover {
    background: #edf6ff;
}

.action-btn.delete {
    color: #c72e3e;
}

.action-btn.delete:hover {
    background: #fff0f1;
}

.table-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    padding: 17px 23px;
    border-top: 1px solid var(--border);
    background: #fffafa;
}

.table-info {
    color: #716569;
    font-size: 12px;
}

.pagination {
    display: flex;
    align-items: center;
    gap: 6px;
}

.page-btn {
    min-width: 31px;
    height: 31px;
    padding: 0 8px;
    border: 1px solid var(--border);
    border-radius: 7px;
    background: white;
    font-size: 12px;
}

.page-btn.active {
    border-color: var(--primary);
    background: var(--primary);
    color: white;
}

.page-btn:disabled {
    opacity: .4;
    cursor: not-allowed;
}

.empty-state {
    padding: 35px 15px;
    color: var(--muted);
    text-align: center;
    font-size: 13px;
}

.bulk-bar {
    display: none;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    padding: 12px 22px;
    background: #fff0f1;
    border-bottom: 1px solid var(--border);
    font-size: 12px;
}

.bulk-bar.show {
    display: flex;
}

.footer-note {
    margin-top: 20px;
    color: #a19699;
    text-align: center;
    font-size: 11px;
}

/* =========================
   MODAL DETAIL
========================= */

.modal-overlay {
    position: fixed;
    inset: 0;
    z-index: 100;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 18px;
    background: #25161980;
    backdrop-filter: blur(3px);
}

.modal-overlay.show {
    display: flex;
}

.modal {
    width: 100%;
    max-width: 500px;
    max-height: 90vh;
    overflow-y: auto;
    border-radius: 16px;
    background: white;
    box-shadow: 0 20px 65px #20070a30;
}

.modal-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 15px;
    padding: 22px 24px;
    border-bottom: 1px solid var(--border);
}

.modal-header h2 {
    font-size: 20px;
}

.modal-header p {
    margin-top: 4px;
    color: var(--muted);
    font-size: 12px;
}

.close-btn {
    width: 33px;
    height: 33px;
    border: 0;
    border-radius: 8px;
    background: #f8eeee;
    color: #625457;
    font-size: 23px;
}

.modal-body {
    padding: 23px 24px;
}

.detail-item {
    padding: 12px 0;
    border-bottom: 1px solid #f0e7e8;
}

.detail-item:last-child {
    border-bottom: 0;
}

.detail-label {
    margin-bottom: 4px;
    color: var(--muted);
    font-size: 11px;
}

.detail-value {
    font-size: 14px;
    font-weight: 600;
}

.modal-footer {
    display: flex;
    justify-content: flex-end;
    gap: 9px;
    padding: 16px 24px 22px;
    border-top: 1px solid var(--border);
}

@media (max-width: 1250px) {
    .sidebar {
        width: 260px;
        padding: 25px 20px;
    }

    .brand {
        margin-bottom: 65px;
    }

    .brand-symbol {
        width: 51px;
        height: 51px;
        font-size: 29px;
    }

    .brand-name {
        font-size: 23px;
    }

    .main {
        margin-left: 260px;
        padding: 30px 25px;
    }

    .panel-heading {
        align-items: flex-start;
        flex-direction: column;
    }

    .filters {
        width: 100%;
    }

    .search-box {
        flex: 1;
    }

    table {
        min-width: 800px;
    }
}

@media (max-width: 760px) {
    .sidebar {
        position: relative;
        width: 100%;
        padding: 17px;
    }

    .brand {
        margin-bottom: 20px;
    }

    .menu-heading,
    .sidebar-bottom {
        display: none;
    }

    .sidebar-menu {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 5px;
    }

    .sidebar-menu a {
        min-height: 42px;
        padding: 8px;
        font-size: 12px;
    }

    .main {
        margin-left: 0;
        padding: 23px 14px;
    }

    .page-title {
        font-size: 25px;
    }

    .page-subtitle {
        font-size: 13px;
    }

    .user-button {
        width: 39px;
        height: 39px;
        font-size: 21px;
    }

    .summary-grid {
        grid-template-columns: 1fr;
        gap: 9px;
    }

    .summary-card {
        padding: 12px;
    }

    .summary-value {
        font-size: 21px;
    }

    .panel-heading {
        padding: 17px;
    }

    .filters {
        flex-direction: column;
        align-items: stretch;
    }

    .search-box,
    .date-filter {
        width: 100%;
    }

    .table-footer {
        align-items: flex-start;
        flex-direction: column;
        padding: 14px 17px;
    }

    .modal-header,
    .modal-body {
        padding: 18px;
    }

    .modal-footer {
        padding: 15px 18px 18px;
    }
}
</style>
</head>

<body>
<div class="app">

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <a href="{{ url('/admin/dashboard') }}" class="brand">
            <div class="brand-symbol">♥</div>
            <div>
                <div class="brand-name">AnemiaCare</div>
                <div class="brand-tagline">Kenali Gejalanya, Jaga Kesehatanmu</div>
            </div>
        </a>

        <div class="menu-heading">MENU UTAMA</div>

        <nav class="sidebar-menu">
            <a href="{{ url('/admin/dashboard') }}">
                <span class="menu-icon">▦</span>
                <span>Dashboard</span>
            </a>

            <a href="{{ url('/admin/informasi-anemia') }}">
                <span class="menu-icon">♡</span>
                <span>Informasi Anemia</span>
            </a>

            <a href="{{ url('/admin/data-gejala') }}">
                <span class="menu-icon">☷</span>
                <span>Data Gejala</span>
            </a>

            <a href="{{ url('/admin/riwayat-pasien') }}" class="active">
                <span class="menu-icon">◷</span>
                <span>Riwayat Pasien</span>
            </a>
        </nav>

        <div class="sidebar-bottom">
            <div class="profile">
                <div class="profile-avatar">♙</div>
                <div>
                    <div class="profile-name">
                        {{ Auth::check() ? Auth::user()->name : 'Admin' }}
                    </div>
                    <div class="profile-role">Administrator</div>
                </div>
            </div>

            <a href="{{ url('/logout') }}" class="logout">
                <span>↪</span>
                <span>Keluar</span>
            </a>
        </div>
    </aside>

    <!-- KONTEN UTAMA -->
    <main class="main">

        <header class="topbar">
            <div>
                <div class="title-group">
                    <a href="{{ url('/admin/dashboard') }}" class="back-button" aria-label="Kembali">←</a>
                    <h1 class="page-title">Riwayat Pasien</h1>
                </div>
                <p class="page-subtitle">
                    Lihat daftar pasien yang telah melakukan skrining.
                </p>
            </div>

            <div class="user-button" title="Profil admin">♙</div>
        </header>

        <!-- RINGKASAN -->
        <section class="summary-grid">
            <div class="summary-card">
                <div class="summary-icon">▤</div>
                <div>
                    <div class="summary-label">Total Skrining</div>
                    <div class="summary-value" id="totalPatients">3</div>
                    <small>Data yang ditampilkan</small>
                </div>
            </div>

            <div class="summary-card">
                <div class="summary-icon">♡</div>
                <div>
                    <div class="summary-label">Hasil Anemia</div>
                    <div class="summary-value" id="anemiaCount">2</div>
                    <small>Hasil skrining anemia</small>
                </div>
            </div>

            <div class="summary-card">
                <div class="summary-icon">✓</div>
                <div>
                    <div class="summary-label">Hasil Non-Anemia</div>
                    <div class="summary-value" id="nonAnemiaCount">1</div>
                    <small>Hasil skrining non-anemia</small>
                </div>
            </div>
        </section>

        <!-- TABEL RIWAYAT -->
        <section class="panel">
            <div class="panel-heading">
                <div>
                    <h2>Daftar Riwayat Skrining</h2>
                    <p>Gunakan pencarian atau filter tanggal untuk menemukan data.</p>
                </div>

                <div class="filters">
                    <div class="search-box">
                        <input
                            type="search"
                            id="searchName"
                            placeholder="Cari nama pasien..."
                            aria-label="Cari nama pasien"
                        >
                    </div>

                    <div class="date-filter">
                        <input
                            type="date"
                            id="filterDate"
                            aria-label="Filter tanggal skrining"
                            title="Filter tanggal skrining"
                        >
                    </div>

                    <button type="button" class="btn btn-outline" id="resetFilter">
                        Reset
                    </button>
                </div>
            </div>

            <div class="bulk-bar" id="bulkBar">
                <span id="selectedCount">0 data dipilih</span>
                <button type="button" class="btn btn-primary" id="deleteSelected">
                    Hapus yang Dipilih
                </button>
            </div>

            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th class="check-cell">
                                <input type="checkbox" id="selectAll" aria-label="Pilih semua data">
                            </th>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Skrining</th>
                            <th>Usia</th>
                            <th>Gejala</th>
                            <th>Hasil</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody id="patientTable">
                        <tr data-date="2026-10-12">
                            <td class="check-cell">
                                <input type="checkbox" class="row-check" aria-label="Pilih Intan">
                            </td>
                            <td class="row-number">1.</td>
                            <td class="patient-name">Intan</td>
                            <td class="gender">Perempuan</td>
                            <td class="date-cell">12/10/2026</td>
                            <td>22</td>
                            <td class="symptom-text" title="Pusing, kelelahan">Pusing, kelelahan</td>
                            <td><span class="result anemia">Anemia</span></td>
                            <td>
                                <div class="action-buttons">
                                    <button type="button" class="action-btn detail" onclick="showDetails(this)" title="Lihat detail" aria-label="Lihat detail">⌕</button>
                                    <button type="button" class="action-btn delete" onclick="deletePatient(this)" title="Hapus data" aria-label="Hapus data">×</button>
                                </div>
                            </td>
                        </tr>

                        <tr data-date="2026-10-12">
                            <td class="check-cell">
                                <input type="checkbox" class="row-check" aria-label="Pilih Rajik">
                            </td>
                            <td class="row-number">2.</td>
                            <td class="patient-name">Rajik</td>
                            <td class="gender">Laki-laki</td>
                            <td class="date-cell">12/10/2026</td>
                            <td>22</td>
                            <td class="symptom-text" title="Pucat, jantung berdebar">Pucat, jantung berdebar</td>
                            <td><span class="result anemia">Anemia</span></td>
                            <td>
                                <div class="action-buttons">
                                    <button type="button" class="action-btn detail" onclick="showDetails(this)" title="Lihat detail" aria-label="Lihat detail">⌕</button>
                                    <button type="button" class="action-btn delete" onclick="deletePatient(this)" title="Hapus data" aria-label="Hapus data">×</button>
                                </div>
                            </td>
                        </tr>

                        <tr data-date="2026-10-12">
                            <td class="check-cell">
                                <input type="checkbox" class="row-check" aria-label="Pilih Siti">
                            </td>
                            <td class="row-number">3.</td>
                            <td class="patient-name">Siti</td>
                            <td class="gender">Perempuan</td>
                            <td class="date-cell">12/10/2026</td>
                            <td>22</td>
                            <td class="symptom-text" title="Tekanan darah rendah">Tekanan darah rendah</td>
                            <td><span class="result non-anemia">Non-Anemia</span></td>
                            <td>
                                <div class="action-buttons">
                                    <button type="button" class="action-btn detail" onclick="showDetails(this)" title="Lihat detail" aria-label="Lihat detail">⌕</button>
                                    <button type="button" class="action-btn delete" onclick="deletePatient(this)" title="Hapus data" aria-label="Hapus data">×</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="empty-state" id="emptyState" hidden>
                    Data pasien tidak ditemukan. Coba ubah kata pencarian atau filter tanggal.
                </div>
            </div>

            <div class="table-footer">
                <div class="table-info" id="tableInfo">
                    Menampilkan 1–3 dari 3 data
                </div>
                <div class="pagination">
                    <button type="button" class="page-btn" disabled aria-label="Halaman sebelumnya">‹</button>
                    <button type="button" class="page-btn active">1</button>
                    <button type="button" class="page-btn" disabled aria-label="Halaman berikutnya">›</button>
                </div>
            </div>
        </section>

        <footer class="footer-note">
            AnemiaCare · Sistem Deteksi Dini Anemia Berbasis Website
        </footer>
    </main>
</div>

<!-- MODAL DETAIL PASIEN -->
<div class="modal-overlay" id="detailModal" role="dialog" aria-modal="true" aria-labelledby="detailTitle">
    <div class="modal">
        <div class="modal-header">
            <div>
                <h2 id="detailTitle">Detail Riwayat Pasien</h2>
                <p>Informasi skrining pasien yang dipilih.</p>
            </div>
            <button type="button" class="close-btn" onclick="closeDetails()" aria-label="Tutup">×</button>
        </div>

        <div class="modal-body" id="detailContent"></div>

        <div class="modal-footer">
            <button type="button" class="btn btn-outline" onclick="closeDetails()">Tutup</button>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const table = document.getElementById('patientTable');
    const searchInput = document.getElementById('searchName');
    const dateInput = document.getElementById('filterDate');
    const selectAll = document.getElementById('selectAll');

    function getRows() {
        return Array.from(table.querySelectorAll('tr'));
    }

    function updateSummary() {
        const rows = getRows();
        const anemia = rows.filter(function (row) {
            return row.querySelector('.result').classList.contains('anemia');
        }).length;

        document.getElementById('totalPatients').textContent = rows.length;
        document.getElementById('anemiaCount').textContent = anemia;
        document.getElementById('nonAnemiaCount').textContent = rows.length - anemia;
    }

    function updateNumbers() {
        getRows().forEach(function (row, index) {
            row.querySelector('.row-number').textContent = (index + 1) + '.';
        });
    }

    function updateSelection() {
        const rows = getRows();
        const checked = rows.filter(function (row) {
            return row.querySelector('.row-check').checked;
        });

        document.getElementById('selectedCount').textContent =
            checked.length + ' data dipilih';

        document.getElementById('bulkBar').classList.toggle(
            'show',
            checked.length > 0
        );

        selectAll.checked = rows.length > 0 && checked.length === rows.length;
        selectAll.indeterminate = checked.length > 0 && checked.length < rows.length;
    }

    function filterTable() {
        const keyword = searchInput.value.toLowerCase().trim();
        const selectedDate = dateInput.value;
        const rows = getRows();
        let visible = 0;

        rows.forEach(function (row) {
            const name = row.querySelector('.patient-name').textContent.toLowerCase();
            const date = row.dataset.date || '';
            const matchesName = name.includes(keyword);
            const matchesDate = !selectedDate || date === selectedDate;
            const show = matchesName && matchesDate;

            row.style.display = show ? '' : 'none';

            if (show) visible++;
        });

        document.getElementById('emptyState').hidden = visible > 0;

        document.getElementById('tableInfo').textContent =
            'Menampilkan ' + visible + ' dari ' + rows.length + ' data';

        selectAll.checked = false;
        selectAll.indeterminate = false;
    }

    searchInput.addEventListener('input', filterTable);
    dateInput.addEventListener('change', filterTable);

    document.getElementById('resetFilter').addEventListener('click', function () {
        searchInput.value = '';
        dateInput.value = '';
        filterTable();
    });

    selectAll.addEventListener('change', function () {
        getRows().forEach(function (row) {
            if (row.style.display !== 'none') {
                row.querySelector('.row-check').checked = selectAll.checked;
            }
        });

        updateSelection();
    });

    table.addEventListener('change', function (event) {
        if (event.target.classList.contains('row-check')) {
            updateSelection();
        }
    });

    document.getElementById('deleteSelected').addEventListener('click', function () {
        const selectedRows = getRows().filter(function (row) {
            return row.querySelector('.row-check').checked;
        });

        if (!selectedRows.length) return;

        if (confirm('Hapus ' + selectedRows.length + ' data pasien yang dipilih dari tampilan ini?')) {
            selectedRows.forEach(function (row) {
                row.remove();
            });

            updateNumbers();
            updateSummary();
            filterTable();
            updateSelection();
        }
    });

    window.deletePatient = function (button) {
        const row = button.closest('tr');
        const name = row.querySelector('.patient-name').textContent.trim();

        if (confirm('Apakah kamu yakin ingin menghapus riwayat pasien ' + name + ' dari tampilan ini?')) {
            row.remove();
            updateNumbers();
            updateSummary();
            filterTable();
            updateSelection();
        }
    };

    window.showDetails = function (button) {
        const row = button.closest('tr');
        const cells = row.querySelectorAll('td');

        const name = row.querySelector('.patient-name').textContent.trim();
        const gender = row.querySelector('.gender').textContent.trim();
        const date = row.querySelector('.date-cell').textContent.trim();
        const age = cells[5].textContent.trim();
        const symptoms = row.querySelector('.symptom-text').textContent.trim();
        const result = row.querySelector('.result').textContent.trim();

        const content = document.getElementById('detailContent');
        content.replaceChildren();

        const details = [
            ['Nama pasien', name],
            ['Jenis kelamin', gender],
            ['Tanggal skrining', date],
            ['Usia', age + ' tahun'],
            ['Gejala yang dicatat', symptoms],
            ['Hasil skrining', result]
        ];

        details.forEach(function (item) {
            const wrapper = document.createElement('div');
            wrapper.className = 'detail-item';

            const label = document.createElement('div');
            label.className = 'detail-label';
            label.textContent = item[0];

            const value = document.createElement('div');
            value.className = 'detail-value';
            value.textContent = item[1];

            wrapper.append(label, value);
            content.appendChild(wrapper);
        });

        document.getElementById('detailModal').classList.add('show');
        document.body.style.overflow = 'hidden';
    };

    window.closeDetails = function () {
        document.getElementById('detailModal').classList.remove('show');
        document.body.style.overflow = '';
    };

    document.getElementById('detailModal').addEventListener('click', function (event) {
        if (event.target === this) window.closeDetails();
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            window.closeDetails();
        }
    });

    updateNumbers();
    updateSummary();
    updateSelection();
    filterTable();
});
</script>
</body>
</html>

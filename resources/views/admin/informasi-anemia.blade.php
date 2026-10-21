
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Anemia | AnemiaCare</title>

    <style>
        /* ===== MODAL EDIT INFORMASI ANEMIA ===== */

.modal-overlay {
    position: fixed;
    inset: 0;
    z-index: 9999;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 20px;
    background: rgba(31, 20, 22, 0.55);
    backdrop-filter: blur(4px);
}

.modal-overlay.show {
    display: flex;
    animation: fadeIn 0.2s ease;
}

.modal-card {
    width: 100%;
    max-width: 560px;
    max-height: 90vh;
    overflow-y: auto;
    background: #fff;
    border: 1px solid #f0e4e5;
    border-radius: 18px;
    box-shadow: 0 24px 70px rgba(40, 10, 15, 0.20);
    animation: slideUp 0.25s ease;
}

.modal-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 15px;
    padding: 24px 26px 20px;
    border-bottom: 1px solid #f1e8e9;
}

.modal-heading {
    display: flex;
    align-items: flex-start;
    gap: 13px;
}

.modal-icon {
    display: grid;
    place-items: center;
    width: 44px;
    height: 44px;
    flex-shrink: 0;
    border-radius: 12px;
    background: #fff0f1;
    color: #b42332;
    font-size: 22px;
}

.modal-header h2 {
    margin: 1px 0 5px;
    color: #292326;
    font-size: 19px;
    font-weight: 700;
}

.modal-header p {
    color: #81767a;
    font-size: 12px;
    line-height: 1.6;
}

.modal-close {
    display: grid;
    place-items: center;
    width: 35px;
    height: 35px;
    flex-shrink: 0;
    border: none;
    border-radius: 9px;
    background: #f8f5f5;
    color: #76686b;
    font-size: 23px;
    cursor: pointer;
    transition: 0.2s;
}

.modal-close:hover {
    background: #fff0f1;
    color: #b42332;
}

.modal-body {
    padding: 24px 26px;
}

.form-group {
    margin-bottom: 21px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    color: #383034;
    font-size: 13px;
    font-weight: 650;
}

.required-mark {
    color: #b42332;
}

.form-control {
    display: block;
    width: 100%;
    padding: 12px 14px;
    border: 1px solid #e6dadd;
    border-radius: 10px;
    outline: none;
    background: #fff;
    color: #292326;
    font-size: 13px;
    transition: border-color 0.2s, box-shadow 0.2s;
}

.form-control::placeholder {
    color: #b0a5a8;
}

.form-control:focus {
    border-color: #b42332;
    box-shadow: 0 0 0 3px rgba(180, 35, 50, 0.09);
}

textarea.form-control {
    min-height: 155px;
    resize: vertical;
    line-height: 1.7;
}

.field-hint {
    margin-top: 7px;
    color: #8d8184;
    font-size: 11px;
}

.modal-error {
    display: none;
    margin-bottom: 15px;
    padding: 11px 13px;
    border: 1px solid #f4d0d4;
    border-radius: 9px;
    background: #fff3f4;
    color: #a21f2d;
    font-size: 12px;
}

.modal-error.show {
    display: block;
}

.modal-footer {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
    padding: 18px 26px 24px;
    border-top: 1px solid #f1e8e9;
    background: #fffdfd;
}

.modal-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 42px;
    padding: 11px 19px;
    border: 1px solid transparent;
    border-radius: 10px;
    font-size: 12px;
    font-weight: 650;
    cursor: pointer;
    transition: 0.2s;
}

.modal-btn-cancel {
    border-color: #e7dcde;
    background: #fff;
    color: #62575a;
}

.modal-btn-cancel:hover {
    background: #f8f5f5;
}

.modal-btn-save {
    background: #b42332;
    color: #fff;
}

.modal-btn-save:hover {
    background: #901c28;
    box-shadow: 0 4px 12px rgba(180, 35, 50, 0.2);
}

.modal-btn:focus-visible,
.modal-close:focus-visible {
    outline: 3px solid rgba(180, 35, 50, 0.25);
    outline-offset: 2px;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(12px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 520px) {
    .modal-overlay {
        padding: 12px;
    }

    .modal-card {
        border-radius: 14px;
    }

    .modal-header {
        padding: 19px 18px;
    }

    .modal-body {
        padding: 20px 18px;
    }

    .modal-footer {
        padding: 16px 18px 19px;
    }

    .modal-header h2 {
        font-size: 17px;
    }

    .modal-footer .modal-btn {
        flex: 1;
        padding: 11px 12px;
    }
}

        :root {
            --primary: #b42332;
            --primary-dark: #901c28;
            --primary-light: #fff0f1;
            --sidebar: #fff7f7;
            --background: #faf8f8;
            --text: #292326;
            --muted: #81767a;
            --border: #eee3e4;
            --white: #ffffff;
            --shadow: 0 5px 20px rgba(70, 25, 30, .045);
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
            text-decoration: none;
            color: inherit;
        }

        button, input {
            font: inherit;
        }

        button, a {
            -webkit-tap-highlight-color: transparent;
        }

        /* LAYOUT */
        .app {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */
        .sidebar {
            width: 255px;
            flex: 0 0 255px;
            display: flex;
            flex-direction: column;
            padding: 25px 17px 18px;
            background: var(--sidebar);
            border-right: 1px solid var(--border);
        }

        .brand {
            padding: 3px 8px 35px;
        }

        .brand-row {
            display: flex;
            align-items: center;
            gap: 9px;
            color: var(--primary);
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            flex-shrink: 0;
            display: grid;
            place-items: center;
            color: white;
            background: var(--primary);
            border-radius: 13px;
            font-size: 24px;
        }

        .brand-name {
            font-size: 22px;
            font-weight: 800;
            letter-spacing: -.7px;
        }

        .brand-caption {
            display: block;
            margin: 4px 0 0 49px;
            color: #9e525a;
            font-size: 9px;
        }

        .nav-label {
            padding: 0 12px 10px;
            color: #a39a9c;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1px;
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
            border-radius: 10px;
            color: #62585b;
            font-size: 14px;
            transition: .2s;
        }

        .menu-icon {
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
            box-shadow: 0 5px 12px #b4233220;
        }

        .sidebar-bottom {
            margin-top: auto;
            padding-top: 25px;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 13px 8px;
            border-top: 1px solid var(--border);
        }

        .avatar {
            display: grid;
            place-items: center;
            width: 40px;
            height: 40px;
            flex-shrink: 0;
            border-radius: 50%;
            background: #f5dadd;
            color: var(--primary);
            font-weight: 700;
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
            align-items: center;
            gap: 10px;
            padding: 10px 12px;
            color: #776b6d;
            font-size: 13px;
            border-radius: 9px;
        }

        .logout:hover {
            color: var(--primary);
            background: #f9e8e9;
        }

        /* KONTEN UTAMA */
        .main {
            flex: 1;
            min-width: 0;
            padding: 30px clamp(18px, 3vw, 42px) 40px;
        }

        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 27px;
        }

        .title-row {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .back-link {
            display: grid;
            place-items: center;
            width: 37px;
            height: 37px;
            flex-shrink: 0;
            border-radius: 10px;
            color: var(--primary);
            background: white;
            border: 1px solid var(--border);
            font-size: 22px;
            transition: .2s;
        }

        .back-link:hover {
            background: var(--primary-light);
        }

        h1 {
            font-size: clamp(23px, 2.5vw, 30px);
            line-height: 1.25;
            letter-spacing: -.7px;
        }

        .page-subtitle {
            margin-top: 6px;
            color: var(--muted);
            font-size: 13px;
        }

        .top-avatar {
            display: grid;
            place-items: center;
            width: 43px;
            height: 43px;
            flex-shrink: 0;
            border-radius: 50%;
            color: var(--primary);
            background: #f6e0e2;
            font-weight: 700;
        }

        /* INTRO */
        .intro {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 19px 21px;
            margin-bottom: 24px;
            border: 1px solid #f3dfe1;
            border-radius: 14px;
            background: linear-gradient(110deg, #fff0f1, #fffafa);
        }

        .intro-icon {
            display: grid;
            place-items: center;
            width: 43px;
            height: 43px;
            flex-shrink: 0;
            border-radius: 12px;
            background: white;
            color: var(--primary);
            font-size: 21px;
        }

        .intro h2 {
            font-size: 15px;
            margin-bottom: 3px;
        }

        .intro p {
            color: var(--muted);
            font-size: 12px;
        }

        /* KARTU KONTEN */
        .content-card {
            overflow: hidden;
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 15px;
            box-shadow: var(--shadow);
        }

        .card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 22px 23px;
            border-bottom: 1px solid var(--border);
        }

        .card-header h2 {
            font-size: 17px;
        }

        .card-header p {
            margin-top: 4px;
            color: var(--muted);
            font-size: 12px;
        }

        .card-tools {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 10px;
        }

        /* PENCARIAN */
        .search-box {
            position: relative;
            width: 220px;
        }

        .search-icon {
            position: absolute;
            left: 13px;
            top: 50%;
            transform: translateY(-50%);
            color: #93878a;
            pointer-events: none;
        }

        .search-box input {
            width: 100%;
            min-height: 42px;
            padding: 10px 12px 10px 37px;
            border: 1px solid var(--border);
            border-radius: 10px;
            outline: none;
            background: #fff;
            font-size: 12px;
            transition: .2s;
        }

        .search-box input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px #b4233210;
        }

        /* TOMBOL */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            min-height: 42px;
            padding: 10px 15px;
            border: 1px solid transparent;
            border-radius: 10px;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: .2s;
            white-space: nowrap;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            box-shadow: 0 4px 12px #b4233225;
        }

        .btn-secondary {
            background: white;
            border-color: var(--border);
            color: #63575a;
        }

        .btn-secondary:hover {
            background: var(--primary-light);
        }

        /* TABEL */
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
            background: #fff2f2;
        }

        th {
            padding: 15px 17px;
            color: #635357;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .35px;
            white-space: nowrap;
        }

        td {
            padding: 17px;
            border-bottom: 1px solid #f2ebec;
            font-size: 12px;
            vertical-align: middle;
        }

        tbody tr {
            transition: background .2s;
        }

        tbody tr:hover {
            background: #fffafa;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .number-cell {
            color: #998b8e;
            font-weight: 600;
        }

        .info-title {
            font-size: 13px;
            font-weight: 650;
            color: #34282b;
        }

        .description {
            max-width: 240px;
            color: var(--muted);
            line-height: 1.6;
        }

        .date {
            color: #6e6265;
            white-space: nowrap;
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .action-btn {
            display: grid;
            place-items: center;
            width: 33px;
            height: 33px;
            border: 1px solid transparent;
            border-radius: 9px;
            background: transparent;
            cursor: pointer;
            font-size: 17px;
            transition: .2s;
        }

        .edit-btn {
            color: #347fc4;
        }

        .edit-btn:hover {
            background: #edf6ff;
            border-color: #d5e9fb;
        }

        .delete-btn {
            color: #d63848;
        }

        .delete-btn:hover {
            background: #fff0f1;
            border-color: #f5d6d9;
        }

        .table-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
            padding: 16px 22px;
            background: #fffdfd;
            border-top: 1px solid var(--border);
        }

        .table-info {
            color: var(--muted);
            font-size: 11px;
        }

        .pagination {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .page-btn {
            display: grid;
            place-items: center;
            min-width: 30px;
            height: 30px;
            padding: 0 8px;
            border: 1px solid var(--border);
            border-radius: 8px;
            background: white;
            color: #75696c;
            font-size: 11px;
            cursor: pointer;
        }

        .page-btn.current {
            color: white;
            background: var(--primary);
            border-color: var(--primary);
        }

        .page-btn:disabled {
            opacity: .4;
            cursor: not-allowed;
        }

        .empty-state {
            padding: 35px 15px;
            text-align: center;
            color: var(--muted);
            font-size: 13px;
        }

        .footer-note {
            margin-top: 22px;
            text-align: center;
            color: #a19799;
            font-size: 11px;
        }

        /* RESPONSIVE */
        @media (max-width: 1050px) {
            .sidebar {
                width: 220px;
                flex-basis: 220px;
            }

            .card-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .card-tools {
                width: 100%;
                justify-content: space-between;
            }

            .search-box {
                width: 100%;
                max-width: 300px;
            }
        }

        @media (max-width: 720px) {
            .app {
                display: block;
            }

            .sidebar {
                width: 100%;
                padding: 15px;
                border-right: 0;
                border-bottom: 1px solid var(--border);
            }

            .brand {
                padding: 0 5px 17px;
            }

            .brand-name {
                font-size: 21px;
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
                gap: 7px;
                font-size: 12px;
            }

            .sidebar-bottom {
                display: none;
            }

            .main {
                padding: 22px 14px 30px;
            }

            .topbar {
                margin-bottom: 20px;
            }

            h1 {
                font-size: 23px;
            }

            .page-subtitle {
                font-size: 12px;
            }

            .top-avatar {
                width: 37px;
                height: 37px;
            }

            .intro {
                padding: 15px;
            }

            .intro p {
                font-size: 11px;
            }

            .card-header {
                padding: 17px;
            }

            .card-tools {
                align-items: stretch;
                flex-direction: column;
            }

            .search-box {
                max-width: none;
            }

            .btn-primary {
                width: 100%;
            }

            table {
                min-width: 690px;
            }

            th, td {
                padding: 13px;
            }

            .table-footer {
                padding: 14px;
            }
        }
    </style>
</head>

<body>
<div class="app">

    
<!-- POP-UP EDIT INFORMASI ANEMIA -->
<div class="modal-overlay"
     id="editModal"
     role="dialog"
     aria-modal="true"
     aria-labelledby="modalTitle">

    <div class="modal-card">

        <div class="modal-header">
            <div class="modal-heading">
                <div class="modal-icon">✎</div>

                <div>
                    <h2 id="modalTitle">Edit Informasi Anemia</h2>
                    <p>Perbarui informasi edukasi anemia dengan mudah.</p>
                </div>
            </div>

            <button type="button"
                    class="modal-close"
                    onclick="closeEditModal()"
                    aria-label="Tutup pop-up">
                &times;
            </button>
        </div>

        <form id="editInfoForm">
            <div class="modal-body">

                <div class="modal-error" id="modalError" role="alert">
                    Silakan lengkapi semua kolom terlebih dahulu.
                </div>

                <div class="form-group">
                    <label for="editTitle">
                        Judul Informasi <span class="required-mark">*</span>
                    </label>

                    <input type="text"
                           id="editTitle"
                           class="form-control"
                           placeholder="Contoh: Pengertian Anemia"
                           maxlength="150"
                           required>

                    <p class="field-hint">
                        Masukkan judul informasi yang singkat dan jelas.
                    </p>
                </div>

                <div class="form-group">
                    <label for="editDescription">
                        Deskripsi Informasi <span class="required-mark">*</span>
                    </label>

                    <textarea id="editDescription"
                              class="form-control"
                              placeholder="Tuliskan deskripsi informasi anemia..."
                              maxlength="5000"
                              required></textarea>

                    <p class="field-hint">
                        Masukkan penjelasan yang mudah dipahami pengunjung.
                    </p>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button"
                        class="modal-btn modal-btn-cancel"
                        onclick="closeEditModal()">
                    Batal
                </button>

                <button type="submit"
                        class="modal-btn modal-btn-save">
                    Simpan Perubahan
                </button>
            </div>
        </form>

    </div>
</div>

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <a href="{{ url('/admin/dashboard') }}" class="brand">
            <div class="brand-row">
                <span class="brand-icon">♥</span>
                <span class="brand-name">AnemiaCare</span>
            </div>
            <span class="brand-caption">
                Kenali Gejalanya, Jaga Kesehatanmu
            </span>
        </a>

        <div class="nav-label">Menu utama</div>

        <nav class="menu">
            <a href="{{ url('/admin/dashboard') }}">
                <span class="menu-icon">▦</span>
                Dashboard
            </a>

            <a href="{{ url('/admin/informasi-anemia') }}" class="active">
                <span class="menu-icon">♡</span>
                Informasi Anemia
            </a>

            <a href="{{ url('/admin/data-gejala') }}">
                <span class="menu-icon">☷</span>
                Data Gejala
            </a>

            <a href="{{ url('/admin/riwayat-pasien') }}">
                <span class="menu-icon">◷</span>
                Riwayat Pasien
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

            <a href="{{ url('/logout') }}" class="logout">
                <span>↪</span>
                Keluar dari akun
            </a>
        </div>

    </aside>

    <!-- KONTEN UTAMA -->
    <main class="main">

        <header class="topbar">
            <div>
                <div class="title-row">
                    <a href="{{ url('/admin/dashboard') }}"
                       class="back-link"
                       aria-label="Kembali ke dashboard">←</a>

                    <h1>Informasi Anemia</h1>
                </div>

                <p class="page-subtitle">
                    Kelola informasi dan edukasi mengenai anemia.
                </p>
            </div>

            <div class="top-avatar" title="Administrator">A</div>
        </header>

        <!-- INFORMASI HALAMAN -->
        <section class="intro">
            <div class="intro-icon">♡</div>
            <div>
                <h2>Kelola Informasi Anemia</h2>
                <p>
                    Tambahkan, perbarui, dan kelola konten edukasi
                    agar informasi kesehatan tetap mudah dipahami.
                </p>
            </div>
        </section>

        <!-- TABEL INFORMASI -->
        <section class="content-card">

            <div class="card-header">
                <div>
                    <h2>Daftar Informasi</h2>
                    <p>Daftar konten edukasi anemia yang tersedia.</p>
                </div>

                <div class="card-tools">
                    <label class="search-box">
                        <span class="search-icon">⌕</span>
                        <input
                            type="search"
                            id="searchInput"
                            placeholder="Cari judul informasi..."
                            aria-label="Cari judul informasi">
                    </label>

                    <!-- Sesuaikan URL ini dengan route tambah informasi -->
                    
<button type="button"
        class="btn btn-primary"
        onclick="openAddModal()">
    <span>＋</span>
    Tambah Informasi
</button>

                </div>
            </div>

            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul Informasi</th>
                            <th>Deskripsi Singkat</th>
                            <th>Tanggal Dibuat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody id="infoTable">
                        <tr>
                            <td class="number-cell">01</td>
                            <td>
                                <div class="info-title">Pengertian Anemia</div>
                            </td>
                            <td>
                                <div class="description">
                                    Penjelasan mengenai pengertian anemia...
                                </div>
                            </td>
                            <td class="date">24/10/2026</td>
                            <td>
                                <button type="button"
        class="action-btn edit-btn"
        title="Edit informasi"
        aria-label="Edit informasi"
        onclick="openEditModal(this)">
    ✎
</button>

                                    <button type="button"
                                            class="action-btn delete-btn"
                                            title="Hapus informasi"
                                            aria-label="Hapus informasi"
                                            onclick="confirmDelete('Pengertian Anemia')">⌫</button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="number-cell">02</td>
                            <td>
                                <div class="info-title">Gejala Anemia</div>
                            </td>
                            <td>
                                <div class="description">
                                    Informasi mengenai tanda dan gejala anemia...
                                </div>
                            </td>
                            <td class="date">24/10/2026</td>
                            <td>
                                <<button type="button"
        class="action-btn edit-btn"
        onclick="openEditModal(this)">
    ✎
</button>

                                    <button type="button"
                                            class="action-btn delete-btn"
                                            title="Hapus informasi"
                                            aria-label="Hapus informasi"
                                            onclick="confirmDelete('Gejala Anemia')">⌫</button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="number-cell">03</td>
                            <td>
                                <div class="info-title">Penyebab Anemia</div>
                            </td>
                            <td>
                                <div class="description">
                                    Informasi mengenai penyebab anemia...
                                </div>
                            </td>
                            <td class="date">24/10/2026</td>
                            <td>
                                <<button type="button"
        class="action-btn edit-btn"
        onclick="openEditModal(this)">
    ✎
</button>

                                    <button type="button"
                                            class="action-btn delete-btn"
                                            title="Hapus informasi"
                                            aria-label="Hapus informasi"
                                            onclick="confirmDelete('Penyebab Anemia')">⌫</button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="number-cell">04</td>
                            <td>
                                <div class="info-title">Pencegahan Anemia</div>
                            </td>
                            <td>
                                <div class="description">
                                    Cara menjaga kesehatan dan mencegah anemia...
                                </div>
                            </td>
                            <td class="date">24/10/2026</td>
                            <td>
                                <button type="button"
        class="action-btn edit-btn"
        onclick="openEditModal(this)">
    ✎
</button>

                                    <button type="button"
                                            class="action-btn delete-btn"
                                            title="Hapus informasi"
                                            aria-label="Hapus informasi"
                                            onclick="confirmDelete('Pencegahan Anemia')">⌫</button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="number-cell">05</td>
                            <td>
                                <div class="info-title">Penanganan Anemia</div>
                            </td>
                            <td>
                                <div class="description">
                                    Informasi umum mengenai penanganan anemia...
                                </div>
                            </td>
                            <td class="date">24/10/2026</td>
                            <td>
                                <button type="button"
        class="action-btn edit-btn"
        onclick="openEditModal(this)">
    ✎
</button>

                                    <button type="button"
                                            class="action-btn delete-btn"
                                            title="Hapus informasi"
                                            aria-label="Hapus informasi"
                                            onclick="confirmDelete('Penanganan Anemia')">⌫</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div id="emptyState" class="empty-state" hidden>
                    Informasi yang dicari tidak ditemukan.
                </div>
            </div>

            <div class="table-footer">
                <div class="table-info" id="tableInfo">
                    Menampilkan 5 informasi
                </div>

                <div class="pagination">
                    <button class="page-btn" type="button" disabled>‹</button>
                    <button class="page-btn current" type="button">1</button>
                    <button class="page-btn" type="button" disabled>›</button>
                </div>
            </div>

        </section>

        <footer class="footer-note">
            AnemiaCare · Sistem Deteksi Dini Anemia Berbasis Website
        </footer>

    </main>
</div>

<script>
    // Pencarian judul dan deskripsi informasi
    const searchInput = document.getElementById('searchInput');
    const tableBody = document.getElementById('infoTable');
    const emptyState = document.getElementById('emptyState');
    const tableInfo = document.getElementById('tableInfo');

    function filterTable() {
        const keyword = searchInput.value.toLowerCase().trim();
        const rows = Array.from(tableBody.querySelectorAll('tr'));
        let visibleCount = 0;

        rows.forEach(function(row) {
            const text = row.innerText.toLowerCase();
            const match = text.includes(keyword);

            row.style.display = match ? '' : 'none';

            if (match) {
                visibleCount++;
            }
        });

        emptyState.hidden = visibleCount !== 0;

        tableInfo.textContent = keyword
            ? 'Menampilkan ' + visibleCount + ' hasil pencarian'
            : 'Menampilkan ' + visibleCount + ' informasi';
    }

    searchInput.addEventListener('input', filterTable);

    // Konfirmasi sebelum penghapusan.
    // Fungsi ini belum menghapus data dari database.
    function confirmDelete(title) {
        alert(
            'Informasi "' + title + '" dipilih untuk dihapus. ' +
            'Fitur hapus database perlu dihubungkan ke route Laravel terlebih dahulu.'
        );
    }
</script>

<script>
    let selectedEditRow = null;
    
    const editModal = document.getElementById('editModal');
    const editInfoForm = document.getElementById('editInfoForm');
    const editTitle = document.getElementById('editTitle');
    const editDescription = document.getElementById('editDescription');
    const modalError = document.getElementById('modalError');

    // Membuka pop-up dan mengambil data dari baris yang dipilih
    function openEditModal(button) {
        selectedEditRow = button.closest('tr');

        if (!selectedEditRow) return;

        const titleElement =
            selectedEditRow.querySelector('.info-title');

        const descriptionElement =
            selectedEditRow.querySelector('.description');

        editTitle.value = titleElement
            ? titleElement.textContent.trim()
            : '';

        editDescription.value = descriptionElement
            ? descriptionElement.textContent.trim()
            : '';

        modalError.classList.remove('show');
        editModal.classList.add('show');
        document.body.style.overflow = 'hidden';

        // Fokus ke kolom judul setelah pop-up terbuka
        setTimeout(() => editTitle.focus(), 100);
    }

    // Menutup pop-up
    function closeEditModal() {
        editModal.classList.remove('show');
        document.body.style.overflow = '';
        modalError.classList.remove('show');
        selectedEditRow = null;
    }

    // Menutup jika area gelap di luar pop-up diklik
    editModal.addEventListener('click', function(event) {
        if (event.target === editModal) {
            closeEditModal();
        }
    });

    // Menutup dengan tombol Escape
    document.addEventListener('keydown', function(event) {
        if (
            event.key === 'Escape' &&
            editModal.classList.contains('show')
        ) {
            closeEditModal();
        }
    });

    // Menyimpan perubahan pada tabel yang sedang ditampilkan
    editInfoForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const newTitle = editTitle.value.trim();
        const newDescription = editDescription.value.trim();

        if (!newTitle || !newDescription) {
            modalError.textContent =
                'Judul dan deskripsi informasi wajib diisi.';
            modalError.classList.add('show');
            return;
        }

        if (!selectedEditRow) return;

        const titleElement =
            selectedEditRow.querySelector('.info-title');

        const descriptionElement =
            selectedEditRow.querySelector('.description');

        if (titleElement && descriptionElement) {
            // textContent mencegah input diperlakukan sebagai HTML
            titleElement.textContent = newTitle;
            descriptionElement.textContent = newDescription;

            // Perbarui pencarian jika kolom pencarian digunakan
            if (typeof filterTable === 'function') {
                filterTable();
            }

            closeEditModal();

            // Notifikasi berhasil untuk perubahan di tampilan
            alert(
                'Informasi berhasil diperbarui pada tampilan tabel.'
            );
        }
    });
</script>
</body>
</html>

</body>
</html>

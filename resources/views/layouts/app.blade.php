<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Karim Jaya Computer - @yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body { 
            background-color: #f8f9fa; 
        }
        #sidebar {
            min-height: 100vh;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
        }
        .list-group-item.active {
            background-color: #0d6efd !important;
            border-color: #0d6efd !important;
        }
        .sidebar-heading {
            font-size: 1.2rem;
            padding: 1.5rem 1rem;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-dark bg-dark sticky-top shadow">
        <div class="container-fluid">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Karim Jaya Computer</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse shadow-sm">
                <div class="position-sticky pt-3">
                    <div class="px-3 mb-4">
                        <h6 class="text-muted text-uppercase fw-bold" style="font-size: 0.8rem;">Menu Utama</h6>
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="/dashboard" class="list-group-item list-group-item-action border-0 py-3 {{ Request::is('dashboard') ? 'active' : '' }}">
                            <i class="bi bi-speedometer2 me-2"></i> Dashboard
                        </a>
                        <a href="/stok-barang" class="list-group-item list-group-item-action border-0 py-3 {{ Request::is('stok-barang') ? 'active' : '' }}">
                            <i class="bi bi-box-seam me-2"></i> Stok Barang
                        </a>
                        <a href="/tambah-stok" class="list-group-item list-group-item-action border-0 py-3 {{ Request::is('tambah-stok') ? 'active' : '' }}">
                            <i class="bi bi-plus-circle me-2"></i> Tambah Stok
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0 py-3">
                            <i class="bi bi-journal-text me-2"></i> Laporan
                        </a>
                    </div>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
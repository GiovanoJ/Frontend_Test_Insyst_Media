<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Manajemen Produk')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/jquery.dataTables.min.css">

    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        .content-wrapper {
            flex: 1 0 auto;
        }
        footer {
            flex-shrink: 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark py-2">
        <div class="container">
            <a class = "navbar-brand fs-4">Manajemen Produk</a>

            <div class="d-flex align-items-center">
                <button class="btn btn-dark btn-sm">
                    <i class="bi bi-table fs-5"></i>
                    <small class="d-block text-light">Tabel</small>
                </button>

                <button class="btn btn-dark btn-sm">
                    <i class="bi bi-person-circle fs-5"></i>
                    <small class="d-block text-light">Profil</small>
                </button>
            </div>
        </div>
    </nav>

    <div class="content-wrapper">
        <div class="container my-4">
            @yield('content')
        </div>
    </div>

<footer class="bg-dark text-light text-center py-4">
    &copy; 2025 Giovano. All rights reserved. |
    <a href="#" class="text-light text-decoration-none">Privacy</a> |
    <a href="#" class="text-light text-decoration-none">Terms</a>
</footer>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.min.js"></script>
    @stack('scripts')
</body>
</html>

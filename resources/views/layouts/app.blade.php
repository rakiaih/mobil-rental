<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <title>Vehicle Booking</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg shadow-sm">
        <a class="navbar-brand font-weight-bold" href="{{ route('dashboard.index') }}">
            <i class="fas fa-car" style="color: #ffda44;"></i> Vehicle Booking
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.index') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bookings.index') }}">Bookings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('approvals.index') }}">Approvals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bookings.export') }}">Export Bookings</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<style>
/* custom.css */

body {
    font-family: 'Roboto', sans-serif;
    background: linear-gradient(135deg, #1c1c1c, #333333); /* Warna latar belakang yang sesuai dengan dashboard */
    color: #e0e0e0;
}

.navbar {
    background: linear-gradient(135deg, #333333, #222222); /* Warna latar belakang navbar yang gelap */
    border-bottom: 2px solid #444; /* Garis bawah untuk menambah kedalaman */
}

.navbar-brand {
    color: #ffda44; /* Warna emas untuk logo */
    font-size: 1.8rem;
    transition: color 0.3s;
}

.navbar-brand:hover {
    color: #ffd700; /* Warna emas lebih terang saat di-hover */
}

.navbar .nav-link {
    color: #e0e0e0; /* Warna teks putih pudar */
    font-weight: 500;
    transition: color 0.3s, transform 0.3s;
}

.navbar .nav-link:hover {
    color: #ffda44; /* Warna emas saat di-hover */
    transform: scale(1.1); /* Efek zoom kecil saat di-hover */
    text-decoration: none; /* Menghapus underline */
}

.navbar .nav-link.active {
    color: #ffda44; /* Warna emas untuk link aktif */
    font-weight: bold;
}

.navbar-toggler {
    border-color: #ffda44; /* Warna emas untuk tombol toggler */
}

.navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%288, 8, 8, 0.7%29' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

.navbar-nav .nav-item {
    margin-right: 1rem; /* Spasi antar item navbar */
}

.navbar-nav .nav-item:last-child {
    margin-right: 0;
}
</style>

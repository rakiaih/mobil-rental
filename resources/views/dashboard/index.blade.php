@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="text-center mb-4">
        <!-- Ganti ikon tambang dengan ikon mobil -->
        <i class="fas fa-car fa-5x mining-icon" style="color: #ffda44;"></i>
    </div>
    <h1 class="text-center mb-4 mining-header">Dashboard Pemesanan Mobil</h1>
    <div class="row text-center">
        <div class="col-12 col-sm-6 col-md-4 mb-4">
            <div class="card border-primary shadow-lg card-fade-in mining-card">
                <div class="card-header bg-primary text-white">
                    <h4><i class="fas fa-calendar-alt icon-animated"></i> Total Bookings</h4>
                </div>
                <div class="card-body">
                    <h2 class="display-4">{{ $totalBookings }}</h2>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 mb-4">
            <div class="card border-success shadow-lg card-fade-in mining-card">
                <div class="card-header bg-success text-white">
                    <h4><i class="fas fa-check-circle icon-animated"></i> Approved Bookings</h4>
                </div>
                <div class="card-body">
                    <h2 class="display-4">{{ $approvedBookings }}</h2>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 mb-4">
            <div class="card border-warning shadow-lg card-fade-in mining-card">
                <div class="card-header bg-warning text-white">
                    <h4><i class="fas fa-clock icon-animated"></i> Pending Bookings</h4>
                </div>
                <div class="card-body">
                    <h2 class="display-4">{{ $pendingBookings }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<style>
/* Latar belakang gelap untuk seluruh halaman */
body {
    background: linear-gradient(135deg, #1c1c1c, #333333);
    color: #e0e0e0;
}

/* Gaya untuk header dengan tema mobil */
.mining-header {
    color: #ffda44; /* Warna emas yang mencolok */
    font-family: 'Arial Black', sans-serif;
    font-size: 2.5rem;
    letter-spacing: 1px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    animation: glow 2s infinite alternate;
}

/* Efek glow pada header */
@keyframes glow {
    from {
        text-shadow: 0 0 10px #ffda44, 0 0 20px #ffda44, 0 0 30px #ffda44;
    }
    to {
        text-shadow: 0 0 20px #ffd700, 0 0 30px #ffd700, 0 0 40px #ffd700;
    }
}

/* Ikon mobil dengan efek bounce */
.mining-icon {
    color: #ffda44;
    animation: bounce 2s infinite;
}

/* Efek bounce pada ikon */
@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-15px);
    }
    60% {
        transform: translateY(-8px);
    }
}

/* Card dengan efek yang lebih elegan */
.mining-card {
    background: linear-gradient(145deg, #444, #222); /* Gradien gelap */
    border-radius: 10px;
    border: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Efek hover pada card */
.mining-card:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.6);
}

/* Animasi untuk ikon pada judul */
.icon-animated {
    transition: transform 0.3s ease, color 0.3s ease;
}

.icon-animated:hover {
    transform: scale(1.3);
    color: #ffda44; /* Efek warna saat di-hover */
}

/* Animasi fade-in untuk kartu */
.card-fade-in {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.6s ease forwards;
}

/* Delay untuk fade-in tiap kartu */
.card-fade-in:nth-child(1) { animation-delay: 0.2s; }
.card-fade-in:nth-child(2) { animation-delay: 0.4s; }
.card-fade-in:nth-child(3) { animation-delay: 0.6s; }

/* Keyframes untuk fade-in */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

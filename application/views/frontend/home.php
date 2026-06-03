<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendaftaran Pasien Online</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">

    <style>

body{
    background:#f8f9fa;
}

.hero{
    min-height:75vh;
    display:flex;
    align-items:center;
}

.hero-title{
    font-size:65px;
    font-weight:bold;
}

.hero-subtitle{
    font-size:24px;
    color:#6c757d;
}

.feature-card{
    transition:0.3s;
    border:none;
}

.feature-card:hover{
    transform:translateY(-8px);
}

.feature-icon{
    font-size:60px;
}

</style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow py-3">
    <div class="container">

        <a class="navbar-brand d-flex align-items-center" href="#">

            <i class="fas fa-hospital-alt fa-3x mr-3"></i>

            <span style="
                font-size: 40px;
                font-weight: bold;
                color:white;
            ">
                Rumah Sakit Sehat Sentosa
            </span>

        </a>

        <div class="ml-auto">

            <a href="<?= site_url('frontend/daftar'); ?>"
               class="btn btn-light btn-lg mr-2">

                <i class="fas fa-notes-medical"></i>
                Daftar Berobat

            </a>

            <a href="<?= site_url('frontend/cek_status'); ?>"
               class="btn btn-outline-light btn-lg">

                <i class="fas fa-search"></i>
                Cek Status

            </a>

        </div>

    </div>
</nav>
<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-6">
                <h1 class="hero-title">
                    Sistem Pendaftaran Pasien Online
                </h1>

                <p class="hero-subtitle mt-3">
                    Daftarkan diri Anda secara online tanpa harus mengantri di rumah sakit.
                </p>

                <div class="mt-4">

                    <a href="<?= site_url('frontend/daftar'); ?>"
                       class="btn btn-primary btn-lg mr-2">
                        <i class="fas fa-notes-medical"></i>
                        Daftar Berobat
                    </a>

                    <a href="<?= site_url('frontend/cek_status'); ?>"
                       class="btn btn-outline-primary btn-lg">
                        <i class="fas fa-search"></i>
                        Cek Status
                    </a>

                </div>
            </div>

            <div class="col-md-6 text-center">
                <img src="https://cdn-icons-png.flaticon.com/512/2785/2785482.png"
     class="img-fluid"
     style="max-height:500px;">
            </div>

        </div>
    </div>
</section>

<!-- Fitur -->
<section class="pb-5">
    <div class="container">

        <div class="row">

            <div class="col-md-4 mb-3">
                <div class="card shadow-lg feature-card h-100">
                    <div class="card-body text-center">

                        <i class="fas fa-user-md fa-4x text-primary mb-3"></i>

                        <h4>Dokter Profesional</h4>

                        <p>
                            Ditangani oleh dokter yang berpengalaman dan profesional.
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow feature-card h-100">
                    <div class="card-body text-center">

                        <i class="fas fa-clock fa-4x text-success mb-3"></i>

                        <h4>Hemat Waktu</h4>

                        <p>
                            Tidak perlu antre panjang saat melakukan pendaftaran.
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow feature-card h-100">
                    <div class="card-body text-center">

                        <i class="fas fa-laptop-medical fa-4x text-danger mb-3"></i>

                        <h4>Pendaftaran Online</h4>

                        <p>
                            Daftar berobat kapan saja dan di mana saja.
                        </p>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Footer -->
<footer class="bg-primary text-white text-center py-4 mt-5">
    <h5>Rumah Sakit Sehat Sentosa</h5>
    <p class="mb-0">
        © 2026 Sistem Pendaftaran Pasien Online
    </p>
</footer>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

</body>
</html>
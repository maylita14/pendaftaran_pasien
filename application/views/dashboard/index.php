<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">
        Dashboard
    </h1>

    <div class="row">

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    Total Pasien
                    <h3><?= $total_pasien; ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    Total Pendaftaran
                    <h3><?= $total_pendaftaran; ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    Disetujui
                    <h3><?= $total_disetujui; ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    Ditolak
                    <h3><?= $total_ditolak; ?></h3>
                </div>
            </div>
        </div>

    </div>

</div>
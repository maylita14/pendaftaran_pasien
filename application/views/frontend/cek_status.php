<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cek Status Pendaftaran</title>

    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="card">

        <div class="card-header bg-success text-white">
            <h4>Cek Status Pendaftaran</h4>
        </div>

        <div class="card-body">

            <form method="post" action="<?= site_url('frontend/proses_cek_status'); ?>">

                <div class="form-group mb-3">
                    <label>Nomor Pendaftaran</label>
                    <input type="text"
                           name="nomor_pendaftaran"
                           class="form-control"
                           placeholder="Masukkan Nomor Pendaftaran"
                           required>
                </div>

                <button type="submit"
                        class="btn btn-success">
                    Cek Status
                </button>

                <a href="<?= site_url('frontend'); ?>"
                   class="btn btn-secondary">
                    Kembali
                </a>

            </form>

            <?php if(isset($hasil)) : ?>

                <hr>

                <h5>Hasil Pencarian</h5>

                <table class="table table-bordered">

                    <tr>
                        <th>Nomor Pendaftaran</th>
                        <td><?= $hasil->nomor_pendaftaran; ?></td>
                    </tr>

                    <tr>
                        <th>Nama Pasien</th>
                        <td><?= $hasil->nama; ?></td>
                    </tr>

                    <tr>
                        <th>Dokter</th>
                        <td><?= $hasil->nama_dokter; ?></td>
                    </tr>

                    <tr>
                        <th>Keluhan</th>
                        <td><?= $hasil->keluhan; ?></td>
                    </tr>

                    <tr>
                        <th>Tanggal Daftar</th>
                        <td><?= $hasil->tanggal_daftar; ?></td>
                    </tr>

                    <tr>
                        <th>Status</th>
                        <td>
                            <strong><?= $hasil->status; ?></strong>
                        </td>
                    </tr>

                </table>

            <?php endif; ?>

        </div>

    </div>

</div>

</body>
</html>
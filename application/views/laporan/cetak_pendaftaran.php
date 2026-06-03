<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Pendaftaran</title>

    <style>
        body{
            font-family: Arial;
        }

        table{
            width:100%;
            border-collapse: collapse;
        }

        table, th, td{
            border:1px solid black;
        }

        th, td{
            padding:8px;
            text-align:left;
        }

        h2{
            text-align:center;
        }
    </style>
</head>

<body onload="window.print()">

    <h2>Laporan Pendaftaran Pasien</h2>

    <table>

        <tr>
            <th>No</th>
            <th>Pasien</th>
            <th>Dokter</th>
            <th>Keluhan</th>
            <th>Tanggal</th>
            <th>Status</th>
        </tr>

        <?php $no=1; foreach($pendaftaran as $p){ ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $p->nama; ?></td>
            <td><?= $p->nama_dokter; ?></td>
            <td><?= $p->keluhan; ?></td>
            <td><?= $p->tanggal_daftar; ?></td>
            <td><?= $p->status; ?></td>
        </tr>

        <?php } ?>

    </table>

</body>
</html>
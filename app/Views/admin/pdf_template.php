<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <style>
        table,
        td,
        th {
            border: 1px solid #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td,
        th {
            padding: 2px;
        }

        th {
            background-color: #ccc;
        }
        @page {
            margin: 10px;
        }

        .img-small {
            max-width: 100px;
            /* Adjust the maximum width as needed */
            height: auto;
        }
    </style>
</head>

<body>
    <h2>Laporan Pengaduan</h2>
    </br>
    <table class="">
        <thead>
            <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Judul</th>
                <th scope="col" class="text-center">Tanggal</th>
                <th scope="col" class="text-center">Isi Laporan</th>
                <th scope="col" class="text-center">Gambar</th>
                <th scope="col" class="text-center">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $counter = 1; ?>
            <?php foreach ($pengaduan as $report): ?>
                <tr>
                    <td scope="row" class="text-center">
                        <?= $counter++ ?>
                    </td>
                    <td scope="row" class="text-center">
                        <?= $report['judul_pengaduan']; ?>
                    </td>
                    <td scope="row" class="text-center">
                        <?= $report['tanggal_pengaduan']; ?>
                    </td>
                    <td scope="row" class="text-center">
                        <?= $report['isi_laporan']; ?>
                    </td>
                    <td scope="row" class="text-center">
                        <img src="<?= base_url('uploads/' . $report['foto']); ?>" alt="Report Image"
                            class="img-thumbnail img-small">
                    </td>
                    <td scope="row" class="text-center">
                        <?php if ($report['status'] == 1): ?>
                            <button type="button" class="btn btn-secondary" disabled>Menunggu</button>
                        <?php endif; ?>
                        <?php if ($report['status'] == 2): ?>
                            <button type="button" class="btn btn-secondary disabled">Diterima</button>
                        <?php endif; ?>
                        <?php if ($report['status'] == 3): ?>
                            <button type="button" class="btn btn-secondary disabled">Diproses</button>
                        <?php endif; ?>
                        <?php if ($report['status'] == 4): ?>
                            <button type="button" class="btn btn-success disabled">Selesai</button>
                        <?php endif; ?>
                        <?php if ($report['status'] == 5): ?>
                            <button type="button" class="btn btn-danger disabled">Ditolak</button>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>
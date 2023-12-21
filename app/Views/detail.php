<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        /* Add custom styles here */
        .mt-2 {
            margin-top: 2rem;
        }

        .center {
            text-align: center;
        }

        .table td {
            border: 1px solid #dee2e6;
            width: 50%;
            /* Set width for each column */
        }

        .table th,
        .table td {
            text-align: left;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mt-2 mb-4 center">Detail Pulau Maluku</h2>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Nama pulau</td>
                            <td>
                                <?= $pulau['nama_pulau'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td>lokasi pulau</td>
                            <td>
                                <?= $pulau['lokasi_pulau'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td>luas pulau</td>
                            <td>
                                <?= $pulau['luas_pulau'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td>koordinat pulau</td>
                            <td>
                                <?= $pulau['koordinat_pulau'] ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="/pulau/edit/<?= $pulau['slug']; ?>" class="btn btn-warning">Edit</a>
                <br><br>
                <a href="/pulau">Kembali ke data riwayat</a>
            </div>
        </div>
    </div>
</body>

</html>
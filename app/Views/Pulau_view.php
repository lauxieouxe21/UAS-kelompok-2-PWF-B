<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Pulau Di Maluku</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nama</th>
                    <th scope="col">lokasi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($pulau as $p) : ?>
                    <tr>
                        <th scope="row">
                            <?= $i++; ?>
                        </th>
                        <td>
                            <?= $p['nama_pulau']; ?>
                        </td>
                        <td>
                            <?= $p['lokasi_pulau']; ?>
                        </td>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <a href="/pulau/detail/<?= $p['slug']; ?>" class="btn btn-success mx-2">
                                    <i class="fas fa-eye"></i> Detail
                                </a>
                                <form action="/pulau/<?= $p['id']; ?>" method="post">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
        <br>
        <a href="/pulau/create" class="btn btn -primary"> + tambah data pulau </a>
        <a href="/logout" class="btn btn -primary">logout</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
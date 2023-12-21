<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>

<div class="row">
    <div class="col-8">
        <h2 class="my-3">Ubah data pulau Maluku</h2>
        <form action="/pulau/update/<?= $pulau['id']; ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <input type="hidden" name="slug" value=" <?= $pulau['slug']; ?>">
            <div class="row mb-3">
                <label for="nama_pulau" class="col-sm-2 col-form-label">nama_pulau</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_pulau" name="nama_pulau" value="<?= $pulau['nama_pulau']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="lokasi_pulau" class="col-sm-2 col-form-label">lokasi_pulau</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lokasi_pulau" name="lokasi_pulau" value="<?= $pulau['lokasi_pulau']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="luas_pulau" class="col-sm-2 col-form-label">luas_pulau</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="luas_pulau" name="luas_pulau" value="<?= $pulau['luas_pulau']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="koordinat_pulau" class="col-sm-2 col-form-label">koordinat_pulau</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="koordinat_pulau" name="koordinat_pulau" value="<?= $pulau['koordinat_pulau']; ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
</div>
</div>


</body>

</html>
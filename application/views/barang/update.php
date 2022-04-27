<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="my-4">Update Barang</h4>
                <hr>
                <?php foreach ($barang->result_array() as $key) {?>
                <form action="<?=base_url('barang/edit/').$key['id_brg']?>" method="post">
                    <div class="row mb-3">
                        <label class="col-2 form-label">Id Barang</label>
                        <div class="col-4">
                            <input type="text" class="form-control" name="id" value="<?=$key['id_brg']?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-2 form-label">Nama Barang</label>
                        <div class="col-4">
                            <input type="text" class="form-control" name="nama" value="<?=$key['nama_brg']?>">
                        </div>
                        <div class="col-4 text-danger"><?=form_error('nama')?></div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-2 form-label">Jenis</label>
                        <div class="col-4">
                            <input type="text" class="form-control" name="jenis" value="<?=$key['jenis_brg']?>">
                        </div>
                        <div class="col-4 text-danger"><?=form_error('jenis')?></div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-2 form-label">Deskripsi</label>
                        <div class="col-4">
                            <textarea class="form-control" name="deskripsi"><?=$key['deskripsi_brg']?></textarea>
                        </div>
                        <div class="col-4 text-danger"><?=form_error('deskripsi')?></div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-2 form-label">Qty</label>
                        <div class="col-4">
                            <input type="text" class="form-control" name="qty" value="<?=$key['qty_brg']?>">
                        </div>
                        <div class="col-4 text-danger"><?=form_error('qty')?></div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-2 form-label">Harga</label>
                        <div class="col-4">
                            <input type="text" class="form-control" name="harga" value="<?=$key['harga_brg']?>">
                        </div>
                        <div class="col-4 text-danger"><?=form_error('harga')?></div>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="row mb-3">
                        <div class="col-1"><a href="<?=base_url('barang')?>"><button type="button"
                                    class="btn btn-warning">Kembali</button></a></div>
                        <div class="col-1"><button type="submit" class="btn btn-primary">Update</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>



</html>
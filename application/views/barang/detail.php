<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="my-4">Data Barang</h2>
        <a href="<?=base_url('barang/tambah')?>">
            <span class="btn btn-primary">Tambah Barang</span>
        </a>
        <table class="table">
            <tr>
                <td>No</td>
                <td>Nama Barang</td>
                <td>Jenis Barang</td>
                <td>Deskripsi</td>
                <td>Qty</td>
                <td>Harga</td>
                <td>Aksi</td>
            </tr>
            <?php
            $no = 1 ;
            foreach ($barang->result_array() as $key) {
            ?>
            <tr>
                <td><?=$no++?></td>
                <td><?=$key['nama_brg']?></td>
                <td><?=$key['jenis_brg']?></td>
                <td><?=$key['deskripsi_brg']?></td>
                <td><?=$key['qty_brg']?></td>
                <td><?=$key['harga_brg']?></td>
                <td>
                    <a href=" <?=base_url('barang/ubah/'.$key['id_brg'])?>"><button
                            class="btn btn-outline-warning">Edit</button></a>
                    <a href="<?=base_url('barang/delete/'.$key['id_brg'])?>"><button
                            class="btn btn-outline-danger">Hapus</button></a>
                </td>
            </tr>
            <?php
                } 
            ?>
        </table>
    </div>
    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- Bootstrap Js -->
</body>

</html>

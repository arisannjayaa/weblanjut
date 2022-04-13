<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman barang</title>

</head>

<body>
    <h2>Data Barang</h2>
    <a href="barang/tambah">
        <span>Tambah Barang</span>
    </a>
    <table border="1">
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
                <a href=" <?=base_url('barang/ubah/'.$key['id_brg'])?>"><button>Edit</button></a>
                <a href="<?=base_url('barang/delete/'.$key['id_brg'])?>"><button>Hapus</button></a>
            </td>
        </tr>
        <?php
                } 
            ?>
    </table>
    </div>
</body>

</html>
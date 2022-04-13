<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Barang</title>
</head>

<body>
    <h1>Update Barang</h1>
    <hr>
    <form action="<?=base_url('barang/edit')?>" method="post">
        <table>
            <?php foreach ($barang->result_array() as $key) {
            ?>
            <tr>
                <td>Id</td>
                <td>:</td>
                <td><input type="text" name="id" value="<?=$key['id_brg']?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nim" value="<?=$key['nama_brg']?>">
                </td>
            </tr>
            <tr>
                <td>Jenis Barang</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?=$key['jenis_brg']?>">
                </td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>:</td>
                <td><textarea name="deskripsi" id="barang"
                        class="form-control ms-3"><?=$key['deskripsi_brg']?></textarea>
                </td>
            </tr>
            <tr>
                <td>Qty</td>
                <td>:</td>
                <td><input type="text" name="qty" value="<?=$key['qty_brg']?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga" value="<?=$key['harga_brg']?>"></td>
            </tr>
            <?php
                } ?>
            <td><a href="<?=base_url('barang')?>"><button type="button">Kembali</button>
            </td></a>
            <td><button type="submit">Update</button></td>
        </table>
    </form>
</body>

</html>
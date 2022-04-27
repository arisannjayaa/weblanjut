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
    <?php foreach ($barang->result_array() as $key) {
    ?>
    <form action="<?=base_url('barang/edit/').$key['id_brg']?>" method="post">
        <table>
            <tr>
                <td>Id</td>
                <td>:</td>
                <td><input type="text" name="id" value="<?=$key['id_brg']?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?=$key['nama_brg']?>"></td>
				<td style="color: red;" colspan="3"><?=form_error('nama')?></td>
            </tr>
            <tr>
                <td>Jenis Barang</td>
                <td>:</td>
                <td><input type="text" name="jenis" value="<?=$key['jenis_brg']?>"></td>
				<td style="color: red;" colspan="3"><?=form_error('jenis')?></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>:</td>
                <td><textarea name="deskripsi" id="barang"
                        class="form-control ms-3"><?=$key['deskripsi_brg']?></textarea>
                </td>
				<td style="color: red;" colspan="3"><?=form_error('deskripsi')?></td>
            </tr>
            <tr>
                <td>Qty</td>
                <td>:</td>
                <td><input type="text" name="qty" value="<?=$key['qty_brg']?>"></td>
				<td style="color: red;" colspan="3"><?=form_error('qty')?></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga" value="<?=$key['harga_brg']?>"></td>
				<td style="color: red;" colspan="3"><?=form_error('harga')?></td>
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

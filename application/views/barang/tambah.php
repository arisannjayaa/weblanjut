<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
</head>

<body>

    <h3>Tambah Barang</h3>
    <hr>
    <form action="<?=base_url('barang/add')?>" method="post">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis</td>
                <td>:</td>
                <td><input type="text" name="jenis"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>:</td>
                <td><textarea name="deskripsi" id="alamat"></textarea></td>
            </tr>
            <tr>
                <td>Qty</td>
                <td>:</td>
                <td><input type="text" name="qty"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <td><a href="<?=base_url('barang')?>"><button type="button">Kembali</button>
            </td></a>
            <td><button type="submit">Tambah</button></td>
        </table>
    </form>
    </div>
</body>

</html>
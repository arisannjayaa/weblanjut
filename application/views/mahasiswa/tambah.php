<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>

<body>

    <h3>Tambah Mahasiswa</h3>
    <hr>
    <form action="<?=base_url('mahasiswa/add')?>" method="post">
        <table border="collapse">
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select name="jurusan" id="jurusan" class="form-select ms-3">
                        <option value="">Pilih Jurusan</option>
                        <option value="1">Teknik Elektro</option>
                        <option value="2">Teknik Sipil</option>
                        <option value="3">Pariwisata</option>
                        <option value="4">Administrasi Niaga</option>
                        <option value="5">Akuntasi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tlp</td>
                <td>:</td>
                <td><input type="text" name="tlp"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" id="alamat"></textarea></td>
            </tr>
            <td><a href="<?=base_url('mahasiswa')?>"><button type="button">Kembali</button>
            </td></a>
            <td><button type="submit">Tambah</button></td>
        </table>
    </form>
    </div>
</body>

</html>
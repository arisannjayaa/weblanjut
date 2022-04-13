<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Mahasiswa</title>
</head>

<body>
    <h1>Update Mahasiswa</h1>
    <hr>
    <form action="<?=base_url('mahasiswa/edit')?>" method="post">
        <table>
            <?php foreach ($mahasiswa->result_array() as $key) {
            ?>
            <tr>
                <td>Id</td>
                <td>:</td>
                <td><input type="text" name="id" value="<?=$key['id_mhs']?>" readonly>
                </td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim" value="<?=$key['nim_mhs']?>">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?=$key['nama_mhs']?>">
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select name="jurusan" id="jurusan" class="form-select ms-3">
                        <option value="">Pilih Jurusan</option>
                        <option value="1" <?php if ($key['id_jurusan'] == 1) {echo 'selected';}?>>Teknik Elektro
                        </option>
                        <option value="2" <?php if ($key['id_jurusan'] == 2) {echo 'selected';}?>>Teknik Sipil
                        </option>
                        <option value="3" <?php if ($key['id_jurusan'] == 3) {echo 'selected';}?>>Pariwisata
                        </option>
                        <option value="4" <?php if ($key['id_jurusan'] == 4) {echo 'selected';}?>>Administrasi Niaga
                        </option>
                        <option value="5" <?php if ($key['id_jurusan'] == 5) {echo 'selected';}?>>Akuntasi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tlp</td>
                <td>:</td>
                <td><input type="text" name="tlp" value="<?=$key['tlp_mhs']?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" id="alamat" class="form-control ms-3"><?=$key['alamat_mhs']?></textarea>
                </td>
            </tr>
            <?php
                } ?>
            <td><a href="<?=base_url('mahasiswa')?>"><button type="button">Kembali</button>
            </td></a>
            <td><button type="submit">Update</button></td>
        </table>
    </form>
</body>

</html>
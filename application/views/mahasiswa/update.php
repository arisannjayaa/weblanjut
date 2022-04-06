<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container my-4">
        <h3>Update Mahasiswa</h3>
        <hr>
        <form action="<?=base_url('mahasiswa/ubah')?>" method="post">
            <table>
                <?php foreach ($mahasiswa->result_array() as $key) {
                ?>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type="text" class="form-control ms-3" name="nim" value="<?=$key['nim_mhs']?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" class="form-control ms-3" name="nama" value="<?=$key['nama_mhs']?>">
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
                    <td><input type="text" class="form-control ms-3" name="tlp" value="<?=$key['tlp_mhs']?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" id="alamat" class="form-control ms-3"><?=$key['alamat_mhs']?></textarea>
                    </td>
                </tr>
                <?php
                } ?>
                <td><a href="<?=base_url('mahasiswa')?>"><button type="button" class="btn btn-warning ">Kembali</button>
                </td></a>
                <td><button type="submit" class="btn btn-primary">Tambah</button></td>
            </table>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
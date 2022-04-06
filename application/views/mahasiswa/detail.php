<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container my-3">
        <a href="mahasiswa/tambah"><button class="btn btn-primary">Tambah Mahasiswa</button></a>
        <table class="table">
            <tr>
                <td>No</td>
                <td>NIM</td>
                <td>Nama Mahasiswa</td>
                <td>Jurusan</td>
                <td>Tlp</td>
                <td>Alamat</td>
                <td>Aksi</td>
            </tr>
            <?php
            $no = 1 ;
            foreach ($mahasiswa->result_array() as $key) {
            ?>
            <tr>
                <td><?=$no++?></td>
                <td><?=$key['nim_mhs']?></td>
                <td><?=$key['nama_mhs']?></td>
                <td><?=$key['nama_jurusan']?></td>
                <td><?=$key['tlp_mhs']?></td>
                <td><?=$key['alamat_mhs']?></td>
                <td>
                    <a href="<?=base_url('mahasiswa/ubah/'.$key['id_mhs'])?>"><button
                            class="btn btn-warning">Edit</button></a>
                    <a href="<?=base_url('mahasiswa/delete/'.$key['id_mhs'])?>"><button
                            class="btn btn-danger">Hapus</button></a>
                </td>
            </tr>
            <?php
                } 
            ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
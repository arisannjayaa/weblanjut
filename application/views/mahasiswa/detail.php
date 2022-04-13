<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Mahasiswa</title>

</head>

<body>
    <a href="mahasiswa/tambah">
        <h2>Tambah Mahasiswa</h2>
    </a>
    <table border="1">
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
                <a href=" <?=base_url('mahasiswa/ubah/'.$key['id_mhs'])?>"><button>Edit</button></a>
                <a href="<?=base_url('mahasiswa/delete/'.$key['id_mhs'])?>"><button>Hapus</button></a>
            </td>
        </tr>
        <?php
                } 
            ?>
    </table>
    </div>
</body>

</html>
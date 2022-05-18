<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Barang</title>
</head>

<body>
	<?php
	$session = $this->session->userdata();
	?>
	<h4>User : <?= $session['user'] ?></h4>
	<h2>Data Barang</h2>
	<a href="<?= base_url('komputer/tambah') ?>"><button>Tambah Barang</button></a>
	<a href="<?= base_url('komputer/logout') ?>"><button>Logout</button></a>
	<br>
	<br>
	<table border="2">
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
		$no = 1;
		foreach ($barang->result_array() as $key) {
		?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $key['nama_barang'] ?></td>
				<td><?= $key['jenis_barang'] ?></td>
				<td><?= $key['deskripsi_barang'] ?></td>
				<td><?= $key['qty_barang'] ?></td>
				<td><?= $key['harga_barang'] ?></td>
				<td>
					<a href=" <?= base_url('komputer/ubah/' . $key['id_barang']) ?>"><button>Edit</button></a>
					<a href="<?= base_url('komputer/delete/' . $key['id_barang']) ?>"><button>Hapus</button></a>
				</td>
			</tr>
		<?php
		}
		?>
	</table>
</body>

</html>

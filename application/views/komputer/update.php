<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update Barang</title>
</head>

<body>
	<h1>Update Data Barang</h1>
	<form action="<?= base_url('komputer/edit') ?>" method="post">
		<table>
			<?php foreach ($barang->result_array() as $key) { ?>
				<tr>
					<td>Id</td>
					<td>:</td>
					<td><input type="text" value="<?= $key['id_barang'] ?>" name="id" readonly></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" value="<?= $key['nama_barang'] ?>" name="nama"></td>
					<td colspan="3"><?= form_error('nama') ?></td>
				</tr>
				<tr>
					<td>Jenis</td>
					<td>:</td>
					<td><input type="text" value="<?= $key['jenis_barang'] ?>" name="jenis"></td>
					<td colspan="3"><?= form_error('jenis') ?></td>
				</tr>
				<tr>
					<td>Deskripsi</td>
					<td>:</td>
					<td><input type="text" value="<?= $key['deskripsi_barang'] ?>" name="deskripsi"></td>
					<td colspan="3"><?= form_error('deskripsi') ?></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td>:</td>
					<td><input type="text" value="<?= $key['qty_barang'] ?>" name="qty"></td>
					<td colspan="3"><?= form_error('qty') ?></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td>:</td>
					<td><input type="text" value="<?= $key['harga_barang'] ?>" name="harga"></td>
					<td colspan="3"><?= form_error('harga') ?></td>
				</tr>
				<tr>
					<td><button type="submit">Update</button></td>
				</tr>
			<?php
			}
			?>
		</table>
	</form>
</body>

</html>

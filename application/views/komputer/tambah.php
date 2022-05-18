<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Barang</title>
</head>

<body>
	<h1>Tambah Data Barang</h1>
	<form action="<?= base_url('komputer/add') ?>" method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
				<td colspan="3"><?= form_error('nama') ?></td>
			</tr>
			<tr>
				<td>Jenis</td>
				<td>:</td>
				<td><input type="text" name="jenis"></td>
				<td colspan="3"><?= form_error('jenis') ?></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td><input type="text" name="deskripsi"></td>
				<td colspan="3"><?= form_error('deskripsi') ?></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td>:</td>
				<td><input type="text" name="qty"></td>
				<td colspan="3"><?= form_error('qty') ?></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" name="harga"></td>
				<td colspan="3"><?= form_error('harga') ?></td>
			</tr>
			<tr>
				<td><button type="submit">Tambah</button></td>
			</tr>
		</table>
	</form>
</body>

</html>

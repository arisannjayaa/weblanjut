<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Barang</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
	<div class="container mt-5">
		<h4>Detail Barang</h4>
		<hr>
		<div class="mb-3">
			<a class="btn btn-primary" href="<?= base_url('belanja/tambah') ?>">Tambah Barang</a>
			<a class="btn btn-primary" href="<?= base_url('keranjang/') ?>">Keranjang Belanja (<?= count($this->cart->contents()) ?>)</a>
		</div>
		<table class="table">
			<tr>
				<td>No</td>
				<td>Nama Barang</td>
				<td>Jenis Barang</td>
				<td>Deskrisi</td>
				<td>Qty</td>
				<td>Harga</td>
				<td>Action</td>
			</tr>
			<?php
			$no = 1;
			foreach ($barang->result_array() as $key) {
			?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $key['nama_brg'] ?></td>
					<td><?= $key['jenis_brg'] ?></td>
					<td><?= $key['deskripsi_brg'] ?></td>
					<td><?= $key['qty_brg'] ?></td>
					<td><?= $key['harga_brg'] ?></td>
					<td>
						<a class="bg-warning py-1 px-2 rounded-2" href="<?= base_url('belanja/edit/' . $key['id_brg']) ?>"><i class="bi bi-pen text-white"></i></a>
						<a class="bg-danger py-1 px-2 rounded-2" href="<?= base_url('belanja/delete/' . $key['id_brg']) ?>"><i class="bi bi-trash text-white"></i></a>
						<a class="bg-success py-1 px-2 rounded-2" href="<?= base_url('keranjang/add/' . $key['id_brg']) ?>"><i class="bi bi-cart text-white"></i></a>
					</td>
				</tr>
			<?php
			}
			?>
		</table>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
	</script>
</body>

</html>

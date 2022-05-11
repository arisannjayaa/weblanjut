<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Keranjang Belanja</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
	<form action="" method="post">
		<div class="container mt-5">
			<h4>Keranjang Belanja</h4>
			<hr>
			<a class="btn btn-danger" href="<?= base_url('keranjang/destroyall') ?>">Hapus Semua</a>
			<a class="btn btn-primary" href="<?= base_url('keranjang/konfirmasi') ?>">Checkout</a>
			<table class="table">
				<tr>
					<td>Id</td>
					<td>Nama Barang</td>
					<td>Deskripsi</td>
					<td>Qty</td>
					<td>Harga</td>
				</tr>
				<?php
				foreach ($this->cart->contents() as $key) {
				?>
					<tr>
						<td><?= $key['id'] ?></td>
						<td><?= $key['name'] ?></td>
						<td><?= $key['options']['description'] ?></td>
						<td><?= $key['qty'] ?></td>
						<td><?= $key['price'] ?></td>
					</tr>
				<?php
				}
				?>
				<tr>
					<td colspan="5" class="text-center fw-bold">Total Rp.<?= $this->cart->total() ?>,-</td>
				</tr>
			</table>
		</div>
	</form>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
	</script>
</body>

</html>

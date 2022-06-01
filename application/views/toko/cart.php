<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Keranjang</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<table class="table table-hover">
					<tr>
						<td>No</td>
						<td>Nama Barang</td>
						<td>Deskripsi</td>
						<td>Qty</td>
						<td>Harga</td>
					</tr>
					<?php
					$no = 1;
					$totalqty = 0;
					foreach ($this->cart->contents() as $key) {
						$totalqty += $key['qty'];
					?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $key['name'] ?></td>
							<td><?= $key['options']['description'] ?></td>
							<td><?= $key['qty'] ?></td>
							<td><?= "Rp. " . $key['price'] ?></td>
						</tr>
					<?php
					}
					?>
					<tr class="bg-success text-white rounded-3">
						<td colspan="3">Total</td>
						<td><?= $totalqty ?></td>
						<td class="fw-normal"><?= "Rp. " . $this->cart->total() ?></td>
					</tr>
				</table>
			</div>
			<div class="modal-footer">
				<a href="<?= base_url('toko/deleteallcart') ?>"><button type="button" class="btn btn-danger">Hapus Semua</button></a>
				<a href="<?= base_url('toko/checkout') ?>"><button type="button" class="btn btn-primary">Checkout</button></a>
			</div>
		</div>
	</div>
</div>
<div class="d-flex align-items-center mb-2">
	<h4 class="fw-normal fs-4 me-3">Keranjang</h4>
	<button type="button" class="btn btn-primary position-relative" data-bs-toggle="modal" data-bs-target="#exampleModal">
		<i class="bi bi-cart"></i>
		<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
			<?= $totalqty ?>
			<span class="visually-hidden">unread messages</span>
		</span>
	</button>
</div>
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-body">
				<table class="table table-hover table-responsive">
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
					foreach ($barang as $key) { ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $key['nama_brg'] ?></td>
							<td><?= $key['jenis_brg'] ?></td>
							<td><?= $key['deskripsi_brg'] ?></td>
							<td><?= $key['qty_brg'] ?></td>
							<td><?= $key['harga_brg'] ?></td>
							<td>
								<a href="<?= base_url('toko/addcart/') . $key['id_brg'] ?>" class="btn btn-success"><i class="bi bi-cart"></i></a>
							</td>
						</tr>
					<?php
					}
					?>
				</table>
			</div>
		</div>
	</div>
</div>

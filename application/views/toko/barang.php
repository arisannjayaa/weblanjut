<div class="d-flex align-items-center mb-2">
	<h4 class="fw-normal fs-4 me-3">Data Barang</h4>
	<a href="<?= base_url('toko/add') ?>" class="btn btn-primary">
		<i class="bi bi-plus"></i>
		<span>Tambah Barang</span>
	</a>
</div>
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-hover">
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
									<a href=" <?= base_url('toko/remove/') . $key['id_brg'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
									<a href="<?= base_url('toko/edit/') . $key['id_brg'] ?>" class="btn btn-warning text-white"><i class="bi bi-pen"></i></a>
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
</div>

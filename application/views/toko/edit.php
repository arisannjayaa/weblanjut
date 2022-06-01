<div class="row">
	<h4 class="fw-normal">Edit Barang</h4>
	<div class="col">
		<div class="card">
			<div class="card-body">
				<?php
				foreach ($barang as $key) { ?>
					<form action="<?= base_url('toko/update/' . $key['id_brg']) ?>" method="post">
						<input type="text" class="form-control" value="<?= $key['id_brg'] ?>" name="id" hidden>
						<div class="row mb-3">
							<label class="col-2 col-form-label">Nama Barang</label>
							<div class="col-4">
								<input type="text" class="form-control" value="<?= $key['nama_brg'] ?>" name="nama">
							</div>
							<div class="col">
								<span class="text-danger"><?= form_error('nama') ?></span>
							</div>
						</div>
						<div class="row mb-3">
							<label class="col-2 col-form-label">Jenis</label>
							<div class="col-4">
								<input type="text" class="form-control" value="<?= $key['jenis_brg'] ?>" name="jenis">
							</div>
							<div class="col">
								<span class="text-danger"><?= form_error('jenis') ?></span>
							</div>
						</div>
						<div class="row mb-3">
							<label class="col-2 col-form-label">Deskripsi</label>
							<div class="col-4">
								<input type="text" class="form-control" value="<?= $key['deskripsi_brg'] ?>" name="deskripsi">
							</div>
							<div class="col">
								<span class="text-danger"><?= form_error('deskripsi') ?></span>
							</div>
						</div>
						<div class="row mb-3">
							<label class="col-2 col-form-label">Qty</label>
							<div class="col-4">
								<input type="number" class="form-control" value="<?= $key['qty_brg'] ?>" name="qty">
							</div>
							<div class="col">
								<span class="text-danger"><?= form_error('qty') ?></span>
							</div>
						</div>
						<div class="row mb-3">
							<label class="col-2 col-form-label">Harga</label>
							<div class="col-4">
								<input type="text" class="form-control" value="<?= $key['harga_brg'] ?>" name="harga">
							</div>
							<div class="col">
								<span class="text-danger"><?= form_error('harga') ?></span>
							</div>
						</div>
						<div class="mb-3">
							<button type="reset" class="btn btn-warning">Reset</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					<?php
				}
					?>
					</form>
			</div>
		</div>

	</div>
</div>

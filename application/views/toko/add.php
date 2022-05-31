<div class="row">
	<h4 class="fw-normal">Tambah Barang</h4>
	<div class="col">
		<div class="card">
			<div class="card-body">
				<form action="<?= base_url('toko/insert') ?>" method="post">
					<div class="row mb-3">
						<label class="col-2 col-form-label">Nama Barang</label>
						<div class="col-4">
							<input type="text" class="form-control" name="nama">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-2 col-form-label">Jenis</label>
						<div class="col-4">
							<input type="text" class="form-control" name="jenis">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-2 col-form-label">Deskripsi</label>
						<div class="col-4">
							<input type="text" class="form-control" name="deskripsi">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-2 col-form-label">Qty</label>
						<div class="col-4">
							<input type="number" class="form-control" name="qty">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-2 col-form-label">Harga</label>
						<div class="col-4">
							<input type="text" class="form-control" name="harga">
						</div>
					</div>
					<div class="mb-3">
						<button type="reset" class="btn btn-warning">Reset</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>

	</div>
</div>

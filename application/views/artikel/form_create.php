<!--begin::Entry-->
		<div class="d-flex flex-column-fluid">
			<!--begin::Container-->
			<div class="container">
				<div class="card card-custom">
					<form class="form" method="POST" action="<?= site_url('artikel/proses_create') ?>" enctype="multipart/form-data">
						<div class="card-body">
							<h4 class="mb-10 font-weight-bold text-dark"><?= $judul ?></h4>

				            <div class="row mb-5">
								<div class="col-6 pt-4">
						            <!-- <h4 class="font-weight-bold text-dark">&nbsp</h4> -->
									<div class="form-group">
										<label>Judul</label>
										<input type="text" class="form-control form-control-sm" name="judul" placeholder="" required="" />
									</div>

									<div class="form-group">
										<label>Artikel</label>
										<textarea class="form-control form-control-sm" name="konten" placeholder="" required="" ></textarea>
									</div>
									<div class="form-group">
										<label>Penulis</label>
										<input type="text" class="form-control form-control-sm" name="penulis" placeholder="" required="" />
									</div>
									<div class="form-group">
										<label>Upload Images</label>
										<br>
										<input type="file" name="gambar" placeholder="" />
									</div>
								</div>
							</div>

						</div>
						<div class="card-footer">
							<div class="row">
								<div class="col-lg-6">
								</div>
								<div class="col-lg-6 text-right">
									<a href="<?= site_url('artikel/index') ?>" class="btn btn-secondary">Cancel</a>
									<button type="submit" class="btn btn-primary mr-2">Simpan</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!--end::Container-->
		</div>
		<!--end::Entry-->
	</div>
<!--end::Content-->


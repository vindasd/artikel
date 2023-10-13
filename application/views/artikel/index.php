
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
	<!--begin::Container-->
	<div class="container">
		<!-- ALERT -->
		<?php if($this->session->flashdata('notification')){ ?>
				<?php if($this->session->flashdata('status_action') == 0){ ?>
					<div class="alert alert-custom alert-light-danger fade show mb-5" role="alert">
						<div class="alert-icon"><i class="flaticon-warning"></i></div>
						<div class="alert-text"><?php echo $this->session->flashdata('notification')?></div>
						<div class="alert-close">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="ki ki-close"></i></span>
							</button>
						</div>
					</div>
				<?php }else{ ?>
					<div class="alert alert-custom alert-light-success fade show mb-5" role="alert">
						<div class="alert-icon"><i class="flaticon2-checkmark"></i></div>
						<div class="alert-text"><?php echo $this->session->flashdata('notification')?></div>
						<div class="alert-close">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="ki ki-close"></i></span>
							</button>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
		<!-- END ALERT -->
		
		<h1 class="text-white">Artikel Baru</h1>
		<!--begin::Card-->
		<div class="card card-custom mb-10">
			<div class="card-header flex-wrap py-5">
				<div class="card-title">
				</div>
				<div class="card-toolbar">
					<!--begin::Button-->
					<a class="btn btn-primary btn-sm" href="<?= site_url('artikel/form_create') ?>"><i class="flaticon2-plus"></i>New Artikel</a>
					<!--end::Button-->
				</div>
			</div>
			<div class="card-body">
				<div class="row justify-content text-justify my-0">
					<?php foreach($list_artikel as $key => $value){ ?>
						<!-- begin: Pricing-->
						<div class="col-md-4 col-xxl-3 bg-white rounded-right shadow-sm">
							<div class="text-right">
								<a class="btn btn-warning btn-sm" href="<?= site_url('artikel/form_edit/'.$value->id_artikel) ?>"><i class="flaticon-edit-1"></i></a>
							</div>
							<div class="pt-5 pb-25 pb-md-10 px-4">
								<h4 class="mb-15"><?= $value->judul ?></h4>
								<span class="px-7 py-3 d-inline-flex flex-center rounded-lg mb-15 bg-primary-o-10">
									<img src="<?= base_url().'gambar/'.$value->gambar;?>" width="200px">
								</span>
								<br />
								<p class="mb-10 d-flex flex-column text-dark-50">
									<span><?= nl2br($value->konten) ?> <u><a href="#">Read More</a></u></span>
								</p>
								<p class="text-right"><i class="flaticon-speech-bubble-1"></i> 21 &nbsp&nbsp <i class="flaticon-black"></i> 3</p>
							</div>
						</div>
						<!-- end: Pricing-->
					<?php } ?>
				</div>
			</div>
		</div>
		<!--end::Card-->
	</div>
	<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>
<!--end::Content-->



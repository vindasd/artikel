
</head>
<body id="kt_body" style="background-image: url(<?php echo base_url();?>theme/dist/assets/media/bg/bg-11.jpg)" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
<!-- <body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading"> -->
	<!--begin::Main-->
		<!--begin::Header Mobile-->
			<div id="kt_header_mobile" class="header-mobile">
				<!--begin::Logo-->
				<a href="#">
					<img alt="Logo" src="<?php echo base_url();?>theme/dist/assets/media/logos/logo-letter-1.png" class="logo-default max-h-30px" />
				</a>
				<!--end::Logo-->
				<!--begin::Toolbar-->
				<div class="d-flex align-items-center">
					<button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
						<span></span>
					</button>
					<button class="btn btn-icon btn-hover-transparent-white p-0 ml-3" id="kt_header_mobile_topbar_toggle">
						<span class="svg-icon svg-icon-xl">
							<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
									<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
					</button>
				</div>
				<!--end::Toolbar-->
			</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
				<div class="d-flex flex-row flex-column-fluid page">
					<!--begin::Wrapper-->
						<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
							<!--begin::Header-->
								<!-- <div id="kt_header" class="header header-fixed" style="background-color: #f9943f;"> -->
								<div id="kt_header" class="header header-fixed">
									<!--begin::Container-->
									<div class="container d-flex align-items-stretch justify-content-between">
										<!--begin::Left-->
										<div class="d-flex align-items-stretch mr-3">
											<!--begin::Header Logo pppppppppppppppppppppppppppppppp-->
												<div class="header-logo">
													<a href="#">
														<img alt="Logo" src="<?php echo base_url();?>theme/dist/assets/media/logos/logo-letter-9.png" class="logo-default max-h-40px" />
														<img alt="Logo" src="<?php echo base_url();?>theme/dist/assets/media/logos/logo-letter-1.png" class="logo-sticky max-h-40px" />
													</a>
												</div>
											<!--end::Header Logo pppppppppppppppppppppppppppppppppppp-->
											<!--begin::Header Menu Wrapper-->
											<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
												<!--begin::Header Menu-->
												<div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">
													<!--begin::Header Nav pppppppppppppppppppppppppppppppppp-->
													<?php 
														$head_aktif = 'menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel';
														$head_off = 'menu-item menu-item-submenu menu-item-rel';
														$sub_aktif = 'menu-item menu-item-active';
														$sub_off = 'menu-item';
													?>
														<ul class="menu-nav">
															<?php 
																if($menu_code == 'home'){ 
																	$home_style = $head_aktif;
																}else{ 
																	$home_style = $head_off;
																} 
															?>
															<li class="<?= $home_style ?>">
																<a href="<?= site_url('artikel/index') ?>" class="menu-link"><span class="menu-text">Home</span></a>
															</li>



														</ul>
													<!--end::Header Nav pppppppppppppppppppppppppppppppppp-->
												</div>
												<!--end::Header Menu-->
											</div>
											<!--end::Header Menu Wrapper-->
										</div>
										<!--end::Left-->
										<!--begin::Topbar pppppppppppppppppppppppppppp-->
											<div class="topbar">
												<!--begin::Search-->
												<div class="dropdown">
													<!--begin::Toggle-->
													<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
														<div class="btn btn-icon btn-hover-transparent-white btn-lg btn-dropdown mr-1">
															<span class="svg-icon svg-icon-xl">
																<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
														</div>
													</div>
													<!--end::Toggle-->
													<!--begin::Dropdown-->
													<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
														<div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
															<!--begin:Form-->
															<form method="get" class="quick-search-form">
																<div class="input-group">
																	<div class="input-group-prepend">
																		<span class="input-group-text">
																			<span class="svg-icon svg-icon-lg">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																						<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																	</div>
																	<input type="text" class="form-control" placeholder="Search..." />
																	<div class="input-group-append">
																		<span class="input-group-text">
																			<i class="quick-search-close ki ki-close icon-sm text-muted"></i>
																		</span>
																	</div>
																</div>
															</form>
															<!--end::Form-->
															<!--begin::Scroll-->
															<div class="quick-search-wrapper scroll" data-scroll="true" data-height="325" data-mobile-height="200"></div>
															<!--end::Scroll-->
														</div>
													</div>
													<!--end::Dropdown-->
												</div>
												<!--end::Search-->
												<!--begin::FAQ-->
												<div class="dropdown">
													<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
														<a href="#">
															<span class="text-white opacity-70 font-weight-bold font-size-base d-none d-md-inline mr-1"><i class="flaticon-questions-circular-button" style="color: white;"></i> FAQ 1</span>
														</a>
													</div>
												</div>
												<!--end::FAQ-->
												<!--begin::User-->
												<div class="dropdown">
													<!--begin::Toggle-->
													<div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
														<div class="btn btn-icon btn-hover-transparent-white d-flex align-items-center btn-lg px-md-2 w-md-auto">
															<span class="text-white opacity-70 font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
															<span class="text-white opacity-90 font-weight-bolder font-size-base d-none d-md-inline mr-4">User</span>
															<span class="symbol symbol-35 symbol-circle">
																<!-- <span class="symbol-label text-white font-size-h5 font-weight-bold bg-white-o-30"><i class="flaticon2-down"></i></span> -->
																<img alt="Pic" src="<?php echo base_url();?>theme/dist/assets/media/users/default.jpg"/>
															</span>
														</div>
													</div>
													<!--end::Toggle-->
													<!--begin::Dropdown-->
													<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
														<!--begin::Header-->
														<div class="d-flex align-items-center p-8 rounded-top">
															<!--begin::Symbol-->
															<div class="symbol symbol-md bg-light-primary mr-3 flex-shrink-0">
																<img src="<?php echo base_url();?>theme/dist/assets/media/users/default.jpg" alt="" />
															</div>
															<!--end::Symbol-->
															<!--begin::Text-->
															<div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5">User</div>
															<!-- <span class="label label-light-success label-lg font-weight-bold label-inline">3 messages</span> -->
															<!--end::Text-->
														</div>
														<div class="separator separator-solid"></div>
														<!--end::Header-->
														<!--begin::Nav-->
														<div class="navi navi-spacer-x-0 pt-5">
															<!--begin::Item-->
															<!-- <a href="#" class="navi-item px-8">
																<div class="navi-link">
																	<div class="navi-text">
																		<div class="font-weight-bold">My Profile</div>
																		<div class="text-muted">Account settings and more
																		<span class="label label-light-danger label-inline font-weight-bold">update</span></div>
																	</div>
																</div>
															</a> -->
															<!--end::Item-->
															<!--begin::Item-->
																<div class="navi-item px-8">
																</div>
															<!--end::Item-->
															<!--begin::Footer-->
															<div class="navi-separator mt-3"></div>
															<div class="navi-footer px-8 py-5">
															</div>
															<!--end::Footer-->
														</div>
														<!--end::Nav-->
													</div>
													<!--end::Dropdown-->
												</div>
												<!--end::User-->
											</div>
										<!--end::Topbar pppppppppppppppppppppppppppp-->
									</div>
									<!--end::Container-->
								</div>
							<!--end::Header-->

							<!--begin::Content-->
								<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
									<!--begin::Subheader-->
										<div class="subheader min-h-lg-5px pt-2 pb-3 subheader-transparent" id="kt_subheader">
											<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
												<!--begin::Details-->
												<div class="d-flex align-items-center flex-wrap mr-2">
													<!--begin::Heading-->
													<div class="d-flex flex-column">
														<!--begin::Title-->
														<!-- <h2 class="text-white font-weight-bold my-2 mr-5"><?= $judul ?></h2> -->
														<!--end::Title-->
														<!--begin::Breadcrumb-->
														<div class="d-flex align-items-center font-weight-bold my-2">
															<!--begin::Item-->
															<!-- <a href="#" class="opacity-75 hover-opacity-100">
																<i class="flaticon2-shelter text-white icon-1x"></i>
															</a> -->
															<!--end::Item-->
															<!--begin::Item-->
															<!-- <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
															<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Pages</a> -->
															<!--end::Item-->
															<!--begin::Item-->
															<!-- <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
															<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Wizard 2</a> -->
															<!--end::Item-->
														</div>
														<!--end::Breadcrumb-->
													</div>
													<!--end::Heading-->
												</div>
												<!--end::Details-->
											</div>
										</div>
									<!--end::Subheader-->

<!DOCTYPE html>
<html lang="en">
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Painel | Secretaria Municipal de Saúde de Pio IX</title>
		<meta name="description" content="Painel administrativo">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="<?php echo $this->request->webroot; ?>assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $this->request->webroot; ?>assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $this->request->webroot; ?>assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $this->request->webroot; ?>assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $this->request->webroot; ?>assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $this->request->webroot; ?>assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $this->request->webroot; ?>assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $this->request->webroot; ?>assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $this->request->webroot; ?>assets/vendors/custom/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $this->request->webroot; ?>assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $this->request->webroot; ?>assets/demo/default/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $this->request->webroot; ?>assets/demo/default/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $this->request->webroot; ?>assets/demo/default/skins/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $this->request->webroot; ?>assets/demo/default/skins/aside/dark.css" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="<?php echo $this->request->webroot; ?>assets/media/logos/favicon.ico" />
	</head>
	<body class="kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="index.html">
					<img alt="Logo" src="<?php echo $this->request->webroot; ?>assets/media/logos/logo-light.png" />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
			</div>
		</div>

		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				<!-- begin:: Aside -->
				<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
				<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">


					<!-- end:: Aside -->

					<!-- begin:: Aside Menu -->
					<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
						<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
							<ul class="kt-menu__nav ">
								<li class="kt-menu__item " aria-haspopup="true"><a href="index.html" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-home"></i><span class="kt-menu__link-text">Dashboard</span></a></li>
								<li class="kt-menu__section ">
									<h4 class="kt-menu__section-text">Almoxarifado</h4>
									<i class="kt-menu__section-icon flaticon-more-v2"></i>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="<?php echo $this->request->webroot; ?>products/" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-layers"></i><span class="kt-menu__link-text">Produtos</span></a></li>
                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="<?php echo $this->request->webroot; ?>clients/" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-users"></i><span class="kt-menu__link-text">Clientes</span></a></li>
                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="<?php echo $this->request->webroot; ?>transactions/" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-users"></i><span class="kt-menu__link-text">Transações</span></a></li>
							</ul>
						</div>
					</div>

					<!-- end:: Aside Menu -->
				</div>

				<!-- end:: Aside -->
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

        					<!-- begin:: Header -->
        					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

        						<!-- begin:: Header Menu -->
        						<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
        						<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
        							<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">

        							</div>
        						</div>

        						<!-- end:: Header Menu -->

        						<!-- begin:: Header Topbar -->
        						<div class="kt-header__topbar">
        							<!--begin: User Bar -->
        							<div class="kt-header__topbar-item kt-header__topbar-item--user">
        								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
        									<div class="kt-header__topbar-user">
        										<span class="kt-header__topbar-welcome kt-hidden-mobile">Olá,</span>
        										<span class="kt-header__topbar-username kt-hidden-mobile"><?php echo $this->request->session()->read('Auth.User.username'); ?></span>
        										<img class="kt-hidden" alt="Pic" src="<?php echo $this->request->webroot; ?>assets/media/users/300_25.jpg">

        										<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
        										<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">
                              <?php echo mb_strtoupper($this->request->session()->read('Auth.User.username')[0]); ?>
                            </span>
        									</div>
        								</div>
        								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

        									<!--begin: Head -->
        									<div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(<?php echo $this->request->webroot; ?>assets/media/misc/bg-1.jpg)">
        										<div class="kt-user-card__avatar">
        											<img class="kt-hidden" alt="Pic" src="<?php echo $this->request->webroot; ?>assets/media/users/300_25.jpg">

        											<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
        											<span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">
																<?php echo mb_strtoupper($this->request->session()->read('Auth.User.username')[0]); ?>
															</span>
        										</div>
        										<div class="kt-user-card__name">
        											<?php echo $this->request->session()->read('Auth.User.username'); ?>
        										</div>
        									</div>

        									<!--end: Head -->



        									<!--end: Navigation -->
        								</div>
        							</div>

        							<!--end: User Bar -->
        						</div>

        						<!-- end:: Header Topbar -->
        					</div>

        					<!-- end:: Header -->
        					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

        						<!-- begin:: Subheader -->
        						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
        							<div class="kt-subheader__main">
        								<h3 class="kt-subheader__title">
        									<?php echo $this->fetch("title"); ?> </h3>
        								<span class="kt-subheader__separator kt-hidden"></span>
        								<div class="kt-subheader__breadcrumbs">
        									<a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
        									<span class="kt-subheader__breadcrumbs-separator"></span>
        									<a href="" class="kt-subheader__breadcrumbs-link">
        										<?php echo $this->request->params["controller"]; ?> </a>
        									<span class="kt-subheader__breadcrumbs-separator"></span>
        									<a href="" class="kt-subheader__breadcrumbs-link">
        										<?php echo $this->request->params["action"]; ?> </a>

        									<!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
        								</div>
        							</div>

        						</div>

        						<!-- end:: Subheader -->

        						<!-- begin:: Content -->
        						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
                      <?php echo $this->fetch("content"); ?>
        						</div>

        						<!-- end:: Content -->
        					</div>

        					<!-- begin:: Footer -->
        					<div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop">
        						<div class="kt-footer__copyright">
        							2019&nbsp;©&nbsp;<a href="https://github.com/patrickacioli" target="_blank" class="kt-link">Patrick Acioli</a>
        						</div>
        						<div class="kt-footer__menu">
        							<a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">Sobre</a>
        						</div>
        					</div>

        					<!-- end:: Footer -->
        				</div>
		</div>

		<!-- end:: Page -->


		<!-- end::Global Config -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="<?php echo $this->request->webroot; ?>assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="<?php echo $this->request->webroot; ?>assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="<?php echo $this->request->webroot; ?>assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
		<script src="<?php echo $this->request->webroot; ?>assets/vendors/custom/components/vendors/bootstrap-markdown/init.js" type="text/javascript"></script>
		<script src="<?php echo $this->request->webroot; ?>assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
		<script src="<?php echo $this->request->webroot; ?>assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
		<script src="<?php echo $this->request->webroot; ?>assets/app/custom/general/crud/datatables/basic/basic.js" type="text/javascript"></script>
		<script src="<?php echo $this->request->webroot; ?>assets/app/bundle/app.bundle.js" type="text/javascript"></script>
		<script src="<?php echo $this->request->webroot; ?>app.js" type="text/javascript"></script>
	</body>

	<!-- end::Body -->
</html>

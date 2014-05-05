<!DOCTYPE html>
<html lang="id" class="masagiapps">
	<head>
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="description" content="Sistem Informasi Manajemen Klinik &middot; SIM.Klinik &copy; YPPRK &middot; Exclusively developed for PT Chairan Dinnah">
		<meta name="author" content="Masagistudio &middot; Masagi Application">

		<title>SIM Klinik <?php print_r($namaklinik); ?></title>
		
		<link rel="shortcut icon" sizes="196x196" href="assets/images/appicon.png">
		<link rel="shortcut icon" sizes="128x128" href="assets/images/appicon128.png">

		<link rel="stylesheet" href="assets/css/style.default.css" type="text/css"/>
		<link rel="stylesheet" href="assets/css/masagistyle.css" type="text/css"/>
		
		<link rel="shortcut icon" href="assets/images/favicon.ico">
		<!--[if lt IE 9]>
			<script src="assets/js/plugins/html5shiv.js"></script>
		<![endif]-->
		
		<!--Start of Zopim Live Chat Script-->
		<script type="text/javascript">
			// window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
			// 	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
			// 	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
			// 	$.src='//v2.zopim.com/?23NdE6t7nOb9zVeSTnKJzYJqKOQVOhjX';z.t=+new Date;$.
			// type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
		</script>
		<!--End of Zopim Live Chat Script-->
		
	</head>
	
<body oncontextmenu="return true">
	<div class="topheader">
		<div class="left">
			<a href="<?php print_r($site_url); ?>"><h1 class="logo">SIM.<span>KLINIK</span></h1></a>
			<span class="slogan"><?php print_r($namaklinik); ?></span>
			<br clear="all"/>
		</div>
		<div class="right">
			<div class="notification" style="display: none;">
				<a class="count"><span>0</span></a>
			</div>
			<div class="userinfo">
				<img src="assets/images/thumbs/avatar.png" />
				<span>
					<?php
						foreach ($logInfo as $key => $value) {
							 print_r($value->nama_user);
						}
					?>
				</span>
			</div>
			<div class="userinfodrop">
				<div class="avatar">
					<a href="#"><img src="assets/images/thumbs/avatarbig.png" alt="" /></a>
				</div>
				<div class="userdata">
					<h4><?php foreach ($logInfo as $key => $value) { print_r($value->nama_user); }?></h4>
					<br/>
					<span class="email"><?php foreach ($logInfo as $key => $value){ print_r($value->role_nama); }?></span>
					<ul>
						<li><a href="pengaturan.php">Pengaturan</a></li>
						<li><a href="index.php?act=logout">Keluar</a></li>
					</ul>
				</div>
			</div>
		</div>
		<button class="stdbtn btn_orange" id="hideNav" style="top:10px;right:20px;position:absolute;z-index:999;width:30px;height:37px;padding:5px;" title="Sembunyikan Menu">-</button>
		<button class="stdbtn btn_orange hidden" id="showNav" style="top:10px;right:20px;position:absolute;z-index:999;width:30px;height:37px;padding:5px;" title="Tampilkan Menu">+</button>
	</div>
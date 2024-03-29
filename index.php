<?php

session_start();
include "include/koneksi.php";
require "admin/functions/koneksi.php";
$lowongan = new Lowongan();
if (isset($_SESSION['user'])) {
	echo "<script language='javascript'> window.location.href='user/index.php'</script>";
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Beasiswa Login User</title>
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/style.css" rel="stylesheet" media="screen">
	<link href="color/default.css" rel="stylesheet" media="screen">
	<script src="js/modernizr.custom.js"></script>
</head>

<body>
	<div class="menu-area">
		<div id="dl-menu" class="dl-menuwrapper">
			<button class="dl-trigger">Open Menu</button>
			<ul class="dl-menu">
				<li>
					<a href="#intro">Home</a>
				</li>
				<li><a href="#about">Profile</a></li>

				<li><a href="#galeri">Galeri</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</div><!-- /dl-menuwrapper -->
	</div>

	<!-- intro area -->
	<div id="intro">

		<div class="intro-text">
			<div class="container">
				<div class="row">


					<div class="col-md-12">

						<div class="brand">
							<img src='img/uui.png'>
							<h1><a href="index.html">Program Beasiswa<br></a></h1>

							<p><span>MI AL-HUSNA YPIHN CURUG</span></p>
							<?php
							if (isset($_SESSION['user'])) {
							?>
								<button type="button" class="btn btn-success btn-lg">My Profile</button>
							<?php
							} else {
							?>
								<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalRegister">Register</button>
								<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalLogin">Login</button>
							<?php
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>




	<!-- About -->
	<section id="about" class="home-section bg-white">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
						<h2>MI AL-HUSNA YPIHN Curug</h2>
						<p> Madrasah Ibtidaiyah Merupakan pendidikan formal setingkat SD yang didirikan oleh Yayasan Pendidikan Islam Haji Nean sejak Tahun 1954, dalam upaya meningkatan kecerdasan masyarakat yang berbasis agama islam</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
						<h2>Tujuan</h2>
						<p> Madrasah Ibtidaiyah Al-Husna YPIHN Curug berpedoman kurikulum dari kementerian agama yang dipadukan dengan kurikulum departemen pendidikan dan kebudayaan sehingga yang diharapkan dapat tercapai, tujuan pendidikan yang baik dalam IMTAQ dan IMTEK sehingga menjadi pelajar yang beriman, bertaqwa, nerakhlak mulia, dan berilmu pengetahuan yang luas serta bermanfaat</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
						<div class="section-heading">
							<h2>Kurikulum Agama Islam</h2>
							<p>Al-Qur'an Hadist </p>
							<p>Akidah Akhlak</p>
							<p>Sejarah Kebudayaan Islam</p>
							<p>Fiqih</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-2 col-md-8">
							<div class="section-heading">
								<h2>Kurikulum Pengetahuan Umum</h2>
								<p>Bahasa Indonesia</p>
								<p>PPKN</p>
								<p>IPA</p>
								<p>IPS</p>
								<p>Matematika</p>
								<p>Bahasa Inggris</p>
								<p>Seni Budaya dan Prakarya</p>
								<p>Pendidikan Jasmani</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-offset-2 col-md-8">
								<div class="section-heading">
									<h2>Kurikulum Muatan Lokal (Mulok)</h2>
									<p>Praktek Ibadah</p>
									<p>Al-Qur'an, Tajwid, Juzama dan Hafalan</p>
									<p>Doa-doa harian dan Menulis Arab</p>
								</div>
							</div>
						</div>
					</div>

	</section>





	<!-- Works -->
	<section id="galeri" class="home-section bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
						<h2>Galeri Kegiatan MI AL-HUSNA YPIHN CURUG</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-2 col-md-8">

					<ul class="lb-album">
						<li>
							<a href="#image-1">
								<img src="img/works/thumbs/1.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-1">
								<a href="#page" class="lb-close">X</a>
								<img src="img/works/1.jpg" alt="" />
								<div>
									<h3>Galeri</h3>
									<p>Galeri kegiatan </p>
								</div>

							</div>
						</li>
						<li>
							<a href="#image-2">
								<img src="img/works/thumbs/2.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-2">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/works/2.jpg" alt="" />
								<div>
									<h3>Galeri </h3>
									<p>Galeri kegiatan </p>
								</div>

							</div>
						</li>
						<li>
							<a href="#image-3">
								<img src="img/works/thumbs/3.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-3">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/works/3.jpg" alt="" />
								<div>
									<h3>Galeri </h3>
									<p>Galeri kegiatan </p>
								</div>

							</div>
						</li>
						<li>
							<a href="#image-4">
								<img src="img/works/thumbs/4.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-4">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/works/4.jpg" alt="" />
								<div>
									<h3>Galeri </h3>
									<p>Galeri kegiatan </p>
								</div>

							</div>
						</li>

						<li>
							<a href="#image-5">
								<img src="img/works/thumbs/5.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-5">
								<a href="#page" class="lb-close">X</a>
								<img src="img/works/5.jpg" alt="" />
								<div>
									<h3>Galeri </h3>
									<p>Galeri kegiatan </p>
								</div>

							</div>
						</li>
						<li>
							<a href="#image-6">
								<img src="img/works/thumbs/6.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-6">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/works/6.jpg" alt="" />
								<div>
									<h3>Galeri </h3>
									<p>Galeri kegiatan </p>
								</div>

							</div>
						</li>
						<li>
							<a href="#image-7">
								<img src="img/works/thumbs/7.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-7">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/works/7.jpg" alt="" />
								<div>
									<h3>Galeri </h3>
									<p>Galeri kegiatan </p>
								</div>

							</div>
						</li>
						<li>
							<a href="#image-8">
								<img src="img/works/thumbs/8.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-8">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/works/8.jpg" alt="" />
								<div>
									<h3>Galeri </h3>
									<p>Galeri kegiatan </p>
								</div>

							</div>
						</li>
					</ul>

				</div>
			</div>
		</div>
	</section>

	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<div class="section-heading">
				<h2>ALAMAT</h2>
				<p>Jl. Raya STPI Curug Kp. Sukabakti Rt 002/ Kel. Sukabakti Kec.Curug Kab.Tangerang-Banten 15810</p>
			</div>
		</div>



		<!-- Contact -->
		<section id="contact" class="home-section bg-white">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
						<div class="section-heading">
							<h2>Hubungi Kami</h2>
							<p>Contact via form below and we will be get in touch with you within 24 hours. </p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-offset-1 col-md-10">

						<form class="form-horizontal" role="form">
							<div class="form-group">
								<div class="col-md-offset-2 col-md-8">
									<input type="text" class="form-control" id="inputName" placeholder="Name">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-offset-2 col-md-8">
									<input type="email" class="form-control" id="inputEmail" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-offset-2 col-md-8">
									<input type="text" class="form-control" id="inputSubject" placeholder="Subject">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-offset-2 col-md-8">
									<textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-offset-2 col-md-8">
									<button type="button" class="btn btn-theme btn-lg btn-block">Send message</button>
								</div>
							</div>
						</form>




					</div>
					<div class="row mar-top30 ">
						<div class="col-md-offset-2 col-md-8">
							<h5>We're on social networks</h5>
							<ul class="social-network">
								<li><a href="#">
										<span class="fa-stack fa-2x">
											<i class="fa fa-circle fa-stack-2x"></i>
											<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
										</span></a>
								</li>
								<li><a href="#">
										<span class="fa-stack fa-2x">
											<i class="fa fa-circle fa-stack-2x"></i>
											<i class="fa fa-dribbble fa-stack-1x fa-inverse"></i>
										</span></a>
								</li>
								<li><a href="#">
										<span class="fa-stack fa-2x">
											<i class="fa fa-circle fa-stack-2x"></i>
											<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
										</span></a>
								</li>
								<li><a href="#">
										<span class="fa-stack fa-2x">
											<i class="fa fa-circle fa-stack-2x"></i>
											<i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
										</span></a>
								</li>
							</ul>
						</div>
					</div>

				</div>
		</section>

		<div class="modal fade" id="myModalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title" id="myModalLabel">Login</h4>
					</div>
					<div class="modal-body">
						<form role="form" method="post" action="login_user.php">
							<div class="form-group">
								<input type="text" name="username" class="form-control input-lg" placeholder="Username" tabindex="1">
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control input-lg" placeholder="Password" tabindex="1">
							</div>

					</div>
					<div class="modal-footer">
						<input type="submit" class="btn btn-primary" value="Login">
					</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<div class="modal fade" id="myModalRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title" id="myModalLabel">Register</h4>
					</div>
					<div class="modal-body">
						<form role="form" method="post" action="register.php">
							<div class="form-group">
								<input type="text" name="nama_lengkap" class="form-control input-lg" placeholder="Nama Lengkap" tabindex="1">
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control input-lg" placeholder="Email" tabindex="1">
							</div>
							<div class="form-group">
								<input type="text" name="username" class="form-control input-lg" placeholder="Username" tabindex="1">
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control input-lg" placeholder="Password" tabindex="1">
							</div>
							<div class="form-group">
								<select name="kelas" class="form-control">
									<?php
									$data_kelas = $mysqli->query("SELECT * FROM kelas");
									foreach ($data_kelas as $kelas) :
									?>
										<option value="<?= $kelas['id'] ?>"><?= $kelas['kelas'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
					</div>
					<div class="modal-footer">
						<input type="submit" class="btn btn-primary" value="Register">
					</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<div class="modal fade" id="myModalSyarat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title" id="myModalLabel">Syarat Penerimaan</h4>
					</div>
					<div class="modal-body-syarat">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p>Copyright &copy;2014 Mamba company. All rights reserved. By <a href="http://bootstraptaste.com">Bootstrap Themes</a></p>
					</div>
					<!-- 
                    All links in the footer should remain intact. 
                    Licenseing information is available at: http://bootstraptaste.com/license/
                    You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Mamba
                -->
				</div>
			</div>
		</footer>

		<!-- js -->
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.smooth-scroll.min.js"></script>
		<script src="js/jquery.dlmenu.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/custom.js"></script>

		<script>
			$(function() {
				$(document).on('click', '.show_rincian', function(e) {
					e.preventDefault();
					$("#myModalSyarat").modal('show');
					$.post('syarat_lamaran.php', {
							id: $(this).attr('data-id')
						},
						function(html) {
							$(".modal-body-syarat").html(html);
						}
					);
				});
			});
		</script>

</html>
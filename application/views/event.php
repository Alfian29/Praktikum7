<!doctype html>
<html lang="en">

<head>
	<title>Event | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?=base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?=base_url();?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?=base_url();?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="<?=base_url();?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url();?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=base_url();?>ssets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<img src="<?=base_url()?>assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				<div class="navbar-btn navbar-btn-right">
					</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">5</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
								<li><a href="#" class="more">See all notifications</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?=base_url()?>assets/img/user.jpg" class="img-circle" alt="Avatar" height=24px; width=26px;> <span>Alfian</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="<?=base_url();?>index.php/user/Logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?=base_url();?>index.php/welcome/index" class=""><i class="lnr lnr-home"></i> <span>Home</span></a></li>
						<li><a href="<?=base_url();?>index.php/welcome/data_diri" class=""><i class="lnr lnr-user"></i> <span>Data Diri</span></a></li>
						<li><a href="<?=base_url();?>index.php/welcome/event" class=""><i class="fa fa-calendar"></i> <span>Event</span></a></li>
						<li><a href="<?=base_url();?>index.php/welcome/gallery" class=""><i class="lnr lnr-picture"></i> <span>Gallery</span></a></li>
						<li><a href="<?=base_url();?>index.php/welcome/contact" class=""><i class="lnr lnr-phone"></i> <span>Contact</span></a></li>
						<li><a href="<?=base_url();?>index.php/kategori" class=""><i class="lnr lnr-list"></i> <span>Kategori</span></a></li>
						<li><a href="<?=base_url();?>index.php/barang" class=""><i class="lnr lnr-cart"></i> <span>Barang</span></a></li>
						<li><a href="<?=base_url();?>index.php/Pelanggan/DaftarPelanggan" class=""><i class="lnr lnr-file-add"></i> <span>Form Daftar Pelanggan</span></a></li>
						<li><a href="<?=base_url();?>index.php/Pelanggan/DataPelanggan" class=""><i class="lnr lnr-users"></i> <span>Data Pelanggan</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Event</h3>
					<div class="panel panel-headline">
						<div class="panel-body">
								<p><b>Tour de Singkarak</b></p>
								<img style="width: 300px;" src="<?=base_url()?>assets/img/e1.jpg" alt=""><br>
								<p>Tour de Singkarak adalah kejuaraan balap sepeda resmi dari Persatuan Balap Sepeda Internasional (Union Cycliste International) yang diselenggarakan setiap tahun di Sumatera Barat. Kejuaraan yang pertama kali diselenggarakan pada tahun 2009 ini merupakan balapan jalan raya jarak jauh yang umumnya diadakan sekitar bulan April hingga Juni dan berlangsung selama seminggu. Kejuaraan ini telah menjalin kerjasama dengan Amaury Sport Organisation yang menjadi penyelenggara Tour de France di Perancis. Ranking Tour de Singkarak pada tingkat dunia dari jumlah penonton menduduki peringkat ke-5, setelah Tour de France, Giro d’Italia, Vuelta a Espana, dan Santos Tour Down Under.</p><br>
								
								<p><b>Internasional Angklung Festival</b></p>
								<img style="width: 300px;" src="<?=base_url()?>assets/img/e3.jpg" alt="">
								<p>Kabupaten Kuningan akan kembali menggelar International Angklung Festival Kuningan 2018 pada tanggal 17 Agustus 2018 bertepatan dengan hari Kemerdekaan Indonesia. Festival ini berkaitan dengan latar belakang sejarah tepatnya pada saat Perjanjian Linggar Jati. Pada waktu itu, Angklung yang merupakan alat musik tradisional bisa memainkan musik-musik internasional sehingga mampu membawa diplomasi.</p><br>
								
								<p><b>Gandrung Sewu</b></p>
								<img style="width: 300px;" src="<?=base_url()?>assets/img/e2.jpg" alt="">
								<p>Banyuwangi dikenal yang merupakan kota Gandrung & Gandrung identik dgn Banyuwangi.Tari Gandrung adalah kesenian original yg lahir & berkembang di Banyuwangi & mempunyai histori yg panjang. Gandrung yg berasal dari Bahasa Banyuwangi yg berarti gemar, tergila-gila, atau terpesona. Penduduk Banyuwangi sendiri menterjemahkan gandrung sbg bentuk terpesona atau kekaguman penduduk Blambangan yg agraris pada Dewi Sri yang merupakan Dewi Padi yg mengambil kesejahteraan bagi penduduk. Tari Gandrung dipersembahkan yang merupakan bentuk rasa syukur warga sehabis panen. Filosofi penghormatan kepada Dewi Sri inilah yg jadi spirit warga buat mengembangkan & melestarikan Tari Gandrung.</p><br>
								
								<p><b>Nusa Dua Fiesta</b></p>
								<img style="width: 300px;" src="<?=base_url()?>assets/img/e4.jpg" alt="">
								<p>Pesona Nusa Dua Fiesta merupakan annual event yang diadakan oleh PT Pengembangan Pariwisata Indonesia (Persero) / ITDC dimana event ini bertajuk Pesta Rakyat. Pesona Nusa Dua Fiesta telah terselenggara selama 22 Tahun. Berbagai macam artis nasional maupun international yang telah mengisi acara di Pesona Nusa Dua Fiesta, sebut saja, Isyana Sarasvati, GAC, Nidji, Andra and Thebackbone dan masih banyak lagi, selain itu berbagai macam komunitas dan pagelaran telah ditampilkan di Pesona Nusa Dua Fiesta ini, dari seni tari, body painting, parade ogoh ogoh, parade budaya, parade busana dan lain lain.</p><br>
								
								<p><b>Borobudur Marathon</b></p>
								<img style="width: 300px;" src="<?=base_url()?>assets/img/e5.jpg" alt="">
								<p>Berlari melewati desa tradisi dan hutan lokal, sambil mengelilingi Borobudur, menjadikan Borobudur Marathon memori tak terlupakan bagi para pesertanya. Jalur yang dipilih tidak linear tetapi sirkular dengan tujuan agar peserta mengikuti maraton yang menghormati raga dan memuliakan rasa. Festival ini digelar pada 18 November 2018 di Candi Borobudur, Magelang, Jawa Tengah. </p>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="<?=base_url();?>https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>

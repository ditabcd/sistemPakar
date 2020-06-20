<?php $this->load->view('home/includes/header'); ?>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">Camille</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href=<?php echo base_url('Home');?> class="nav-link">Home</a></li>
					<li class="nav-item"><a href=<?php echo base_url('DiagnosaUser');?> class="nav-link">Diagnosamu</a></li>
					<li class="nav-item"><a href=<?php echo base_url('Tips');?> class="nav-link">Tips</a></li>
					<li class="nav-item"><a href=<?php echo base_url('About');?> class="nav-link">About</a></li>
					<?php 
	        	if ($this->session->userdata('id_level')=='1'||$this->session->userdata('id_level')=='2') {?>
	        	<li class="nav-item"><span class="nav-link">
	        		<div class="dropdown">
	        		<a><span class="icon icon-person"> Hi,
	        			<?php 
	        			echo $this->session->userdata('username'); ?>
	        		</span></a>
	        		<div class="dropdown-menu">
	        			<a class="dropdown-item" href=<?php echo base_url('History/history/'.$this->session->id_user);?>>History</a>
	        			<a class="dropdown-item" href=<?php echo base_url('login/logout') ?>>Logout</a>
	        		</div>
	        	</span></li>
	        <?php } else{ ?>
	        	<li class="nav-item">
	        		<a href=<?php echo base_url("Login")?> class="nav-link">Login</a>
	        	</li>
	       	<?php } ?>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END nav -->

		<section id="home-section" class="hero" style="background-image: url(<?php echo base_url('assets/assets_user/images/bg.jpg')?>);" data-stellar-background-ratio="0.5">
			<div class="home-slider owl-carousel">
				<div class="slider-item js-fullheight">
					<div class="overlay"></div>
					<div class="container-fluid p-0">
						<div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
							<!-- <img class="one-third align-self-end order-md-last img-fluid" src="images/bg_1.png" alt=""> -->
							<div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
								<div class="text mt-5">
									<span class="subheading">Sistem Pakar</span>
									<h1 class="mb-4">Diagnosa Jenis Kulit Wajah</h1>
									<p class="mb-4">Sistem pakar diagnosa jenis kulit wajah digunakan untuk melakukan diagnosa awal jenis kulit wajah. Dapatkan juga tips untuk merawat kulit disini.</p>
									<p><a href="#" class="btn btn-primary py-3 px-4">Discover Now</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slider-item js-fullheight">
					<div class="overlay"></div>
					<div class="container-fluid p-0">
						<div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
							<img class="one-third align-self-end order-md-last img-fluid" src="images/bg_2.png" alt="">
							<div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
								<div class="text mt-5">
									<span class="subheading">Sistem Pakar</span>
									<h1 class="mb-4">Diagnosa Jenis Kulit Wajah</h1>
									<p class="mb-4">Sistem pakar diagnosa jenis kulit wajah digunakan untuk melakukan diagnosa awal jenis kulit wajah. Dapatkan juga tips untuk merawat kulit disini.</p>
									<p><a href="#" class="btn btn-primary py-3 px-4">Discover Now</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php $this->load->view('home/includes/footer'); ?>
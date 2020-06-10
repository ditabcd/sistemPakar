<?php $this->load->view('home/includes/header') ?>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Camille</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href=<?php echo base_url('Home');?> class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href=<?php echo base_url('DiagnosaUser');?> class="nav-link">Diagnosamu</a></li>
	        	<li class="nav-item active"><a href=<?php echo base_url('About');?> class="nav-link">About</a></li>
	        	<?php 
	        	if ($this->session->userdata('id_level')=='1'||$this->session->userdata('id_level')=='2') {?>
	        	<li class="nav-item"><span class="nav-link">
	        		<div class="dropdown">
	        		<a><span class="icon icon-person"> Hi,
	        			<?php 
	        			echo $this->session->userdata('username'); ?>
	        		</span></a>
	        		<div class="dropdown-menu">
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

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg-2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5">
            <h2 class="mb-0 bread">About Us</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url("Home") ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex">
						<div class="p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
							<a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
								<span class="icon-play"></span>
							</a>
						</div>
					</div>
					<div class="col-md-6 py-md-5 pb-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section mb-4 mt-md-5">
	          	<h1 class="big">About</h1>
	          	<span class="subheading">About Us</span>
	            <h2 class="mb-4">Sistem Pakar Diagnosa Awal Jenis Kulit Wajah</h2>
	          </div>
	          <div class="pb-md-5">
							<p>Aplikasi berbasis website ini dibuat untuk membantu Anda menemukan jenis kulit wajahnya sesuai dengan pakar menggunakan metode atau perhitungan algoritma berbasis teknologi. </p>
							<p>Data-data yang ada pada website ini didapat langsung dari salah satu Dokter Spesialis Kulit dan Kelamin di Kota Malang. Kami sangat berharap aplikasi ini dapat digunakan dengan baik dan membantu dalam diagnosa awal jenis kulit Anda. <i class="ion-ios-heart"></i></p>
						</div>
					</div>
				</div>
			</div>
		</section>
        </div>
    	</div>

<?php $this->load->view('home/includes/footer') ?>
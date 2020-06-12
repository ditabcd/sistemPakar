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
	        	<li class="nav-item"><a href=<?php echo base_url('Home');?> class="nav-link">Home</a></li>
	        	<li class="nav-item active"><a href=<?php echo base_url('DiagnosaUser');?> class="nav-link">Diagnosamu</a></li>
            <li class="nav-item"><a href=<?php echo base_url('TipsUser');?> class="nav-link">Tips</a></li>
	        	<li class="nav-item"><a href=<?php echo base_url('About');?> class="nav-link">About</a></li>
	        	<?php 
	        	if ($this->session->userdata('id_level')=='1'||$this->session->userdata('id_level')=='2') {?>
	        	<li class="nav-item"><span class="nav-link">
	        		<div class="dropdown">
	        		<a><span class="ion-ios-person"> Hi,
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
            <h2 class="mb-0 bread">Diagnosa</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url("Home") ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Diagnosamu <i class="ion-ios-arrow-forward"></i></span></p>
            <p class="breadcrumbs"><span class="mr-2">
            	Isi sesuai dengan yang Kamu rasakan bersama dengan kulit wajahmu. Temukan jenis kulit wajahmu disini! <i class="ion-ios-heart"></i>
            </span>
            </p>
          </div>
        </div>
      </div>
    </section>   
  <section>
  <div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <?php echo form_open("DiagnosaUser/insert_diagnosa") ?>
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>
                No
              </th>
              <th>
                Gejala
              </th>
              <th><center>Ya</center></th>
              <th><center>Terkadang</center></th>
              <th><center>Tidak</center></th>
            </thead>
            <tbody>
              <?php foreach ($gejala as $key => $value) : ?>
                <tr> 
                  <td>
                    <?php echo $key+1; ?>
                  </td>
                  <td>
                    <?php echo $value->gejala ?>
                  </td>
                  <td>
                  	<center>
                  		<input type="radio" name="diagnosa[<?php echo $value->id_gejala ?>]" class="" value="3">
                  	</center>
                  </td>
                  <td>
                  	<center>
                  		<input type="radio" name="diagnosa[<?php echo $value->id_gejala ?>]" class="" value="2">
                  	</center>
                  </td>
                  <td>
                  	<center>	
                  		<input type="radio" name="diagnosa[<?php echo $value->id_gejala ?>]" class="" value="1">
                  	</center>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <center>
        	<button type="submit" name="" class="button btn-lg btn-success">
        		Submit Here!
        	</button>
        </center>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</section>
</div>
</section>
    <?php $this->load->view('home/includes/footer'); ?>
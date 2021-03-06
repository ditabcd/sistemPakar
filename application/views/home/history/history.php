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
            <li class="nav-item"><a href=<?php echo base_url('Tips/index_user');?> class="nav-link">Tips</a></li>
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

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg-2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5">
            <h2 class="mb-0 bread">History</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url("Home") ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>History <i class="ion-ios-arrow-forward"></i></span></p>
            <p class="breadcrumbs"><span class="mr-2">
            	Lihat diagnosamu sebelumnya di halaman ini. <i class="ion-ios-heart"></i>
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
        <?php echo form_open("") ?>
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>
                No
              </th>
              <th>
                Tanggal
              </th>
              <th>
                Jenis Kulit
              </th>
            </thead>
            <tbody>
              <?php foreach ($history_data as $key => $value) : ?>
                <tr> 
                  <td>
                    <?php echo $key+1; ?>
                  </td>
                  <td>
                    <?php echo $value->tanggal ?>
                  </td>
                  <td>
                  <!-- <?php 
                    echo $this->db->where('id_jeniskulit', $key)->get(
                    'tb_jeniskulit')->row(0)->jenis_kulit; 
                    ?>  -->
                    <?php echo $value->jenis_kulit ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <center>
        
        </center>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</section>
</div>
</section>
    <?php $this->load->view('home/includes/footer'); ?>
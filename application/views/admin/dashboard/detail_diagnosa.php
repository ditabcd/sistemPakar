<?php $this->load->view('admin/includes/header') ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Detail Diagnosa</h4>
        <!-- <a href="<?php //echo base_url("Gejala/insert") ?>" class="btn btn-primary">Tambah</a> -->
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>
                Id Diagnosa
              </th>
              <th>
                Hasil
              </th>
            </thead>
            <tbody>
              <tr>
                <td>
                  <?php echo $id_diagnosa ?>
                </td>
                <td>
                <!-- <?php echo $hasil ?> -->
                  <?php echo $hasil . " [" .$this->db->where('id_jeniskulit', $hasil)->get(
                    'tb_jeniskulit')->row(0)->jenis_kulit ."]" ?>
                </td>
              </tr>
            </tbody>
          </table>
          <h4 class="card-title">Prior</h4>
          <table class="table">
            <thead class=" text-primary">
              <th>
                Jenis Kulit
              </th>
              <th>
                Hasil Prior
              </th>
            </thead>
            <tbody>
            <?php foreach ($prior as $key => $value) : ?>
              <tr>
                <td>
                  <?php echo $this->db->where('id_jeniskulit', $key)->get(
                    'tb_jeniskulit')->row(0)->jenis_kulit; ?>
                </td>
                <td>
                  <?php echo $value; ?>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
             </table>
             <!-- <?php 
              for($i=0 ; $i<count($data_likelihood); $i++){
                for($j=0 ; $j<count($data_likelihood[$keyJ[$i]]); $j++){
                    echo $data_likelihood[$keyJ[$i]][$j] . "<br>";
                }
              } ?> -->
          </table>
          <h4 class="card-title">Likelihood <?php echo $keyJ1; ?></h4>
          <table class="table">
            <thead class=" text-primary">
              <th>
                Gejala
              </th>
              <th>
                Hasil Likelihood
              </th>
            </thead>
            <tbody>
            <?php foreach ($data_likelihood1 as $key => $value) : ?>
              <tr>
                <td>
                  G00<?php echo $key+1 ?>
                </td>
                <td>
                  <?php echo $value; ?>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
          </table>
          <h4 class="card-title">Likelihood <?php echo $keyJ2; ?></h4>
          <table class="table">
            <thead class=" text-primary">
              <th>
                Gejala
              </th>
              <th>
                Hasil Likelihood
              </th>
            </thead>
            <tbody>
            <?php foreach ($data_likelihood2 as $key => $value) : ?>
              <tr>
                <td>
                  G00<?php echo $key+1 ?>
                </td>
                <td>
                  <?php echo $value; ?>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
          <h4 class="card-title">Likelihood <?php echo $keyJ3; ?></h4>
          <table class="table">
            <thead class=" text-primary">
              <th>
                Gejala
              </th>
              <th>
                Hasil Likelihood
              </th>
            </thead>
            <tbody>
            <?php foreach ($data_likelihood3 as $key => $value) : ?>
              <tr>
                <td>
                  G00<?php echo $key+1 ?>
                </td>
                <td>
                  <?php echo $value; ?>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
          <h4 class="card-title">Likelihood <?php echo $keyJ4; ?></h4>
          <table class="table">
            <thead class=" text-primary">
              <th>
                Gejala
              </th>
              <th>
                Hasil Likelihood
              </th>
            </thead>
            <tbody>
            <?php foreach ($data_likelihood4 as $key => $value) : ?>
              <tr>
                <td>
                  G00<?php echo $key+1 ?>
                </td>
                <td>
                  <?php echo $value; ?>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
          <h4 class="card-title">Likelihood <?php echo $keyJ5; ?></h4>
          <table class="table">
            <thead class=" text-primary">
              <th>
                Gejala
              </th>
              <th>
                Hasil Likelihood
              </th>
            </thead>
            <tbody>
            <?php foreach ($data_likelihood5 as $key => $value) : ?>
              <tr>
                <td>
                  G00<?php echo $key+1 ?>
                </td>
                <td>
                  <?php echo $value; ?>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
          <h4 class="card-title">Posterior</h4>
          <table class="table">
            <thead class=" text-primary">
              <th>
                Jenis Kulit
              </th>
              <th>
                Hasil Posterior
              </th>
            </thead>
            <tbody>
            <?php foreach ($posterior as $key => $value) : ?>
              <tr>
                <td>
                    <?php 
                    echo $this->db->where('id_jeniskulit', $key)->get(
                    'tb_jeniskulit')->row(0)->jenis_kulit; 
                    ?>
                </td>
                <td>
                  <?php echo $value; ?>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
          <h4 class="card-title">Hasil Kualifikasi Maksimum <?php echo $max; ?> [<?php echo $hasil; ?>]</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('admin/includes/footer') ?>
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
                  <?php echo $hasil?>
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
          <h4 class="card-title">Likelihood</h4>
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
            <?php foreach ($likelihood as $key => $value) : ?>
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
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('admin/includes/footer') ?>
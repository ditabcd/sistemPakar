<?php $this->load->view('admin/includes/header') ?>
  <div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Daftar Diagnosa</h4>
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
                Id Diagnosa
              </th>
              <th>
                Tanggal
              </th>
              <th>
                Id Pasien
              </th>
              <th>
                Hasil
              </th>
              <th class="text-right">
                Action
              </th>
            </thead>
            <tbody>
              <?php foreach ($dashboard_data as $key => $value) : ?>
                <tr>
                  <td>
                    <?php echo $key+1; ?>
                  </td>
                  <td>
                    <?php echo $value->id_diagnosa ?>
                  </td>
                  <td>
                    <?php echo $value->tanggal ?>
                  </td>
                  <td>
                    <?php echo $value->id_user ?>
                  </td>
                  <td>
                    <?php echo $value->fk_jeniskulit  ?>
                  </td>
                  <td class="text-center">
                    <a href="<?php echo base_url("DiagnosaDetail/nbc/".$value->id_diagnosa) ?>" class="btn btn-primary">Detail Diagnosa NBC</a>
                </td>
                <td class="text-center">
                    <a href="<?php echo base_url("Dashboard/delete/".$value->id_diagnosa) ?>" class="btn btn-danger">Hapus</a>
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
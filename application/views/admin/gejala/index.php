<?php $this->load->view('admin/includes/header') ?>
  <div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Daftar Gejala</h4>
        <a href="<?php echo base_url("Gejala/insert") ?>" class="btn btn-primary">Tambah</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>
                No
              </th>
              <th>
                Id Gejala
              </th>
              <th>
                Gejala
              </th>
              <th class="text-right">
                Action
              </th>
            </thead>
            <tbody>
              <?php foreach ($gejala_data as $key => $value) : ?>
                <tr>
                  <td>
                    <?php echo $key+1; ?>
                  </td>
                  <td>
                    <?php echo $value->id_gejala ?>
                  </td>
                  <td>
                    <?php echo $value->gejala ?>
                  </td>
                  <td class="text-right">
                    <a href="<?php echo base_url("Gejala/update/".$value->id_gejala) ?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo base_url("Gejala/delete/".$value->id_gejala) ?>" class="btn btn-danger">Hapus</a>
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
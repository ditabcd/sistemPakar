
<?php $this->load->view('admin/includes/header') ?>
  <div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Daftar Jenis Kulit</h4>
        <a href="<?php echo base_url("JenisKulit/insert") ?>" class="btn btn-primary">Tambah</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>
                Id Jenis Kulit
              </th>
              <th>
                Jenis Kulit
              </th>
              <th class="text-right">
                Action
              </th>
            </thead>
            <tbody>
              <?php foreach ($jeniskulit_data as $key => $value) : ?>
                <tr>
                  <td>
                    <?php echo $value->id_jeniskulit; ?>
                  </td>
                  <td>
                    <?php echo $value->jenis_kulit ?>
                  </td>
                  <td class="text-right">
                    <a href="<?php echo base_url("JenisKulit/update/".$value->id_jeniskulit) ?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo base_url("JenisKulit/delete/".$value->id_jeniskulit) ?>" class="btn btn-danger">Hapus</a>
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
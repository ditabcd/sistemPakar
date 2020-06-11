<?php $this->load->view('admin/includes/header') ?>
  <div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Daftar Tips</h4>
        <a href="<?php echo base_url("Tips/insert") ?>" class="btn btn-primary">Tambah</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>
                Id Tips
              </th>
              <th>
                Jenis Kulit
              </th>
              <th>
                Deskripsi Tips
              </th>
              <th class="text-right">
                Action
              </th>
            </thead>
            <tbody>
              <?php foreach ($tips_data as $key => $value) : ?>
                <tr>
                  <td>
                    <?php echo $value->id_tips ?>
                  </td>
                  <td>
                    <?php echo $value->id_jeniskulit ?>
                  </td>
                  <td>
                    <?php echo $value->deskripsi_tips ?>
                  </td>
                  <td class="text-right">
                    <a href="<?php echo base_url("Tips/update/".$value->id_tips) ?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo base_url("Tips/delete/".$value->id_tips) ?>" class="btn btn-danger">Hapus</a>
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
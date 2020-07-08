<?php $this->load->view('admin/includes/header') ?>
  <div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Daftar Pengunjung</h4>
        <!-- <a href="<?php echo base_url("/insert") ?>" class="btn btn-primary">Tambah</a> -->
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>
                Id User
              </th>
              <th>
                Username
              </th>
              <th>
                Password
              </th>
              <th class="text-right">
                Action
              </th>
            </thead>
            <tbody>
              <?php foreach ($user_data as $key => $value) : ?>
                <tr>
                  <td>
                    <?php echo $value->id_user ?>
                  </td>
                  <td>
                    <?php echo $value->username ?>
                  </td>
                  <td>
                    <?php echo $value->password ?>
                  </td>
                  <td class="text-right">
                    <a href="<?php echo base_url("Pengunjung/update/".$value->id_user) ?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo base_url("Pengunjung/delete/".$value->id_user) ?>" class="btn btn-danger">Hapus</a>
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
<?php $this->load->view('admin/includes/header') ?>
  <div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> Simple Table</h4>
      </div>
      <div class="card-body">
        <?php echo form_open("Keputusan/update_keputusan") ?>
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>
                No
              </th>
              <th>
                Gejala
              </th>
              <?php foreach ($jeniskulit as $key => $value): ?>
                <th>
                  <?php echo $value->id_jeniskulit ?>
                </th>
              <?php endforeach ?>
            </thead>
            <tbody>
              <?php foreach ($gejala as $key => $value) : ?>
                <tr>
                  <td>
                    <?php echo $key+1; ?>
                  </td>
                  <td>
                    <?php echo $value->id_gejala ?>
                  </td>
                  <?php foreach ($jeniskulit as $k => $v): ?>
                    <?php 
                    $data_keputusan = $this->db
                    ->where('fk_gejala',$value->id_gejala)
                    ->where('fk_jeniskulit',$v->id_jeniskulit)
                    ->get('tb_keputusan')
                    ->row(0);
                    $is_check = false;
                    if($data_keputusan != null){
                      $is_check = ($data_keputusan->nilai == '1' ? true : false);
                    }
                    ?>
                    <td>
                      <input type="checkbox" name="keputusan[<?php echo $value->id_gejala ?>][<?php echo $v->id_jeniskulit ?>]" class="" <?php echo ($is_check ? "checked" : "") ?>>
                    </td>
                  <?php endforeach ?>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <input type="submit" name="">
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('admin/includes/footer') ?>
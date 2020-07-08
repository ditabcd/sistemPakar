<?php $this->load->view('admin/includes/header') ?>
  <div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <a href="<?php echo base_url("DataLatih/daftarData") ?>" class="btn btn-primary">Lihat Data</a>
      <?php echo form_open("DataLatih/insert") ?>
      <div class="form-group row">
          <label class="col-md-2 col-form-label">Pasien</label>
            <div class="col-md-10">
              <input type="text" name="id_pasien" class="form-control" placeholder="Masukkan nama/id pasien" value="<?php echo set_value('id_pasien') ?>"></input>
              <?php echo form_error('id_pasien', '', '') ?>
            </div>
      </div>

      <div class="form-group row">
          <label class="col-md-2 col-form-label">Jenis Kulit</label>
            <div class="col-md-10">
              <select type="text" name="jenis_kulit" class="form-control" placeholder="Masukkan Jenis Kulit" value="<?php echo set_value('id_jeniskulit') ?>">
                <option disabled selected>Pilih Jenis Kulit</option>
                  <?php foreach ($this->db->get('tb_jeniskulit')->result() as $key => $value) : ?>
                    <option value="<?php echo $value->id_jeniskulit ?>"><?php echo $value->id_jeniskulit . " [" . $value->jenis_kulit . "]" ?></option>
                  <?php endforeach ?>
              </select>
              <?php echo form_error('jenis_kulit', '', '') ?>
            </div>
      </div>
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
                      <input type="radio" name="training[<?php echo $value->id_gejala ?>]" class="" value="3">
                    </center>
                  </td>
                  <td>
                    <center>
                      <input type="radio" name="training[<?php echo $value->id_gejala ?>]" class="" value="2">
                    </center>
                  </td>
                  <td>
                    <center>  
                      <input type="radio" name="training[<?php echo $value->id_gejala ?>]" class="" value="1">
                    </center>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <center>
          <button type="submit" class="button btn-success">
            Submit Data Latih
          </button>
        </center>
        <?php echo form_close(); ?>
      </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('admin/includes/footer') ?>
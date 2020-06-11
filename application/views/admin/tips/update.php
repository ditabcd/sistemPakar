
<?php $this->load->view('admin/includes/header') ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Tips</h4>
            </div>
            <div class="card-body">
                <?php echo form_open_multipart('') ?>

                <div class="form-group row">
                    <!-- <label class="col-md-2 col-form-label">Id Tips</label> -->
                    <div hidden class="col-md-10">
                        <input type="text" name="id_tips" class="form-control" placeholder="" value="<?php echo $tips_data->id_tips ?>">
                        <?php echo form_error('id_tips', '', '') ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Jenis Kulit</label>
                    <div class="col-md-10">
                         <select type="text" name="id_jeniskulit" class="form-control" placeholder="Masukkan Jenis Kulit" value="<?php echo $tips_data->id_jeniskulit ?>">
                           <option disabled selected>Pilih Jenis Kulit</option>
                                <?php foreach ($this->db->get('tb_jeniskulit')->result() as $key => $value) : ?>
                                    <option value="<?php echo $value->id_jeniskulit ?>"><?php echo $value->id_jeniskulit . " [" . $value->jenis_kulit . "]" ?></option>
                                <?php endforeach ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Deskripsi Tips</label>
                    <div class="col-md-10">
                        <input type="text" name="deskripsi_tips" class="form-control" placeholder="" value="<?php echo $tips_data->deskripsi_tips ?>">
                        <?php echo form_error('deskripsi_tips', '', '') ?>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-md-2 col-md-12">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </div>

                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/includes/footer') ?>
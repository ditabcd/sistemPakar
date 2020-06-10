
<?php $this->load->view('admin/includes/header') ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
            </div>
            <div class="card-body">
                <?php echo form_open_multipart('') ?>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Id Jenis Kulit</label>
                    <div class="col-md-10">
                        <input type="text" name="id_jeniskulit" class="form-control" placeholder="id_jeniskulit" value="<?php echo set_value('id_jeniskulit') ?>">
                        <?php echo form_error('id_jeniskulit', '', '') ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Jenis Kulit</label>
                    <div class="col-md-10">
                        <input type="text" name="jenis_kulit" class="form-control" placeholder="jenis_kulit" value="<?php echo set_value('jenis_kulit') ?>">
                        <?php echo form_error('jenis_kulit', '', '') ?>
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
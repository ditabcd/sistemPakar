
<?php $this->load->view('admin/includes/header') ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Gejala</h4>
            </div>
            <div class="card-body">
                <?php echo form_open_multipart('') ?>

                <div class="form-group row">
                    <!-- <label class="col-md-2 col-form-label">id_gejala</label> --> 
                    <div class="col-md-10">
                        <input hidden type="text" name="id_gejala" class="form-control" placeholder="id_gejala" value="<?php echo $gejala_data->id_gejala ?>">
                        <?php echo form_error('id_gejala', '', '') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Gejala</label>
                    <div class="col-md-10">
                        <input type="text" name="gejala" class="form-control" placeholder="gejala" value="<?php echo $gejala_data->gejala ?>">
                        <?php echo form_error('gejala', '', '') ?>
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
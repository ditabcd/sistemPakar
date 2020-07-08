<?php $this->load->view('admin/includes/header') ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit User</h4>
            </div>
            <div class="card-body">
                <?php echo form_open_multipart('') ?>

                <div class="form-group row">
                    <!-- <label class="col-md-2 col-form-label">id_user</label> --> 
                    <div class="col-md-10">
                        <input hidden type="text" name="id_user" class="form-control" placeholder="id_user" value="<?php echo $user_data->id_user ?>">
                        <?php echo form_error('id_user', '', '') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Username</label>
                    <div class="col-md-10">
                        <input type="text" name="username" class="form-control" placeholder="username" value="<?php echo $user_data->username ?>">
                        <?php echo form_error('username', '', '') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Password</label>
                    <div class="col-md-10">
                        <input type="text" name="password" class="form-control" placeholder="password" value="<?php echo $user_data->password ?>">
                        <?php echo form_error('password', '', '') ?>
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
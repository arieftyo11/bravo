<section class="content-header">
  <h1>
    Users
    <small>Edit Users</small>
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Post</a></li>
    <li><a href="#">Users</a></li>
    <li class="active">Edit Users</li>
  </ol>        
</section>
<section class="content">
  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Users-info</h3>
        </div>
          <form action="<?php echo site_url('Profile/save_password') ?>" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label">Password Lama :</label>
                    <input type="password" class="form-control" name="old" placeholder="Password Lama"/>
                </div>
                <div class="form-group">
                  <label class="control-label">Password Baru :</label>
                  <input type="password" class="form-control" name="new" placeholder="Password Baru" />
                </div>
                <div class="form-group">
                  <label class="control-label">Konfirmasi Password Baru :</label>
                  <input type="password" class="form-control" name="re_new" placeholder="Konfirmasi Password Baru" />
                </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  
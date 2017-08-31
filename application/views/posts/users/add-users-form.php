<section class="content-header">
  <h1>
    Users
    <small>Add Users</small>
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Setting</a></li>
    <li><a href="#">Users</a></li>
    <li class="active">Add Users</li>
  </ol>        
</section>
<section class="content">
  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Users-info</h3>
        </div>
          <form action="<?php echo site_url('users/add') ?>" method="post" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                  <label class="control-label">Username :</label>
                  <input type="text" class="form-control" name="username" id="username" placeholder="Username" />
                </div>
            </div>
			<div class="box-body">
                <div class="form-group">
                  <label class="control-label">Password :</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
                </div>
            </div>
			<div class="box-body">
                <div class="form-group">
                  <label class="control-label">Nama Lengkap :</label>
                  <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" />
                </div>
            </div>
			<div class="box-body">
                <div class="form-group">
                  <label class="control-label">Email :</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" />
                </div>
            </div>
			<div class="box-body">
                <div class="form-group">
                  <label class="control-label">No Telp :</label>
                  <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="Nomor Telepon" />
                </div>
            </div>
			<div class="box-body">
                <div class="form-group">
                  <label class="control-label">Level :</label>
                  <input type="text" class="form-control" name="level" id="level" value="admin" readonly />
                </div>
            </div>
                  <input type="hidden" class="form-control" name="blokir" value="N" />
			<div class="box-body">
                <div class="form-group">
                  <label class="control-label">Avatar :</label>
                  <input type="file" name="filefoto"/>
                </div>
            </div>
            
            <div class="box-footer">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
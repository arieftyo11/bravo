<section class="content-header">
  <h1>
    Album
    <small>Add Album</small>
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Media</a></li>
    <li><a href="#">Album</a></li>
    <li class="active">Add Album</li>
  </ol>        
</section>

<section class="content">
<div class="row">
  <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Album-info</h3>
        </div>
        
          <form action="<?php echo site_url('album/add') ?>" method="post" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                  <label class="control-label">Judul Album :</label>
                  <input type="text" class="form-control" name="jdl_album" id="jdl_album" placeholder="Judul Album" required/>
                </div>
                <div class="form-group">
                  <label class="control-label">Foto Album</label>
                  <input type="file" name="userfile" required/>
                </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
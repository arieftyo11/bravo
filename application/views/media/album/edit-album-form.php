<section class="content-header">
  <h1>
    Album
    <small>Edit Album</small>
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Media</a></li>
    <li><a href="#">Album</a></li>
    <li class="active">Edit Album</li>
  </ol>        
</section>

<section class="content">
<div class="row">
  <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Album-info</h3>
        </div>
        <?php
		if (isset($data_edit_album)){
			foreach($data_edit_album as $row){
		?>
          <form action="<?php echo site_url('album/edit_album') ?>" method="post" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                  <label class="control-label">Judul Album :</label>
                  <input type="hidden" class="span11" name="id" id="id" value="<?php echo $row->id_album; ?>" />
                  <input type="text" class="form-control" name="jdl_album" id="jdl_album" value="<?php echo $row->jdl_album; ?>" required/>
                </div>
                <div class="form-group">
                  <label class="control-label">Aktif :</label>
                  <select class="form-control" name="aktif" id="aktif" value="<?php echo $row->aktif;?>" required>
                      <option value="Y">Y</option>
                      <option>N</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Foto Album :</label><br>
                  <img width="150px" src="<?php echo base_url('uploads/img_album/'.$row->gbr_album) ?>" required>
                </div>
                <div class="form-group">
                  <label class="control-label">Ganti Foto Album :</label>
                  <input type="file" class="span11" name="userfile" />
                </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </form>
		  <?php }
		}
		?>
        </div>
      </div>
    </div>
  </div>
</div></div>
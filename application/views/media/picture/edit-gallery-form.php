<section class="content-header">
  <h1>
    Picture
    <small>Edit Picture</small>
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Post</a></li>
    <li><a href="#">Picture</a></li>
    <li class="active">Edit Picture</li>
  </ol>        
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Picture-info</h3>
        </div>
		
		<?php
		if (isset($data_edit_gallery)){
			foreach($data_edit_gallery as $row){
		?>
		
          <form action="<?php echo site_url('picture/edit_gallery') ?>" method="post" enctype="multipart/form-data">
		   <input type="hidden" name="id" value="<?php echo $row->id_gallery; ?>">
            <div class="box-body">
			
				<div class="form-group">
                  <label class="control-label">Album :</label>
                  <select name='id_album' class="form-control" required>
                    <option value='<?php echo $row->id_album; ?>' selected><?php echo $row->id_album; ?></option>
                        <?php
                            foreach ($record as $r) {
                                echo "<option value=".$r->id_album.">".$r->jdl_album."</option>";                                        
                            }
                        ?>
                  </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Nama Gambar :</label>
                    <input type="text" class="form-control" name="jdl_gallery" id="jdl_gallery" value="<?php echo $row->jdl_gallery; ?>" required/>
                </div>
                <div class="form-group">
                  <label class="control-label">Keterangan :</label>
                  <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" value="<?php echo $row->keterangan; ?>" required/>
                </div>
				<div class="form-group">
                  <label class="control-label">Gambar :</label><br>
                  <img width="150px" src="<?php echo base_url('uploads/img_galeri/'.$row->gbr_gallery) ?>" required>
                </div>
                <div class="form-group">
                  <input type="file" name="userfile" value="<?php echo $row->gbr_gallery; ?>">
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
  
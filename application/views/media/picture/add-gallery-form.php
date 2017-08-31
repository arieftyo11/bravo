<section class="content-header">
  <h1>
    Picture
    <small>Add Picture</small>
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Post</a></li>
    <li><a href="#">Picture</a></li>
    <li class="active">Add Picture</li>
  </ol>        
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Picture-info</h3>
        </div>
          <form action="<?php echo site_url('picture/add') ?>" method="post" enctype="multipart/form-data">
		  
		  <div class="box-body">
                  <label class="control-label">Album</label>
                  <select name='id_album' class="form-control" required>
                    <option value='0' disabled selected>Pilih Album</option>
                        <?php
                            foreach ($record as $r) {
                                echo "<option value=".$r->id_album.">".$r->jdl_album."</option>";                                        
                            }
                        ?>
                  </select>
                </div>
				
            <div class="box-body">
                <div class="form-group">
                  <label class="control-label">Nama Picture</label>
                  <input type="text" class="form-control" name="jdl_gallery" id="jdl_gallery" placeholder="Nama Gambar" required/>
                </div>
            </div>
			<div class="box-body">
                <div class="form-group">
                  <label class="control-label">Keterangan</label>
                  <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" required/>
                </div>
            </div>
			
			<div class="box-body">
                  <label class="control-label">Gambar</label>
                  <input type="file" name="userfile" required/>
                </div>
            
            <div class="box-footer">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
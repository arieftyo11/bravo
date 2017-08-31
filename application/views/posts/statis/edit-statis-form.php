<section class="content-header">
  <h1>
    Static Page
    <small>Edit Static Page</small>
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Post</a></li>
    <li><a href="#">Static Page</a></li>
    <li class="active">Edit Static Page</li>
  </ol>        
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">static-page-info</h3>
        </div>
		
		<?php
		if (isset($data_edit_statis)){
			foreach($data_edit_statis as $row){
		?>
		
          <form action="<?php echo site_url('Statis/edit_statis') ?>" method="post" enctype="multipart/form-data">
		  <input type="hidden" name="id" value="<?php echo $row->id_halaman; ?>">
            <div class="box-body">
                <div class="form-group">
                  <label class="control-label">Judul :</label>
                  <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $row->judul; ?>"/>
                </div>
				<div class="form-group">
                  <label class="control-label">Isi :</label>
                  <textarea class="ckeditor" name="isi_halaman" value=""><?php echo $row->isi_halaman; ?></textarea>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label">Gambar :</label>
                  <input type="file" name="userfile" value="<?php echo $row->gambar; ?>">
                </div>
            </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-success">Save</button>
                  <button type="reset" class="btn btn-default" onclick="location.href='<?php echo site_url('statis')?>'">Cancel</button>
                </div>
          </form>
		  
		   <?php }
		}
		?>
		  
      </div>
  </div>
</div>
<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/ckeditor/ckeditor.js"></script>
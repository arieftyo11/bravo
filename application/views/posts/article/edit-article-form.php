<section class="content-header">
  <h1>
    Article
    <small>Add Article</small>
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Post</a></li>
    <li><a href="#">Article</a></li>
    <li class="active">Edit Article</li>
  </ol>        
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Article-info</h3>
        </div>
		
		<?php
		if (isset($data_edit_article)){
			foreach($data_edit_article as $row){
      ?>
		
          <form action="<?php echo site_url('article/edit_article') ?>" method="post" enctype="multipart/form-data">
		  <input type="hidden" name="id" value="<?php echo $row->id_berita; ?>">
            <div class="box-body">
                <div class="form-group">
                  <label class="control-label">Judul :</label>
                  <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?php echo $row->judul; ?>" required/>
                </div>
                <div class="form-group">
                  <label class="control-label">Isi :</label>
                  <textarea class="ckeditor" name="isi" value=""><?php echo $row->isi_berita; ?></textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Kategori :</label>
                  <select name='id_kategori' class="form-control" required>
                    <option value='0' selected><?php echo $row->id_kategori; ?></option>
                        <?php
                            foreach ($record as $r) {
                                echo "<option value=".$r->id_kategori.">".$r->nama_kategori."</option>";                                        
                            }
                        ?>
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Gambar :</label>
                  <input type="file" name="filefoto" id="filefoto" value="<?php echo $row->gambar; ?>" required>
                </div>
            </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-success">Save</button>
                  <button type="reset" class="btn btn-default" onclick="location.href='<?php echo site_url('article')?>'">Cancel</button>
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
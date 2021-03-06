<section class="content-header">
  <h1>
    Halaman Statis
    <small>Add Halaman Statis</small>
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Post</a></li>
    <li><a href="#">Halaman Statis</a></li>
    <li class="active">Add Halaman Statis</li>
  </ol>        
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">halaman-statis-info</h3>
        </div>
          <form action="<?php echo site_url('Statis/add') ?>" method="post" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                  <label class="control-label">Judul :</label>
                  <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" />
                </div>
				<div class="form-group">
                  <label class="control-label">Isi :</label>
                  <textarea class="ckeditor" name="isi_halaman"></textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Gambar :</label>
                  <input type="file" name="userfile">
                </div>
            </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-success">Save</button>
                  <button type="reset" class="btn btn-default" onclick="location.href='<?php echo site_url('statis')?>'">Cancel</button>
                </div>
          </form>
      </div>
  </div>
</div>
<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/ckeditor/ckeditor.js"></script>
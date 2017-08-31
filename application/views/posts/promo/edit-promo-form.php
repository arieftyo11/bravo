<section class="content-header">
  <h1>
    Product
    <small>Edit Product</small>
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Post</a></li>
    <li><a href="#">Product</a></li>
    <li class="active">Edit Product</li>
  </ol>        
</section>
<section class="content">
  <div class="row"> 
  <?php
		if (isset($data_edit_promo)){
			foreach($data_edit_promo as $row){
		?>
  <form action="<?php echo site_url('Promo/edit_promo') ?>" method="post" enctype="multipart/form-data">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Product-info</h3>
        </div>
			<input type="hidden" name="id" value="<?php echo $row->id_promo; ?>">
            <div class="box-body">
                <div class="form-group">
                  <label class="control-label">Product :</label>
                  <input type="text" class="form-control" name="judul" id="judul" placeholder="Promo" value="<?php echo $row->judul; ?>" required/>
                </div>
				<div class="form-group">
                  <label class="control-label">Kota :</label>
                  <input type="text" class="form-control" name="kota" id="kota" placeholder="Kota" value="<?php echo $row->kota; ?>" required/>
                </div>
				<div class="form-group">
                  <label class="control-label">Negara :</label>
                  <input type="text" class="form-control" name="negara" id="negara" placeholder="Negara" value="<?php echo $row->negara; ?>" required/>
                </div>
				<div class="form-group">
                  <label class="control-label">Harga :</label>
                  <input type="number" class="form-control" name="harga" id="harga" placeholder="Harga" value="<?php echo $row->harga; ?>" required/>
                </div>
				<div class="form-group">
                  <label class="control-label">Keberangkatan :</label>
                  <input type="date" class="form-control" name="keberangkatan" id="keberangkatan" placeholder="Keberangkatan" value="<?php echo $row->keberangkatan; ?>" required/>
                </div>
				<div class="form-group">
                  <label class="control-label">Kepulangan :</label>
                  <input type="date" class="form-control" name="kepulangan" id="kepulangan" placeholder="Kepulangan" value="<?php echo $row->kepulangan; ?>" required/>
                </div>
				<div class="form-group">
                  <label class="control-label">Durasi :</label>
				<select name='durasi' class="form-control" required>
                    <option value='<?php echo $row->durasi; ?>' selected><?php echo $row->durasi; ?></option>
                    <option value='1 Hari'>1 Hari</option>
					<option value='2 Hari'>2 Hari</option>
					<option value='3 Hari'>3 Hari</option>
					<option value='4 Hari'>4 Hari</option>
					<option value='5 Hari'>5 Hari</option>
                  </select>
				 </div>
				 <div class="form-group">
                  <label class="control-label">Kategori :</label>
				<select name='kategori' class="form-control" required>
                    <option value='<?php echo $row->kategori; ?>' selected><?php echo $row->kategori; ?></option>
                        <option value='Domestik'>Domestik</option>
					<option value='Luar Negeri'>Luar Negeri</option>
                  </select>
				 </div>
				<div class="form-group">
                  <label class="control-label">Minimal :</label>
                  <input type="number" class="form-control" name="minimal" id="minimal" placeholder="Minimal" value="<?php echo $row->minimal; ?>" required/>
                </div>
                <div class="form-group">
                  <label class="control-label">Deskripsi :</label>
                  <textarea class="ckeditor" name="isi" value="" required><?php echo $row->deskripsi; ?></textarea>
                </div>
				<div class="form-group">
                  <label class="control-label">Hari Satu :</label>
                  <textarea class="ckeditor" name="harisatu" value="" required><?php echo $row->harisatu; ?></textarea>
                </div>
				<div class="form-group">
                  <label class="control-label">Hari Dua :</label>
                  <textarea class="ckeditor" name="haridua" value="" required><?php echo $row->haridua; ?></textarea>
                </div>
            </div> 
      </div>
  </div>
  <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Product-info</h3>
        </div>
				<div class="box-body">
				<div class="form-group">
                  <label class="control-label">Hari Tiga :</label>
                  <textarea class="ckeditor" name="haritiga" value=""><?php echo $row->haritiga; ?></textarea>
                </div>
				<div class="form-group">
                  <label class="control-label">Hari Empat :</label>
                  <textarea class="ckeditor" name="hariempat" value=""><?php echo $row->hariempat; ?></textarea>
                </div>
				<div class="form-group">
                  <label class="control-label">Hari Lima :</label>
                  <textarea class="ckeditor" name="harilima" value=""><?php echo $row->harilima; ?></textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Gambar :</label>
                  <input type="file" name="userfile" value="<?php echo $row->gambar; ?>">
                </div>
            </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-success">Save</button>
                  <button type="reset" class="btn btn-default" onclick="location.href='<?php echo site_url('promo')?>'">Cancel</button>
                </div>  
      </div>
  </div>
 </form>
 <?php }
		}
	?>
</div>
<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/ckeditor/ckeditor.js"></script>
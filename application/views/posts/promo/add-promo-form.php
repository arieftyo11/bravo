
Back (accesskey b)    Save (accesskey s)    	File: /public_html/application/views/posts/promo/add-promo-form.php
 	Status: This file has not yet been saved

<section class="content-header">
  <h1>
    Product
    <small>Add Product</small>
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Post</a></li>
    <li><a href="#">Product</a></li>
    <li class="active">Add Product</li>
  </ol>        
</section>
<section class="content">
  <div class="row">
  <form action="<?php echo site_url('Promo/add') ?>" method="post" enctype="multipart/form-data">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Product-info</h3>
        </div>
            <div class="box-body">
                <div class="form-group">
                  <label class="control-label">Product :</label>
                  <input type="text" class="form-control" name="judul" id="judul" placeholder="Promo" required/>
                </div>
				<div class="form-group">
                  <label class="control-label">Kota :</label>
                  <input type="text" class="form-control" name="kota" id="kota" placeholder="Kota" required/>
                </div>
				<div class="form-group">
                  <label class="control-label">Negara :</label>
                  <input type="text" class="form-control" name="negara" id="negara" placeholder="Negara" required/>
                </div>
				<div class="form-group">
                  <label class="control-label">Harga :</label>
                  <input type="number" class="form-control" name="harga" id="harga" placeholder="Harga" required/>
                </div>
				<div class="form-group">
                  <label class="control-label">Keberangkatan :</label>
                  <input type="date" class="form-control" name="keberangkatan" id="keberangkatan" placeholder="Keberangkatan" required/>
                </div>
				<div class="form-group">
                  <label class="control-label">Kepulangan :</label>
                  <input type="date" class="form-control" name="kepulangan" id="kepulanganan" placeholder="Kepulangan" required/>
                </div>
				<div class="form-group">
                  <label class="control-label">Durasi :</label>
                  <select required name='durasi' class="form-control">
                    <option value='0' disabled selected>Pilih Durasi</option>
					<option value='1 Hari'>1 Hari</option>
					<option value='2 Hari'>2 Hari</option>
					<option value='3 Hari'>3 Hari</option>
					<option value='4 Hari'>4 Hari</option>
					<option value='5 Hari'>5 Hari</option>
                  </select>
                </div>
				<div class="form-group">
                  <label class="control-label">Kategori :</label>
                  <select required name='kategori' class="form-control">
                    <option value='0' disabled selected>Pilih Kategori</option>
                    <option value='Domestik'>Domestik</option>
					<option value='Luar Negeri'>Luar Negeri</option>
                  </select>
                </div>
				<div class="form-group">
                  <label class="control-label">Minimal :</label>
                  <input type="number" class="form-control" name="minimal" id="minimal" placeholder="Minimal" required/>
                </div>
                <div class="form-group">
                  <label class="control-label">Deskripsi :</label>
                  <textarea class="ckeditor" name="isi" required></textarea>
                </div>
				<div class="form-group">
                  <label class="control-label">Hari Satu :</label>
                  <textarea class="ckeditor" name="harisatu" required></textarea>
                </div>
				<div class="form-group">
                  <label class="control-label">Hari Dua :</label>
                  <textarea class="ckeditor" name="haridua" required></textarea>
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
                  <textarea class="ckeditor" name="haritiga"></textarea>
                </div>
				<div class="form-group">
                  <label class="control-label">Hari Empat :</label>
                  <textarea class="ckeditor" name="hariempat"></textarea>
                </div>
				<div class="form-group">
                  <label class="control-label">Hari Lima :</label>
                  <textarea class="ckeditor" name="harilima"></textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Gambar :</label>
                  <input type="file" name="userfile">
                </div>
            </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-success">Save</button>
                  <button type="reset" class="btn btn-default" onclick="location.href='<?php echo site_url('promo')?>'">Cancel</button>
                </div>
          
      </div>
  </div>
 </form>
</div>
<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/ckeditor/ckeditor.js"></script>

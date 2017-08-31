<section class="content-header">
  <h1>
    Menu
    <small>Edit Menu</small>
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Setting</a></li>
    <li><a href="#">Menu</a></li>
    <li class="active">Edit Menu</li>
  </ol>        
</section>

<section class="content">
<div class="row">
  <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Menu-info</h3>
        </div>
        
          <form action="<?php echo site_url('menu/edit') ?>" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label">ID Menu :</label>
                    <input type="text" class="form-control" name="id_menu" id="id_menu" value="<?php echo $record['id_menu'] ?>" readonly />
                </div>
                <div class="form-group">
                  <label class="control-label">Nama Menu :</label>
                  <input type="text" class="form-control" name="nama_menu" id="nama_menu" placeholder="Nama Menu" value="<?php echo $record['nama_menu']; ?>" />
                </div>
                <div class="form-group">
                  <label class="control-label">Icon :</label>
                  <input type="text" class="form-control" name="icon" id="icon" placeholder="ex : icon icon-home" value="<?php echo $record['icon']; ?>" />
                </div>
                <div class="form-group">
                  <label class="control-label">Link</label>
                  <input type="text" class="form-control" name="link" id="link" placeholder="ex : menu/add atau #" value="<?php echo $record['link']; ?>" />
                </div>
                <div class="form-group">
                  <label class="control-label">Kategori :</label>
                  <select class="form-control" name='kat_menu'>
                        <option value='0'>Menu Utama</option>
                        <?php
                            foreach ($katmenu as $k) {
                                echo "<option value='$k->id_menu'";
                                echo $record['kat_menu'] == $k->id_menu ? 'selected' : '';
                                echo ">$k->nama_menu</option>";
                            }
                        ?>
                  </select>
                </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
<section class="content-header">
  <h1>
    Menu
    <small>Add Menu</small>
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Setting</a></li>
    <li><a href="#">Menu</a></li>
    <li class="active">Add Menu</li>
  </ol>        
</section>

<section class="content">
<div class="row">
  <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Menu-info</h3>
        </div>
        
          <form action="<?php echo site_url('menu/add') ?>" method="post">
            <div class="box-body">
                <div class="form-group">
                  <label class="control-label">Nama Menu :</label>
                  <input type="text" class="form-control" name="nama_menu" id="nama_menu" placeholder="Nama Menu" />
                </div>
                <div class="form-group">
                  <label class="control-label">Icon :</label>
                  <input type="text" class="form-control" name="icon" id="icon" placeholder="ex : fa fa-dashboard" />
                </div>
                <div class="form-group">
                  <label class="control-label">Link</label>
                    <input type="text" class="form-control" name="link" id="link" placeholder="ex : menu/add atau #" />
                </div>
                <div class="form-group">
                  <label class="control-label">Icon :</label>
                    <select name='kat_menu' class="form-control">
                        <option value='0'>Menu Utama</option>
                        <?php
                            if (!empty($record)) {
                                foreach ($record as $r) {
                                    echo "<option value=".$r->id_menu.">".$r->nama_menu."</option>";                                        
                                }
                            }
                        ?>
                    </select>
                </div>
              </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-success">Save</button>
                </div>
          </form>
      </div>
    </div>
  </div>
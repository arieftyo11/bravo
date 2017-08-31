<section class="content-header">
  <h1>
    Category
    <small>Edit Category</small>
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Post</a></li>
    <li><a href="#">Category</a></li>
    <li class="active">Edit Category</li>
  </ol>        
</section>
<section class="content">
  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Category-info</h3>
        </div>
          <form action="<?php echo site_url('category/edit') ?>" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label">Kode Kategori :</label>
                    <input type="text" class="form-control" name="id_kategori" id="id_kategori" value="<?php echo $record['id_kategori'];?>" readonly />
                </div>
                <div class="form-group">
                  <label class="control-label">Nama Kategori :</label>
                  <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" placeholder="Nama Kategori" value="<?php echo $record['nama_kategori'];?>" required/>
                </div>
                <div class="form-group">
                  <label class="control-label">Aktif :</label>
                  <select class="form-control" name="aktif" id="aktif" value="<?php echo $row->aktif;?>">
                      <option value="Y">Y</option>
                        <?php
                            foreach ($res as $k) {
                                echo "<option value='$k->aktif'";
                                echo  ' selected';
                                echo ">$k->aktif</option>";
                            }
                        ?>

                      <option>N</option>
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
  
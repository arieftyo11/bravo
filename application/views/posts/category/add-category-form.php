<section class="content-header">
  <h1>
    Category
    <small>Add Category</small>
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Post</a></li>
    <li><a href="#">Category</a></li>
    <li class="active">Add Category</li>
  </ol>        
</section>
<section class="content">
  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Category-info</h3>
        </div>
          <form action="<?php echo site_url('category/add') ?>" method="post">
            <div class="box-body">
                <div class="form-group">
                  <label class="control-label">Nama Kategori :</label>
                  <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" placeholder="Nama Kategori" required/>
                </div>
            </div>
            
            <div class="box-footer">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
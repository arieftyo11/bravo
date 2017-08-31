<script type="text/javascript">
  $(function () {
    $("#example1").dataTable();
  });
</script>
<section class="content-header">
  <h1>
    Product
    <small>Control panel</small>
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Post</a></li>
    <li class="active">Product</li>
  </ol>        
</section>
<section class="content">
  <div class="row">
      <div class="col-xs-12">
        <?php
            $notif = $this->session->flashdata('message');
            if($notif){
                echo $notif;
            }
        ?>
      <div class="box">
          <div class="box-header"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5 class="box-title">Data Product</h5>
            <button style="float:right" class="btn btn-primary" onclick="location.href='<?php echo site_url('Promo/add_promo')?>'"><i class="icon-plus"><span> Add Product</span></i></button>
          </div>
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th width="30px">No</th>
                  <th>Product</th>
                  <th>Harga</th>
                  <th>Durasi</th>
                  <th>Gambar</th>
                  <th width="100px">Options</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $no=1;
                    if(isset($data)){
                        foreach($data as $row){
                ?>
                <tr class="odd gradeX">
                  <td style="text-align:center"><?php echo $no++; ?></td>
                  <td><?php echo $row->judul; ?></td>
                  <td><?php echo $row->harga; ?></td>
                  <td><?php echo $row->durasi; ?></td>
                  <td style="text-align:center;"><img width="200px" src="<?php echo base_url('uploads/img_promo/'.$row->gambar) ?>"></td>
                  <td class="center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">Action</button>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo site_url('promo/pages_edit_promo/'.$row->id_promo)?>">Edit</a></li>
                            <li><a href="<?php echo site_url('promo/delete_promo/'.$row->id_promo);?>" onclick="return confirm('Anda Yakin ?');">Delete</a></li>
                        </ul>
                    </div>
                  </td>
                </tr>
                <?php   }
                    }
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <th width="20px">No</th>
                  <th>Product</th>
                  <th>Harga</th>
                  <th>Durasi</th>
                  <th>Gambar</th>
                  <th class="span2">
                    <div>
                        <i class="icon-cog"></i> Options
                    </div>
                  </th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
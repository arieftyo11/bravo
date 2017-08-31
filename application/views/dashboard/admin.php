<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>        
</section>
<!-- Main row -->
<section class="content">
    <div class="row">
        <div class="col-md-8">
      <!-- TABLE: LATEST ORDERS -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Latest Product</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div><!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
                <tr>
                  <th>Judul</th>
                  <th>Kota</th>
                  <th>Harga</th>
                  <th>Keberangkatan</th>
                </tr>
              </thead>
              <tbody>
			  <?php
						if(isset($data_promo)){
						foreach($data_promo as $row){
						?> 
                <tr>
                  <td><a href="<?php echo site_url('promo/pages_edit_promo/'.$row->id_promo)?>"><?php echo $row->judul; ?></a></td>
                  <td><?php echo $row->kota; ?></td>
                  <td><span class="label label-success"><?php echo $row->harga; ?>$</span></td>
                  <td><div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $row->keberangkatan; ?><span class="label label-info pull-right">New</span></div></td>
                </tr>
						
						<?php }
							}
						?>
              </tbody>
            </table>
          </div><!-- /.table-responsive -->
        </div><!-- /.box-body -->
        <div class="box-footer clearfix">
          <a href="<?php echo site_url('Promo/add_promo')?>" class="btn btn-sm btn-info btn-flat pull-left">Place New Product</a>
          <a href="<?php echo site_url('Promo')?>" class="btn btn-sm btn-default btn-flat pull-right">View All Product</a>
        </div><!-- /.box-footer -->
      </div><!-- /.box -->
    </div><!-- /.col -->
        <div class="col-md-4">
          <!-- PRODUCT LIST -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Recently Added Products</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
			  
			  <?php
						if(isset($data_article)){
						foreach($data_article as $row){
						?> 
			  
                <li class="item">
                  <div class="product-img">
                    <img src="<?=base_url('uploads/foto_berita/'.$row->gambar).'';?>" alt="Product Image"/>
                  </div>
                  <div class="product-info">
                    <a href="<?php echo site_url('article/pages_edit_article/'.$row->id_berita)?>" class="product-title"><?php echo $row->judul; ?> <span class="label label-info pull-right">New</span></a>
                    <span class="product-description">
                      <?=substr(strip_tags($row->isi_berita),0,40).".."?>
                    </span>
                  </div>
                </li><!-- /.item -->
				
				<?php }
							}
						?>
             
              </ul>
            </div><!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="<?php echo site_url('Article')?>" class="uppercase">View All Article</a>
            </div><!-- /.box-footer -->
          </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
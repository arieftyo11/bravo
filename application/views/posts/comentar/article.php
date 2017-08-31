<script type="text/javascript">
  $(function () {
    $("#example1").dataTable();
  });
</script>
<section class="content-header">
  <h1>
    Article
    <small>Control panel</small>
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Post</a></li>
    <li class="active">Article</li>
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
            <h5 class="box-title">Data Article</h5>
            <button style="float:right" class="btn btn-primary" onclick="location.href='<?php echo site_url('Article/add_article')?>'"><i class="icon-plus"><span> Add Article</span></i></button>
          </div>
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th width="30px">No</th>
                  <th>Judul</th>
                  <th>Isi Berita</th>
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
                  <td><?php echo substr($row->isi_berita,0,200); ?></td>
                  <td style="text-align:center;"><img width="200px" src="<?php echo base_url('uploads/foto_berita/'.$row->gambar) ?>"></td>
                  <td class="center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">Action</button>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo site_url('article/pages_edit_article/'.$row->id_berita)?>">Edit</a></li>
                            <li><a href="<?php echo site_url('article/delete_article/'.$row->id_berita)?>" onclick="return confirm('Anda Yakin ?');">Delete</a></li>
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
                  <th>Judul</th>
                  <th>Isi Berita</th>
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
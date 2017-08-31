<script type="text/javascript">
  $(function () {
    $("#example1").dataTable();
  });
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Album
    <small>Control panel</small>
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Media</a></li>
    <li class="active">Album</li>
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
            <h5 class="box-title">Data Album</h5>
            <button style="float:right" class="btn btn-primary" onclick="location.href='<?php echo site_url('album/add_album')?>'"><i class="icon-plus"><span> Add Album</span></i></button>
          </div>
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th width="30px">No</th>
                  <th width="200px">Foto</th>
                  <th>Judul Album</th>
                  <th width="80px">Aktif</th>
                  <th width="100px">
                    Options
                  </th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th width="20px">No</th>
                  <th width="100px">Foto</th>
                  <th>Judul Album</th>
                  <th width="30px">Aktif</th>
                  <th class="span2">
                    <div>
                        <i class="icon-cog"></i> Options
                    </div>
                  </th>
                </tr>
              </tfoot>
              <tbody>
                <?php
                    $no=1;
                    if(isset($data)){
                        foreach($data as $row){
                ?>
                <tr class="odd gradeX">
                  <td style="text-align:center"><?php echo $no++; ?></td>
                  <td style="text-align:center"><img width="80px" src="<?php echo base_url('uploads/img_album/'.$row->gbr_album) ?>"></td>
                  <td><?php echo $row->jdl_album; ?></td>
                  <td style="text-align:center"><?php echo $row->aktif; ?></td>
                  <td class="center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">Action</button>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo site_url('album/pages_edit_album/'.$row->id_album)?>">Edit</a></li>
                            <li><a href="<?php echo site_url('album/delete_album/'.$row->id_album)?>" onclick="return confirm('Anda Yakin ?');">Delete</a></li>
                        </ul>
                    </div>
                  </td>
                </tr>
                <?php   }
                    }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
<script type="text/javascript">
  $(function () {
    $("#example1").dataTable();
  });
</script>
<section class="content-header">
  <h1>
    Static Page
    <small>Control panel</small>
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Post</a></li>
    <li class="active">Static Page</li>
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
            <h5 class="box-title">Data Static Page</h5>
            <!--<button style="float:right" class="btn btn-primary" onclick="location.href='<?php echo site_url('Statis/add_statis')?>'"><i class="icon-plus"><span> Add Static</span></i></button>-->
          </div>
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th width="30px">No</th>
                  <th>Judul</th>
                  <th>Isi Halaman</th>
                  <th width="100px">Tanggal</th>
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
                  <td><?=substr(strip_tags($row->isi_halaman),0,300).".."?></td>
                  <td><?php echo $row->tgl_posting; ?></td>
                  <td class="center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">Action</button>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo site_url('statis/pages_edit_statis/'.$row->id_halaman)?>">Edit</a></li>
                            <!--<li><a href="<?php echo site_url('statis/delete_statis/'.$row->id_halaman);?>" onclick="return confirm('Anda Yakin ?');">Delete</a></li>-->
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
                  <th>Isi Halaman</th>
                  <th width="100px">Tanggal</th>
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
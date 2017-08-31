<script type="text/javascript">
  $(function () {
    $("#example1").dataTable();
  });
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Comentar
    <small>Control panel</small>
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Post</a></li>
    <li class="active">Comentar</li>
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
            <h5 class="box-title">Data Comentar</h5>
          </div>
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Nama</th>
                  <th>Isi</th>
                  <th>Status</th>
                  <th>Created</th>
                  <th>Options</th>
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
                  <td><?php echo $row->full_name; ?></td>
                  <td style="text-align:center"><?php echo $row->isi; ?></td>
                  <td style="text-align:center"><?php echo $row->status; ?></td>
                  <td style="text-align:center"><?php echo $row->created; ?></td>
                  <td class="center">
                      <div class="btn-group">
                          <button type="button" class="btn btn-default">Action</button>
                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo site_url('Comentar_View/edit_comentar/'.$row->id)?>">Approve</a></li>
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
                  <th>No</th>
                  <th>Judul</th>
                  <th>Nama</th>
                  <th>Isi</th>
                  <th>Status</th>
                  <th>Created</th>
                  <th>Options</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
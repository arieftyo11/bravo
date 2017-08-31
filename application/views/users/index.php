<script type="text/javascript">
  $(function () {
    $("#example1").dataTable();
  });
</script>
<section class="content-header">
  <h1>
    User
    <small>Control panel</small>
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Setting</a></li>
    <li class="active">Users</li>
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
        <div class="box-header">
          <h3 class="box-title">Data User</h3>
		  <button style="float:right" class="btn btn-primary" onclick="location.href='<?php echo site_url('users/add_users')?>'"><i class="icon-plus"><span> Add Users</span></i></button>
        </div><!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nama Lengkap</th>
                <th>E-mail</th>
                <th>No Telp</th>
                <th>Level</th>
                <th>Status (Blokir)</th>
				<th width="100px">Options</th>
              </tr>
            </thead>
            <tbody>
            <?php 
              foreach($data as $row){
                ?>
              <tr>

                <td><?php echo $row->nama_lengkap; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->no_telp; ?></td>
                <td><?php echo $row->level; ?></td>
                <td><?php echo $row->blokir; ?></td>
				<td class="center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">Action</button>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo site_url('users/delete_users/'.$row->id_users);?>" onclick="return confirm('Anda Yakin ?');">Delete</a></li>
                        </ul>
                    </div>
                  </td>
				
              </tr>
              <?php
              }
                ?>
            </tbody>
            <tfoot>
              <tr>
                <th>Nama Lengkap</th>
                <th>E-mail</th>
                <th>No Telp</th>
                <th>Level</th>
                <th>Status (Blokir)</th>
              </tr>
            </tfoot>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
    </div><!-- /.row -->
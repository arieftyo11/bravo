<script type="text/javascript">
  $(function () {
    $("#example1").dataTable();
  });
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Menu
    <small>Control panel</small>
 </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Media</a></li>
    <li class="active">Album</li>
  </ol>        
</section>
        
        <!-- Main content -->
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
            <h5 class="box-title">Data Menu</h5>
          </div>
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th width="30px">No</th>
                  <th>Nama Menu</th>
                  <th>Icon</th>
                  <th width="40px">Link</th>
                  <th>Kategori</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    function chek($id) {
                        $CI = get_instance();
                        $result = $CI->db->get_where('tb_menu', array('id_menu' => $id))->row_array();
                        return $result['nama_menu'];
                    }
                    $no=1;
                    if(isset($menu)){
                        foreach($menu as $row){
                        $katmenu = $row->kat_menu == 0 ? 'Menu Utama' : chek($row->kat_menu);
                ?>
                <tr>
                  <td style="text-align:center"><?php echo $no++; ?></td>
                  <td><?php echo $row->nama_menu; ?></td>
                  <td><?php echo $row->icon; ?></td>
                  <td style="text-align:center"><?php echo $row->link; ?></td>
                  <td style="text-align:center"><?php echo $katmenu; ?></td>
  
                </tr>
                <?php   }
                    }
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <th width="30px">No</th>
                  <th>Nama Menu</th>
                  <th>Icon</th>
                  <th>Link</th>
                  <th>Kategori</th>
                </tr>
              </tfoot>
            </table>
            <div>
	        </div>
          </div>
        </div>
      </div>
    </div>

<?php session_start();
include "header.php"; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

           <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Thông tin thể loại</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Tên thể loại</th>
                      <th>Thứ tự</th>
                      <th>Ẩn hiện</th>
                      <th>Hành động</th>
                     
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>STT</th>
                      <th>Tên thể loại</th>
                      <th>Thứ tự</th>
                      <th>Ẩn hiện</th>
                      <th>Hành động</th>
                    </tr>
                  </tfoot>
                  <tbody>

                    <?php
                    $str = "select * from theloai order by idTL desc";
                    $result = mysqli_query($conn,$str);
                    $i = 0;
                    while($row = mysqli_fetch_assoc($result)){
                        $i++;
                    	?>
                  
                    

                    <tr>
                      <td> <?php echo $i; ?> </td>
                      <td> <?php echo $row['TenTL'] ; ?> </td>
                      <td> <?php echo $row['ThuTu'] ; ?> </td>
                      <td> <?php echo $row['AnHien'] ; ?> </td>
                      <td>
                      	
                      	<a href="edit_theloai.php?idTL= <?php echo $row['idTL']; ?> ">Edit </a>
                      	<a href="delete_theloai.php?idTL= <?php echo $row['idTL']; ?> ">Delete </a>

                     </td>
                      
                      
                  </tr>
                 <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

         

        </div>
        <!-- /.container-fluid -->
<?php
include "footer.php";
?>
<?php session_start();
include "header.php"; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Thêm thể loại</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

         <div class="">


          	<form action="xuly_edit_theloai.php" method="get" >
          	<?php
          	$idTL = $_GET['idTL'];
          	$str_theloai = "select * from theloai where idTL = $idTL";
          	$result = mysqli_query($conn,$str_theloai);
          	$row = mysqli_fetch_assoc($result)
          	?>	
          	<div class="row">
          		<div class="col-md-5"><label for="">Tên thể loại</label></div>
          		<div class="col-md-7"><input type="text" name="tentheloai" value="<?php echo $row['TenTL']; ?>">
          		</div>
          		<div class="col-md-5"><label for="">Thứ tự</label>
          		</div>
          		<div class="col-md-7"><input type="text" name="thutu">
          		</div>
          		<div class="col-md-5"><label for="">Ẩn hiện</label>
          		</div>
          		<div class="col-md-7">	
          		<select name="anhhien" id="" >
          			<option value="0" <?php if($row['AnHien']==0){echo"selected";} ?>  >Ẩn</option>
          			<option value="1" <?php if($row['AnHien']==1){echo"selected";} ?>  >Hiện</option>
          		</select>
          		</div>
          		<div class="col-md-12">
          			<input type="hidden" value="<?php echo $idTL ?>" name="idTL" >
          			<input type="submit" value="Sữa thể loại">
          	</div>

          	</form>
          	
         </div>
		</div>
        <!-- /.container-fluid -->
<?php
include "footer.php";
?>
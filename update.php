<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title> تعديل منتج </title>
<!-- Font awesome -->
<link href="css/font-awesome.css" rel="stylesheet">
  
  <!-- Theme color -->
  <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">

  <!-- Main style sheet -->
  <link href="css/style.css" rel="stylesheet">    
 <!-- Google Font -->
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
  text-align: right;
  height: 1000px;
}
/* Modal styles */
.modal .modal-dialog {
	width:700px;
  height: 600px;
  background-color:white;
  border: 1px solid white;
  border-radius: 10px;
  position: absolute;
  transform: translateX(-50%);

}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px ;

}
.modal .modal-header{
  color: #FF6666;
  font-size: 40px;
  transform: translateY(-20%);
}
.modal .modal-content {
	border-radius: 10px;
	font-size: 20px;
 
}
.modal .modal-footer {
	background-color:#dddddd;
	border-radius: 0 0 3px 3px;
  transform: translateY(-60%);

}

.modal .form-control {
  height: 20px;
  margin-right: 10px;
  width: 70%;
  border: 1px #bbb solid;
  border-radius: 2px;

}
.modal textarea .form-control {
	resize: vertical;

}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal-body{
transform: translateY(-30%);
}
.modal form label {
	font-weight: normal;
}	
.modal-body .form-group{
  margin-bottom: 20px;
}
</style>
</head>
<body> 
<body> 
<?php
    if(isset($_POST['btn']))
    $id=$_POST['id'];
	  $conn=new mysqli("localhost","root","","binnishmall");
		$query = "SELECT * FROM products WHERE product_id='$id' ";	  
		$query_run = mysqli_query($conn, $query);
		if(mysqli_num_rows($query_run) > 0)
			{
			foreach($query_run as $product)
			{	 
?>       
<div id="editprodactModal" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
  <form action="code.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $product['product_id'];?>">
					<div class="modal-header">
							<h4 class="modal-title">تعديل البيانات </h4>
					</div>
						<div class="modal-body">
							<div class="form-group">
								<label>اسم المنتج</label>
								<input type="text" class="form-control" required name="name" value="<?php echo $product['product_name'];?>">
							</div>
                             <hr>
							<div class="form-group">
								<label>تاريخ الانتاج</label>
								<input type="text" class="form-control" name="prodate" value="<?php echo $product['ProDate'];?>">
							</div>
                             <hr>
							<div class="form-group">
								<label>تاريخ انتهاء الصلحية</label>
								<input type="text" class="form-control" name="expdate" value="<?php echo $product['ExpDate'];?>">
							</div>
                             <hr>
							<div class="form-group">
								<label>  السعر</label>
								<input type="text" class="form-control"name="price" value="<?php echo $product['price'];?>">
							</div>
                            <hr>
							<div class="form-group">
								<label>الكمية</label>
								<input type="text" name="quantity" class="form-control"value="<?php echo $product['Stored_quantity'];?>">
							</div>	
              			
						</div>
						<div class="modal-footer">
								<button type="submit"  class="aa-shop-now-btn btn aa-secondary-btn"style="border:0px solid white;height:40px;	border-radius: 3px;" name="update-prodact" value="">تعديل</button>
                                <a href="admin.php" class="aa-shop-now-btn aa-secondary-btn" style="top:40px ;" >إلغاء	</a>
						</div>
  </form>
  </div>
</div>
</div>

<?php
			}
			}
			else
			{
				echo "<h5> No Record Found </h5>";
			}
			?>
</body>
</html>
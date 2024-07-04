<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>صفحة إدارة المنتجات</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
	
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #ddd;
	color: #fff;
	padding: 10px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 6px 6px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 40px;
}

.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
    margin-top:10px;
	margin-right: 350px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}

table.table tr th, table.table tr td {
    text-align: right;
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
    	
</style>
</head>
<body>   
  <header id="aa-header">
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <div class="aa-logo">
                <a href="index.html">
                  <span class="fa fa-shopping-cart"></span>
                  <strong>Binnish Mall</strong>
                </a>
              </div>
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="account.html">   
              <span class="fa fa-user"></span> 
              <span class="aa-cart-title">تسجيل الدخول</span></a>
              </div>                   
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
 
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>إدارة <b>المنتجات</b></h2>
					</div>	
				</div>
			
			</div>
			

			<table class="table table-striped table-hover">
				<thead>		
					<tr>
						<th>رقم المنتج</th>
						<th>اسم المنتج</th>
						<th>سعر المنتج</th>
						<th>تاريخ الانتاج</th>
						<th>تاريخ انتهاء الصلحية</th>
						<th>الكمية</th>
						<th><label>إضافة منتج</label></th> 
						<th>
						<form action="insert.php" method="POST">
							
							<button  class="btn" name="btn" data-toggle="modal" style="background-color:#FF6666;color:#f4d4bd;height:45px; color:#fff;"><i class="material-icons" data-toggle="tooltip" title="إضافة منتج جديد"style="">&#xE147;</i></button>	
				        </form>
						
							
					</th>
					</tr>
				</thead>
				<tbody>       
<!-- جلب البيانات من قاعدة البيانات -->
 <?php 
	$conn=new mysqli("localhost","root","","binnishmall");
	$query = "SELECT * FROM products";

	$query_run = mysqli_query($conn, $query);

	if(mysqli_num_rows($query_run) > 0)
	{
	foreach($query_run as $product)
	{	           
		?>
			<tr>    
                <td><?= $product['product_id'] ;?></td>
                <td><?= $product['product_name'] ;?></td>
                <td><?= $product['price']; ?></td>
                <td><?= $product['ProDate']; ?></td>
                <td><?= $product['ExpDate'] ;?></td>
                <td><?= $product['Stored_quantity']; ?></td>
				<td>
			 	<form action="update.php" method="POST">
				  <button  class="btn" name="btn" data-toggle="modal" style="background-color:#FF6666;color:#f4d4bd;height:45px;color:#fff; "><i class="material-icons" data-toggle="tooltip" title=" تعديل " >&#xE254;</i></button>	
				 <input type="hidden" name="id" value="<?= $product['product_id']; ?>">
				 </form>
                </td>
				<td>
				<form action="code.php" method="POST">
							<input type="hidden" name="Delete" value="<?= $product['product_id']; ?>">
							<button name="delete_prodact"  class="btn" style="background-color:#FF6666;color:#f4d4bd;margin-right:20px;height:45px;" ><i class="material-icons" data-toggle="tooltip" title="حذف" style="color:#fff;">&#xE872;</i></button>
						</form>
				</td>
			</tr>
            </tbody>
         <?php       
    }
	}
	else
		{
			echo "<h5>لا يوجد أي سجل </h5>";
		}
			echo"</table>";
?>
		</div>
	</div>        
</div>

</body>
</html>

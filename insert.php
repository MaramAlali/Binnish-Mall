<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title> إضافة منتج </title>
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
.categories
{
    color:rgb(97, 97, 97);
    border: 1px #bbb solid;
    font-size: 15px;
    padding: 2px;
    border-radius: 2px;
    height: 40px;
    width:340px ;
} 
</style>
</head>
<body> 
<body>       
<div class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
    <form action="code.php" method="POST">
					<div class="modal-header">
					   <h4 class="modal-title"> إضافة منتج </h4>
					</div>
					<div class="modal-body">					
					<div class="form-group">
						<label>اسم المنتج</label>
						<input name="name" type="text" class="form-control" required>
					</div>
					<div class="form-group">
                    <label>الصنف</label>
				
						<select name="categores" class="categories" required>
							<option selected  disabled>اسم القسم</option>
							<option>قسم الغذائية</option>
							<option>قسم الألبسة</option>
							<option> قسم الأدوات المنزلية</option>
							<option>أدوات تجميلية</option>    
						</select>   
					</div>
					<div class="form-group">
						<label>تاريخ الانتاج</label>
						<input type="text" name="prodate" class="form-control">
					</div>
					<div class="form-group">
						<label>تاريخ انتهاء الصلحية</label>
						<input type="text" name="expdate" class="form-control" >
					</div>
                    <div class="form-group">
						<label>السعر</label>
						<input type="text" name="price" class="form-control" required >
					</div>
                    <div class="form-group">
						<label>الكمية</label>
						<input type="text" name="quantity" class="form-control" required >
					</div>					
				</div>
				<div class="modal-footer">
                    <button type="submit" name="insert-prodact"   class="aa-shop-now-btn btn aa-secondary-btn"style="border:0px solid white;height:40px;border-radius: 3px;">إضافة </button>
                    <a href="admin.php" class="aa-shop-now-btn aa-secondary-btn" style="top:40px ;" >إلغاء	</a>
				</div>
              
  </form>
  </div>
</div>
</div>

</body>
</html>
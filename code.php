<?php
  $conn=mysqli_connect("localhost","root","","binnishmall");
  if(mysqli_connect_errno())
  {
    echo '<script>alert("تم الاتصال بنجاح");</script>';
    header("Location: admin.php");

  }
  else
  {
  echo '<script>alert("حدث خطأ ما أثناء عملية الحذف  ");</script>';
  header("Location: admin.php");
  }
 
        //_________________________________insert code
    if(isset($_POST['insert-prodact']))
    {  
        $name=$_POST["name"];
        $cate=$_POST["categores"];
        $price=$_POST["price"];
        $prodate=$_POST["prodate"];
        $expdate=$_POST["expdate"];
        $quantity=$_POST["quantity"];
        if($cate=="قسم الغذائية")
        $value=1;
        elseif($cate=="قسم الألبسة")
        $value=2;
        elseif($cate=="قسم الأدوات التجميلية")
        $value=3;
        elseif($cate=="قسم الأدوات المنزلية")
        $value=4;

        $stmt=$conn->prepare("INSERT into products(product_name,category_id,ProDate
        ,ExpDate,price,Stored_quantity) values(?,?,?,?,?,?);");
        $stmt->bind_param("sissii",$name,$value,$prodate,$expdate,$price,$quantity);
      
        if($stmt->execute())
        {
            echo '<script>alert("تم إضافة العنصر");</script>';
        }  
    else
    {
      echo '<script>alert("حدث خطأ ما أثناء عمليةالإضافة  ");</script>';
 
    }
    }  
        
        // __________________________________delete code
       
        if(isset($_POST['delete_prodact'])) 
        {
            $Delete=$_POST['Delete'];
            $delete=$conn->prepare("DELETE FROM products WHERE product_id='$Delete'");
            $delete->execute();
            if($delete->execute())
            {
            echo '<script>alert("تم حذف العنصر");</script>';
            header("location:admin.php");
            }   
          else
          echo '<script>alert("حدث خطأ ما أثناء عملية الحذف  ");</script>';
          header("location:admin.php");
          
            }
         // __________________________________update code  
         
         if(isset($_POST['update-prodact']))

         {
          $id=$_POST['id'];
          $name=$_POST['name'];
          $prodate=$_POST['prodate'];
          $expdate=$_POST['expdate'];
          $price=$_POST['price'];
          $quantity=$_POST['quantity'];
          $query="UPDATE `products` SET product_name='$name',ProDate='$prodate'
          ,ExpDate='$expdate',price='$price',Stored_quantity='$quantity' WHERE product_id='$id' ";
          $query_run=mysqli_query($conn,$query);

          if( $query_run)
          {
            echo '<script>alert("تم تعديل العنصر");</script>';
           
            }   
          else
          echo '<script>alert("حدث خطأ ما أثناء عملية التعديل  ");</script>';
         
          
         }        
        
     ?>
     
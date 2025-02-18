<?php
include "connect.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>reservation</title>
</head>
<body>
    <!--  start تحكم ادمين-- ---->
 <div class="reservation">
 <form action="index.php"method="post">
   <nav>
   <img src="gettyimages-155439315.webp"alt="">
    <h4> reservation </h4>


     <label> Name Customer</label><br>
     <input type="text" name="NAME"><br>


     <label> customer Email</label><br>
     <input type="text" name="EMAIL"><br>

     <label> Address</label><br>
     <input type="text" name=""><br>


     <label>  customer Telephone</label><br>
     <input type="text"name="TELEPHONE"><br>


    <label>date</label><br>
    <input type="date"name="DATE"><br>


    <button type="reset">Reset</button>
    <button type="submit" name="sub">Add</button>


     <div class="social">
     <i class="fa-brands fa-facebook"></i>
     <i class="fa-brands fa-twitter"></i>
     <i class="fa-solid fa-share"></i>
     </div>
   </nav>
     <!--  end  admin panel ---->
     <!--  start  info---->

     <div class="info"> 
        <table>
        <tr>
        <th> id </th>
         <th>Name Customer</th>
         <th> Email</th>
         <th>Telephone</th>
         <th>date</th>
         
        </tr>
       <?php
         $query="SELECT * FROM customer";
         $result = mysqli_query($con,$query);
         if($result){
           while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>" . $row['id'] .
            
           
            "</td><td>" . $row['NAME'] .
            "</td><td>" . $row['EMAIL'] .
            "</td><td>" . $row['TELEPHONE'] .
            "</td><td>" . $row['DATE'] .
            "</td></tr>";
           
           }
        
          }
         
         ?>"
      
        
         
      
         
<!-- end info---!!>
             
     
 
          
            
      
      
    
   
      </form>
      <?php
 //insert info
   if(['sub']){
  @$name   =$_POST['NAME'];
  @$email  =$_POST['EMAIL'];
  @$Telephone  =$_POST['TELEPHONE'];
  @$date       =$_POST['DATE'];
   


    $query="INSERT INTO customer(NAME,EMAIL,TELEPHONE,DATE)VALUES('$name','$email', '$Telephone','$date')";
    $result = mysqli_query($con,$query);
    
     echo"تم الحجز";
 

   }


?>

 </div> 


</body>
</html>

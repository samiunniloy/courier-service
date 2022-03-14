<?php include('C:/xampp/htdocs/courier-service/config/constants.php');
?>
<html>
    <head>
        <title>
            received mal jinis
        </title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>
        <div class="login text-center">
            <h1 class="text-center">Delivered Orders</h1> <br>
            <?php
            if(isset($_SESSION['user-login'])){
                echo $_SESSION['user-login'];
                unset($_SESSION['user-login']);
            }
            if(isset($_SESSION['no-login-message'])){
                echo $_SESSION['no-login-message'];
                unset($_SESSION['no-login-message']);
            }
            ?>
            <br>
            <form action=""method="POST">
            Serial No
            <br>
            <br>
            <input type="text"name="serial_no"Placeholder="Enter Serial No" class="text-center">
            <br>
            <br>
            <input type="submit"name="submit"value="Submit"class="btn-primary" class="text-center">
            <br><br>
            <br>

        </div>
        <div>
            <table class="admin">
                       <tr>
                           <th>Serial No</th>
                           <th>Bill</th>
                           <th>Weight</th>
                           <th>Phone No</th>
                           <th>Branch No </th>
                       </tr>
                      
        </div> 
</html>
<?php
    if(isset($_POST['submit'])){
$serial_no=$_POST['serial_no'];
$sql="SELECT * FROM `consignment` WHERE serial_no='$serial_no'";
$res=mysqli_query($conn,$sql);
$sql2="DELETE FROM `consignment` WHERE serial_no='$serial_no'";
$res2=mysqli_query($conn,$sql2);
    $ro=mysqli_fetch_assoc($res);
    $s_no=$serial_no;
    $bill=$ro['bill'];
    $weight=$ro['weight'];
    $phone_no=$ro['phone_no'];
    $branch_no=$ro['branch_no'];
    
    $sql3="INSERT INTO `received`(`serial_no`, `bill`, `weight`, `phone_no`, `branch_no`) VALUES ('$s_no','$bill','$weight','$phone_no','$branch_no')";
   $res5=mysqli_query($conn,$sql3);





    }


?>


<?php
$sql="SELECT * FROM `received` ";
    $res=mysqli_query($conn,$sql);
     $count=mysqli_num_rows($res);
      while($rows=mysqli_fetch_assoc($res))
      {
          $serial_no=$rows['serial_no'];
          $bill=$rows['bill'];
          $phone_no=$rows['phone_no'];
          $branch_no=$rows['branch_no'];
          $weight=$rows['weight'];
          ?>
  
           <tr>
               <td><?php echo $serial_no; ?></td>
               <td><?php echo $bill; ?></td>
               <td><?php echo $weight; ?></td>
               <td><?php echo $phone_no; ?></td>
               <td><?php echo $branch_no; ?></td>
               
              <br>
              <br>
           </tr>
           <?php
          }
          ?>

          <a href="http://localhost/courier-service/office/index.php" class="btn-primary">Home</a>
          <?php 
          ?>
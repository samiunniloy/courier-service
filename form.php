<?php include('C:/xampp/htdocs/courier-service/config/constants.php');
?>
<html>
    <head>
        <title>
            User Sign-up
        </title>
        <link rel="stylesheet" href="css/admin.css">
    </head>
        <div class="login text-center">
            <h1 class="text-center">Form</h1> <br>
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
               Sender Name
                <input type="text"name="s_name" placeholder="Enter Sender number" class="text-center">
                <br>
                Sender address
            <input type="text"name="s_address"Placeholder="Enter Address" class="text-center">
            <br>
            Sender phone No
            <input type="name" name="s_phone_no" placeholder="Enter phone number" class="text-center">
            <br>
            Receiver Name
                <input type="text"name="r_name" placeholder="Enter receiver number" class="text-center">
                <br>
            Receiver address
            <input type="text"name="r_address"Placeholder="Enter Address" class="text-center">
            <br>
            Receiver phone No
             <br>
            <input type="name" name="r_phone_no" placeholder="Enter phone number" class="text-center">
            <br>
            Weight
            <br>
            <input type="text"name="weight"placeholder="Enter weight" class="text-center">
            <br>
            <input type="submit"name="submit"value="Submit"class="btn-primary" class="text-center">
            <br><br>
            <br>
            </form>
            <p class="text-center">Created By Group 12.</p>
        </div>
        <div>
            <table class="admin">
                       <tr>
                           <th>Serial No</th>
                           <th>Bill</th>
                           <th>Branch</th>
                           <th>Weight</th>
                           <th>Receiver Phone No</th>
                           <th>Receiver Address</th>
                       </tr>
                      
        </div> 
        <a href="index.php" class="btn-primary">Home</a>
</html>

<?php

    if(isset($_POST['submit'])){ 
        $s_name=$_POST['s_name'];
      $s_address=$_POST['s_address'];
      $s_phone_no=$_POST['s_phone_no'];
      $r_name=$_POST['r_name'];
       $r_address=$_POST['r_address'];
       $r_phone_no=$_POST['r_phone_no'];
$weight=$_POST['weight'];

$sql5="INSERT INTO `consignor`(`phone_no`, `name`, `address`) VALUES ('$s_phone_no','$s_name','$s_address')";
 $res3=mysqli_query($conn,$sql5);
$bill=$weight*10;
$sql2="SELECT branch_no FROM `branch` WHERE address='$r_address'";
$br=mysqli_query($conn,$sql2);
$ro=mysqli_fetch_assoc($br);
$branch=$ro['branch_no'];
$sql22="select max(serial_no) as serial_no from consignment ";
if($res22=mysqli_query($conn,$sql22)){
    $row=mysqli_fetch_assoc($res22);
    $sno=$row['serial_no']+1;
}
else "error ";

$sql3="INSERT INTO `consignment`( `destination`, `weight`, `bill`, `phone_no`, `branch_no`,`serial_no`) VALUES ('$r_address','$weight','$bill','$r_phone_no','$branch','$sno')";
$res2=mysqli_query($conn,$sql3);
 $sql="INSERT INTO `consignee`(`phone_no`, `name`, `address`, `serial_no`) VALUES ('$r_phone_no','$r_name','$r_address','$sno')";
 $res = mysqli_query($conn,$sql); 
 
     if($res==TRUE&&$res2==TRUE&&$res3==TRUE){ 
        //$_SESSION['consignor']=" Added successfully";
        //header("location:".SITEURL.'user-login.php');
        ?>
        <tr>
            <td><?php echo $sno ?></td>
            <td><?php echo $bill?></td>
            <td><?php echo $branch?></td>
            <td><?php echo $weight ?></td>
            <td><?php echo $r_phone_no ?></td>
            <td><?php echo $r_address ?></td>
            <td><?php  ?></td>
        </tr>
        <?php
          }
     else{
        $_SESSION['user-login']="Failed to user";
        header("location:".SITEURL.'user-signup.php');
     }
    }

?>
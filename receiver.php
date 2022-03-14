<?php include('C:/xampp/htdocs/courier-service/config/constants.php');
?>
<html>
    <head>
        <title>
            receiver
        </title>
        <link rel="stylesheet" href="css/admin.css">
    </head>
        <div class="login text-center" id="login1">
            <h1 class="text-center">Order information</h1> <br>
            <?php
            if(isset($_SESSION['receiver'])){
                echo $_SESSION['receiver'];
                unset($_SESSION['receiver']);
            }
            if(isset($_SESSION['no-receiver-message'])){
                echo $_SESSION['no-receiver-message'];
                unset($_SESSION['no-receiver-message']);
            }
            ?>
            <br>
            <form action=""method="POST">
            Phone Number
            <br>
            <br>
            <input type="text"name="phone_no"Placeholder="Enter Receiver Phone no." class="text-center">
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
                           <th>Receiver Phone No</th>
                           <th>Destination</th>
                           <th>Destination Branch No</th>
                       </tr>
                      
        </div> 
</html>
<?php
    if(isset($_POST['submit'])){
        

        $phone_no=$_POST['phone_no'];
        
     $sql="SELECT * FROM `consignment` WHERE phone_no='$phone_no'";
    $res=mysqli_query($conn,$sql);
      $count=mysqli_num_rows($res);
      
       if($count>0){
          
  
      while($rows=mysqli_fetch_assoc($res))
      {
          $serial_no=$rows['serial_no'];
          $bill=$rows['bill'];
          $destination=$rows['destination'];
          $phone_no=$rows['phone_no'];
          $branch_no=$rows['branch_no'];
          $weight=$rows['weight'];
  
         
          
          ?>
  
           <tr>
               <td><?php echo $serial_no; ?></td>
               <td><?php echo $bill; ?></td>
               <td><?php echo $weight; ?></td>
               <td><?php echo $phone_no; ?></td>
               <td><?php echo $destination; ?></td>
               <td><?php echo $branch_no; ?></td>
              
           </tr>
           <?php     }


        }
        else{
            $_SESSION['login']="<div class='error text-center'>Name or Password didn't match.</div>";
            header('location:'.SITEURL.'receiver.php');
        }
    }


?>




     </table>



    </div>
    </div>
    <a href="index.php" class="btn-primary text-center">Home</a>
</body>
</html>
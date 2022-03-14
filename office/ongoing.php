<?php include('C:/xampp/htdocs/courier-service/config/constants.php');
?>
<h1 class="text-center ">Ongoing Order</h1>
<a href="index.php" class="text-center btn-primary">Admin Panel</a>
<?php
$sql="SELECT * FROM `consignment` ";
    $res=mysqli_query($conn,$sql);
      $count=mysqli_num_rows($res);
      
      
    
      while($rows=mysqli_fetch_assoc($res))
      {
          $serial_no=$rows['serial_no'];
          $bill=$rows['bill'];
          $destination=$rows['destination'];
          $phone_no=$rows['phone_no'];
          $branch_no=$rows['branch_no'];
          $weight=$rows['weight'];
  
         
          
          ?>
          <html>
    <link rel="stylesheet" href="../css/admin.css">
  <div>
  <table class="admin">
             <tr>
                 <th>Serial No</th>
                 <th>Bill</th>
                 <th>Weight</th>
                 <th>Phone No</th>
                 <th>Destination </th>
                 <th>Branch No</th>
             </tr>          
</div>
 </html>
          
           <tr>
               <td><?php echo $serial_no; ?></td>
               <td><?php echo $bill; ?></td>
               <td><?php echo $weight; ?></td>
               <td><?php echo $phone_no; ?></td>
               <td><?php echo $destination; ?></td>
               <td><?php echo $branch_no; ?></td>
               
              <br>
              <br>
           </tr>
           <?php
          }
          ?>
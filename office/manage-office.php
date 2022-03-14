<?php include('partials/menu.php');
?>
        <div class="main">
                <div class="wrapper">
                   <h3>Manage office</h3>
                   <br> 
                   <br>
                   <a href="add-admin.php"class="btn-primary">Add Admin</a>
                   <br>
                   <br>
                   <?php
                    if(isset($_SESSION['add'])){
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }
                   ?>
                   <br>
                   <br>
                   <table class="admin">
                       <tr>
                           <th>Branch No</th>
                           <th>Name</th>
                           <th>Phone No</th>
                           <th>Address</th>
                       </tr>

                       <?php
                            $sql="SELECT * FROM office";
                            $res=mysqli_query($conn,$sql);
                            if($res==TRUE){
                                $count= mysqli_num_rows($res);
                                $sn=1;
                                if($count>0){
                                    while($rows=mysqli_fetch_assoc($res)){
                                        $branch_no=$rows['branch_no'];
                                        $name=$rows['name'];
                                        $phone_no=$rows['phone_no'];
                                        $address=$rows['address'];
                                        ?>
                                        <tr>
                           <td><?php echo $sn++?></td> 
                           <td><?php echo $name?></td>
                           <td><?php echo $phone_no?></td>
                           <td><?php echo $address?></td>
                       </tr>
                                        <?php
                                    }
                                }
                                else{
                                }
                            }
                       ?>
                   </table>
                </div>
            </div>
<?php include('partials/footer.php');
?>
  
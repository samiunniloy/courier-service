<?php include('partials/menu.php');
?>
        <div class="main">
                <div class="wrapper">
                   <h3>Manage Employee</h3>
                   <br> 
                   <br>
                   <a href="add-emp.php"class="btn-primary">Add Employee</a>
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
                           <th>Name</th>
                           <th>Phone No</th>
                           <th>Address</th>
                           <th>Job category</th>
                       </tr>

                       <?php
                            $sql="SELECT * FROM employee";
                            $res=mysqli_query($conn,$sql);
                            if($res==TRUE){
                                    while($rows=mysqli_fetch_assoc($res)){
                                        $name=$rows['name'];
                                        $phone_no=$rows['phone_no'];
                                        $address=$rows['address'];
                                        $job_cat=$rows['job_cat'];
                                        ?>
                                        <tr>
                           <td><?php echo $name?></td>
                           <td><?php echo $phone_no?></td>
                           <td><?php echo $address?></td>
                           <td><?php echo $job_cat?></td>
                       </tr>
                                        <?php
                                    }
                                }
                                                            
                       ?>
                   </table>
                </div>
            </div>
<?php include('partials/footer.php');
?>
  
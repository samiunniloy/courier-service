<?php include('partials/menu.php');
?>
<div class="main">
    <div class="wrapper">
        <h1>Add Employee</h1>
        <br>
        <br>
        <form action=""method="POST">
            <table class="add-admin">
                 <?php
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }
                   ?>
                <tr>
                    <td>Name:</td>
                    <td><input type="text"name="name" placeholder="Enter your name"></td>
                </tr>
                <td>Phone No:</td>
                   <td> <input type="password" name="phone_no"placeholder="Enter Phone number"></td>
                <tr>
                    <td>Address:</td>
                    <td><input type="text"name="address" placeholder="Enter your Number"></td>
                </tr>
                <tr>
                    <td>job category</td>
                    <td><input type="text"name="job_cat" placeholder="Enter your Address"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-second">

                    </td>
                </tr>
                
            </table>
        </form>
    </div>
</div>
<?php include('partials/footer.php');
?>

<?php
    if(isset($_POST['submit']))
    {
         //echo "Button clicked";
        $name=$_POST['name'];
        $phone_no=$_POST['phone_no'];
        $address=$_POST['address'];
        $job_cat=$_POST['job_cat'];

        $sql="INSERT INTO employee SET
            name='$name',
            phone_no='$phone_no',
            address='$address',
            job_cat='$job_cat'

        ";
        $res = mysqli_query($conn,$sql) or die(mysqli_error());
        if($res==TRUE){
            $_SESSION['add']="Admin Added successfully";
            header("location:".SITEURL.'office/order.php');
        }
        else{
            $_SESSION['add']="Failed to add admin";
            header("location:".SITEURL.'office/add-emp.php');
        }
    }
?>
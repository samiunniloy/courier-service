<?php include('partials/menu.php');
?>
<div class="main">
    <div class="wrapper">
        <h1>Add Admin</h1>
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
                <td>Password:</td>
                   <td> <input type="password" name="password"placeholder="Enter Password"></td>
                <tr>
                    <td>Phone No:</td>
                    <td><input type="text"name="phone_no" placeholder="Enter your Number"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text"name="address" placeholder="Enter your Address"></td>
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
        $password=md5($_POST['password']);
        $phone_no=$_POST['phone_no'];
        $address=$_POST['address'];

        $sql="INSERT INTO office SET
            name='$name',
            password='$password',
            phone_no='$phone_no',
            address='$address'

        ";
        $res = mysqli_query($conn,$sql) or die(mysqli_error());
        if($res==TRUE){
            $_SESSION['add']="Admin Added successfully";
            header("location:".SITEURL.'office/manage-office.php');
        }
        else{
            $_SESSION['add']="Failed to add admin";
            header("location:".SITEURL.'office/add-admin.php');
        }
    }
?>
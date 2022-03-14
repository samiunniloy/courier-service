<?php include('C:/xampp/htdocs/courier-service/config/constants.php');
?>
<html>
    <head>
        <title>
            User Sign-up
        </title>
        <link rel="stylesheet" href="css/admin.css">
    </head>
        <div class="login text-center"id="login1">
            <h1 class="text-center">Sign-up</h1> <br>
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
            Phone No:
                <input type="text"name="phone_no" placeholder="Enter phone number" class="text-center">
            Name :
            <input type="text"name="name"Placeholder="Enter Name" class="text-center">
            <br>
            Password:
            <input type="password" name="password" placeholder="Enter password" class="text-center">
            <br>
            <br>
            <input type="submit"name="submit"value="signup"class="btn-primary" class="text-center">
            <br><br>
            <br>
            </form>
</html>
<?php
    if(isset($_POST['submit'])){
        $phone_no=$_POST['phone_no'];
        $name=$_POST['name'];
        $password=($_POST['password']);
        $sql="INSERT INTO `user-login`(`phone_no`, `name`, `password`) VALUES ('$phone_no','$name','$password')";
    $res = mysqli_query($conn,$sql) or die(mysqli_error());
    if($res==TRUE){
        $_SESSION['user-login']="User Added successfully";
        header("location:".SITEURL.'user-login.php');
    }
    else{
        $_SESSION['user-login']="Failed to user";
        header("location:".SITEURL.'user-signup.php');
    }
    }

?>
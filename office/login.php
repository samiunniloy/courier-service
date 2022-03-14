<?php include('../config/constants.php');
?>
<html>
    <head>
        <title>
            Login - Courier order System
        </title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>
        <div class="login text-center" id="login1">
            <h1 class="text-center">Admin Login</h1> <br>
            <?php
            if(isset($_SESSION['login'])){
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
            if(isset($_SESSION['no-login-message'])){
                echo $_SESSION['no-login-message'];
                unset($_SESSION['no-login-message']);
            }
            ?>
            <br>
            <form action=""method="POST">
                Name :
            <input type="text"name="name" placeholder="Enter Name" class="text-center">
            <br>
            <br>
            Password:
            <input type="password" name="password" placeholder="Enter password" class="text-center">
            <br>
            <br>
            <input type="submit"name="submit"value="Login"class="btn-primary" class="text-center">
            <br><br>
            </form>
            <p class="text-center">Created By Group 12.</p>
        </div>
</html>
<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $password=md5($_POST['password']);
        $sql="SELECT * FROM office where name='$name' AND password='$password'";
        $res=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($res);
        if($count==1){
            $_SESSION['login']="<div class='success'>Login Successful.</div>";
            $_SESSION['user']=$name;
            header('location:'.SITEURL.'office/');
        }
        else{
            $_SESSION['login']="<div class='error text-center'>Name or Password didn't match.</div>";
            header('location:'.SITEURL.'office/login.php');
        }
    }

?>
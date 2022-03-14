<?php include('C:/xampp/htdocs/courier-service/config/constants.php');
?>
<html>
    <head>
        <title>
            User Login
        </title>
        <link rel="stylesheet" href="css/admin.css">
    </head>
        <div class="login text-center" id="login1">
            <h1 class="text-center">User Login</h1> <br>
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
             Name :
            <input type="text"name="name"Placeholder="Enter Name" class="text-center">
            <br>
            Password:
            <input type="password" name="password" placeholder="Enter password" class="text-center">
            <br>
            <br>
            <input type="submit"name="submit"value="Login"class="btn-primary" class="text-center">
            <br><br>
            <br>

            <a href="user-signup.php" class="btn-second">click here for Sign-Up</a>
</html>
<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $password=($_POST['password']);
        $sql="SELECT * FROM `user-login` WHERE name='$name' && password='$password';";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
            header('location:'.SITEURL.'UI.php');
        }
        else{
            $_SESSION['user-login']="<div class='error text-center'>Name or Password didn't match.</div>";
            header('location:'.SITEURL.'user-login.php');
        }
    }


?>
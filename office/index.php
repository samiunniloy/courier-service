<?php include('partials/menu.php');
?>
        
        <div class="main">
                <div class="wrapper">
                    <h1>
                        Welcome To Admin Panel
                    </h1>
                    <br><br>
                    <?php
            if(isset($_SESSION['login'])){
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
            ?>

        <!--Main content-->
<?php include('partials/footer.php'); 
?>
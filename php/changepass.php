<?php
		session_start();
 
        include '../../stock/html/layout/footer.php';

        include '../../stock/php/global.php';

        include '../../stock/php/connection.php';

        $email=$_SESSION['eemail'];


        $password=$_POST['password'];

        $hashpass=md5($password);

        $query="update user set password='$hashpass' where email='$email'";

        $processquery=mysqli_query($con,$query);

        if($processquery){

            header('location:'.plogin);

        }



?>
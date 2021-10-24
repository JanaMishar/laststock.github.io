<?php
        session_start(); 
        require_once("../../stock/php/connection.php");

        $email = $_POST['email'];

        $checkEmail=mysqli_query($con, "select email from user where email='$email'");
        $count=mysqli_num_rows($checkEmail);

        if ($count>0) {
            $response = array('email'=>$email,'isvalid'=>false);


        }else {
            $response = array('email'=>$email,'isvalid'=>true);
        }

        echo (json_encode($response));

?>

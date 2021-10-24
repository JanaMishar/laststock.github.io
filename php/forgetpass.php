<?php
	include 'connection.php';
	 include '../../stock/php/global.php';

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;

	require 'vendor/autoload.php';

	if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$query="select * from user where email='$email'";
		

		$processquery=mysqli_query($con,$query);
		$fdata=mysqli_fetch_assoc($processquery);
		$name=$fdata['name'];
		$mailcount=mysqli_num_rows($processquery);

		if($mailcount>0){
			$mail =new PHPMailer();
			$mail->isSMTP();
			$mail->SMTPAuth=True;
			$mail->Host='smtp.gmail.com';
			$mail->Port='587';
			

			
			$mail->setFrom('admon3472@gmail.com', 'Admin');
			$mail->Username='admon3472@gmail.com';
			$mail->Password='mjmafia1122';
			$mail->addAddress($email , 'Mishar Jana');

			
			$mail->isHTML(true);
			$mail->Subject=$name . ' welcome to web world';
			$mail->Body= "http://localhost/stock/html/changepassword.php?email=$email";
	
			if(!$mail->send()){
				echo 'message not send';
			}else{
				header('location:'.forgetpassword);
				}

			}

			if($processquery){
				header('location:'.forgetpassword);
			}

}

?>
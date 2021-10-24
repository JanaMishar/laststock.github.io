

<?php

	session_start();

	
	 
    include '../../stock/php/global.php'; 

	
	include 'connection.php';
	

	if(isset($_POST['submit'])){

		$email=$_POST['email'];
		$password=$_POST['password'];

		$query="select * from user where email ='$email'";

		$processquery=mysqli_query($con,$query);

		$fetchdata=mysqli_fetch_assoc($processquery);

		$dbpass=$fetchdata['password'];

		$utype=$fetchdata['utype'];

		$name=$fetchdata['name'];



		$_SESSION['name']=$name;

		$dbemail=$fetchdata['email'];

		$_SESSION['email']=$dbemail;

		
		$checkpass=md5($password);

		
		

		if(($checkpass==$dbpass) && ($utype=='admin')){
			header("location:".admin);



			$curl = curl_init();
			$url = "https://raw.githubusercontent.com/typicode/demo/master/db.json";
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);



			$resp = curl_exec($curl);

			

			curl_close($curl);

			$op=json_decode($resp,true);

			$_SESSION['profile'] = ($op['profile']['name']);



			
		

		}elseif(($checkpass==$dbpass) && ($utype=='user')){
			header('location:'.user);


			$curl = curl_init();
			$url = "https://raw.githubusercontent.com/typicode/demo/master/db.json";
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);



			$resp = curl_exec($curl);

			echo var_dump($resp);

			curl_close($curl);

			$op=json_decode($resp,true);

			$_SESSION['profile'] =($op['profile']['name']);


		}else{
			
			echo 'user not registered';
		}


	}


?>
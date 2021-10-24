<?php

	include 'pdoconnection.php';

		$id=$_POST['id'];
		$query="delete from user where id='".$id."'";
		$processquery=$conn->prepare($query);
		$processquery->execute();

		$response=array('id' => $id );

		echo json_encode($response);


?>
<?php
	$title='View Stocks';
	include '../../stock/php/global.php';
	include '../../stock/html/layout/header.php'; 
		

?>


<?php 
	if(!isset($_SESSION['logedinuser'] )){
		header('location:'.user);
	}

?>
<h1>Stock Details</h1>

<meta name="viewport" content="width=device-width, initial-scale=1.0">



<link href="<?=css.'/bootstrap.min.css'?>" rel="stylesheet">
<link href="<?=css. 'font-awesome.css'?> " rel="stylesheet">

<link href="<?=css.'animate.css'?>"   rel="stylesheet">
<
<link rel="stylesheet" type="text/css" href="<?=css.'style.css'?>">




<br>
<br>
<div style="margin: 20px;">
<div class="ibox-content">

	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>DATE</th>
				<th>X AXIS</th>
				<th>Y AXIS</th>
				
			</tr>
		</thead>
		<?php
		include '../../stock/php/connection.php';

		$query="select * from stock";
		$processquery=mysqli_query($con,$query);

		while($result=mysqli_fetch_assoc($processquery)){


		 

		  ?>


		  

		  <tbody>
			<tr id="ac_<?php echo $result['id']; ?>">
				<td><?php echo $result['id']; ?></td>
				<td><?php echo $result['date']; ?></td>
				<td><?php echo $result['xaxis']; ?></td>
				<td><?php echo $result['yaxis']; ?></td>
				
			</tr>
			
		</tbody>
		<?php
	}

	?>
</table>

</div>
</div>


<script>
	$(document).ready(function(){
		$('.i-checks').iCheck({
			checkboxClass: 'icheckbox_square-green',
			radioClass: 'iradio_square-green',
		});
	});
</script>


<?php

include '../../stock/html/layout/footer.php';

?>

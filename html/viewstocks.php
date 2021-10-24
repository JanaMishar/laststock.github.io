<?php
	$title='View Stocks';
	include '../../stock/php/global.php';
	include '../../stock/html/layout/header.php'; 
		

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
				<th>Actions</th>
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
				<td>
					<a href="../../stock/php/stockupdate.php?idu=<?php echo $result['id']; ?>" class='btn btn-danger'>Update</a>
					<button  type='button' class='btn btn-danger' onclick="fun('<?php echo $result['id']; ?>' )"> delete</button>
				</td>
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
<script src="<?=jquery ?>"></script>

<script src="<?=javascript.'stockdelete.js' ?>"></script>



<?php

include '../../stock/html/layout/footer.php';

?>

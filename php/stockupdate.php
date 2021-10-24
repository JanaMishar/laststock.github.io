<!DOCTYPE html>
<html>
<?php
 

    $title='Stock Update';
    include '../../stock/php/global.php';
   

?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Stock Update</title>

   

    <link href="<?=css.'bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?=css.'font-awesome.css'?>" rel="stylesheet">

    <link href="<?=css.'custom.css'?>" rel="stylesheet">

    <link href="<?=css.'animate.css'?>"   rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=css.'style.css'?>">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Add Stock</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                
            </p>
            
            <form class="m-t" role="form" method="post" >

            	<?php

            		include 'connection.php';
            		$id=$_GET['idu'];
            		$query="select * from stock where id='$id'";
            		$processquery=mysqli_query($con,$query);
            		while (($result=mysqli_fetch_assoc($processquery))) {
            			

            	?>
            	<div>
                <div class="form-group">
                    <label>Enter Date :</label>
                    <input type="date" name="date" class="form-control" name="name" placeholder="Date" value="<?php echo $result['date'] ?>">
                </div>

                <div class="form-group">
                    <label>Enter  x axis :</label>
                    <input type="text" class="form-control" name="xaxis" placeholder="xaxis" value="<?php echo $result['xaxis'] ?>">
                </div>

                 <div class="form-group">
                    <label>Enter  y axis :</label>
                    <input type="text" class="form-control" name="yaxis" placeholder="yaxis" value="<?php echo $result['yaxis'] ?>">
                </div>
           

              
                <br>
                
                
                <br>
                <br>
                
              
               <input type="submit" name="submit">

                </div>

              <?php 


                	}
                ?>
                
            </form>

                
            
    </div>

    
      <script src="<?=js.'jquery-3.1.1.min.js' ?>"></script>
   
    <script src="<?=js .'jquery.metisMenu.js'?>"></script>
    <script src="<?=js.'jquery.slimscroll.min.js' ?>"></script>

   

</body>



</html>



<?php
    include '../../stock/php/connection.php';

    if(isset($_POST['submit'])){
            $date=date('y-m-d',strtotime($_POST['date']));
            $xaxis=$_POST['xaxis'];
            $yaxis=$_POST['yaxis'];

            $query="update stock set date='$date',xaxis='$xaxis',yaxis='$yaxis' where id='$id'";
            $processquery=mysqli_query($con,$query);

            if($processquery){
            	header('location:'.viewstock);
            }else{
            	header('location:'.addstock);
            }



    }
    

?>






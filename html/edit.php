<?php
session_start();
    include '../../stock/php/connection.php';
    include '../../stock/php/global.php';

    $id=$_GET['idu'];

    $query="select * from user where id='$id'";

    $processquery=mysqli_query($con,$query);

    while($result=mysqli_fetch_assoc($processquery)){

    

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register</title>

  
   
    <link rel="stylesheet" type="text/css" href="<?=css.'style1.css'?>">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Update</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                
            </p>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" method="post" >

                <div class="form-group">
                    <label>Enter Name :</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $result['name']; ?>" placeholder="Name" >
                </div>

                <div class="form-group">
                    <label>Enter Email :</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $result['email']; ?>" placeholder="Email" >
                </div>
              
                <br>
                <label>User Type</label>
                <select name="utype" >
                <option value="<?php echo $result['utype']; ?>">Choose User Type</option>
                 <option value="admin">Admin</option>
                  <option value="user">User</option>
                </select>
                <br>
                <br>
                
             
               <input type="submit" name="submit">
                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="../../stock/html/login.php">Already Have An Account</a>
            </form>

            <?php
        }

            ?>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

 
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>

<?php
    include '../../stock/php/connection.php';

    if(isset($_POST['submit'])){
        $id=$_GET['idu'];

        $name=$_POST['name'];
        $email=$_POST['email'];
        $utype=$_POST['utype'];
        $password=$_POST['password'];

        

        $query="update user set name='$name',email='$email',utype='$utype' where id='$id'";
        $processquery=mysqli_query($con,$query);
        if($processquery){
            header('location:'.admin);
        }
         


         
         

    }



?>






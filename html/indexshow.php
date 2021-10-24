<!DOCTYPE html>
<html>

<head>
    <?php
        $title='Registration';
        include '../../stock/html/layout/header.php'; 
        
        include '../../stock/php/global.php';

    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



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
            <h3>Welcome to Stock please Register</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                
            </p>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" method="post" action="../../stock/php/register.php">

                <div class="form-group">
                    <label>Enter Name :</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" >
                </div>

                <div class="form-group">
                    <label>Enter Email :</label>
                    

                    <span class="input-icon">
                  <input type="email" class="form-control" name="email" id="email" onBlur="checkemail()" placeholder="Enter your Email" required>
                 </span>
                   <div id="emailavailable"></div>


                </div>
                
                <br>
                <label>User Type</label>
                <select name="utype">
                <option value="">Choose User Type</option>
                 <option value="admin">Admin</option>
                  <option value="user">User</option>
                </select>
                <br>
                <br>
                
               


               <input type="submit" name="submit">

              
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href=
                "plogin">Already Have An Account</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    
     <script src="<?=js.'jquery-3.1.1.min.js' ?>"></script>
    <script src="<?=js .'jquery.metisMenu.js'?>"></script>
    <script src="<?=js.'jquery.slimscroll.min.js' ?>"></script>


     
  <?php
  
    include 'layout/footer.php';

  ?>

<script src="<?=javascript.'emailvalidation.js' ?>"></script>

</body>

</html>











<?php


session_start();

  $url= $_GET['path'];
  
 

  switch ($url) {
  case "plogin":
    include('login.php');
    break;

case "ind":
    include('indexshow.php');
    break;

case "userviewstock":
    include('userviewstock.php');
    break;

case "forgetpassword":
    include('forgetpassword.php');
    break;

case "userviewstock":
    if(isset($_SESSION['logedinuser'] )){
    include('userviewstocks.php');
}
case "admin":
    if(isset($_SESSION['name'])){
    include('admina.php');
  
}else{
    include('login.php');
}
   
 break;

case "user":
    if(isset($_SESSION['name'])){
    include('user.php');
    
    
}else{
    include('login.php');
   
}
 break;

case "addstock":
    if(isset($_SESSION['logedinadmin'])){
    include('addstock.php');
  
}else{
    include('login.php');
 
}
   break;


case "viewstock":
    if(isset($_SESSION['logedinadmin'] )){
    include('viewstocks.php');
 
}elseif(isset($_SESSION['logedinuser'] )){
    include('viewstocks.php');



}else{
    include('login.php');
   
}
   
break;

  
default:
    include('indexshow.php');
    break;

    
}
?>

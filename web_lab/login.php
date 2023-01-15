<?php
session_start();
if(isset($_SESSION['username'])){
  header('Location:dashboard.php');
}
  if($user=="admin" && $pass=="admin123"){
      $_SESSION['username']=$user;
      // location:()
      header('location:dashboard.php');
  }else{
    echo "<script>alert('Username and password does not match')</script>";
    }
?>
   <form name="login" method="post" action="">
       <input type="text" name="username" />
       <input type="password" name="password">
       <input type="submit" value="Login" name="log"/>
    </form>

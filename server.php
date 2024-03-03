<?php
$HOSTNAME='localhost';
$USERNAME='csec06';
$PASSWORD='csec06';
$DATABASE='csec06';
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if($con)
{
//  echo "connection successfull";
}
else{
    die(mysqli_error($con));
}

//connection successfull
/*
<?php

$registered=0;
$userexist=0;
if ($_SERVER['REQUEST_METHOD']=='POST'){
  include 'server.php';

 //include 'loginphp.php';
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $gender=$_POST['gender'];
  $phno=$_POST['phno'];
  $sql="SELECT * FROM dataprofile WHERE email='$email' ";
  echo 'hi';
  $result=mysqli_query($con,$sql);
  if($result)
  { 
    $num=mysqli_num_rows($result);
    if ($num>0)
    {
   //  echo "user already exit";
      $userexist=1;
    }
    else {
      $sql="INSERT INTO dataprofile (name, password, email , gender , phno) VALUES ('$name','$password','$email','$gender','$phno')";
      $result=mysqli_query($con,$sql);
      if ($result)
      {
     //echo 'REGISTERED successfully';
        $registered=1;
      }
      else{
        die(mysqli_error($con));
      }
    }
  }
  
}
/*
   This is a multi-line comment.
   It can span multiple lines.
*/

?>



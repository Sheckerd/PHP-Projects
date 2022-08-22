<?php
include 'connect.php';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

if(!empty($name) and !empty($email) and !empty($mobile) and !empty($password)){

  $sql    = "insert into `crud`(name,email,mobile,password)
             values('$name','$email','$mobile','$password')";
             
  $result = mysqli_query($connect, $sql);

          if($result){
            header('location:display.php');
          } 
} else {
 echo "abandona tus sueños, y muere." ;
}
  
  
}


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Best CRUD Ever</title>
</head>
<body>
<div class="container my-5">

<form method="post">

    <div class="form-group">

    <label class="mt-2 mb-2">Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
  </div>
  <div class="form-group">
    <label class="mt-2 mb-2">Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
  </div>
  <div class="form-group">
    <label class="mt-2 mb-2">Mobile Number</label>
    <input type="text" class="form-control" placeholder="Enter your mobile Number" name="mobile" autocomplete="off">
  </div>
  <div class="form-group">
    <label class="mt-2 mb-2">Password</label>
    <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
  </div>
  
  <button type="submit" class="btn btn-primary mt-4" name="submit">Submit</button>
</form>
</div>


</body>
</html>
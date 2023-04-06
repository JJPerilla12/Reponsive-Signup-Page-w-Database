<?php
require "dbconnect.php";

if(isset($_POST['save'])){
$username = $_POST['username'];

$sql = "SELECT 'username' FROM `logindata` WHERE username = '$username'";
$result = $conn->query($sql);


if($result->num_rows > 0){
    ?>
<div class="notification">
    <div class="notif_Failed" id="notif_Failed">
     <p>Username already registered! Please try other Username!</p>
     <button onclick="myFunction()" class="close_Failed">X</button>
    </div>
</div>
 <script>
     function myFunction() {
   var x = document.getElementById("notif_Failed");
   if (x.style.display === "none") {
     x.style.display = "block";
   } else {
     x.style.display = "none";
   }
 } 
 </script>
 
    <?php


}else{



if(isset($_POST['save'])){
$fname =$_POST['fname'];
$lname =$_POST['lname'];
$email =$_POST['email'];
$contact =$_POST['contact'];
$username =$_POST['username'];
$password =$_POST['password'];

$sql = "INSERT INTO `logindata`(`fname`, `lname`, `email`, `contact`, `username`, `password`) 
VALUES ('$fname','$lname','$email','$contact','$username','$password')";

if(mysqli_query($conn,$sql)){
    ?>
    <div class="notification">
    <div class="notif_Success" id="notif_Success">
     <p>User Successfully Added!</p>
     <button onclick="myFunction()" class="close_Success">X</button>
    </div>
</div>
 <script>
     function myFunction() {
   var x = document.getElementById("notif_Success");
   if (x.style.display === "none") {
     x.style.display = "block";
   } else {
     x.style.display = "none";
   }
 } 
 </script>
 
    <?php
}else{
    echo ("Error:" . mysqli_connect_error());
}

}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\styles.css">
    <title>Sign Up Form</title>
</head>
<body>
    <div class="container">
        <div class="wrapper">

        <div class="signinSection">
        <h1>Welcome Back!</h1>
        <p>To keep connected with us please login your information</p>
        <a href="#" class="signinBtn"> SIGN IN</a>
      </div>
        <div class="signupSection">
        <form action="" method="post">
        <div class="signup">
            <h1>Create Account</h1>
        </div>
        <label for="">First Name:</label>
        <input type="text" name="fname" id="fname" class="inputdata" required>    
        <label for="">Last Name:</label>
        <input type="text" name="lname" id="lname" class="inputdata" required> 
        <label for="">Email:</label>
        <input type="email" name="email" id="email" class="inputdata" required>  
        <label for="">Contact:</label>
        <input type="text" name="contact" id="contact" class="inputdata" required> 
        <label for="">User Name:</label>
        <input type="text" name="username" id="username" class="inputdata" required>
        <label for="">Password:</label>
        <input type="password" name="password" id="password" class="inputdata" required>
        <div class="saveInput">
        <input type="submit" value="SIGN UP" name="save" class="saveBtn">
        <a href="#" class="signinBtn-Home"> SIGN IN</a>
        </div>  
        </form>
        </div>
    </div>
</div>
</body>
</html>
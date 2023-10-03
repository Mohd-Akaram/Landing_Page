<?php
if(isset($_POST['name'])){
error_reporting(0);



$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection succesfull";
}
else{
    echo "No connection";
}

mysqli_select_db($con,'trip');

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$other = $_POST['other'];

$query = "insert into toor(name,age,gender,email,phone,other)  values ('$name','$age','$gender','$email','$phone','$other')";

echo $query;
mysqli_query($con,$query);


header('location:index.php');
};





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To the travel Form</title>
<link rel="stylesheet" href="style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lugrasimo&display=swap" rel="stylesheet">
</head>
<body>
    <!-- <img class="bg" src="lit image.jpg" alt="LIT Lucknow"> -->
    <div class="container">
        <h1>Welcome to LIT Lucknow US Trip Form</h1>
        <p>Enter your details and submit this form tp confirm your participation in the Trip</p>

      

        <form action="index.php" method="post">

        <input type="text" name="name" id="name" placeholder="Enter yor name ">
        <input type="text" name="age" id="age" placeholder="Enter your age">
        <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
       <input type="email" name="email" id="email" placeholder="Enter your email">
       <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
       <textarea id="desc" name="other"  cols="30" rows="10" placeholder="Enter any other information here"></textarea>
     
       
       <button class="btn" type="submit">Submit</button>
       <button class="reset" type="reset">Reset</button>

       </form>
        


    </div>
    
    <script src="index.js"></script>
</body>
</html>




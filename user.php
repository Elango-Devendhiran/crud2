<?php
include 'connection.php';
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email= $_POST['email'];
	$mobile= $_POST['mobile'];
	$bookname= $_POST['bookname'];
	$password= $_POST['password'];
	
	$sql = "insert into library (name,email,mobile,bookname,password) 
	values ('".$name."','".$email."','".$mobile."','".$bookname."','".$password."')";
	$result = mysqli_query($con,$sql);
	if ($result){
		//echo"Data Stored Successfully";
        header('location:display.php');
	}
	else{
		die(mysqli_error($con));
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
crossorigin="anonymous"></script>
<title>Library User Details</title>
</head>
<body>
<div class="container my-5">
<form method="post">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control" Placeholder="Enter your name" name="name">
  </div>
  
    <div class="mb-3">
    <label>Email</label>
    <input type="email" class="form-control" Placeholder="Enter your Email" name="email">
  </div>
  
    <div class="mb-3">
    <label>Mobile Number</label>
    <input type="text" class="form-control" Placeholder="Enter your Mobile Number" name="mobile">
  </div>
   
    <div class="mb-3">
    <label>Book Name</label>
    <input type="text" class="form-control" Placeholder="Enter the book name" name="bookname">
  </div>
  
   <div class="mb-3">
    <label>Password</label>
    <input type="password" class="form-control" Placeholder="Enter your Password" name="password" autocomplete="off">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
</body>
</html>
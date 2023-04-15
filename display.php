<?php
include 'connection.php';?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
crossorigin="anonymous"></script>
<title> Library </title>
</head>
<body>
<div class="container">
<button class="btn btn-primary my-5"><a style="text-decoration:none" href="user.php" class="text-light">Add User</a></button>

<table class="table">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
	  <th scope="col">Book</th>
	  <th scope="col">Password</th>
	  <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  
  
  <?php
  $sql = "select * from library";
  $result = mysqli_query($con,$sql);
  if($result)
  {
	  while($row=mysqli_fetch_assoc($result)){
		  $id=$row['id'];
		  $name=$row['name'];
		  $email=$row['email'];
		  $mobile=$row['mobile'];
		  $bookname=$row['bookname'];
		  $password=$row['password'];
		  echo'
		  <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
	  <td>'.$bookname.'</td>
	  <td>'.$password.'</td>
      <td>
      <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" style="text-decoration:none" class="text-light">Update</a></button>
      <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" style="text-decoration:none" class="text-light">Delete</a></button>
  </td>
    </tr>';
	  }
  }
    
  ?>

   
  </tbody>
</table>

</div>

</body>
</html>
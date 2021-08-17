<?php
$con= mysqli_connect('localhost','root','','signup data');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
  
</head>
<body style="background-image: url('images/signup (2).jpg'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">

<div style=" background-color: rgba(255, 51, 51,0.6); margin-left: 200px; margin-right: 200px; ">

	<h1 style="padding-left: 40%;  font-size: 50px;  ">Sign Up Here !!</h1>

	<div style="padding-left: 30%;  font-size: 20px; padding-bottom: 5%;">



<form  method="post">


    <div class="form-group">
      <label for="fname" style="color: thick solid black;">First Name: &emsp;&emsp;&emsp;&ensp;</label>
      <input style="padding: 5px;" type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" required>
      
    </div><br>


    <div class="form-group">
      <label for="lname"> Last Name : &emsp;&emsp;&emsp;&ensp;</label>
      <input style="padding: 5px;" type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" required>
     </div><br>


     <div>
     	<label for="gender"> Gender :&emsp;&emsp;&emsp;&emsp;&emsp;</label>
     	<input type="radio" id="male" name="gender" value="male">
    	 <label for="male">Male</label>
	     <input type="radio" id="female" name="gender" value="female">
	     <label for="female">Female</label>
	   <br><br>

  	<div>


  	  <label for="birthday">Date Of Birth:&emsp;&emsp;&emsp;</label>
  <input style="padding: 5px;" type="date" id="birthday" name="birthday">

  </div><br>

  <div>
  	<label for="phone">Phone number:&ensp;&emsp;&emsp;</label>
  <input style="padding: 5px;" type="Number" id="phone" name="phone" placeholder="Enter Phone number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br><br>
  </div>
  
     </div>
     <div class="form-group">
      <label for="email"> Email Address:&ensp;&emsp;&emsp;</label>
      <input style="padding: 5px;" type="text" class="form-control" id="email" placeholder="Enter Email" name="email" required>
          </div><br>

         <div>
         	<label for="img">Photo:&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
  <input style="padding: 5px;" type="file" id="img" name="img" accept="image/*">
  
         </div><br>


     <div class="form-group">
      <label for="address"> Address :&emsp;&emsp;&emsp;&emsp;&ensp;</label>
      <input style="padding: 5px;" type="text" class="form-control" id="address" placeholder="Enter Address" name="address" required>
          </div><br>
          <div class="form-group">
      <label for="uname">Username:&emsp;&emsp;&emsp;&emsp;</label>
      <input style="padding: 5px;" type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      
    </div>
    <br>

<div class="form-group">

      <label for="pwd"> Password :&emsp;&emsp;&emsp;&emsp;</label>
      <input style="padding: 5px;" type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
          </div><br>
   <div class="form-group">

      <label for="pwd1">Confirm Password :&nbsp;</label>
      <input style="padding: 5px;" type="password" class="form-control" id="pwd1" placeholder="Confirm password" name="pswd1" required>
          </div><br>




  <button type="submit" name="submit" value="submit" class="btn btn-primary" style="padding: 10px; background-color: blue; font-family: fantasy;font-size: 20px; color: white;" ><a href="index 1 (1).php" style="text-decoration: none; color: white;">Submit</a></button>
  <button  class="btn btn-primary" style="padding: 10px; background-color: blue; font-family: fantasy;font-size: 20px; margin-left: 50px; color: white;" ><a href="signup.php" style="text-decoration: none; color: white;">Clear</a></button>

  




</div>


</body>
<script type="text/javascript">
  function my()
  {
    window.location.href='index 1 (1).php'
  }
</script>
</html>


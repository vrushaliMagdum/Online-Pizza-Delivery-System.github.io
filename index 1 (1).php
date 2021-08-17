<?php //index.php
session_start();

if(isset($_SESSION["username"]))
{
	header('Location:./secured 1 (1).php');
}

?>
<?php
$con= mysqli_connect('localhost','root','','login data');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>



<body style="background-image: url('images/login.jpg'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">



<div style="  margin-left: 200px; margin-right: 200px; margin-top: 100px;">

	<h1 style="padding-left: 35%;  font-size: 70px; padding-top: 2%; color: #C8F937; padding-bottom: 15px;">User Login</h1>

	<div style="padding-left: 35%;  font-size: 40px; padding-bottom: 5%; padding-right: 15%;">


		<form  action="./login_process 1 (1).php" method="post">


    <div class="form-group">
      <label for="name" style="color: #00ffcc;">Username:</label>
      <input style="padding: 5px;  text-decoration-color: black; padding-left: 5%;" type="text" class="form-control" id="name" placeholder="Enter username" name="txtUsername" required>
      
    </div>
    <br>

    <div class="form-group">
      <label for="pwd" style="color: #00ffcc"> Password :</label>
      <input style="padding: 5px; padding-left: 5%;" type="password" class="form-control" id="pwd" placeholder="Enter password" name="txtPassword" required>
    </div>

      <a href="#" style="font-size: 20px;color: skyblue;">Forgot password ?</a>
          <br><br>

          <input type="submit" name="btnSubmit" value="Login" class="btn btn-success" style="padding: 10px; background-color: black; font-family: serif;font-size: 20px;">

          <button class="btn btn-primary" style="padding: 10px; background-color: black; font-family: serif;font-size: 20px; margin-left: 50px;"><a href="signup.php" style="text-decoration: none; color: white;">Sign Up</a></button>

  

		
	</div>


</form>
</div>
</body>



</html>


<?php
if (isset($_POST['submit']))
 {
  $name =$_POST["name"];
  $password =$_POST["pswd"];
  

  $qry="INSERT INTO `login`(`name`, `password`) VALUES ('$name','$password')";

  mysqli_query($con,$qry);

  
}

?>

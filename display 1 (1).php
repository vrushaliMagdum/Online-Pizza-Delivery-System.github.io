<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script> 
$(document).ready(function()
{
  $("#flip").click(function()
  {
    $("#panel").slideToggle("slow");
  });
});
</script>
<style> 
#panel, #flip 
{
    padding: 5px;
    text-align: center;
    background-color: #bdfdbc;
    border: solid 1px #0f1e3c;
}

#panel 
{
  padding: 50px;
  display: none;
}
</style>
</head>
<body>
<?php 
session_start();

if(!isset($_SESSION["username"]))
{
	header('Location:./index 1 (1).php');
}
else{
echo "<div id='flip'>Welcome!</div>";
echo "<div id='panel'>".$_SESSION["username"]."</div>";
}
?>

<br>
<a href="./logout 1(1).php">Logout</a>
<br>

</body>
</html>

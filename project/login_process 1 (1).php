<?php 
	session_start();
	
		if(isset($_POST["btnSubmit"]))
		{
			$name=$_POST["txtUsername"];
			//echo $name;
			if($_POST["txtUsername"]=="Vrushali" && $_POST["txtPassword"]=="1234")
			{
					$_SESSION["username"]=$name;
					header('Location:./secured 1 (1).php');
			}
			else
			{
				header('Location:./index 1 (1).php');
			}
		}

?>


<?php
$con =mysqli_connect('localhost','root','','pizza');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Forms</title>
    <style>
    {
      margin: 0;
      padding: 0;
    }
    body{
      background: url(1.jpg);
      background-size: 100%;
      width: 100%;
      background-repeat: no-repeat;
      
    }
    div.main{
      width: 500px;
      margin: 100px auto 0px auto;
    }
    h2{
      text-align:center;
      padding: 20px;
      font-family: sans-serif;
    }
    div.login
    {
      background-color: rgba(0,0,0,0.8);
      
      font-size: 18px;
      border-radius: 10px;
      border: 1px solid rgba(255,255,255,0.3)
      box-shadow: 2px 2px 15px rgba(0,0,0,0.3);
      color: #fff;
    }
    form#login{
      margin: 40px;
    }
    label{
      font-family: sans-serif;
      font-size: 18px;
      font-style: italic;
      text-align: center;
    }
    input{
      padding-left: 10px;
    }
    input#name{
      
      border:1px solid #ddd;
      border-radius: 3px;
      outline: 0;
      padding: 7px;
      background-color: #fff;
      box-shadow: inset 1px 1px 5px rgba(0,0,0,0.3);
    }
    .btn{
      width: 100px;
      padding: 9px;
      font-size: 16px;
      font-family: sans-serif;
      font-weight: 600;
      border-radius: 3px;
      background-color: rgba(250,100,0,0.8);
      color: #fff;
      cursor: pointer;
      border: 1px solid rgba(255,255,255,0.3);
      box-shadow: 1px 1px 5px rgba(0,0,0,0.3);
      margin-bottom: 20px;

    }
    label,span,h2{
      text-shadow: 1px 1px 5px rgba(0,0,0,0.3);

    }

  </style>
    <body>
</head>
    <div class="main">
    <div class="login">
      <h2>Payment</h2>
      <form method="post">
        <label>Customer Name : </label>
        <input type="text" placeholder="Enter Username" name="username" id="name"><br><br>

        <label style="float:top">Address &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;: </label>
        <textarea  rows="3" cols="30" placeholder="Enter Address" name="address" id="name"></textarea><br><br>

        <label>Quantity &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;: </label>
        <input type="number" placeholder="Enter Quantity" name="quan" id="name"><br><br>

        <label>Size &ensp;&ensp;: </label><br>
         &ensp; &ensp; &ensp; &ensp;&ensp;&ensp;&ensp;<input type = "radio" name = "size" id="small">
        <label for="small">Small </label><br>
           &ensp; &ensp; &ensp; &ensp;&ensp;&ensp;&ensp;<input type = "radio" name = "size" id= "medium">
          <label for="medium">Medium </label><br>
           &ensp; &ensp; &ensp; &ensp;&ensp;&ensp;&ensp;<input type = "radio" name = "size" id= "large">
          <label for="large">Large</label><br><br>

          <label>Total Rupees : </label>

          <center><h2>Payment Details</h2></center><br>

          <label class="label">Card number : </label>
            <input type="text" class="input" id="name" data-mask="0000 0000 0000 0000" placeholder="Card Number"><br><br>
          
          <label class="label">Expiry date   &ensp; : </label>
            <input type="text" name="exp" class="input" id="exp" data-mask="00 / 00"    placeholder="00 / 00"><br><br>

              <label class="label">CVC &ensp; &ensp; &ensp; &ensp; &ensp;: </label>
             <input type="text" class="input" id="cvc" data-mask="000" placeholder="000" name="cvc"><br><br>
        

        <center><button class="btn" id="submit">Pay</button>
        <button type="button" class="btn" id="submit" name="menu" onclick="window.location.href='Html.html';">Menu</button></center>

      </form>
    </div>
  </div>
  

</body>
</html>
<?php
    if (isset($_POST['submit'])){
    $username = $_POST["username"];
    $address = $_POST["address"];
    $quan = $_POST["quan"];
    $name= $_POST["name"];
    $cvc= $_POST["cvc"];
    $insert = "INSERT INTO `ameri`(`Name`, `Address`, `Quantity`,  `CardNo`,  `cvc`) VALUES('$username','$address','$quan','$name','$cvc')";
    $run=mysqli_query($con,$insert);
        if($run == true){
        echo "thank you for registration";
        }
    }
?>

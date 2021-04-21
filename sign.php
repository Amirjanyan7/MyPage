<?php include('server.php') ?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
* {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: #F8F8FF;
}

.header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
</style>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="webcss.css" type="text/css" />
    <script type="text/javascript" src="webjs.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3ec854fc03.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
<script>
        function animation() {

            $(document).ready(year());
            $(document).ready(function () {
                $('#WelcomeText').animate({
                    opacity: 0.75,
                    fontSize: "+=5px",
                    left: "+=700",
                    height: "toggle",
                    width: "+=16px"
                }, 5000, function () {
                    var d = document.getElementById("WelcomeText").style.display = "none";
                })
            });
            $(document).ready(button());
        }
        function button() {
            var mybutton = document.getElementById("myBtn");
            window.onscroll = function () { scrollFunction() };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    
    </script>
</head>
<body onload="animation()">

    <div class="flex" id="myflex">
        <a href="Dealer.php"><div class="flexitem1" style="background-color:white;"><img src="diller.gif" style="width:25px;height:20px;margin-top:5px;" />Dillers</div></a>
        <a href="sell.php"> <div class="flexitem2" style="background-color:white"><img src="cars.gif" style="width:25px;height:20px;margin-top:5px;" />Sell Car</div></a>
        <a href="MyPage.html"><div class="flexitem3" style="background-color:white"><img src="user.gif" style="width:25px;height:20px;margin-top:5px;" />Page</div></a>
        <a href="sign.php"><div class="flexitem5" style="background-color:red"><img src="sign.gif"  style="width:25px;height:17px;margin-top:5px;"/>Login</div></a>
        <a href="web.php"><div class="flexitem6" style="background-color:white"><img src="home.gif"  style="width:25px;height:17px;margin-top:5px;"/>Home</div></a>
        <a href="Web_Arm.html"><div class="flexitem7"><img src="Armenia.png" style="width:25px;height:17px;margin-top:5px;" />Arm</div></a>
        
        
        
        
        <a href="javascript:void(0);"
           class="icon" onclick="myFunction()">
            <div style="max-width:37px;">
            <i class="fa fa-bars">
            </i>
            </div>
        </a>


    </div>


    <button onclick="topFunction()" id="myBtn"title="Go to top">
    <img onclick="topFunction()" src="top_page.png" style="height:87px; margin:-14px -16px; width:70px; bottom: 20px; right: 5px;z-index: 99;"/>
    </button>
    <br /><br />

<div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="sign.php">
  		<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
</body>
</html>

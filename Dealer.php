
<html>
 <head>
   <title> Form Test </title>
    <link rel="stylesheet" href="webcss.css" type="text/css" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
	<style>
table
{
   border:5px solid black;
  padding:4px;
}
tr{
   word-spacing:3px;
   padding:4px;
   margin:3px;
}
td
{
    border:2px solid black;
	border-spacing:10px;
	margin:5px;
padding:24px;
}
	</style>
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
        <a href="Dealer.php"><div class="flexitem1" style="background-color:red;"><img src="diller.gif" style="width:25px;height:20px;margin-top:5px;" />Dillers</div></a>
        <a href="sell.php"> <div class="flexitem2" style="background-color:white"><img src="cars.gif" style="width:25px;height:20px;margin-top:5px;" />Sell Car</div></a>
        <a href="MyPage.html"><div class="flexitem3" style="background-color:white"><img src="user.gif" style="width:25px;height:20px;margin-top:5px;" />Page</div></a>
        <a href="sign.php"><div class="flexitem5" style="background-color:white"><img src="sign.gif"  style="width:25px;height:17px;margin-top:5px;"/>Login</div></a>
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
	
<br/>  <br/>
	
<br/>  <br/>
	
<br/>  <br/>
	
<br/>  
	 </body>
</html>
<?php
$dbhost = "localhost"; // Host
$dbuser = "root"; // User
$dbpassword = ""; // Password
$dbname = "cars"; // Database
$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) 
or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
echo "<table>"; // start a table tag in the HTML
$query="SELECT * FROM dealers";
$ath=mysqli_query($conn,$query) or die("Error: ". mysql_error(). " with query ");
if(mysqli_num_rows($ath) > 0 )
{
 while ($row = mysqli_fetch_array ($ath)) 
 {
echo "<tr> <td> ID: " .$row['id']. "<td> First Name: ".$row['f_name']. "<td> Last Name: ".$row['l_name']. "<td> Phone: ".$row['phone']. "<br />";
 }
 echo "</table>";
}
mysqli_close($conn);
echo <<<_END
_END;
?>
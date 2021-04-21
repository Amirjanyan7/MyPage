
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <title>Ավտոմեքենաների վաճառք</title>
    <link rel="stylesheet" href="webcss.css" type="text/css" />
    <script type="text/javascript" src="webjs.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3ec854fc03.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="flex" id="myflex">
        <a href="Dealer.php"><div class="flexitem1" style="background-color:white;"><img src="diller.gif" style="width:25px;height:20px;margin-top:5px;" />Dillers</div></a>
        <a href="Sell.html"> <div class="flexitem2" style="background-color:red"><img src="cars.gif" style="width:25px;height:20px;margin-top:5px;" />Sell Car</div></a>
        <a href="MyPage.html"><div class="flexitem3" style="background-color:white"><img src="user.gif" style="width:25px;height:20px;margin-top:5px;" />Page</div></a>
        <a href="sign.php"><div class="flexitem5" style="background-color:white"><img src="sign.gif" style="width:25px;height:17px;margin-top:5px;" />Login</div></a>
        <a href="web.php"><div class="flexitem6" style="background-color:white"><img src="home.gif" style="width:25px;height:17px;margin-top:5px;" />Home</div></a>
        <a href="Web_Arm.html"><div class="flexitem7"><img src="Armenia.png" style="width:25px;height:17px;margin-top:5px;" />Arm</div></a>
        <a href="javascript:void(0);" class="icon" onmouseover="myFunction()">
            <div><i class="fa fa-bars"></i></div>
        </a>

    </div>
    <a href="javascript:void(0);" class="icon" onmouseover="myFunction()">
        <div><i class="fa fa-bars"></i></div>
    </a>
    <div id="content">

        <form method="POST" action="" enctype="multipart/form-data" class="sellform">
            Mark:<input type="text" />
            Year:<input type="text" />
            Engine:<input type="text" />
            Power:<input type="text" />
            Type:<input type="text" />
            Price:<input type="text" />

            <input type="file" name="uploadfile" value="" />
            <div>
                <button type="submit"
                        name="upload">
                    UPLOAD
                </button>
            </div>
        </form>
    </div>
</body>
</html>
_END;
?>
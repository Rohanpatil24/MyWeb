<!DOCTYPE html>
<html>
    <head>
        <title>Gallary</title>
        <meta charset="UTF-8"/>
        <meta http-equive="X-UA-compatible" contents="IE=edges" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="CSS/newcss.css" rel="stylesheet"/>
        <script src="JS/script.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
        <style>
             body{
            background-color:white;
            background-image:url("Pictures/background_4.jpg");
            background-size:cover;
            background-position:center;
            height:100vh;
            font-family: 'Lora', serif;
         } 
         .main-conatiner{
            height: 603px;
            width: 70%;
            margin: 20px 180px 0px 180px;
         }
         .row{
            height: 300px;
            display: flex;
            justify-content: space-around;
         }
         .column{
            border: solid 1px black;
            width: 49%;
            height: 260px;
            margin-top: px;
            box-shadow: 0px 1px 16px 3px;
            margin: 15px;
         }

         @media screen and (max-width: 600px) {
        .main-conatiner{
            width: 100%;
            height: 610px;
            margin:20px 0px 0px 0px;
        }
        }
         
        </style>
    </head>
    <body>
        <header>
            <div class="topnav" id="myTopnav">
                <a href="index.php" >My Blog's</a>
                <a href="index.php">Home</a>
                <a href="gallary.php" class="active">Gallary</a>
                <a href="about.php">About</a>
                <a href="Login.php" target="_blank" class="left">
                <i class="fa-regular fa-user">
                </i> Account</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>    
            </div>
        </header>
        <h1 style="text-align:center; color:white;"><u>Gallary (Room of Memories)</u></h1>
            <div class="main-conatiner">
                <div class="row">
                    <div class="column"></div>
                    <div class="column"></div>
                </div>
                <div class="row">
                    <div class="column"></div>
                    <div class="column"></div>
                </div>
            </div>
            <div class="main-conatiner">
                <div class="row">
                    <div class="column"></div>
                    <div class="column"></div>
                </div>
                <div class="row">
                    <div class="column"></div>
                    <div class="column"></div>
                </div>
            </div>
    </body>
</html>    
<!DOCTYPE html>
<html>
    <head>
        <title>About Developer</title>
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
            background-color:black;
            background-image:url("Pictures/About_bg.jpg");
            background-size:cover;
            background-position:center;
            height:100vh;
            font-family: 'Lora', serif;
         } 
         .main-container{
            border: solid 10px white;
            height: 620px;
            margin-top: 20px;

        }

         .container{
            height: 580px;
            border: solid 5px white;
            margin: 15px;
         }
        .Profile-body{
            height: 550px;
            border: solid 1px white;
            width: 40%;
            margin: 15px 0px 0px 15px;
        }
        .profile-image{
            width: 100%;
            height: 250px;
            display: flex;
            justify-content: center;
            margin-top: 10px;
        } 

        .description h1{
            text-align:center;
            margin-top:-20px;
        }
        .description p{
            margin: 0px 10px 0px 10px;
        }

        @media screen and (max-width: 600px) {
        .Profile-body{
            height: 550px;
            border: solid 1px white;
            width: 90%;
            margin: 15px 0px 0px 15px;
        } 
        .description p{
            color:white;
        }
        }

        </style>
    </head>
    <body>
        <header>
        <div class="topnav" id="myTopnav">
        <a href="#Logo">My Blog's</a>
                <a href="index.php">Home</a>
                <a href="gallary.php">Gallary</a>
                <a href="about.php" class="active">About</a>
                <a href="Login.php" target="_blank" class="left">
                <i class="fa-regular fa-user">
                </i> Account</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>    
            </div>
            <div class="main-container animate">
                <div class="container animate">
                    <div class="Profile-body animate">
                        <div class="profile-image">
                            <img src="Pictures/Bio_pic.png" style="height: 200px;">
                        </div>
                        <div class="description">
                            <h1 style="text-align:center;">Rohan Patil</h1>
                            <p class="animate"><span style="font-size:28px;">H</span>ello friends, I am Web Developer of this website and i started make this website as Project
                                to learn and HTML, CSS ,and JS Please Share your feedback about is web Design...
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </header>
    </body>

</html>    
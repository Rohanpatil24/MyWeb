<!DOCTYPE html>
<html>
    <head>
        <title>SignIn</title>
        <meta charset="UTF-8"/>
        <meta http-equive="X-UA-compatible" contents="IE=edges" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="CSS/newcss.css" rel="stylesheet"/>
        <script src="JS/script.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
        textegrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Lora&display=swap');

         body{
            background-color:white;
            background-image:url("Pictures/Signup_bg.jpg");
            background-size:cover;
            background-position:center;
            height:100vh;
            font-family: 'Lora', serif;
         } 

        .main-container{
            width: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
            
            flex-direction: row;
        }

        @media only screen and (max-width: 600px) {
        .main-container {
            width: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding-top: 100px;
            flex-direction:column;
            flex-wrap: wrap;
        }
        }

        .container{   
            width: 50%;
            display: flex;
            justify-content: center;
            margin-top:20px;
        }

         form h2{
            MARGIN: 20PX 0PX -10PX 0PX;
            font-size: 22px;
            color: white;
         }
         form h2:hover{
            color:orange;
            transition-duration:0.5s;
         }
         form input{
            width: 190px;
            height: 20px;
            font-size: 16px;
            text-align: center;
        }
        form input:hover{
            background-color:#addaf0;
            color:red;
            transition-duration:0.5s;
        }
    
        .item_select{
            width: 90px;
            font-size: 16px;
            border-radius: 10%;
            box-shadow: 0px 1px 18px 0px white;
        }

        .submit-button{
            width: 102px;
            box-shadow: 0px 1px 18px 0px white;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            border-radius: 14px;
            height: 30px;
            background-color:#333;
            color:white;
        }
        .submit-button:hover{
            background-color:#12b559;
            color:white;
            transition-duration:0.5s;
        }
        
        footer{
            text-align: center;
            border: solid 1px #333;
            color: white;
            font-size: 10px;
            background-color: #333;
            box-shadow: 2px -2px 5px 0px black;
        }
        

         </style>
    </head>
    <body>
        <header>
        <div class="topnav" id="myTopnav">
        <a href="index.php" class="active">My Blog's</a>
                <a href="index.php">Home</a>
                <a href="gallary.php">Gallary</a>
                <a href="about.php">About</a>
                <a href="Login.php" target="_blank" class="left">
                <i class="fa-regular fa-user">
                </i> Login</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>    
            </div>
            <h1 style="text-align:center; color: white;">Please Enter your All Detail's for Quick Regestration...</h1>
            <section class="main-container">
                <div class="container">
                    <form action= "connect.php" method="post">
                        <h2 class="form-items animate">First Name</h2></br>
                        <input type="text" name="Firstname" placeholder="Your First Name"></br>
                        <h2 class="form-items animate_LtoR">Last Name</h2></br>
                        <input type="text" name="Lastname" placeholder="Your Last Name"></br>
                        <h2 class="form-items animate">Gender</h2></br>
                            <select name="Gender" class="item_select">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                            </select>
                        <h2 class="form-items animate_LtoR">Email</h2></br>
                        <input type="text" name="Email" placeholder="Enter Your Email"></br>
                    
                    <form action= "connect.php" method="post">
                    <h2 class="form-items animate">Username</h2></br>
                    <input type="text" name="Username" placeholder="Create Username"></br>
                    <h2 class="form-items animate_LtoR">Password</h2></br>
                    <input type="password" name="Password" placeholder="Create Password"></br></br>
                    <input type="submit" name="submit" value="Submit" class="submit-button" >
                    <h2><a href="Login.php" style="text-decoration:none; color:white; text-align:center;">If Already have and account? Click here.</a></h2></br></br>
                    </form>
                </div>
            </section>

        </header>
        <footer>
            <h2>My blog copyright 2023</h2>
        </footer>
        
    </body>

</html>    
<?php session_start();
$servername = "localhost";
$username = "root";
$Password = "";
$db="myweb";

// Create connection
$conn = new mysqli($servername, $username, $Password,$db);
//Coding For Signup
if(isset($_POST['login']))
{
//Getting Psot Values
$email=$_POST['Email'];	
$pass=$_POST['Password'];	
$stmt = $mysqli->prepare( "SELECT FullName,id FROM user_data WHERE (EmailId=? || Password=?)");
$stmt->bind_param('ss',$email,$pass);
    $stmt->execute();
    $stmt->bind_result($FullName,$id);
    $rs= $stmt->fetch ();
    $stmt->close();
    if (!$rs) {
  echo "<script>alert('Invalid Details. Please try again.')</script>";
    } 
    else {
     $_SESSION['fname']=$FullName;
      $_SESSION['uid']=$id;
     header('location:index.php');
    }
}
 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>LogIn</title>
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
            @import url('https://fonts.googleapis.com/css2?family=Lora&display=swap');
         body{
            background-color:black;
            background-image:url("Pictures/Account_bg.jpg");
            background-size:cover;
            background-position:center;
            height:100vh;
            font-family: 'Lora', serif;
         } 
         
         .main-container{
            width: 99%;
            height: 600px;
         }
        .container{
            width: 78%;
            color: white;
            display: flex;
            justify-content: center;
            padding: 260px 0px 10px 0px;
        }
        .form-items{
            MARGIN: 20PX 0PX -10PX 0PX;
            font-size: 28px;
        }
        .form-items:hover{
            color:orange;
            transition-duration: 0.3s;
        }
        form h3 a{
            text-decoration:none;
            color:white;
        }
        form h3 a:hover{
            color:purple;
        }
        .submit-button{
            background-color: #333;
            color: white;
            box-shadow: 1px 1px 20px 2px;
            border-radius: 30px;
            width: 45%;
            height: 16%;
            font-size: 18px;
            font-weight: bold;
        }
        .submit-button:hover{
            background-color:#12b559;
            color:white;
            transition-duration: 0.7s;
        }
        form input{
            width:250px; 
            height:25px;
            font-size:14px
        }
        form input:hover{
            background:#f0cfc0;
            color:red;
            transition-duration: 0.7s;

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
                <a href="Signin.php" class="left">
                <i class="fa-regular fa-user">
                </i> Create Account</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>    
            </div>
        </header>

        <section class="container-main">
            <div class="container">
            <form action= "connect.php" method="POST">

            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            
                <h2 class="form-items animate">Username</h2></br>
                <input type="text" name="Email" placeholder="Enter Username"></br>
                <h2 class="form-items animate">Password</h2></br>
                <input type="Password" name="Password" placeholder="Enter Password"></br></br>
                <input type="submit" name="Submit" class="submit-button">
                <h3> <a href="#Reset Password">Forgot Password ?</a></h3>
            </form>
        </div>
        </section>
        <footer class="login-footer">
            <p>My Blog's Copyright 2023.</p>
        </footer>
    </body>

</html>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/newcss.css" rel="stylesheet"/>
    <script src="JS/script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin Panel</title>
    <style>
        body{
            background-color:#333;
        }
        .navbar{
            display:flex;
            justify-content: space-between;
            color:white;
            font-size:20px;
        }
        .navitem{
            padding: 0px 10px 0px 10px;
            text-decoration:none;
            
        }
        .navitem a{
            text-decoration:none;
            color:white;
            
        }
        .navbar:hover{
            color:white;
            box-shadow:0px 4px 16px 0px;
            transition-duration:0.7s;
        }
        .navitem a:hover{
            color:red;
            
        }
        .welcome{
            text-align:center;
            padding:0px;
            cursor:default;  
        }

        .welcome:hover{
            font-size:24px;
            color:orange;
            transition-duration:0.7s;
        }
        
    </style>
</head>
<body>
    <div class="navbar">
        <ul class="navitem">
            <a href="admin.php">logo</a> 
        </ul>
        <ul class="welcome">Welcome Mr.Rohan</ul>
        <ul class="navitem">
        <a href="index.php">Logout</a>
        </ul>
    </div>
     
</body>
</html>
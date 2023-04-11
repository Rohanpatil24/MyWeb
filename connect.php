<?php
$servername = "localhost";
$username = "root";
$Password = "";
$db="myweb";

// Create connection
$conn = new mysqli($servername, $username, $Password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Gender = $_POST['Gender'];
$Email = $_POST['Email'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];


$sql = "INSERT INTO user_data(Firstname, Lastname,Gender,Email, Username, Password)
        values('$Firstname','$Lastname','$Gender','$Email','$Username','$Password')";

$result=mysqli_query($conn,$sql);



// if(!result){
//   echo "error :" .my_sqli_error($conn);
//   exit;
// }

echo "Account has been Successfully Created ";
echo "Thank You";  
mysqli_close($conn);
header("Location:Login.php")
?>

<?php 

session_start(); 

include "db_conn.php";

if (isset($_POST['Username']) && isset($_POST['Password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $Username = validate($_POST['Username']);

    $Password = validate($_POST['Password']);

    if (empty($Username)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($Password)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM user_data WHERE Username='$Username' AND Password='$Password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['Username'] === $Username && $row['Password'] === $Password) {

                echo "Logged in!";

                $_SESSION['Username'] = $row['Username'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: index.php");

                exit();

            }else{

                header("Location: Login.php?error=Incorect User name or Password");

                exit();

            }

        }

    }

}

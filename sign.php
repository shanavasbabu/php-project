<?php
define('DB_NAME','my');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if(!$con)
{
    die('Could not connect:'.mysqli_error());
}
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
$password = $_POST['password']; 
    $query = "SELECT * FROM login_info WHERE name = '$username' AND password = '$password'";
    $result=mysqli_query($con,$query);
    $ret=mysqli_fetch_assoc($result);
    if(!$ret)
    {
		 echo "<br><br><br><br><br><br><br><br><br><br><br>";
        echo "<center><h1 style='color:red'>Invalid Username and Password</h1> ";
      echo "  <h3><p> <a href='signup.html'>Create New Account</a></p><h3></center> ";
    }
    else
    {
//        header("Location:account.html");
       echo "<style>
   .mmm{background-image:url(bb.jpg);
            background-repeat:no-repeat;
background-size:100%;
}
</style>";
        echo "<body class='mmm'><center ><h1 style='color:red'>We are in!</h1>";
       echo "<h3><p> <a href='mainpage.html'>Back</a></p><h3></center></body>";   
}
}

?>





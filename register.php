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
$id=$_POST['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$mail = $_POST['mail'];
$country = $_POST['userCountry'];
$address = $_POST['Address'];
$contact = $_POST['contact'];
$query="INSERT INTO login_info(id,username,password,name,gender,age,mail,country,address,contact) VALUES ('$id','$username','$password','$name','$gender','$age','$mail','$country','$address','$contact')";
    if(mysqli_query($con,$query))
    {
    echo'<center><h2 style="color:red">Created!</h2></center>';
        echo "<center><h2 style='color:red'>Your account is created!</h2></center>";
    }
else{
    echo "Sorry";}
    $result=mysqli_query($con,"SELECT * FROM login_info");
echo "<br><br>";
echo "<br><center><table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>USERNAME</th>
<th>PASSWORD</th>
<th>GENDER</th>
<th>AGE</th>
<th>EMAIL</th>
<th>COUNTRY</th>
<th>ADDRESS</th>
<th>CONTACT</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
    echo"<tr>";
echo"<td>".$row['id']."</td>";
echo"<td>".$row['name']."</td>";
echo"<td>".$row['username']."</td>";
echo"<td>".$row['password']."</td>";
echo"<td>".$row['gender']."</td>";
echo"<td>".$row['age']."</td>";
echo"<td>".$row['mail']."</td>";
echo"<td>".$row['country']."</td>";
echo"<td>".$row['address']."</td>";
echo"<td>".$row['contact']."</td>";
echo"</tr>";
}
echo"</table></center>";
echo"<center><h3 style='color:red'><p><a href='mainpage.html'>Back</a></h3></p></center>";
?>

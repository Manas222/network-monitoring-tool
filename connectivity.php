<?php
$DB_HOST= "localhost";
$DB_NAME ="login";
$DB_USER="root";
$DB_PASSWORD="cciitk";

$user=$_POST['uname'];
$pass=$_POST['psw'];

$con = mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME);

if (mysqli_connect_errno())
 {
    echo "failed to connect to MYSQL:" .mysqli_connect_errno();
  }

$db=mysqli_select_db($con,"login") or die ("Failed to connect to MySQL: " . mysqli_error($con));
 

if('$user')  

{
   $query = mysqli_query($con,"SELECT *  FROM user where username ='$user'  and password ='$pass'") or die(mysqli_error($con));

	$row = mysqli_fetch_assoc($query)or die(mysqli_error($con));

	if($row['uname']="cciitk" && $row['psw']="cciitk")
	{
		
		echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
                system("/var/www/html/scriptfile.sh");
                header ('refresh: 2, URL="display.php"');

	}
	
}
else {
echo "SORRY";

}

?>

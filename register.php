<?php
$server="localhost";
$username="root";
$password="";
$dbname="phpproject";
$conn=mysqli_connect($server, $username, $password, $dbname);
if(!$conn){
    die('Could not connect with database'.mysqli_connect_error());
}
if(isset($_POST['submit']))
{	 
	 $username = $_POST['username'];
	 $mail = $_POST['email'];
	 $password = $_POST['password'];
	 $sql = "INSERT INTO users (name,mail,password)
	 VALUES ('$username','$mail','$password')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <h1>Register</h1>
    Name <input type="text" name="username"><br><br>
    Email <input type="text" name="email"><br><br>
    Password <input type="password" name="password"><br><br>
    Confirm Password <input type="password" name="con_password"><br><br>
    <button type="submit" name="submit">Submit</button><br><br>
    </form>
    Already have a Account. <a href="index.php">Login</a><br><br>
</body>
</html>
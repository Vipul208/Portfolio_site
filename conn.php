<?php
$username = $_POST['username'];
$email = $_POST['email'];
$messag = $_POST['messag'];

if(!empty($username)){
	//create connection
	$con = new mysqli('localhost', 'root', '*****', 'project');
	if (mysqli_connect_error()) {
	die('Connect Error('.mysqli_connect_error().')'. mysqli_connect_error());
} else {
	$sql = "INSERT INTO register (username, email, messag ) values('$username', '$email', '$messag')";
if($con->query($sql)){
    header("Location: data.html#contact");
    exit();
}
else{
  echo "Error".$sql."<br>".$conn->error;
}
$con->close();
}
}else {
	echo "username should not be empty";
	die();
}
?>

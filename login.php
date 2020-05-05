<?php
 include("connect.inc.php");
session_start();  // Starting Session
$error=''; // Variable To Store Error Message
 
if (isset($_POST['submit'])) {
if (empty($_POST['contact']) || empty($_POST['password'])) {
$error = "Contact No. or Password is invalid";
}
else
{
// To protect mysqli injection for Security purpose

	$contact = stripcslashes(htmlspecialchars(filter_var($_POST['contact'], FILTER_SANITIZE_STRING)));
	//$contact = $_POST['contact'];
	$pswd = md5(htmlspecialchars(filter_var($_POST['password'], FILTER_SANITIZE_STRING)));
	//$profile = $_POST['profile'];

// SQL query to fetch information of registerd users and finds user match.
$sql="select user_name,user_sys_id,branch from m_usertable where phone_no='$contact' AND password='$pswd'";
$result=$db->query($sql);
$data= $result->fetch_assoc();
$username = $data['user_name'];
$usersysid = $data['user_sys_id'];
$brach=$data['branch'];

if ($result->num_rows > 0){
$_SESSION['login_user']=$username; // Initializing Session
$_SESSION['user_sys_id']=$usersysid; // Initializing Session
$_SESSION['login_time'] = time();
$_SESSION['contact']=$contact;
$_SESSION['branch']=$branch;

header("location: welcome.php"); // Redirecting To Other Page
} else {
$error = "Wrong Contact No. or Password ";
}
//mysqli_close($db); // Closing Connection
}
}
?>
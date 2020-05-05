<?php
include("connect.inc.php");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['contact'];
// SQL Query To Fetch Complete Information Of User
$ses_sql="select user_name from m_usertable where phone_no='$user_check'";
$ses_result=$db->query($ses_sql);
$ses_row = mysqli_fetch_assoc($ses_result);
$login_session =$ses_row['user_name'];
if(!isset($login_session) || (time() - $_SESSION['login_time']) > 1800){
header('Location: index.php'); // Redirecting To Home Page
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Welcome to Course Manager.</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style>
	.mem {
		background: steelblue;
		color: #fff;
		padding: 5px;
		font: bold 16px tahoma;
		width:200px;
	}
	.mem1 {
		background: #99CCFF;
		color: #333;
		padding: 5px;
		font: 14px tahoma;
		width:200px;
	}
	.a{
		color: #003399;
		text-decoration: none;
	}
	.a:hover{
		color: #0066CC;
		text-decoration: underline;
	}
.spaceUnder
{
  border-spacing: 0; border-width: 0; padding:1px;float:left;background-color:#606060;width:800px;
}
.head2 {
		color: #fff;
		padding: 0.5px;
		font: bold 14px Calibri;
		
	    
}

	</style>
</head>
<body>
	<div class="page-holder">
	<div class="container">
	<table>
	<tr><td><span id='heading'><a href="welcome.php">Course Manager</a></span></td><td width='395px' height= '50px'></td>
	<?php
	$datetime = date("d-m-Y H:i:sa");

	if(isset($_SESSION['login_user'])){
		echo"
		<td id='tag'><span>Welcome </span>".$_SESSION['login_user']."<br/>
		$datetime<br//>
		<a href='logout.php'>Logout</a><br/></td>
		</tr>
		<table class='spaceUnder'>
		<tr><td float:center><a href='welcome.php' class='head2' >Home</a></td>
		<td float:center><a href='createReport.php' class='head2' >Create Report</a></td>";
		
		// if(($_SESSION['profile'])=='Admin'){
		// echo "<td float:right><a href='admin.php' class='head2'>Admin Panel</a></td>";
		// } else{
		// echo "<td float:right><a href='changePWD.php' class='head2'>Change Password</a></td></tr>
		// </table>
		// ";
		// }
		}
?>

	</table>
	
	</div>
	</div>
</body>
</html>
	
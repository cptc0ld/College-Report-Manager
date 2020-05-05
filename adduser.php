<?php
	include("connect.inc.php");
	include("header.inc.php");
	?>
	
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>Jaypee Institute of Information Technology</title>
		<link rel='stylesheet' href='style.css'>
	</head>
	
	<body>
	<div class="page-holder">
	<div class="container">
	<div id="profile">
	<?php
	
	date_default_timezone_set("Asia/Calcutta");
				
			if(isset($_POST['adduser'])){
				$user_name = ucfirst(strtolower(stripcslashes(htmlspecialchars($_POST['user_name']))));
				$pwd = md5(htmlspecialchars($_POST['pwd']));
				$contact = stripcslashes(htmlspecialchars($_POST['contact']));
				$mailid = strtolower(stripcslashes(htmlspecialchars($_POST['mailID'])));
				$branch = stripcslashes(htmlspecialchars($_POST['branch']));
				
				$s="select user_sys_id from m_usertable where phone_no='".$contact."'";
				$c=$db->query($s);
				if(mysqli_num_rows($c) < 1){
				
				
				$sql="select user_sys_id from m_usertable where mail_id='".$mailid."'";
				$count=$db->query($sql);
				if(mysqli_num_rows($count) < 1){
				
				if($pwd&&$contact&&$mailid){
					$datetime = date("Y-m-d H:i:s");
					
					
					 
					$sub = $db->prepare("INSERT INTO m_usertable (user_name,phone_no,mail_id,password,branch,date_time) VALUES(?,?,?,?,?,?)");
					$sub->bind_param("ssssss",$user_name,$contact,$mailid,$pwd,$branch,$datetime);
					$sub->execute();	
										echo "<font size='6' color='green'>User Account Created!</font>";}
										

				else{
				echo "<font size='6' color='red'>Fill more field!</font>"; 
				}
				}else{
					echo "<font size='6' color='red'>User with given email id already register!</font><a href='index.php' class='button'>Login Here!</a>"; 
				}
				}else{
					echo "<font size='6' color='red'>Contact number already register!</font>"; 
				}
			}
		
	
?>

			<h3>Please fill the given below details..!!</h3>
			<div class="form">						
				<form method='post'>
								
							<label>Contact No.: </label><input type='text' name='contact'>	
							<label>Password: </label><input type="password" name='pwd'>						
							<label>Name: </label><input type='text' name='user_name'>																				
							<label>Email ID: </label><input type='text' name='mailID'>
							<label> Branch: </label>
							
							<select name='branch'> 
							
							<option>CSE</option>
							<option>ECE</option>
							<option>IT</option>
							
							</select>
							
							<br/><br/><br/>
								
										
							<input type='submit' value='Submit' name='adduser'>
						
					
				</form>
				</div>
				</div>
			</div>
		</div>
	</body>
	
</html>
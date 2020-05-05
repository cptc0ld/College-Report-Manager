<?php
	include("connect.inc.php");
	include('session.php');
	include("header.inc.php");
	
	date_default_timezone_set("Asia/Calcutta");
				
			if(isset($_POST['createReport'])){
				
				$title = stripcslashes(htmlspecialchars($_POST['report_name']));
				$sem = stripcslashes(htmlspecialchars($_POST['sem']));
				$year = stripcslashes(htmlspecialchars($_POST['year']));
				$branch = stripcslashes(htmlspecialchars($_POST['branch']));
				$ccode = stripcslashes(htmlspecialchars($_POST['ccode']));
				$cname = stripcslashes(htmlspecialchars($_POST['cname']));
				$nba = stripcslashes(htmlspecialchars($_POST['nba']));
				
				if(isset($_SESSION['login_user'])){
					
					$datetime = date("Y-m-d H:i:s");
					
						
					$user_id = $_SESSION['contact'];
					
					$s="select * from m_usertable where phone_no='".$user_id."'";
					$res=$db->query($s);
					$rows= $res->fetch_assoc();
					$uid = $rows['user_sys_id'];
					$user_name = $rows['user_name'];		
				
				
				}
				if($title&&$branch){
					$sub = $db->prepare("INSERT INTO report (report_name,created_by, added_on, branch, semester, year,course_code, course_name, nba) VALUES ( ?, ?,?, ?, ?, ?,?,?,?)");
					$sub->bind_param("sssssssss",$title,$user_name,$datetime,$branch, $sem, $year,$ccode,$cname, $nba);
					
										
					$sub->execute();	

					
					if(mysqli_error($db)){
						echo "<center><font size='8' color='red'>Something Wrong:".mysqli_error($db)."</font></center>";
					}
					else{
					
                                        echo "<center><font size='8' color='red'>Report Created!</font></center>";
					}			
				}else{
					echo "<center><font size='8' color='red'>Define at least two field!</font></center>";
				}

				
			}
			
			
	
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
			<h3>Please fill the Report Details</h3>
			<div class="form">						
				<form method='post'>
									
							<label>Report Name: </label><input type="text" name='report_name'>
							<label>Branch: </label>
							<select name='branch'>
							<option>CSE</option>
							<option>ECE</option>
							<option>IT</option>		
							</select>
							<label>Course Code: </label><input type='text' name='ccode'>		
							<label>Course Name: </label><input type='text' name='cname'>		
							<label>Semester: </label><input type='text' name='sem'>												
							<label>Year: </label><input type='text' name='year'>		
							<label>NBA Code: </label><input type='text' name='nba'>								
							
							<input type='submit' value='Submit' name='createReport'>
						
					
				</form>
				</div>
				</div>
			</div>
		</div>
	</body>
	
</html>


<?php
	include("connect.inc.php");
	include('session.php');
	include("header.inc.php");
	
	date_default_timezone_set("Asia/Calcutta");
	$rid = stripcslashes(htmlspecialchars($_GET['rid']));
	$branch =stripcslashes(htmlspecialchars($_GET['branch']));
				if(isset($_SESSION['login_user'])){		
				$user_name = $_SESSION['login_user'];
				}	
				
	$ser0 = mysqli_query($db, "SELECT report_name,semester,year,course_code,course_name,nba FROM report where report_id='".$rid."' ");
				echo mysqli_error($db);
				$get_ser0 = mysqli_fetch_assoc($ser0);
				$rname = $get_ser0['report_name'];
				$ccode = $get_ser0['course_code'];	
				$rcname = $get_ser0['course_name'];
				$semester = $get_ser0['semester'];
				$year = $get_ser0['year'];
				$nba = $get_ser0['nba'];
				
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Welcome to Course Manager</title>
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
	tr.spaceUnder > td
{
  padding-bottom: 1em;
  padding-top: 1em;
}
	}
	

.spaceTrack
{
  border-spacing: 0; border-width: 0; padding:1px;float:left;background-color:#606060;width:800px;
}
#head2 {
		background-color:#0B0B61;
		width:800px;
		color: #ffffff;
		padding: 0.5px;
		font: bold 24px Calibri;
		
	    
}
	
	</style>
</head>
<body>
<div class="page-holder">
	<div class="container">
	<table class="element3">
	<tr><td id="head2" colspan="3" rowspan="1"> <?php echo $rname; ?></td></tr><br/>
	
	
				  <?php
						                                               
						echo"
						<tr><div>
							<td class='mem'>Semester</td>
							<td class='mem1'>$semester</a></td>
							</div></tr>
							
							<tr><div>
							<td class='mem'>Year</td>
							<td class='mem1'>$year</a></td>
							</div></tr>
							
							<tr><div>
							<td class='mem'>Course Code</td>
							<td class='mem1'>$ccode</a></td>
							</div></tr>
							
							<tr><div>
							<td class='mem'>Course Name</td>
							<td class='mem1'>$rcname</a></td>
							</div></tr>
							
							<tr><div>
							<td class='mem'>Opening Report</td>
							<td class='mem1'><a href='openingreport.php?rid=".$rid."&semester=".$semester."&year=".$year."&ccode=".$ccode."&rcname=".$rcname."&nba=".$nba."&branch=".$branch."' class='a'>Click Here</a></td>
							</div></tr>
							
							<tr><div>
							<td class='mem'>Closing Report</td>
							<td class='mem1'><a href='closingreport.php?rid=".$rid."&semester=".$semester."&year=".$year."&ccode=".$ccode."&rcname=".$rcname."&nba=".$nba."&branch=".$branch."' class='a'>Click Here</a></td>
							</div></tr>
							
							<tr><div>
							<td class='mem'>Exit Survey</td>
							<td class='mem1'><a href='courseoutline.php?rid=".$rid."&semester=".$semester."&year=".$year."&ccode=".$ccode."&rcname=".$rcname."&nba=".$nba."&branch=".$branch."' class='a'>Click Here</a></td>
							</div></tr>
							
							<tr><div>
							<td class='mem'>Assesment Report</td>
							<td class='mem1'><a href='assesmenttools.php?rid=".$rid."&semester=".$semester."&year=".$year."&ccode=".$ccode."&rcname=".$rcname."&nba=".$nba."&branch=".$branch."' class='a''>Click Here</a></td>
							</div></tr>
							
						
						";
					
				?> 	
	
	</table>
	
	


</div>
</div>
</div>
</body>
</html>
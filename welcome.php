<?php
include('session.php');
include('header.inc.php');

if(isset($_SESSION['contact'])){		
				
				$cookie = $_SESSION['contact'];
		
		$q = mysqli_query($db, "SELECT user_sys_id, user_name,branch FROM m_usertable where phone_no='".$cookie."'")or die("Something wrong:".mysqli_error($db));
					$result= mysqli_fetch_assoc($q);
					$uid = $result['user_sys_id'];
					$name = $result['user_name'];
					$branch=$result['branch'];
				}		
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
	<tr><td id="head2" colspan="3" rowspan="1">Reports from <?php echo ($branch); ?></td></tr><br/>
	<tr>
					<td class="mem">Report Name</td>
					<td class="mem">Semester & Year</td>
					<td class="mem">Created By</td>
					
					
	</tr>
				  <?php
					$ser = mysqli_query($db, "SELECT * FROM report where branch='".$branch."' order by added_on desc ");
					echo mysqli_error($db);
					while ($get_ser = mysqli_fetch_assoc($ser)) {	
						$title = $get_ser['report_name'];
						$owner = $get_ser['created_by'];
						$rid = $get_ser['report_id'];
						$sem = $get_ser['semester'];
						$year = $get_ser['year'];
						
						                                               
						echo"
						<tr><div>
							<td class='mem1'><a href='ViewReport.php?rid=".$rid."&branch=".$branch."' class='a'>$title</a></td>
							<td class='mem1'>Semester - $sem  Year - $year</td>
							<td class='mem1'>$owner</td>
							

						</div></tr>
						";
					}
				?> 	
	
	</table>
	
	


</div>
</div>
</div>
</body>
</html>
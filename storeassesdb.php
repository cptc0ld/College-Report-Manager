
<html>
<body>

</body>
</html>


<?php 
error_reporting(0);
$rid = stripcslashes(htmlspecialchars($_POST['rid']));
$branch =stripcslashes(htmlspecialchars($_POST['branch']));
include('connect.inc.php');
$row_id = $_POST['row_id'];
$direct_assesment = $_POST['direct_assesment'];
$indirect_assesment = $_POST['indirect_assesment'];


for($i = 0; $i< count($row_id); $i+=1){
    $sql = "UPDATE table1 SET direct_assesment='".$direct_assesment[$i]."',indirect_assesment='".$indirect_assesment[$i]."' WHERE row_id = '".$row_id[$i]."'";
    $db->query($sql);
    if(mysqli_error($db)){
        echo "<center><font size='8' color='red'>Something Wrong:".mysqli_error($db)."</font></center>";
    }
}

header("Location: ViewReport.php?rid=$rid&branch=$branch");
?>
<?php
include('connect.inc.php');

$status = $_POST['status'];
$rowid = $_POST['rowid'];
$tablename = $_POST['table'];
$sql = "DELETE from $tablename WHERE row_id=$rowid";
    $db->query($sql);
    if(mysqli_error($db)){
        echo "<center><font size='8' color='red'>Something Wrong:".mysqli_error($db)."</font></center>";
    }

if ($status == "success"){
 // some action goes here under php
 
 echo json_encode(array("status"=>$status));
}

?>
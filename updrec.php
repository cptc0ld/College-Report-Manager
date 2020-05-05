<?php
include('connect.inc.php');

$status = $_POST['status'];
$pso = $_POST['pso'];
$tablename = $_POST['table'];
echo $pso;
foreach($pso as $ps){
$sql = "UPDATE $ttablenameable SET cgap='".$."',cga='".$cga[$i]."',cgbp='".$cgbp[$i]."',cgb='".$cgb[$i]."',cgcp='".$cgcp[$i]."',cgc='".$cgc[$i]."',cgd='".$cgd[$i]."',cgf='".$cgf[$i]."'";
$db->query($sql);
if(mysqli_error($db)){
    echo "<center><font size='8' color='red'>Something Wrong:".mysqli_error($db)."</font></center>";
}
}

if ($status == "success"){
 // some action goes here under php
 
 echo json_encode(array("status"=>$status));
}

?>
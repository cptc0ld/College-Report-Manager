
<html>
<body>

</body>
</html>


<?php 
error_reporting(0);
$rid = stripcslashes(htmlspecialchars($_POST['rid']));
$branch =stripcslashes(htmlspecialchars($_POST['branch']));

include('connect.inc.php');
$courseOutcomes = $_POST['course-outcome'];
$description = $_POST['description'];
$cognitivelevels = $_POST['cognitivelevels'];

for($i = 0; $i< count($courseOutcomes); $i+=1)
{

    $sub = $db->prepare("INSERT INTO table1 (rid, c_no, c_des, cog_level) VALUES (?, ?, ?, ?)");
    $sub->bind_param("ssss", $rid, $courseOutcomes[$i], $description[$i], $cognitivelevels[$i]);
    $sub->execute();


    if(mysqli_error($db)){
        echo "<center><font size='8' color='red'>Something Wrong:".mysqli_error($db)."</font></center>";
    }

}
$cos = $_POST['cos'];
$PO1 = $_POST['PO1'];
$PO2 = $_POST['PO2'];
$PO3 = $_POST['PO3'];
$PO4 = $_POST['PO4'];
$PO5 = $_POST['PO5'];
$PO6 = $_POST['PO6'];
$PO7 = $_POST['PO7'];
$PO8 = $_POST['PO8'];
$PO9 = $_POST['PO9']; 
$PO10 = $_POST['PO10'];
$PO11 = $_POST['PO11'];
$PO12 = $_POST['PO12'];
$PSO1 = $_POST['PSO1'];
$PSO2 = $_POST['PSO2'];
for($i = 0; $i< count($cos); $i+=1){
    $sub = $db->prepare("INSERT INTO table2 (rid, cos, PO1, PO2, PO3, PO4, PO5, PO6, PO7, PO8, PO9, PO10, PO11, PO12, PSO1, PSO2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $sub->bind_param("ssssssssssssssss", $rid, $cos[$i], $PO1[$i], $PO2[$i], $PO3[$i], $PO4[$i], $PO5[$i], $PO6[$i], $PO7[$i], $PO8[$i], $PO9[$i], $PO10[$i], $PO11[$i], $PO12[$i], $PSO1[$i], $PSO2[$i]);
    $sub->execute();

    if(mysqli_error($db)){
        echo "<center><font size='8' color='red'>Something Wrong:".mysqli_error($db)."</font></center>";
    }
}
$topic = $_POST['topic'];
$strenco = $_POST['strenco'];
$strenpo = $_POST['strenpo'];
$method = $_POST['method'];

for($i = 0; $i< count($topic); $i+=1){
    $sub = $db->prepare("INSERT INTO table3 (rid, c1, c2, c3, c4) VALUES (?, ?, ?, ?, ?)");
    $sub->bind_param("sssss", $rid, $topic[$i], $strenco[$i], $strenpo[$i], $method[$i]);
    $sub->execute();


    if(mysqli_error($db)){
        echo "<center><font size='8' color='red'>Something Wrong:".mysqli_error($db)."</font></center>";
    }
}
$details = $_POST['details'];
$justi = $_POST['justi'];

for($i = 0; $i< count($details); $i+=1){
    $sub = $db->prepare("INSERT INTO table5 (rid, c1, c2) VALUES (?, ?, ?)");
    $sub->bind_param("sss", $rid, $details[$i], $justi[$i]);
    $sub->execute();


    if(mysqli_error($db)){
        echo "<center><font size='8' color='red'>Something Wrong:".mysqli_error($db)."</font></center>";
    }
}
$co2 = $_POST['co2'];
$attain = $_POST['attain'];
$identify = $_POST['identify'];
$action = $_POST['action'];

for($i = 0; $i< count($co2); $i+=1){
    $sub = $db->prepare("INSERT INTO table6 (rid, c1, c2, c3, c4) VALUES (?, ?, ?, ?, ?)");
    $sub->bind_param("sssss", $rid, $co2[$i], $attain[$i], $identify[$i], $action[$i]);
    $sub->execute();


    if(mysqli_error($db)){
        echo "<center><font size='8' color='red'>Something Wrong:".mysqli_error($db)."</font></center>";
    }
}
$moduleCoord = $_POST['module-coord'];
$courseCoord = $_POST['course-coord'];
$otb1 = $_POST["otb1"];
$otb2 = $_POST["otb2"];
$otb3 = $_POST["otb3"];
$count1 = $_POST["count1"];

if($count1){
    $sql = "UPDATE open_report SET otb1='".$otb1."',otb2='".$otb2."', otb3='".$otb3."',module_co='".$moduleCoord."',course_co='".$courseCoord."' WHERE rid = ' .$rid . '";
    $db->query($sql);
    if(mysqli_error($db)){
        echo "<center><font size='8' color='red'>Something Wrong:".mysqli_error($db)."</font></center>";
    }
}else{
    $sub = $db->prepare("INSERT INTO open_report (rid, otb1, otb2, otb3, course_co, module_co) VALUES (?, ?, ?, ?, ?, ?)");
    $sub->bind_param("ssssss", $rid, $otb1, $otb2, $otb3, $moduleCoord , $courseCoord );
    $sub->execute();


    if(mysqli_error($db)){
        echo "<center><font size='8' color='red'>Something Wrong:".mysqli_error($db)."</font></center>";
    }
}
   header("Location: ViewReport.php?rid=$rid&branch=$branch");
?>
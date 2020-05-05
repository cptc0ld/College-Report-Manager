
<html>
<body>

</body>
</html>


<?php 
$rid = stripcslashes(htmlspecialchars($_POST['rid']));
$branch =stripcslashes(htmlspecialchars($_POST['branch']));
include('connect.inc.php');
$sno1 = $_POST['sno1'];
$mname = $_POST['mname'];
$mdesc = $_POST['mdesc'];
$mnum = $_POST['mnum'];


for($i = 0; $i< count($mname); $i+=1){

    $sub = $db->prepare("INSERT INTO table7 (rid, sno, mname, mdesc, mnum) VALUES (?, ?, ?, ?, ?)");
    $sub->bind_param("sssss", $rid, $sno1[$i], $mname[$i], $mdesc[$i], $mnum[$i]);
    $sub->execute();


    if(mysqli_error($db)){
        echo "<center><font size='8' color='red'>Something Wrong:".mysqli_error($db)."</font></center>";
    }
}



$sno2 = $_POST['sno2'];
$material = $_POST['material'];



for($i = 0; $i< count($sno2); $i+=1){

    $sub = $db->prepare("INSERT INTO table9 (rid, sno, material) VALUES (?, ?, ?)");
    $sub->bind_param("sss", $rid, $sno2[$i], $material[$i]);
    $sub->execute();


    if(mysqli_error($db)){
        echo "<center><font size='8' color='red'>Something Wrong:".mysqli_error($db)."</font></center>";
    }
}
header("Location: ViewReport.php?rid=$rid&branch=$branch");

?>
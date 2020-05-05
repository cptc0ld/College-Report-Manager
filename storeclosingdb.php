
<html>
<body>

</body>
</html>


<?php 
error_reporting(0);
$rid = stripcslashes(htmlspecialchars($_POST['rid']));
$branch =stripcslashes(htmlspecialchars($_POST['branch']));

include('connect.inc.php');

// $courseOutcomes = $_POST['course-outcome'];
// $description = $_POST['description'];
// $cognitivelevels = $_POST['cognitivelevels'];

// for($i = 0; $i< count($courseOutcomes); $i+=1)
// {

//     $sub = $db->prepare("INSERT INTO table1 (rid, c_no, c_des, cog_level) VALUES (?, ?, ?, ?)");
//     $sub->bind_param("ssss", $rid, $courseOutcomes[$i], $description[$i], $cognitivelevels[$i]);
//     $sub->execute();


//     if(mysqli_error($db)){
//         echo "<center><font size='8' color='red'>Something Wrong:".mysqli_error($db)."</font></center>";
//     }

// }
// $cos = $_POST['co'];

// $PO1 = $_POST['PO1'];
// $PO2 = $_POST['PO2'];
// $PO3 = $_POST['PO3'];
// $PO4 = $_POST['PO4'];
// $PO5 = $_POST['PO5'];
// $PO6 = $_POST['PO6'];
// $PO7 = $_POST['PO7'];
// $PO8 = $_POST['PO8'];
// $PO9 = $_POST['PO9']; 
// $PO10 = $_POST['PO10'];
// $PO11 = $_POST['PO11'];
// $PO12 = $_POST['PO12'];
// $PSO1 = $_POST['PSO1'];
// $PSO2 = $_POST['PSO2'];
// for($i = 0; $i< count($cos); $i+=1){
//     $sub = $db->prepare("INSERT INTO table2 (rid, co, PO1, PO2, PO3, PO4, PO5, PO6, PO7, PO8, PO9, PO10, PO11, PO12, PSO1, PSO2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
//     $sub->bind_param("ssssssssssssssss", $rid, $cos[$i], $PO1[$i], $PO2[$i], $PO3[$i], $PO4[$i], $PO5[$i], $PO6[$i], $PO7[$i], $PO8[$i], $PO9[$i], $PO10[$i], $PO11[$i], $PO12[$i], $PSO1[$i], $PSO2[$i]);
//     $sub->execute();

//     if(mysqli_error($db)){
//         echo "<center><font size='8' color='red'>Something Wrong:".mysqli_error($db)."</font></center>";
//     }
// }
// $co1 = $_POST['co1'];
// $co2 = $_POST['co2'];
// $co3 = $_POST['co3'];
// $co4 = $_POST['co4'];
// $co5 = $_POST['co5'];
// for($i = 0; $i< count($co1); $i+=1){

    // $sub = $db->prepare("INSERT INTO table1 (rid, co1, co2, co3, co4, co5) VALUES (?, ?, ?, ?, ?, ?)");
    // $sub->bind_param("sssss", $rid, $co1[$i], $c02[$i], $co3[$i], $co4[$i], $co5[$i]);
    // $sub->execute();


    // if(mysqli_error($db)){
    //     echo "<center><font size='8' color='red'>Something Wrong:".mysqli_error($db)."</font></center>";
    // }
// }


//$course = $_POST['course'];
$attainpo1 = $_POST['attainpo1'];
$attainpo2 = $_POST['attainpo2'];
$attainpo3 = $_POST['attainpo3'];
$attainpo4 = $_POST['attainpo4'];
$attainpo5 = $_POST['attainpo5'];
$attainpo6 = $_POST['attainpo6'];
$attainpo7 = $_POST['attainpo7'];
$attainpo8 = $_POST['attainpo8'];
$attainpo9 = $_POST['attainpo9'];
$attainpo10 = $_POST['attainpo10'];
$attainpo11 = $_POST['attainpo11'];
$attainpo12 = $_POST['attainpo12'];
$attainps01 = $_POST['attainps01'];
$attainps02 = $_POST['attainps02'];
$count1 = $_POST['count1'];
$cgap = $_POST['gradeap'];
$cga = $_POST['gradea'];
$cgbp = $_POST['gradebp'];
$cgb = $_POST['gradeb'];
$cgcp = $_POST['gradecp'];
$cgc = $_POST['gradec'];
$cgd = $_POST['graded'];
$cgf = $_POST['gradef'];
$moduleCoord = $_POST['module-coord'];
$courseCoord = $_POST['course-coord'];
$tb1 = $_POST["tb1"];
$tb2 = $_POST["tb2"];
$count2 = $_POST['count2'];
if(!$count1){
    
    $sub = $db->prepare("INSERT INTO closing_report (rid, cgap, cga, cgbp, cgb, cgcp, cgc, cgd, cgf, tb1, tb2, apo1, apo2, apo3, apo4, apo5, apo6, apo7, apo8, apo9, apo10, apo11, apo12, apso1, apso2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $sub->bind_param("sssssssssssssssssssssssss",$rid, $cgap, $cga, $cgbp, $cgb, $cgcp, $cgc, $cgd, $cgf, $tb1, $tb2, $attainpo1, $attainpo2, $attainpo3, $attainpo4, $attainpo5, $attainpo6, $attainpo7, $attainpo8, $attainpo9, $attainpo10, $attainpo11, $attainpo12, $attainps01, $attainps02);
        $sub->execute();

}else{
    $sql = "UPDATE closing_report SET apo1='".$attainpo1."',apo2='".$attainpo2."',apo3='".$attainpo3."',apo4='".$attainpo4."',apo5='".$attainpo5."',apo6='".$attainpo6."',apo7='".$attainpo7."',apo8='".$attainpo8."',apo9='".$attainpo9."',apo10='".$attainpo10."',apo11='".$attainpo11."',apo12='".$attainpo12."',apso1='".$attainps01."',apso2='".$attainps02."'";
    $db->query($sql);
    if(mysqli_error($db)){
        echo "<center><font size='8' color='red'>Something Wrong:".mysqli_error($db)."</font></center>";
    }
}


    $sql = "UPDATE closing_report SET cgap='".$cgap."',cga='".$cga."',cgbp='".$cgbp."',cgb='".$cgb."',cgcp='".$cgcp."',cgc='".$cgc."',cgd='".$cgd."',cgf='".$cgf."'";
    $db->query($sql);
    if(mysqli_error($db)){
        echo "<center><font size='8' color='red'>Something Wrong:".mysqli_error($db)."</font></center>";
    }

    


    $sql = "UPDATE closing_report SET tb1='".$tb1."',tb2='".$tb2."'";
    $db->query($sql);

    if(mysqli_error($db)){
        echo "<center><font size='8' color='red'>Something Wrong:".mysqli_error($db)."</font></center>";
    }



    header("Location: ViewReport.php?rid=$rid&branch=$branch");
?>
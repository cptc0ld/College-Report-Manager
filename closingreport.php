<?php 
include('connect.inc.php');
$rid = stripcslashes(htmlspecialchars($_GET['rid']));
$semester = stripcslashes(htmlspecialchars($_GET['semester']));
$year = stripcslashes(htmlspecialchars($_GET['year']));
$ccode = stripcslashes(htmlspecialchars($_GET['ccode']));
$rcname = stripcslashes(htmlspecialchars($_GET['rcname']));
$nba = stripcslashes(htmlspecialchars($_GET['nba']));
$branch =stripcslashes(htmlspecialchars($_GET['branch']));
?>

<html>


<head>
    <link rel="stylesheet" type="text/css" href="style.css?id=2">
    <link rel="stylesheet" type="text/css" href="openingstyle.css?id=2">
    
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="  crossorigin="anonymous"></script>   
    <script type="text/javascript" src="features.js?ver=1"></script>
    
</head>

<body>
<form action="storeclosingdb.php" method="post">
<div class="page-holder">
	<div class="container">
    <div class="page-holder">
        <p style="text-align:center">
        <h1>Name of the Department: <?php ?> </h1>
            <h3>AY: <?php echo $year; ?> (<?php echo $semester;?>th Semester)</h3>
            <h4>Course Closing Report</h4>
        </p>
    </div>
    <br>
    <p class="sub">
    Programme Name: BTech (<?php echo $branch;?>)
    </p>
    <p class="sub">
    Semester: <?php echo $semester;?>
    </p>
    <p class="sub">
    Course Name : <?php echo $ccode;?>
    </p>
    <p class="sub">
    Course Code: <?php echo $rcname;?>
    </p>
    
    <u>
        <h4>Course Outcomes:</h4>
    </u>
    At the completion of the course, students will be able to,

    <table class="" id='co'>
        <thead>
            <tr>
                <th>COURSE OUTCOMES</th>
                <th>Description</th>
                <th>COGNITIVE LEVELS</th>
            </tr>
        </thead>
        <tbody>     
        <!-- <tr>
            <td><input type="text" name="course-outcome"/></td>
            <td><input type="text" name="description"/></td>
            <td><input type="text" name="cognitivelevels"/></td>
        </tr> -->
        <?php 
            $ser0 = mysqli_query($db, "SELECT row_id, c_no, c_des,cog_level FROM table1 where rid='".$rid."' ");
            echo mysqli_error($db);
            while(   $get_ser0 = mysqli_fetch_assoc($ser0)){
                $c_no = $get_ser0['c_no'];
                $c_des = $get_ser0['c_des'];
                $cog_level = $get_ser0['cog_level'];
                $row_id = $get_ser0['row_id'];
                echo "<tr>
                    <td class=''> $c_no </td> 
                    <td class=''> $c_des </td> 
                    <td class=''> $cog_level </td> 
                    
                    </tr>";
                }
        ?>
        </tbody>
    </table>
    
    <u>
        <h4>CO-PO and CO-PSO Mapping:</h4>
    </u>

    <table class="" id="co-po">

        <thead>
            <tr>
            <th>COs</th>
                <th>PO 1</th>
                <th>PO 2</th>
                <th>PO 3</th>
                <th>PO 4</th>
                <th>PO 5</th>
                <th>PO 6</th>
                <th>PO 7</th>
                <th>PO 8</th>
                <th>PO 9</th>
                <th>PO 10</th>
                <th>PO 11</th>
                <th>PO 12</th>
                <th>PSO1</th>
                <th>PS02</th>
            </tr>
        </thead>
        <tbody>     
        <!-- <tr>
            <td class=''><input type="text" name="co"/></td>
            <td class=''><input type="text" name="PO1"/></td>
            <td class=''><input type="text" name="PO2"/></td>
            <td class=''><input type="text" name="PO3"/></td>
            <td class=''><input type="text" name="PO4"/></td>
            <td class=''><input type="text" name="PO5"/></td>
            <td class=''><input type="text" name="PO6"/></td>
            <td class=''><input type="text" name="PO7"/></td>
            <td class=''><input type="text" name="PO8"/></td>
            <td class=''><input type="text" name="PO9"/></td>
            <td class=''><input type="text" name="PO10"/></td>
            <td class=''><input type="text" name="PO11"/></td>
            <td class=''><input type="text" name="PO12"/></td>
            <td class=''><input type="text" name="PSO1"/></td>
            <td class=''><input type="text" name="PSO2"/></td>
        </tr> -->
        <?php 
            $ser0 = mysqli_query($db, "SELECT cos,PO1,PO2,PO3,PO4,PO5,PO6,PO7,PO8,PO9,PO10,PO11,PO12,PSO1,PSO2 FROM table2 where rid='".$rid."' ");
            echo mysqli_error($db);
            while(   $get_ser0 = mysqli_fetch_assoc($ser0)){
                $cos = $get_ser0['cos'];
                $PO1 = $get_ser0['PO1'];
                $PO2 = $get_ser0['PO2'];
                $PO3 = $get_ser0['PO3'];
                $PO4 = $get_ser0['PO4'];
                $PO5 = $get_ser0['PO5'];
                $PO6 = $get_ser0['PO6'];
                $PO7 = $get_ser0['PO7'];
                $PO8 = $get_ser0['PO8'];
                $PO9 = $get_ser0['PO9'];
                $PO10 = $get_ser0['PO10'];
                $PO11 = $get_ser0['PO11'];
                $PO12 = $get_ser0['PO12'];
                $PSO1 = $get_ser0['PSO1'];
                $PSO2 = $get_ser0['PSO2'];


                echo "<tr>
                    <td class=''> $cos </td> 
                    <td class=''> $PO1 </td> 
                    <td class=''> $PO2 </td> 
                    <td class=''> $PO3 </td> 
                    <td class=''> $PO4 </td> 
                    <td class=''> $PO5 </td> 
                    <td class=''> $PO6 </td> 
                    <td class=''> $PO7 </td> 
                    <td class=''> $PO8 </td> 
                    <td class=''> $PO9 </td> 
                    <td class=''> $PO10 </td> 
                    <td class=''> $PO11 </td> 
                    <td class=''> $PO12 </td> 
                    <td class=''> $PSO1 </td> 
                    <td class=''> $PSO2 </td> 
                    </tr>";
                }
        ?>
        </tbody>
    </table>

    <!-- <u>
        <h4>CO Attainments in:</h4>
    </u>
    <table class="" id="gaps">
        <thead>
            <tr>
                <th>CO 1</th>
                <th>CO 2</th>
                <th>CO 3</th>
                <th>CO 4</th>
                <th>CO 5</th>
            </tr>
        </thead>
        <tbody>     
        <tr>
            <td><input type="text" name="co1"/></td>
            <td><input type="text" name="co2"/></td>
            <td><input type="text" name="co3"/></td>
            <td><input type="text" name="co4"/></td>
            <td><input type="text" name="co5"/></td>
        </tr>
        </tbody>
    </table>

    <button type="button" onclick="myFunction('gaps')">Add Row</button> -->
    <u>
        <h4>PO-PSO Attainments in 2019-20:</h4>
    </u>
    <table class="" id="modi">
        <thead>
            <tr>
                <th>Course</th>
                <th>PO 1</th>
                <th>PO 2</th>
                <th>PO 3</th>
                <th>PO 4</th>
                <th>PO 5</th>
                <th>PO 6</th>
                <th>PO 7</th>
                <th>PO 8</th>
                <th>PO 9</th>
                <th>PO 10</th>
                <th>PO 11</th>
                <th>PO 12</th>
                <th>PSO1</th>
                <th>PS02</th>
            </tr>
        </thead>
        <tbody>     
        
        <?php
            $ser0 = mysqli_query($db, "SELECT  apo1, apo2, apo3, apo4, apo5, apo6, apo7, apo8, apo9, apo10, apo11, apo12, apso1, apso2 FROM closing_report where rid='".$rid."' ");
            echo mysqli_error($db);
            $count1 = 0;
            while($get_ser0 = mysqli_fetch_assoc($ser0)){
                $count1 = 1;
                $apo1 = $get_ser0['apo1'];
                $apo2 = $get_ser0['apo2'];
                $apo3 = $get_ser0['apo3'];
                $apo4 = $get_ser0['apo4'];
                $apo5 = $get_ser0['apo5'];
                $apo6 = $get_ser0['apo6'];
                $apo7 = $get_ser0['apo7'];
                $apo8 = $get_ser0['apo8'];
                $apo9 = $get_ser0['apo9'];
                $apo10 = $get_ser0['apo10'];
                $apo11 = $get_ser0['apo11'];
                $apo12 = $get_ser0['apo12'];
                $apso1 = $get_ser0['apso1'];
                $apso2 = $get_ser0['apso2'];

                echo "<tr>
                <td class=''> $nba </td> 
                    <td class=''> <input type='text' name='attainpo1' value= '$apo1'/> </td> 
                    <td class=''> <input type='text' name='attainpo2' value = '$apo2'/></td> 
                    <td class=''> <input type='text' name='attainpo3' value = '$apo3'/></td> 
                    <td class=''> <input type='text' name='attainpo4' value = '$apo4'/></td>
                    <td class=''> <input type='text' name='attainpo5' value = '$apo5'/></td>
                    <td class=''> <input type='text' name='attainpo6' value = '$apo6'/></td> 
                    <td class=''> <input type='text' name='attainpo7' value = '$apo7'/></td>
                    <td class=''> <input type='text' name='attainpo8' value = '$apo8'/></td>
                    <td class=''> <input type='text' name='attainpo9' value = '$apo9'/></td>
                    <td class=''> <input type='text' name='attainpo10' value ='$apo10'/></td>
                    <td class=''> <input type='text' name='attainpo11' value = '$apo11'/></td> 
                    <td class=''> <input type='text' name='attainpo12' value = '$apo12'/></td>
                    <td class=''> <input type='text' name='attainps01' value = '$apso1'/></td>
                    <td class=''> <input type='text' name='attainps02' value = '$apso2'/></td>
                    <input type='hidden' name='count1' value='1'/>
                    </tr>";
                }

        ?>
        <?php 
        if(!$count1)
        {
        ?>
        <tr>
            <td><input type="text" name="course"/></td>
            <td><input type="text" name="attainpo1"/></td>
            <td><input type="text" name="attainpo2"/></td>
            <td><input type="text" name="attainpo3"/></td>
            <td><input type="text" name="attainpo4"/></td>
            <td><input type="text" name="attainpo5"/></td>
            <td><input type="text" name="attainpo6"/></td>
            <td><input type="text" name="attainpo7"/></td>
            <td><input type="text" name="attainpo8"/></td>
            <td><input type="text" name="attainpo9"/></td>
            <td><input type="text" name="attainpo10"/></td>
            <td><input type="text" name="attainpo11"/></td>
            <td><input type="text" name="attainpo12"/></td>
            <td><input type="text" name="attainps01"/></td>
            <td><input type="text" name="attainps02"/></td>
            <input type="hidden" name="count1" value="0">
        </tr>
        <?php 
        }
        
        ?>
        </tbody>
    </table>
    <u>
        <h4>Summary of Result Analysis:</h4>
    </u>
    <table class="" id="improve">
        <thead>
            <tr>
                <th>------ </th>
                <th>Grade A+</th>
                <th>Grade A</th>
                <th>Grade B</th>
                <th>Grade B+</th>
                <th>Grade C</th>
                <th>Grade C+</th>
                <th>Grade D</th>
                <th>Grade F</th>
            </tr>
        </thead>
        <tbody>     
        <?php
            $ser0 = mysqli_query($db, "SELECT  cgap, cga, cgbp, cgb, cgcp, cgc, cgd, cgf FROM closing_report where rid='".$rid."' ");
            echo mysqli_error($db);
            $count2 = 0;
            while(   $get_ser0 = mysqli_fetch_assoc($ser0)){
                $count2 = 1;
                $cgap = $get_ser0['cgap'];
                $cga = $get_ser0['cga'];
                $cgbp = $get_ser0['cgbp'];
                $cgb = $get_ser0['cgb'];
                $cgcp = $get_ser0['cgcp'];
                $cgc = $get_ser0['cgc'];
                $cgd = $get_ser0['cgd'];
                $cgf = $get_ser0['cgf'];
                
                echo "<tr>
                <td class=''> % age of Student </td> 
                    <td class=''>  <input type='text' name='gradeap' value = '$cgap'/></td> 
                    <td class=''>  <input type='text' name='gradea' value = '$cga'/></td> 
                    <td class=''>  <input type='text' name='gradebp' value = '$cgbp'/></td> 
                    <td class=''>  <input type='text' name='gradeb' value = '$cgb'/></td> 
                    <td class=''>  <input type='text' name='gradecp' value = '$cgcp'/></td> 
                    <td class=''>  <input type='text' name='gradec' value = '$cgc'/></td> 
                    <td class=''>  <input type='text' name='graded' value = '$cgd'/></td> 
                    <td class=''>  <input type='text' name='gradef' value = '$cgf'/></td> 
                    <input type='hidden' name='count2' value='1'/>
                    </tr>";
                }
        if(!$count2){
        ?>
        <tr>
            <td><input type="text" name="name"/></td>
            <td><input type="text" name="gradeap"/></td>
            <td><input type="text" name="gradea"/></td>
            <td><input type="text" name="gradebp"/></td>
            <td><input type="text" name="gradeb"/></td>
            <td><input type="text" name="gradecp"/></td>
            <td><input type="text" name="gradec"/></td>
            <td><input type="text" name="graded"/></td>
            <td><input type="text" name="gradef"/></td>
            <input type="hidden" name="count2" value="0"/>

        </tr>
        <?php 
        }
        
        ?>
        </tbody>
    </table>
    

    <?php
            $ser0 = mysqli_query($db, "SELECT  tb1, tb2 FROM closing_report where rid='".$rid."' ");
            echo mysqli_error($db);
            $count3 = 0;
            while($get_ser0 = mysqli_fetch_assoc($ser0)){
            $count3 = 1;
            if(isset($get_ser0)){
                $tb1 = $get_ser0['tb1'];
                $tb2 = $get_ser0['tb2'];
            }else{
                $tb1 = "";
                $tb2 = "";
            }
            echo '<u>
            <h4 class="sub">Innovative Teaching and Learning Method to be used (if any): </h4>
            </u>
        
            <textarea class="" name = "tb1">' . $tb1 . '</textarea>
            <u>
                <h4 class="sub"> Point presentations, live demonstration of Blockchain platforms and smart contracts coding</h4>
            </u>
            <textarea class="" name = "tb2">' . $tb2 . '</textarea>
           
              ';
        }
        
        
        
        if(!$count3){
            
            echo '<u>
            <h4 class="sub">Innovative Teaching and Learning Method to be used (if any): </h4>
            </u>
        
            <textarea class="" name = "tb1"></textarea>
            <u>
                <h4 class="sub"> Point presentations, live demonstration of Blockchain platforms and smart contracts coding</h4>
            </u>
            <textarea class="" name = "tb2"></textarea>

            <input type="hidden" name="count3" value="0">
              ';
        }
        ?>
    <?php
            $ser0 = mysqli_query($db, "SELECT  course_co, module_co FROM open_report where rid='".$rid."' ");
            echo mysqli_error($db);
            while(   $get_ser0 = mysqli_fetch_assoc($ser0)){
                $module_co = $get_ser0['module_co'];
                $course_co = $get_ser0['course_co'];
                
                echo '<div class="Table">
                    <div class="Row">
                        <div class="Cell">
                            <h4>Signature:	</h4>
                        </div>
                        <div class="Cell">
                            <h4>Signature:	</h4>    
                            
                        </div>
            
                        </div>
                        <div class="Row">
                            <div class="Cell">
                                <h4>Module Coordinator:	 ' . $module_co .' </h4>
                            </div>
                            <div class="Cell">
                                <h4>Course Coordinator:' . $course_co .'</h4>
                            </div>
                        </div>
                    </div>
                ';
                }

        ?>
    
    <input type="hidden" value=<?php echo $_GET["rid"] ;?> name="rid"/>
    <input type="hidden" value=<?php echo $branch ;?> name="branch"/>
    <input type="submit">
</div>
</div>
    </form>
    <body>

</html>
<style type="text/css">
    .Table
    {
        display: table;
        width: 90%;
    }
    .Row
    {
        display: table-row;
    }
    .Cell
    {
        display: table-cell;

    }
</style>
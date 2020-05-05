<?php
// Turn off all error reporting
//error_reporting(0);
?>
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
    <link rel="stylesheet" type="text/css" href="style.css?id=3">
    <link rel="stylesheet" type="text/css" href="openingstyle.css?id=2">
    
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="  crossorigin="anonymous"></script>   
    <script type="text/javascript" src="features.js?ver=1"></script>
    
</head>

<body>

<form action="storeopeningdb.php" method="post">
<div class="page-holder">
	<div class="container">
    <div class="page-holder">
        <p style="text-align:center">
        <h1>Name of the Department: <?php echo $branch;?></h1>
            <h3>AY: <?php echo $year; ?> (<?php echo $semester;?> Semester)</h3>
            <h4>Course Opening Report</h4>
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
    <p class="sub">
    Course Name : <?php echo $ccode;?>
    </p>
    <p class="sub">
    Course Code: <?php echo $rcname;?>
    </p>
    <u>
        <h4 class="sub">Course Outcomes:</h4>
    </u>
    <p class="sub">At the completion of the course, students will be able to,</p>

    <table class="element3" id='co'>
        <thead>
            <tr>
                <th class="">COURSE OUTCOMES</th>
                <th class="">Description</th>
                <th class="">COGNITIVE LEVELS</th>
                <th class="">Operations</th>
            </tr>
        </thead>
        <tbody>     
        <tr>
            <td class=''><input type="text" name="course-outcome"></td>
            <td class=''><input type="text" name="description"/></td>
            <td class=''><input type="text" name="cognitivelevels"/></td>
            <td><button type="button" onclick="myFunction('co')">Add Row</button></td>
        </tr>

        <?php 
            $ser0 = mysqli_query($db, "SELECT row_id, c_no, c_des,cog_level FROM table1 where rid='".$rid."' ");
            echo mysqli_error($db);
            while(   $get_ser0 = mysqli_fetch_assoc($ser0)){
                $c_no = $get_ser0['c_no'];
                $c_des = $get_ser0['c_des'];
                $cog_level = $get_ser0['cog_level'];
                $row_id = $get_ser0['row_id'];
                $table = "table1";
                echo "<tr>
                    <td class=''> $c_no </td> 
                    <td class=''> $c_des </td> 
                    <td class=''> $cog_level </td> 
                    <td class=''> <button type='button' onclick='delRow($row_id,&quot;$table&quot;)'>Del Row</button> </td> 
                    </tr>";
                }
        ?>
        </tbody>
    </table>
    
   
    <u>
        <h4 class="sub">CO-PO and CO-PSO Mapping:</h4>
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
                <th class="">Operations</th>
            </tr>
        </thead>
        <tbody>     
        <tr>
            <td class=''><input type="text" name="cos"/></td>
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
            <td><button type="button" onclick="myFunction('co-po')">Add Row</button></td>
        </tr>
        <?php 
            $ser0 = mysqli_query($db, "SELECT row_id,cos,PO1,PO2,PO3,PO4,PO5,PO6,PO7,PO8,PO9,PO10,PO11,PO12,PSO1,PSO2 FROM table2 where rid='".$rid."' ");
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
                $row_id = $get_ser0['row_id'];
                $table = "table2";
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
                    <td class=''> <button type='button' onclick='delRow($row_id,&quot;$table&quot;)'>Del Row</button> </td> 
                    </tr>";
                }
        ?>
        </tbody>
    </table>
    <u>
        <h4 class="sub">Identified Curriculum Gaps (If Any):</h4>
    </u>
    <table class="" id="gaps">
        <thead>
            <tr>
                <th>Topics to be introduced</th>
                <th>Strengthens CO</th>
                <th>Strengthens PO, PSO</th>
                <th>Method of Identification</th>
                <th class="">Operations</th>
            </tr>
        </thead>
        <tbody>     
        <tr>
            <td class=''><input type="text" name="topic"/></td>
            <td class=''><input type="text" name="strenco"/></td>
            <td class=''><input type="text" name="strenpo"/></td>
            <td class=''><input type="text" name="method"/></td>
            <td><button type="button" onclick="myFunction('gaps')">Add Row</button></td>
        </tr>
        <?php 
            $ser0 = mysqli_query($db, "SELECT row_id,c1,c2,c3,c4 FROM table3 where rid='".$rid."' ");
            echo mysqli_error($db);
            while(   $get_ser0 = mysqli_fetch_assoc($ser0)){
                $c1 = $get_ser0['c1'];
                $c2 = $get_ser0['c2'];
                $c3 = $get_ser0['c3'];
                $c4 = $get_ser0['c4'];
                $row_id = $get_ser0['row_id'];
                $table = "table3";
                echo "<tr>
                    <td class=''> $c1 </td> 
                    <td class=''> $c2 </td> 
                    <td class=''> $c3 </td> 
                    <td class=''> $c4 </td> 
                    <td class=''> <button type='button' onclick='delRow($row_id,&quot;$table&quot;)'>Del Row</button> </td> 
                    </tr>";
                }
        ?>
        </tbody>
    </table>
    <u>
        <h4 class="sub">Modifications in Curriculum (If Any):</h4>
    </u>
    <table class="" id="modi">
        <thead>
            <tr>
                <th>Details of Modification</th>
                <th>Justification</th>
                <th class="">Operations</th>
            </tr>
        </thead>
        <tbody>     
        <tr>
            <td class=''><input type="text" name="details"/></td>
            <td class=''><input type="text" name="justi"/></td>
            <td><button type="button" onclick="myFunction('modi')">Add Row</button></td>
        </tr>
        <?php 
            $ser0 = mysqli_query($db, "SELECT row_id,c1,c2 FROM table5 where rid='".$rid."' ");
            echo mysqli_error($db);
            while(   $get_ser0 = mysqli_fetch_assoc($ser0)){
                $c1 = $get_ser0['c1'];
                $c2 = $get_ser0['c2'];
                $row_id = $get_ser0['row_id'];
                $table = "table5";
                echo "<tr>
                    <td class=''> $c1 </td> 
                    <td class=''> $c2 </td> 
                    <td class=''> <button type='button' onclick='delRow($row_id,&quot;$table&quot;)'>Del Row</button> </td>
                    </tr>";
                }
        ?>
        </tbody>
    </table>
    <u>
        <h4 class="sub">Actions for Improving CO Attainments:</h4>
    </u>
    <table class="" id="improve">
        <thead>
            <tr>
                <th>COs</th>
                <th>Attainments in 2018-19</th>
                <th>Identified Gap</th>
                <th>Action to be taken in <?php echo $year; ?> to improve CO attainmen</th>
                <th class="">Operations</th>

            </tr>
        </thead>
        <tbody>     
        <tr>
            <td class=''><input type="text" name="co2"/></td>
            <td class=''><input type="text" name="attain"/></td>
            <td class=''><input type="text" name="identify"/></td>
            <td class=''><input type="text" name="action"/></td>
            <td><button type="button" onclick="myFunction('improve')">Add Row</button></td>

        </tr>
        <?php 
            $ser0 = mysqli_query($db, "SELECT row_id,c1,c2,c3,c4 FROM table6 where rid='".$rid."' ");
            echo mysqli_error($db);
            while(   $get_ser0 = mysqli_fetch_assoc($ser0)){
                $c1 = $get_ser0['c1'];
                $c2 = $get_ser0['c2'];
                $c2 = $get_ser0['c3'];
                $c4 = $get_ser0['c4'];
                $row_id = $get_ser0['row_id'];
                $table = "table6";
                echo "<tr>
                    <td class=''> $c1 </td> 
                    <td class=''> $c2 </td> 
                    <td class=''> $c3 </td> 
                    <td class=''> $c4 </td> 
                    <td class=''> <button type='button' onclick='delRow($row_id,&quot;$table&quot;)'>Del Row</button> </td>
                    </tr>";
                }
        ?>
        </tbody>
    </table>

    <?php
            $ser0 = mysqli_query($db, "SELECT  otb1, otb2, otb3 FROM open_report where rid='".$rid."' ");
            echo mysqli_error($db);
            $count1 = 0;
            while($get_ser0 = mysqli_fetch_assoc($ser0)){
            $count1 = 1;
            if(isset($get_ser0)){
                $otb1 = $get_ser0['otb1'];
                $otb2 = $get_ser0['otb2'];
                $otb3 = $get_ser0['otb3'];
            }else{
                $otb1 = "";
                $otb2 = "";
                $otb3 = "";
            }
            echo '<u>
            <h4 class="sub">Innovative Teaching and Learning Method to be used (if any): </h4>
            </u>
        
            <textarea class="" name = "otb1">' . $otb1 . '</textarea>
            <u>
                <h4 class="sub"> Point presentations, live demonstration of Blockchain platforms and smart contracts coding</h4>
            </u>
            <textarea class="" name = "otb2">' . $otb2 . '</textarea>
            <u>
                <h4 class="sub">Innovative Evaluation Strategy to be used (If any): Projects for evaluation</h4>
            </u>
            <textarea class="" name = "otb3">' . $otb3 . '</textarea>
            <input type="hidden" name="count1" value="1">
            
              ';
        }
        
        //echo $count1;
        
        if(!$count1){
            
            echo '<u>
            <h4 class="sub">Innovative Teaching and Learning Method to be used (if any): </h4>
            </u>
        
            <textarea class="" name = "otb1"></textarea>
            <u>
                <h4 class="sub"> Point presentations, live demonstration of Blockchain platforms and smart contracts coding</h4>
            </u>
            <textarea class="" name = "otb2"></textarea>
            <u>
                <h4 class="sub">Innovative Evaluation Strategy to be used (If any): Projects for evaluation</h4>
            </u>
            <textarea class="" name = "otb3"></textarea>
            <input type="hidden" name="count1" value="0">
              ';
        }
        ?>
    <br>
    <br>
    <?php
            $ser0 = mysqli_query($db, "SELECT  course_co, module_co FROM open_report where rid='".$rid."' ");
            echo mysqli_error($db);
            $get_ser0 = mysqli_fetch_assoc($ser0);
            if(isset($get_ser0)){
                $module_co = $get_ser0['module_co'];
                $course_co = $get_ser0['course_co'];
            }else{
                $module_co = "";
                $course_co = "";
            }
                
                echo $module_co;
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
                                <h4>Module Coordinator:	<input type="text" name="module-coord" value="' . $module_co . '"/></h4>
                            </div>
                            <div class="Cell">
                                <h4>Course Coordinator:<input type="text" name="course-coord" value = "' .$course_co .'"/></h4>
                            </div>
                        </div>
                    </div>
                ';


        ?>
    <input type="hidden" value=<?php echo $_GET["rid"] ;?> name="rid"/>
    <input type="hidden" value=<?php echo $branch ;?> name="branch"/>
    <input type="submit">
</div>
</div>
</form>
    <body>

</html>

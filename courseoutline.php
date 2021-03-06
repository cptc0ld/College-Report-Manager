<?php
// Turn off all error reporting
error_reporting(0);
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
<?php
        if(array_key_exists('print', $_POST)) { 
			 require('phpToPDF.php');

    $pdf_options = array(
          "source_type" => 'url',
          "source" => $_SERVER['REQUEST_URI'],
          "action" => 'download',
		  "file_name" => 'courseoutline.doc
		  ');
		  

    phptopdf($pdf_options);
        } 
    ?> 
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css?id=3">
    <link rel="stylesheet" type="text/css" href="openingstyle.css?id=2">
    
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="  crossorigin="anonymous"></script>   
    <script type="text/javascript" src="features.js?ver=1"></script>
    
</head>

<body>

<form action="storeoutlinedb.php" method="post">
<div class="page-holder">
	<div class="container">
    <div class="page-holder">
        <p style="text-align:center">
       <h1>Name of the Department: <?php ?> </h1>
            <h3>AY: <?php echo $year; ?> (<?php echo $semester;?>th Semester)</h3>
            <h4>Course Outline</h4>
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
        <h4>Course Description:</h4>
    </u>
    
    <table class="element3" id='desc'>
        <thead>
            <tr>
                <th>Module No.</th>
                <th>Title of the Module</th>
                <th>Topics in the Module</th>
                <th>No. of Lectures for the module</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>     
        <tr>
            <td class=''><input type="text" name="sno1"></td>
            <td class=''><input type="text" name="mname"></td>
            <td class=''><input type="text" name="mdesc"/></td>
            <td class=''><input type="text" name="mnum"/></td>
            <td><button type="button" onclick="myFunction('desc')">Add Row</button></td>
        </tr>

        <?php 
            $ser0 = mysqli_query($db, "SELECT row_id, sno, mname, mdesc,mnum FROM table7 where rid='".$rid."' ");
            echo mysqli_error($db);
            while(   $get_ser0 = mysqli_fetch_assoc($ser0)){
                $sno1 = $get_ser0['sno'];
                $mname = $get_ser0['mname'];
                $mdesc = $get_ser0['mdesc'];
                $mnum = $get_ser0['mnum'];
                $row_id = $get_ser0['row_id'];
                $table = "table7";
                echo "<tr>
                    <td class=''> $sno1 </td> 
                    <td class=''> $mname </td> 
                    <td class=''> $mdesc </td> 
                    <td class=''> $mnum </td> 
                    <td class=''> <button type='button' onclick='delRow($row_id,&quot;$table&quot;)'>Del Row</button> </td> 
                    </tr>";
                }
        ?>
        </tbody>
    </table>
    
   <p style="text-align:center">
    <u>
        <h4 class="sub">Evalution Criteria</h4>
    </u>
</p>
    <table class="" id="co-po">

        <thead>
            <tr>
                <th>Components  </th>
                <th>Maximum Marks </th>
            </tr>
        </thead>
        <tbody>     
        <tr>
            <td> T1 </td>
            <td> 20 </td>
        </tr>
        <tr>
            <td> T2 </td>
            <td> 20 </td>
        </tr>
        
        <tr>
            <td> End semester evaluation </td>
            <td> 35 </td>
        </tr>
        
        <tr>
            <td> Total </td>
            <td> 100 </td>
        </tr>
        </tbody>
    </table>
	<p style="text-align:center">
    <u>
        <h4 class="sub">Recommended Reading material: Author(s), Title, Edition, Publisher, Year of Publication etc. ( Text books, Reference Books, Journals, Reports, Websites etc. in the IEEE format)  </h4>
    </u>
	</p>
    <table class="element3" id='book'>
        <thead>
                <th>Sno.</th>
                <th>Description</th>
                <th>Operations</th>
        </thead>
        <tbody>     
        <tr>
            <td class=''><input type="text" name="sno2"></td>
            <td class=''><input type="text" name="material"/></td>
            <td><button type="button" onclick="myFunction('book')">Add Row</button></td>
        </tr>

        <?php 
            $ser0 = mysqli_query($db, "SELECT row_id, sno, material FROM table9 where rid='".$rid."' ");
            echo mysqli_error($db);
            while(   $get_ser0 = mysqli_fetch_assoc($ser0)){
                $sno2 = $get_ser0['sno'];
                $material = $get_ser0['material'];
                $row_id = $get_ser0['row_id'];
                $table = "table9";
                echo "<tr>
                    <td class=''> $sno2 </td> 
                    <td class=''> $material </td> 
                    <td class=''> <button type='button' onclick='delRow($row_id,&quot;$table&quot;)'>Del Row</button> </td> 
                    </tr>";
                }
        ?>
        </tbody>
    </table>
   
    <input type="hidden" value=<?php echo $_GET["rid"] ;?> name="rid"/>
    <input type="hidden" value=<?php echo $branch ;?> name="branch"/>
    <input type="submit">


</form>
 
<form method="post">
<input type="submit" name="print"
                class="button" value="Download DOC" /> 
</form>
</div>
</div>
    <body>

</html>


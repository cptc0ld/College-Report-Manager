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
    <script type="text/javascript" src="features.js"></script>
    
</head>

<body>
    
<form action="storeassesdb.php" method="post">
<div class="page-holder">
	<div class="container">
    <div>
        <p style="text-align:center">
            <h1>Assesment Tools</h1>
            <h3>AY: <?php echo $year; ?> (<?php echo $semester;?>th Semester)</h3>
        </p>
    </div>
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
    <p class="sub">
    NBA code: <?php echo $nba;?> 
    </p>
    <table class="" id='asses'>
        <thead>
            <tr>
                <th>COs</th>
                <th>Description</th>
                <th>Cognitive Level(Blooms Taxonomy)</th>
                <th>Direct Assessment Tools (80%)</th>
                <th>Indirect Assessment Tools (20%)</th>
            </tr>
        </thead>
        <tbody>     
        <?php 
            $ser0 = mysqli_query($db, "SELECT row_id, c_no, c_des,cog_level, direct_assesment, indirect_assesment FROM table1 where rid='".$rid."' ");
            echo mysqli_error($db);
            while(   $get_ser0 = mysqli_fetch_assoc($ser0)){
                $c_no = $get_ser0['c_no'];
                $c_des = $get_ser0['c_des'];
                $cog_level = $get_ser0['cog_level'];
                $row_id = $get_ser0['row_id'];
                $direct_assesment = $get_ser0['direct_assesment'];
                $indirect_assesment = $get_ser0['indirect_assesment'];
                echo "<tr>
                    <input type='hidden' name='row_id[]' value= ' $row_id '/>
                    <td class='' name='c_no[]'> $c_no </td> 
                    <td class='' name='c_des[]'> $c_des </td> 
                    <td class='' name='cog_level[]'> $cog_level </td> 
                    <td> <input type='text' name='direct_assesment[]' value = '$direct_assesment '/>  </td>
                    <td> <input type='text'name='indirect_assesment[]' value = '$indirect_assesment '/>  </td>       
                    </tr>";
                }
        ?>
        </tbody>
    </table>
    
    
    <input type="hidden" value=<?php echo $_GET["rid"] ;?> name="rid"/>
    <input type="hidden" value=<?php echo $branch ;?> name="branch"/>
    <input type="submit">
</div>
</div>
</form>
    <body>

</html>
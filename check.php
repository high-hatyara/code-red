<?php 
include'layout/_header.php';
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="logo" href="index.php"><img src="img/logo.png" height="50%" width="30%"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li ><a href="about.php">About Us</a></li>
              <li><a href="register.php">Sign Up</a></li> 
             
             <li><a href="login.php">login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    </br></br>
<?php

require_once "Classes/PHPExcel.php";


if(isset($_POST['blood_group'])){
  $roll = @$_POST['blood_group'];
}


    $tmpfname = "BG.xlsx";
    $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
    $excelObj = $excelReader->load($tmpfname);
    //$worksheet = $excelObj->getActiveSheet(0);
    $worksheet = $excelObj->getSheet(0);
    $lastRow = $worksheet->getHighestRow();
    $lastcol = $worksheet->getHighestColumn();

    $excel_arr = $worksheet->toArray(null,true,true,true);

    //echo $excel_arr[1]["A"], $excel_arr[1]["B"], $excel_arr[1]["C"], $excel_arr[1]["D"];
  
?>
<!DOCTYPE html>
<html>
<head>
  <title>Blood Group</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
  
  
</head>
<body>




<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Blood Group</th>
      <th scope="col">Contact No.</th>
      <th scope="col">Email</th>
      <th scope="col">Name</th>
      <th scope="col">Body Weight</th>
    </tr>
  </thead>
  <tbody>
    <?php for ($row = 1; $row <= $lastRow; $row++) {
            $rolle = $worksheet->getCell('A'.$row)->getCalculatedValue();
        
            

            if($roll == $rolle){
    echo "<tr>";
      echo "<th scope='col'>".$rolle."</th>";
#<!-- SUBJECT 1 -->
      echo "<td>";#<!--th-->
                echo $worksheet->getCell('B'.$row)->getCalculatedValue();
                echo "</td>";
                     echo "<td>";#<!--th-->
                echo $worksheet->getCell('C'.$row)->getCalculatedValue();
                echo "</td>";
                   echo "<td>";#<!--th-->
                echo $worksheet->getCell('D'.$row)->getCalculatedValue();
                echo "</td>";
                      echo "<td>";#<!--th-->
                echo $worksheet->getCell('E'.$row)->getCalculatedValue();
                echo "</td>";


    echo "</tr>";
 
    
    }

}



    ?>
  </tbody>
</table>
<style type="text/css">
  table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</body>
</html>
<?php 
include'layout/_footer.php';
?>

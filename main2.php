<!DOCTYPE html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="jugaad";
$NAME="";
$CONTACT="";
$UNIQUE="";
$PREFIX="J17";



mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//connect to mysql database
try{
    $conn =mysqli_connect($servername,$username,$password,$dbname);
}catch(MySQLi_Sql_Exception $ex){
    echo("error in connecting");
}

if (isset($_POST["submit"])){
    $UNIQUE=uniqid($PREFIX);
    $myFile = "$UNIQUE.php"; // or .php
    $fh = fopen($myFile, 'w'); // or die("error");
    $stringData = "<html><head><title>hi</title></head><body><h1>test</h1></body></html>";
    fwrite($fh, $stringData);
    fclose($fh);
    foreach ($_POST['name'] as $index => $name) {
        $data1 = mysqli_real_escape_string($conn,$name);
        $data2 = mysqli_real_escape_string($conn,$_POST['contact'][$index]);
        mysqli_query($conn, "INSERT INTO `students` (`UNIQUE` ,`NAME`, `CONTACT`) VALUES ('$UNIQUE','$data1', '$data2')") or die(mysqli_error($conn));
    }
    header('Location: /$UNIQUE.php');
}

?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="JUGAAD TEAM REGISTRATIONS">
    <meta name="author" content="Vipul Wairagade">
    <title>Flagship 2017</title>
    <link href="img/logo%20vnit.png" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="well">
    <form class="form-horizontal" method="post" action="index.php" >
    <h1>MEMBER 1</h1>
    <input type="text" name="name[]" placeholder="NAME">
    <br>
    <input type="number"  name="contact[]" placeholder="CONTACT">
    <br>
        <h1>MEMBER 2</h1>
        <input type="text" name="name[]" placeholder="NAME">
        <br>
        <input type="number"  name="contact[]" placeholder="CONTACT">
        <br>
        <br>
    <input class="btn btn-info" type="submit" name="submit" value="SUBMIT">
    </form>
</div>





<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="tables/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- DataTables -->

<script src="tables/jquery.dataTables.js"></script>
</body>
</html>
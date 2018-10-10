<!DOCTYPE html>
<?php
if(isset($_POST['SIZE'])){
    $SIZE=$_POST['SIZE'];
    header('Location: /'.$_POST['SIZE']);
    exit;
}

?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="JUGAAD'17 REGISTRATION">
    <meta name="author" content="Vipul Wairagade">
    <title>JUGAAD'17</title>
    <link href="img/logo%20vnit.png" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container" >
    <div class="well">
        <h1 style="text-align:center">JUGAAD'17</h1>
    </div>
    <div class="col-lg-4"></div>
    <div class="well col-lg-4">
        <form class="form-horizontal" method ="post" action="index.php">
            <div class="form-group">
                <select class="form-control" name="SIZE" required>
                    <option value="">TEAM SIZE</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <input type="submit" name="insert" value="NEXT" class="btn btn-info" style="text-align: center">
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-4"></div>
</div>
<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="tables/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
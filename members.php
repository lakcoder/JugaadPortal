<?php
// Start the session
session_start();
$SIZE = $_SESSION['SIZE'];

?>
<html>
<head>
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php include("head.php");?>
<body id="main">
    <?php include("header.php");?>
<div class="container" >
    <div class="well">
        <h1 style="text-align:center">MEMBER DETAILS</h1>
    </div>
    <form class="form-horizontal" method ="post" action="submit.php">
        <div class="container">
            <div class="  col-lg-4 "></div>
            <div class=" well col-lg-4 ">
                <input class="form-control" type="text" name="teamname" placeholder="TEAM NAME" required>
            </div>
            <div class=" col-lg-4 "></div>
        </div>

        <?php
        for($i=0; $i<$SIZE; $i++):
        ?>
        <div class="well col-lg-4">
            <h2 style="text-align: center">MEMBER <?php echo($i+1) ?></h2>
            <br>
            <div class="form-group">
                <input class="form-control s-form-v2__input g-radius--50" type="text" name="name[]" placeholder="NAME" required>

            </div>
            <br>
            <div class="form-group">
                <select class="form-control s-form-v2__input g-radius--50" name="college[]" required>
                    <option value="">COLLEGE</option>
                    <option value="SHREE RAMDEOBABA COLLEGE OF ENGINEERING AND MANAGEMENT">SHREE RAMDEOBABA COLLEGE OF ENGINEERING AND MANAGEMENT</option>
                    <option value="INDIAN INSTITUTE OF INFORMATION TECHNOLOGY">INDIAN INSTITUTE OF INFORMATION TECHNOLOGY</option>
                    <option value="YESHWANTRAO CHAVAN COLLEGE OF ENGINEERING">YESHWANTRAO CHAVAN COLLEGE OF ENGINEERING</option>
                    <option value="LAXMINARAYAN INSTITUTE OF TECHNOLOGY">LAXMINARAYAN INSTITUTE OF TECHNOLOGY</option>
                    <option value="G. H. RAISONI COLLEGE OF ENGINEERING">G. H. RAISONI COLLEGE OF ENGINEERING</option>
                    <option value="VISVESVARAYA NATIONAL INSTITUTE OF TECHNOLOGY">VISVESVARAYA NATIONAL INSTITUTE OF TECHNOLOGY</option>
                    <option value="OTHER">OTHER</option>
                </select>

            </div>
            <br>
            <div class="form-group">
                <input class="form-control s-form-v2__input g-radius--50" type="text" name="contact[]" pattern="[789][0-9]{9}" placeholder="CONTACT" autocomplete="off" required>
            </div>
            <br>
            <div class="form-group">
                <input class="form-control s-form-v2__input g-radius--50" type="email" name="email[]" placeholder="EMAIL" autocomplete="off" required>
            </div>
        </div>
        <?php endfor; ?>
        <div class="row">
            <div class="col-sm-12 text-center">
                <input type="submit" name="submit" value="SUBMIT" class="btn btn-info" style="text-align: center">
            </div>
        </div>
    </form>

</div>
<?php include("footer.php");?>
<?php include("scripts.php");?>
</body>
</html>
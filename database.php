<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $welcomeMessage = "Welcome to the databse, " . $_SESSION['username'] . "!";
} else {
    header('Location: login_database.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="JUGAAD STUDENT DATABASE">
    <meta name="author" content="Vipul Wairagade">
    <title>STUDENT DATABASE</title>
    <link href="" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--
    <style>
        table.db-table 		{ border-right:1px solid #ccc; border-bottom:1px solid #ccc; }
        table.db-table th	{ background:#eee; padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
        table.db-table td	{ padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }

    </style> -->

</head>

<body>

<table class="table" id="myTable">
    <thead>
        <tr>
            <th>TIMESTAMP</th>
            <th>UNIQUE_ID</th>
            <th>TEAM_NAME</th>
            <th>NAME</th>
            <th>COLLEGE</th>
            <th>CONTACT</th>
            <th>EMAIL</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $servername = "localhost:3306";
        $username="jugaad";
        $password="VNIT@123";
        $dbname="Jugaad18";
        $conn=mysqli_connect($servername, $username,$password,$dbname);
        $result=mysqli_query($conn, "SELECT * FROM `3` UNION ALL
SELECT * FROM `4` UNION ALL
SELECT * FROM `5`");

        while ($row = mysqli_fetch_assoc($result)):
        ?>
            <tr>
                <td><?php echo $row['TIMESTAMP'];?></td>
                <td><?php echo $row['UNIQUE_ID'];?></td>
                <td><?php echo $row['TEAMNAME'];?></td>
                <td><?php echo $row['NAME'];?></td>
                <td><?php echo $row['COLLEGE'];?></td>
                <td><?php echo $row['CONTACT'];?></td>
                <td><?php echo $row['EMAIL'];?></td>
            </tr>




        <?php
           endwhile;
        ?>
    </tbody>
</table>


 <!-- this is old code an be used later -->
<!--
echo '<table id="myTable" cellpadding="0" cellspacing="0" class="db-table">';
echo "<tr><th>ID_NO</th><th>NAME</th><th>ROLL_NO</th><th>BRANCH</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "VNIT";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT ID_NO, NAME,ROLL_NO,BRANCH FROM mytable");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> -->


<!-- DataTables -->
<script src="tables/jquery.js"></script>
<script src="tables/jquery.dataTables.js"></script>
<script src="tables/dataTables.bootstrap.js"></script>

<script language="javascript">
    $(document).ready(function(){
        $('#myTable').dataTable();
    });
</script>

</body>
</html>

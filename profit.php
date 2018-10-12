<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="JUGAAD TEAM PROFIT">
    <meta name="author" content="Vipul Wairagade">
    <title>TEAM PROFIT</title>
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
        <th>SR.NO.</th>
        <th>UNIQUE_ID</th>
        <th>TEAMNAME</th>
		<th>PROFIT</th>
    </tr>
    </thead>

    <tbody>
    <?php

    $conn=mysqli_connect("localhost:3306", "jugaad","VNIT@123","Jugaad18");
    $result=mysqli_query($conn, "SELECT * FROM profit");

    while ($row = mysqli_fetch_assoc($result)):
        ?>
        <tr>
            <td><?php echo $row['SR.NO.'];?></td>
            <td><?php echo $row['UNIQUE_ID'];?></td>
            <td><?php echo $row['TEAMNAME'];?></td>
			<td><?php echo $row['PROFIT'];?></td>
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

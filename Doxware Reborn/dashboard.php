<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <center>
            <img src="logo.png">
        </center>
        <p>Welcome to Doxware, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now viewing whats been logged.</p>

        <p><a href="logout.php">Logout</a></p>
    </div>
    <center>
    	<?php
        echo '<table border="1">';
$start_row = 1;
if (($csv_file = fopen("logger/location.csv", "r")) !== FALSE) {
  while (($read_data = fgetcsv($csv_file, 1000, ",")) !== FALSE) {
    $column_count = count($read_data);
	echo '<tr>';
    $start_row++;
    for ($c=0; $c < $column_count; $c++) {
        echo "<td>".$read_data[$c] . "</td>";
    }
	echo '</tr>';
  }
  fclose($csv_file);
}
echo '</table>';
?>
    </center>
</body>
</html>
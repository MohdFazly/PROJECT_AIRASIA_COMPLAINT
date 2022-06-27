<?php
session_start();
include 'config.php';

echo "<table border='1'><tr><th>ID</th><th>FullName</th>";
echo "<th>Email</th><th>Detail</th><th>Complaint</th></tr>";

$result = mysqli_query($conn, "select * from usercomplaint");
while ($row = mysqli_fetch_row($result))
    {
    echo "<tr>";
    foreach ($row as $cell)
	    echo "<td>$cell</td>";
    echo "</tr>";
    }

mysqli_free_result($result);

?>


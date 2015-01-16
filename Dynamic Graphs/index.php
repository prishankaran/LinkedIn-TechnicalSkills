<?php

$servername = "us-cdbr-iron-east-01.cleardb.net";
$username = "beba0767daf6ee";
$password = "e1c9bc20";
$dbname = "heroku_fdc675af70e18bc";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "SELECT name, age FROM trial order by age";
$result=$conn->query($sql);
$jsonRows= array();
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$a=$row["name"];
$b=intval($row["age"]);
printf ("%s (%d)\n",$a,$b);
//echo gettype($b);




while($r = mysqli_fetch_assoc($result)) {
     $jsonRows[$r['name']] = (int)$r['age'];
}





$conn->close();
include ('html/index1.html');
echo json_encode($jsonRows);

//mysqli_free_result($result);


?>
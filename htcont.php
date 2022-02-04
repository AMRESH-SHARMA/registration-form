<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="claim.php">Back</a>
</div>



</body>
</html>
<?php
// Create connection
include 'db_connect.php';
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
     }
else {
    echo " <h4>connected to database successful</h4>"; 
     }
$sql = "SELECT sno, sname, gender, country, comment, stime FROM datum ";
$result = mysqli_query($conn, $sql);
$row = "";
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo"<br>";  
    echo "NAME: " . $row["sname"]. "<br>". "GENDER: " . $row["gender"]."<br>" . "COUNTRY: " . $row["country"]. "<br>". "COMMENT: " . $row["comment"]."<hr>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
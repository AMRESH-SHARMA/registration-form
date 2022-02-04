<?php
    
    include 'db_connect.php';
    echo " <h4>connected to database successful</h4>";
    
    $sname = $_POST['name'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO `datum` (`sno`, `sname`, `gender`, `country`, `comment`, `stime`) VALUES (NULL, '$sname', '$gender', '$country' , '$comment', current_timestamp());";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    
    
?>  



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta sname="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .button {
  border-radius: 4px;
  background-color: #04AA6D;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;

}
h2 {text-align: center;}
</style>
    
</head>
<body>
<h2>Form submission Successful</h2>
<button class="button" onclick="window.location.href='index.php';"><span>Home</span></button><br><br>
<button class="button" onclick="window.location.href='htcont.php';"><span>Show Data </span></button>
</body>
</html>



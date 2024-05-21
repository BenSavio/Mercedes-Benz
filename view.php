<?php

$conn = new mysqli ("localhost","root","","mercedes-benz");

$sql = "SELECT * FROM datas";

foreach ($conn->query($sql) as $row){

    echo "Name : $row[name]  -  Phone : $row[phone]  -  Email : $row[email]  -  Subject : $row[subject]  -  Message : $row[message] <br>";
}


?>

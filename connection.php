<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";


 $conn =  mysqli_connect($servername,$username,$password,$dbname);

if($conn){

  echo "";
  
}
else{

    echo "connectin failed";

}









?>
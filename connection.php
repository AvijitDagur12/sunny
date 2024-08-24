<?php
$servername="localhost";
$username="root";
$password="";
$dbname="responsiveform3";

$connection=mysqli_connect($servername,$username,$password,$dbname);

if($connection){
    // echo "Connection successfull";
}
else{
    echo "Connection failed";
}

?>
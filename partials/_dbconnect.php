<?php 
$server="localhost";
$username="root";
$password="";
$dbname="project";
// define('server','localhost');
// define('username','root');
// define('password','');
// define('database','project');

$conn=mysqli_connect($server,$username,$password,$dbname);
if($conn){
    echo "success";
}
else{
    die("error".mysqli_connect_error());
}

?>
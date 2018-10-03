<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";
$connection = mysqli_connect($servername,$username,$password,$dbname);

if ($connection) {
    echo "<p style = \"color:green;\">Connection was successful</p>";
}

else {
    echo "connection failed ";
}
?>

<?php
$ID = "";
$Uname = "";
$Email = "";
$Num = "";
$Gender = "";
$Birth = "";

if (isset($_POST['insert'])) {
    $ID = $_POST['ID'];
    $Uname = $_POST['uname'];
    $Email = $_POST ['email'];
    $Num = $_POST ['digits'];
    $Gender = $_POST ['gender'];
    $Birth = $_POST ['birth'];

    $my = "INSERT INTO student (ID,studentname,stdmail,telephone,gender,birth) VALUES ($ID,$Uname,$Email,$Num,$Gender,$Birth)";
    $sql = mysqli_query($connection,$my);

    if($sql){
        echo " <p style = \"color:red;\"> New Record</p>";
    }
    else{
        echo "error:". $sql . "<br>" .mysqli_error($connection);
    }


}
?>

<?php

$ID="";
$Uname="";
$email="";
$Num="";
$gender="";
$birth="";
//get data from the form
if (isset($_POST['delete'])) {
    
$ID = $_POST ['ID'];
$Uname = $_POST['uname'];
$Email = $_POST ['email'];
$Num = $_POST ['digits'];
$Gender = $_POST ['gender'];
$Birth = $_POST ['birth'];

$Mine="DELETE FROM student WHERE ID='$ID'";
$Ms= mysqli_query($connection,$Mine);

if($Ms) {
echo " <p style = \"color:red;\"> Records deleted</p>";
}
else{
echo "error:". $Ms . "<br>" .mysqli_error($connection);
}

}

?>
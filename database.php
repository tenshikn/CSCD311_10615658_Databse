<?php 


$servername ="localhost";
$username="root";
$password ="";
$dbname="students";
 $connection = mysqli_connect($servername,$username,$password,$dbname);



if ($connection) {

echo "<p style=\"color:green;\">connection was successfull</p>";

}
else{

    die("connection has failed!!!!!!");
}
?>



<?php







$ID="";
$Name="";
$email="";
$Number="";
$gender="";
$birth="";
//get data from the form
if (isset($_POST['insert']))

$ID=$_POST['ID'];
$Name=$_POST['name'];
$email=$_POST['email'];
$Number=$_POST['Number'];
$gender=$_POST['gender'];
$birth=$_POST['birth'];
$my="INSERT INTO studenttable (ID,Name,email,Number,gender,birth) VALUES('$ID','$Name','$email','$Number','$gender','$birth')";
$sql= mysqli_query($connection,$my);

if($sql){
    echo " <p style = \"color:red;\"> New Record</p>";
}
else{
    echo "error:". $sql . "<br>" .mysqli_error($connection);
}




?>
<?php

$ID="";
$Name="";
$email="";
$Number="";
$gender="";
$birth="";
//get data from the form
if (isset($_POST['delete']))

$ID=$_POST['ID'];
$Name=$_POST['name'];
$email=$_POST['email'];
$Number=$_POST['Number'];
$gender=$_POST['gender'];
$birth=$_POST['birth'];
$my="DELETE FROM studenttable WHERE ID='$ID'";
$sql= mysqli_query($connection,$my);

if($sql) {
    echo " <p style = \"color:red;\"> Records deleted</p>";
}
else{
    echo "error:". $sql . "<br>" .mysqli_error($connection);
}



















?>
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
if (isset($_POST['insert'])){
    $ID=$_POST['ID'];
    $Name=$_POST['uname'];
    $email=$_POST['email'];
    $Number=$_POST['digits'];
    $gender=$_POST['gender'];
    $birth=$_POST['birth'];
    
    
    $my="INSERT INTO studenttable (ID,name,email,number,gender,birth) VALUES('$ID','$Name','$email','$Number','$gender','$birth')";
    $sql= mysqli_query($connection,$my);
    
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
$Name="";
$email="";
$Number="";
$gender="";
$birth="";
//get data from the form
if (isset($_POST['del'])){
$ID=$_POST['ID'];
$Name=$_POST['uname'];
$email=$_POST['email'];
$Number=$_POST['digits'];
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


}

?>
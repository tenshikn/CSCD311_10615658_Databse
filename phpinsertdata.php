
<?php 

$servername ="localhost";
$username="root";
$password ="";
$dbname="students";
 
$ID="";
$Name="";
$email="";
$Number="";
$gender="";
$birth="";



mysqli_report(MYSQLI_REPORT_ERROR | MY_REPORT_STRICT);

//connect to mysql database

try{

    $conn = msqli_connect($servername,$username,$password,$dbname);

}catch(MYSQLi_Sql_Exception $ex){

    echo("error in connecting");
}

//get data from the form


function getData()
{
$data = array();

$data[1]=$_POST['Name'];
$data[2]=$_POST['email'];
$data[3]=$_POST['Number'];
$data[4]=$_POST['gender'];
$data[5]=$_POST['birth'];
 return $data;



}
//insert data

if(isset($_POST['insert'])){

    $info = getData();

    $insert_query="INSERT INTO `studenttable`(`Name`,`email`,`Number`,`gender`,`birth`)

    VALUES ('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]')";



try{


    $insert_result=mysqli_query($conn,$insert_query);
    if($insert_result)

    {


        if(mysqli_affected_rows($conn)>0){

            echo("data inserted successfully");
        }else{

            echo("data are not inserted");
        }
    }
}catch(Exception $ex){

            echo("error inserted" .$ex ->getMessage());
        }
    }







?>
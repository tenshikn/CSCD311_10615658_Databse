<!DOCTYPE html>
<?php
include 'access.php';

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="C:\Users\Laptop002\Desktop\New folder\Management-20181001T195909Z-001\Management\bootstrap"
    <title>Document</title>
    <style>
    h1{

        font-size: 16px;
    }
    </style>
</head>
<body>




<div class = "container-fluid">
<div class = "row">
<div class = col-lg-4>


<form action="" method="post">

<h1>ID no<h1>
<input type="number"
class="form-control" name="ID" placeholder="enter ID no" value="<?php echo ($ID); ?>"/>

<div class="form-group row">
<div class="col-xs-6">

<h1>Student Name</h1>

<input type="text" class="form-control" name="uname" placeholder="enter student name" value="<?php echo $Name; ?>" />

</div>
<h1>email</h1>
<input type="email" class="form-control" name="email" placeholder="enter email" value="<?php echo ($email); ?>"/>
<h1>Number</h1>
<input type="number" class="form-control" name="digits" placeholder="Number" value="<?php echo ($Digits); ?>"/>

<div class="form-group row">
<div class="col-xs-6">
<h1>gender</h1>
<select name="gender" class="form-control" value="<?php echo ($gender); ?>">
<option value="Male">Male</option>
<option value="female">Female</option>
</select>

<div class="form-group row">
<div class="col-xs-6">
<h1>Birthdate</h1>
<select name="birth" class="form-control" value="<?php echo $birth; ?>">
<option value="1999">1999</option>
<option value="1998">1998 </option>
</select>


<input type="submit" class="btn btn-block btn-success" name="insert" value="Add">
<input type="submit" class="btn btn-block btn-success" name="del" value="delete">


</form>


</div>
<div class = col-lg-8>


</div>
</div>
</div>


    
</body>
</html>
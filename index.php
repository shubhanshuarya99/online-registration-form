<?php
$insert=false;
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";
//to connect function used
$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("connection to this database fail due to".mysqli_connect_error());
}
// echo "success to pass db";
$Name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$other = isset($_POST['other']) ? $_POST['other'] : '';
$sql= "INSERT INTO `ghumna`.`ghumna` ( `Name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) 
VALUES ( '$Name', '$age', '$gender', '$email', '$phone', '$other',current_timestamp());";
//echo $sql;
//object operator
if($con->query($sql)==true){
    //echo "succesfully inserted";
    $insert=true;
}
else{
    echo "error: $sql<br>$con->error";
}
$con->close();
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="dtu"src="dtu.jpeg" alt="dtu jpg">
    <div class="container">
        <h3>WELCOME TO DELHI TECHNICAL UNIVERSITY(DTU) BANGLORE TRIP</h3>
        <p>enter your details to confirm your participation in the trip</p>
        <?php
        if($insert==true){
        echo "<p class='submit'>Thanks for filling the form we are happy to see u</p>";
    }
        ?>
        <!-- in form get url pe fata s=dikhega in post it is sequre -->
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="enter your name">
            <input type="text" name="age" id="age" placeholder="enter your age">
            <input type="text" name="gender" id="gender" placeholder="enter your gender">
            <input type="text" name="email" id="email" placeholder="enter your email">
            <input type="text" name="phone" id="phone" placeholder="enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter any other information here"></textarea>
            <button class="btn">Submit</button>
            <button class="btn">Reset</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>
<!--  to check if the 'other' field exists in the $_POST array. If it exists, it will be assigned to the $other variable; otherwise, it will be set to an empty string. This prevents 
the "Undefined array key 'other'" 
warning and allows your code to handle optional form fields gracefully. -->
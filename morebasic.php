<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container{
        max-width:80%;
        background-color:rgb(227, 167, 178);
        margin:auto;
        padding:23px;
    }
</style>
<body>
    <div class="container">
        <h1>lets learn about</h1>
        My name is shubhanshu arya
        <br>
        <?php
        $age =34;
        if($age<18){
            echo " you cannot drive";
        }
        else if($age>18){
            echo "you can drive";
        }
        echo"<br>";
        $languages=array("phython","c++","php","java");
        echo $languages[0];
        echo"<br>";
        echo count($languages);
        echo"<br>";
        //loops in php
        $a=0;
        while ($a <=10) {
            echo "the value of a is";
            echo $a;
            echo"<br>";
            $a++;
        }
        $a=0;
        while ($a <count($languages)) {
            echo "the lanuage is";
            echo $languages[$a];
            echo"<br>";
            $a++;
        }
       //for loop
        for ($i=0; $i <count($languages) ; $i++) { 
            echo "the lanuage is";
            echo $languages[$i];
            echo"<br>";
        }
        //for each loop
        foreach ($languages as $value) {
            echo "the lanuage is";
            echo $value;
            echo"<br>";
        }
        //function calling
        function print5(){
            echo "five";
        }
        echo"<br>";
        print5();
        ?>
    </div>
</body>
</html>
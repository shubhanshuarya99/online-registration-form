<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    this is my first php website
    <?php
    echo"<br>";
    echo "this is php written code" ;//it is used to print the data on the screen 
    //without knowing any client that it is a php data
    $variable1=22;
    $variable2=99;
    
    //operators in php
    // arithmetic operators
    echo"<br>";
    echo"<h1>Assignment operator</h1>";
    echo "the value of variable1 + variable2 is";
    echo $variable1+$variable2;
    echo"<br>";
    echo "the value of variable1 divide by variable2 is";
    echo $variable1/$variable2;
    echo"<br>";
    echo "the value of variable1 -variable2 is";
    echo $variable1-$variable2;
    echo"<br>";
    echo "the value of variable1 * variable2 is";
    echo $variable1*$variable2;
    // assignmenet operators
    echo"<br>";
    $newvar=$variable1;
    echo"the value of new variable is ";
    echo $newvar;
     echo"<br>";
    $newvar+=1;;
    echo"the value of new variable is ";
    echo $newvar;
    echo"<br>";
    // comparison operators
    echo"<h1>comparison operator</h1>";//return true of false boolean
    echo"the value of 1==4 is";
    echo var_dump(1==4);//use to declare value
    echo"<br>";
    echo"the value of 1!=4 is";
    echo var_dump(1!=4);
    echo"<br>";
    echo"the value of 1<=4 is";
    echo var_dump(1<=4);
    echo"<br>";
    echo"the value of 1>=4 is";
    echo var_dump(1>=4);
    echo"<br>";
    // increment and decrement operators
    echo $variable1++;
    echo"<br>";
    echo $variable2--;
    echo"<br>";
    echo ++$variable1;
    echo"<br>";
    echo --$variable2;
    echo"<br>";
    // logical operators
    // and(&&)
    // $myvar=(false)and(false);
    // echo"<br>";
    // echo var_dump($myvar);
    //  $myvar=(false)and(true);
    // echo"<br>";
    // echo var_dump($myvar);
    // or(||)
     $myvar=(true)or(false);
    echo"<br>";
    echo var_dump($myvar);
    // xor(^)
    // not !

    ?>
    <?php
    //data types
    define('Pi',3.14);
    echo"<h1>data types</h1>" ;
    // 1. string
    // 2. integer 
    // 3. float
    // 4. boolean
    // 5. array
    // 6. object
    $myvar="this is a string";
    echo var_dump($myvar);
    echo"<br>";
    $myvar=67;
    echo var_dump($myvar);
    echo"<br>";
    $myvar=88.7;
    echo var_dump($myvar);
    echo"<br>";
    echo Pi;
    ?>


    </div>
</body>
</html>
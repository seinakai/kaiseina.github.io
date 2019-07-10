<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/Practice/phppractice.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>My first PHP page</h1>

    <?php 
    // echo "Hello World";
    // $__="hello world";
    // echo $__;

    // $color="black";
    // echo "My favorite color is $color";

    // $apples=10;
    // $oranges=15;
    // echo $apples + $oranges;

    // echo "<h3>Personal Details</h3>";
    // $name="Seina Kai";
    // echo "Name:$name";
    // $age="21";
    // echo "Age:$age";
    // echo "<br>";
    // $_age=$age + 10;
    // echo "In 2030,My age will be $_age";

    // $int = "hello";
    // var_dump($int);
    // // echo $int;

    // $kuruma = array("Toyota","Honda","Nissan");
    // var_dump($kuruma);

    // $hi = null;
    // $hi = "hello hello!";
    // var_dump($hi);

    // echo strlen("hello world!");

    // echo str_word_count("hello cebu Philippines!");

    // $soramoney = 5000;
    // $web = 15000;
    // $online = 25000;
    // echo $sora + $web + $online;

    // $totalsoramoney = $soramoney + $web + $online;
    // $usemomey = 20800;
    // echo $totalsoramoney - $usemomey;

    // $soraonemonth = 30000;
    // $oneyear = $soraonemonth * 12;
    // echo $oneyear;

    // $givemother = $soraonemonth - 150000;
    // echo $soraonemonth - $givemother;

    // $x = 5;
    // $y = "5";
    // var_dump($x!==$y);

    // $my_name = "Seina";
    // if ( $my_name == "Seina"){
    //     echo "Your name is Seina! <br>";
    // }
    // echo "welcome to PHP Basivs!";

    // $input1 = 5;
    // $input2 = 6;
    // if ($input1 == $input2){
    //     echo "IT IS SAME";
    // }else{
    //     echo "IT IS NOTSAME";
    // }

    // $_age_ = 60;
    // if ($_age_ >= 30 && $_age_< 50){
    //     echo "YOU ARE OLD!!!";
    // }elseif ($_age_ >= 50) {
    //     echo "YOU ARE VERY OLD!";
    // }else{
    //     echo "YOU ARE NOT YET OLD!";
    // }


    // $_age_ < 50 

    // $myname="seina";
    // echo "$myname";


    $_grade = 33;
    if ($_grade >= 80 && $_grade<=100){
        echo "YOU ARE EXCELLENT!";
    }elseif ($_grade>=70 && $_grade<=79){
        echo "YOU ARE VERY GOOD!";
    }elseif ($_grade >=60 && $_grade<=69){
        echo "YOU ARE GOOD!";
    }else {
        echo "YOU ARE FAILURE!";
    }
    ?>

</body>
</html>
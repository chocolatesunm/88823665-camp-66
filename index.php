<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP test</title>
    </head>
    <body>
        <h1>File index.php</h1>
        <?php
        echo "hello world";
        echo "<br>";
        print("hello");
        echo "<br>";
        print_r("hello");
        echo "<br>";
        print("hello");
        echo "<br>";
        var_dump("hello");
        echo "<br>";
        $myvar = "hello world";
        ?>
        <h1><?php echo $myvar; ?></h1>
        <?php
        echo "<h1>" .$myvar."</h1>";
        ?>
        <?php 
        $x = 1;
        function myfunction($myparam) {
            global $x;
            $x = "Hello";
            return $myparam;
        }
        echo "<p>" .MYFUNCTION("hello world!"). "</p>";
        ?>
        <h1> <?php echo $x; ?> </h1>
        <?php echo 1 + 1; ?>
        <?php echo "1" + '1'; ?>
        <?php 
        $mychar = "a";
        ?>
        <h1> <?php echo ++$mychar; ?> </h1>
    <?php
    if(1 === '1'){
        echo "1 == \"1\" ";
    }else if(true){
        echo "1 != \"1\"";
    }
    if(true)
        echo  "true";
        else
        if(true)
        echo "false";
    $my_arry = array(1,2,3,4,5);
    for($i=0;$i < count ($my_arry);$i++){
        echo @-$my_arry[$i];
    }
    foreach ($my_arry as $index => $value){
        echo $value;
    }
    $my_arry2 [] = 1;
    $my_arry2 [2] = 2;
    $my_arry2 []= 3;
    print_r($my_arry2);
        ?>
    </body>
</html>
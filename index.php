<?php
    $indexArray = [34, 54, 76, 54];


    //foreach loop
    echo "foreach loop <br>";

    foreach($indexArray as $element){
        echo $element. "<br>";
    }



    //while loop
    echo "while loop <br>";

    $i = 0;

    while($i<=3){
        echo $indexArray[$i]."<br>";
        $i++;
    }

    //do while loop
    echo "do while loop <br>";

    $j = 0;

    do{
        echo "<h1>".$indexArray[$j]."</h1>". "<br>";
        $j++;
    }

    while($j<=3);

    $marks = 90;

    if($marks>=80){
        echo "The grade is A+";
    }

    elseif($marks>=70){
        echo "The grade is A";
    }

    elseif($marks>=60){
        echo "The grade is A-";
    }

    elseif($marks>=50){
        echo "The grade is B";
    }

    elseif($marks>=40){
        echo "The grade is C";
    }

    elseif($marks>=33){
        echo "The grade is D";
    }

    elseif($marks<33){
        echo "The grade is F";
    }

    // else{
    //     echo "The grade is F";
    // }
?>
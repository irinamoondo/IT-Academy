<?php

//EXERCISE 1
    $edad = 27;
    if ($edad%2==0) {
        echo "$edad es un número par.";
    }
    else {
        echo "$edad es un número impar.";
    }
    echo "<br><br>";

// EXERCISE 2
    for ($i=0; $i<=10 ; $i++) { 
        if ($i%2==0) {
            echo $i."<br>";
        }
    }
    echo "<br><br>";

//EXERCISE 3
    $end= "";
    for ($i=0; $i<=$end ; $i++) { 
        if ($i%2==0) {
            echo $i."<br>";
        }
    }
    echo "<br><br>";

//EXERCISE 4
    $end=10;
    for ($i=0; $i<=$end ; $i++) { 
        if ($i%2==0) {
            echo $i."<br>";
        }
    }
    echo "<br><br>";

//EXERCISE 5
    $nota="40";
    if ($nota>=60) {
        echo "Primera Divisió";
    }
    elseif ($nota>=45&&$nota<=59) {
        echo "Segona Divisió";
    }
    elseif ($nota>=33&&$nota<=44) {
        echo "Tercera Divisió";
    }
    elseif ($nota<33) {
        echo "Reprovació";
    }
    echo "<br><br>";

//EXERCISE 6
$probability=rand(0,100);
function isBitten($probability){
    if ($probability==50){
        echo "TRUE";
    }
    else {
        echo "FALSE";
    }
}
echo "Probability is $probability%."."<br>";
echo isBitten($probability);
?>
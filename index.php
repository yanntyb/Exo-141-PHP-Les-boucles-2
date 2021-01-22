<?php

$var = 0;
while($var < 10){
    echo $var . "<br>";
        $var ++;
}

$var2 = 0;
$var3 = 2;

while($var2<20){
    $var2 *= $var3;
    echo $var2 . "<br>";
    $var2++;
}

$var4 = 1;

while($var4 < 10){
    $var5 = $var4*0.5;
    echo $var5 . "<br>";
    $var4++;
}

for($i = 0; $i<15; $i++){
    echo "on arrive <br>";
}


for($i = 20; $i>0; $i--){
    echo "c'est presque bon <br>";
}

for($i = 0; $i<100; $i+=15){
    echo "on tient le bout <br>";
}

for($i = 200; $i>0; $i-=12){
    echo "Presque <br>";
}
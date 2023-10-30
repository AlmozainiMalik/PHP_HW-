<?php 

$family = ["Father" , "Mother" , "Brother" , "Sister"];

for($i = 0 ; $i <count($family) ; $i++){
    echo $family[$i] . "<br>";
}

echo "<br>";

foreach($family as $member){
    echo "$member <br>";
}


?>
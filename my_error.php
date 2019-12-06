<?php
//$input is wat je invoerd in $argv
$input = $argv[1];
//nog steeds geen iedee hoe dit werkt maar het werkt \o_o/
function countdown($input){

//$i heeft de waarde dat je $input heb gegeven 
//$i is grooter of gelijk aan 0
//$i-- is - inplaats van +
for ($i=$input; $i >= 0 ; $i--) { 
    echo $i . " Seconden\n";
}
//als input lager is dan 0 of grooter is dan 10 gaat ie je door de kamer smijten
        if ($input < 0 || $input > 10) {
            throw new Exception("je kan aleen een getal tussen 0 - 10 gebruiken.", 1);
        } 
}
//probeer
try{
//nog steeds geen iedee wat countdown is
    echo countdown($input);



}
//vankt wat je 
catch(exception $error){
    echo ''.$error->getMessage();
    exit;
}

echo $input . ' is goed BOB.';
exit;
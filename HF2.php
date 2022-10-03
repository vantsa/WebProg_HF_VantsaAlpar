<?php

$elso = [5,'5','05',12.3,'16.7','five', 0xDECAFBAD, '10e200'];

foreach($elso as $value){
    $temp = gettype($value);
    if(is_numeric($value)){
        echo "<p>$temp + Igen</p>";
    }else echo "<p>$temp + Nem</p>";
}



//2.feladat

$orszagok = array( " Magyarország "=>" Budapest", " Románia"=>" Bukarest",
    "Belgium"=> "Brussels", "Austria" => "Vienna", "Poland"=>"Warsaw");

foreach($orszagok as $key => $value)
{
    echo "<p>$key fovarosa $value</p>";
}



//3.feladat

$napok = array(
    "HU" => array("H", "K", "Sze", "Cs", "P", "Szo", "V"),
    "EN" => array("M", "Tu", "W", "Th", "F", "Sa", "Su"),
    "DE" => array("Mo", "Di", "Mi", "Do", "F", "Sa", "So"),
);

// foreach($napok as $key => $value){
//    echo "<p>$key </p>";}

echo "<pre>";
print_r($napok);
echo "</pre>";



function atalakit($tomb, $milyen){
    if($milyen == "kisbetus")
    {
        foreach($tomb as $key => $value){
            echo strtolower($value);
            echo "<br>";
        }
    }else if($milyen == "nagybetus"){
        foreach($tomb as $key => $value){
            echo strtoupper($value);
            echo "<br>";
        }
    }else echo "<p>Nem helyes parameterek</p>";
}

$szinek = array('A' => 'Kek ', 'B' => 'Zold ', 'c' => 'Piros ');
atalakit($szinek, "kisbetus");
echo "<br><br><br>";
atalakit($szinek, "nagybetus");


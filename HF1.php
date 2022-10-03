<?php

/*Elso feladat*/
$date = date("Y/m/d");
$newdate = date('l', strtotime($date));
echo "<p>Today is  $newdate</p>";

/*Masodik feladat*/
$elsoszam = readline("Elso szam: ");
$masodikszam = readline("Masodik szam: ");
$muvelet = readline("Muvelet: ");
$osszeg = $elsoszam + $masodikszam;
$kulonbseg = $elsoszam - $masodikszam;
$szorzas = $elsoszam * $masodikszam;
$osztas = $elsoszam / $masodikszam;


if($muvelet == '+')
{
    echo "<p>$elsoszam + $masodikszam = $osszeg</p>";
}else if ($muvelet == '-') {
    echo "<p>$elsoszam - $masodikszam = $kulonbseg</p>";
}else if ($muvelet == '*'){
    echo "<p>$elsoszam * $masodikszam = $szorzas</p>";
}else if ($muvelet == '/'){
    echo "<p>$elsoszam / $masodikszam = $osztas</p>";
}

/*Osztotabla*/
echo "<table border='1'><br />";

for ($row = 1; $row <= 10; $row ++) {
    echo "<tr>";

    for ($col = 1; $col <= 10; $col ++) {
        echo "<td> $col / $row<br>", number_format((float)($col / $row), 2, '.', ''), "</td>";
    }

    echo "</tr>";
}

echo "</table>";


/*Sakktabla*/
echo "<table border='1'><br />";

for ($row = 1; $row <= 7; $row ++) {
    echo "<tr>";

    for ($col = 1; $col <= 7; $col ++) {
        $ossz = $row + $col;
        if($ossz % 2 == 0)
        {
            echo "<td style='background-color: black', height='100px', width='150px'>", "</td>";
        } else {
            echo "<td style='background-color: white', height='100px', width='150px'>", "</td>";
        }

    }

    echo "</tr>";
}

echo "</table>";
?>

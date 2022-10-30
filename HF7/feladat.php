<?php
session_start();
if (isset($_POST['talalgatas']))
{
    if($_POST['talalgatas'] > $_SESSION['number']){
        echo "Probalkozz kissebb szammal";
    } else if($_POST['talalgatas'] < $_SESSION['number']){
        echo "Probalkozz nagyobb szammal";
    } else if($_POST['talalgatas'] == $_SESSION['number']){
        echo "<h1>GRATULALOK, sikeres erettsegi</h1>";
        $_SESSION['number'] = rand(1,10);
    }


}
?>



<form method="POST" action="feladat.php">
    <input type="hidden" name="elkuldott" value="true">
    Melyik számra gondoltam 1 és 10 között?
    <input name="talalgatas" type="number">
    <br>
    <br>
    <input type="submit" value="Elküld">
</form>
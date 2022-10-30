<?php

$valid_formats = array("application/pdf");
$firstNameErr = $lastNameErr = $emailErr = $tshirtErr = $attendErr = $termsErr = "";
$firstName = $lastName = $email = $tshirt =  "";

if(isset($_POST['submit']))
{
    if(empty($_POST['firstName'])){
        $firstNameErr = "First name is required!";
    }else {
        $firstName = test_input($_POST['firstName']);
    }
    if(empty($_POST['lastName'])){
        $lastNameErr = "Last name is required!";
    }else{
        $lastName = test_input($_POST['lastName']);
    }
    if(empty($_POST['email'])){
        $emailErr = "Email is required!";
    }else{
        $email = test_input($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid email format";
        }
    }
    if (!isset($_POST['attend'])) {
        $attendErr =  "Select at least one event!";
    }

    if(empty($_POST['tshirt'])){
        $tshirtErr = "Tshirt size is required!";
    }else {
        $tshirt = test_input($_POST['tshirt']);
    }
    if (!in_array($_FILES['abstract']['type'], $valid_formats)){
        die("Only PDF format!");
    }

    else if ($_FILES['abstract']['error'] != 0 ){
        die("Error while uploading the file");
    }

    else if ($_FILES['abstract']['size']>3145728){
        die("Maximum file size is 3MB!");
    }

    if (!isset($_POST['terms'])) {
        $termsErr =  "Accept the TOS!";
    }


}


function test_input($data){
    return htmlspecialchars($data);
}

?>


<h3>Online conference registration</h3>

<form method="post" action="hf6.php">
    <label for="fname"> First name:
        <input type="text" name="firstName">
    </label>
    <br><br>
    <label for="lname"> Last name:
        <input type="text" name="lastName">
    </label>
    <br><br>
    <label for="email"> E-mail:
        <input type="text" name="email">
    </label>
    <br><br>
    <label for="attend"> I will attend:<br>
        <input type="checkbox" name="attend[]" value="Event1">Event 1<br>
        <input type="checkbox" name="attend[]" value="Event2">Event2<br>
        <input type="checkbox" name="attend[]" value="Event3">Event2<br>
        <input type="checkbox" name="attend[]" value="Event4">Event3<br>
    </label>
    <br><br>
    <label for="tshirt"> What's your T-Shirt size?<br>
        <select name="tshirt">
            <option value="P">Please select</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
        </select>
    </label>
    <br><br>
    <label for="abstract"> Upload your abstract<br>
        <input type="file" name="abstract"/>
    </label>
    <br><br>
    <input type="checkbox" name="terms" value="">I agree to terms & conditions.<br>
    <br><br>
    <input type="submit" name="submit" value="Send registration"/>
</form>


<?php

echo "<h2>Your input:<br></h2>";
echo "Name : " .$firstName;
echo $lastName . "<br>";
echo "Email :" .$email . "<br>";

?>


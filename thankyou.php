<h1>
    Ordrebekræftelse
</h1>
<hr>

<?php



$email = "";   // Initialize variables

if(isset($_POST['email'])){
    $email = checkEmail($_POST['email']);
}   



function checkEmail($data) {

    $name = $_POST['name'];
    // $email = $_POST['email'];
    $address = $_POST['address'];
    $data = trim($data); // Remove whitespace
    $data = stripslashes($data);    // Remove backslashes
    // user data fra kurven

    echo "Name: " . $name;
    echo "<br>";
    echo "Email: " . $data;
    echo "<br>";
    echo  "Adress: " . $address;
}






?>
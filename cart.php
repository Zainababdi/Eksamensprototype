<?php


// viser produkter i kurven





if(isset($_POST) && array_key_exists('amount', $_POST)){
    echo "Antal: " . $_POST['amount'];

}

?>

<a href="checkout.php">Køb</a>
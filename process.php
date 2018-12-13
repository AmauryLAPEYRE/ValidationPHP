<?php
session_start();






if(isset($_POST['email']) && isset($_POST['password'])) {

    $pattern = '/[a-z]{1,20}@[–a-z]{1,15}.[a-z]{1,3}/';
    $trymail = $_POST['email'];

    if(preg_match($pattern, $trymail)) {
        $email = "amaury@hotmail.fr";
        $pass = "0000";

        if($_POST['email'] === $email && $_POST['password'] === $pass) {
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['password'];
            header('Location: ./');
        } else {
            var_dump('erreur');
        }

    } else {
        var_dump('Adresse mail non valide');
    }
}


if(isset($_POST['disconnect'])) {
    session_destroy();
    header('Location: ./');
}

if(empty($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
if(isset($_POST['animal']) && isset($_POST['price']) && isset($_POST['id'])) {
    $animal = $_POST['animal'];
    $price = $_POST['price'];
    $id = $_POST['id'];

    $_SESSION['cart'][$id] = [$animal => $price];

    header('Location: /basket');

}

if(isset($_POST['pay'])) {

    $animals = $_POST['animal'];
    $price = $_POST['price'];

    $total_price = 0;
    $details = "<html><body onload='window.print()'><h3>Liste des animaux que vous avez acheté</h3><ul>";
    foreach($price as $animal_price) {
        $total_price = $total_price + $animal_price;
    }
    foreach($animals as $animal_name) {
        $details .=  "<li>$animal_name</li>";
    }
    $details .= "</ul>";

    $facture = fopen('facture.html', 'w+');
    fwrite($facture, $details);
    fwrite($facture, "<p>Pour un prix total de : ".$total_price." euros.</p></body></html>" );
    fclose($facture);

     header('Location: /facture.html');
}

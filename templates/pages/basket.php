<a href="./">Go home</a>
<h2>Votre panier</h2>
<?php
$content_basket = $_SESSION['cart'];

$content = "<div>";
$content .= "<form action='./process.php' method='POST'>";

foreach ($content_basket as $key => $value) {
    foreach ($value as $animal => $price) {
        $content .= "<p>Animal : ". $animal ."</p>";
        $content .= "<p>Prix : ". $price ."</p>";
        $content .= "<input type='hidden' value='$animal' name='animal[]'>";
        $content .= "<input type='hidden' value='$price' name='price[]'>";
    }
}
$content .= "<input type='submit' name='pay' value='Payer'>";
$content .= "</form>";
$content .= "</div>";
echo $content;



?>

<input type='hidden' value='' name=''> 

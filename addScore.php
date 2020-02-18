<?php

die(var_dump($_POST));

if(isset($_POST['userName']) && isset($_POST['score']))
{
    $pdo = new PDO();
}

?>

<?php require 'templates/header.php'; ?>

<div class="intro py-3 bg-white text-center">
    <div class="container">
        <h2 class="text-primary display-3 my-4">Twój wynik został dodany!</h2>
    </div>
</div>

<?php require 'templates/footer.php'; ?>


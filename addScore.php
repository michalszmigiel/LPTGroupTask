<?php

require 'db_connection.php';

if (isset($_POST['userName']) && isset($_POST['score'])) {
    $pdo = get_connection();

    $userName = trim($_POST['userName']);
    $score = $_POST['score'];

    $query = "INSERT INTO quizstats (userName, score) VALUES ('$userName', $score)";

    $statement = $pdo->prepare($query);
    $statement->execute();
}
else
{
    header('Location: topTen.php');
}



?>

<?php require 'templates/header.php'; ?>

<div class="intro py-3 bg-white text-center">
    <div class="container">
        <h2 class="text-primary display-3 my-4">Twój wynik został dodany!</h2>
    </div>
</div>

<?php require 'templates/footer.php'; ?>


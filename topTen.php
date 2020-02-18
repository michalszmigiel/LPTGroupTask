<?php

require 'db_connection.php';

$pdo = get_connection();

$query = 'SELECT * FROM quizstats ORDER BY score DESC LIMIT 10';
$statement = $pdo->prepare($query);
$statement->execute();

$topScores = $statement->fetchAll();
?>

<?php require 'templates/header.php'; ?>

<?php if (!empty($topScores)): ?>
    <div class="intro py-3 bg-white text-center">
        <div class="container">
            <h2 class="text-primary display-3 my-4">Najlepsze wyniki</h2>
        </div>
    </div>
    <div class="py-4 bg-white results-table">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Imię</th>
                <th scope="col">Wynik</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($topScores as $topScore): ?>
            <tr>
                <th scope="row"><?= $topScore['userName']; ?></th>
                <td><?= $topScore['score']; ?></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<?php else: ?>
    <div class="intro py-3 bg-white text-center">
        <div class="container">
            <h2 class="text-primary display-3 my-4">Jeszcze nikt nie dodał swojego wyniku! :(</h2>
        </div>
    </div>
<?php endif; ?>

<?php require 'templates/footer.php'; ?>


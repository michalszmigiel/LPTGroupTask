<?php

?>

<?php require 'templates/header.php'; ?>


<div class="isUserReady py-4 text-center bg-primary">
    <h3>Gotowy na quiz?</h3>
    <button class="userReady btn btn-primary">TAK!</button>
</div>

<div class="d-none quizSection">
    <div class="intro py-3 bg-white text-center">
        <div class="container">
            <h2 class="text-primary display-3 my-4">Quiz</h2>
        </div>
    </div>

    <!-- quiz -->

    <div class="quiz py-4 bg-primary">
        <div class="container">

    <!--results-->
            <form method="post" action="addScore.php" class="results py-4 d-none bg-light text-center">
                <div class="container lead">
                    Twój wynik: <span></span> %
                </div>
                <br>
                <label for="name">Podaj swoje imię: </label>
                <input type="text" name="userName" required/>
                <button type="submit">Zapisz wynik</button>
            </form>

        <!--questions are rendered here-->
            <form class="quiz-form text-light">
                <div class="quiz-questions">
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-light">
                </div>
            </form>
        </div>
    </div>

</div>


<script src="../questions.js"></script>
<script src="../index.js"></script>
<?php require 'templates/footer.php'; ?>

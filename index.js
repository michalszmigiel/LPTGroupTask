const userReadyDiv = document.querySelector('.isUserReady');
const userReadyBtn = document.querySelector('.userReady');
const showQuestions = document.querySelector('.quizSection');
const quizForm = document.querySelector('.quiz-form');
const results = document.querySelector('.results');
let quizQuestions = document.querySelector('.quiz-questions');

userReadyBtn.addEventListener('click', e => {
        e.preventDefault();
        userReadyDiv.style.display = 'none';
        renderQuestions();
        showQuestions.classList.remove('d-none');
    }
);

const renderQuestions = () => {
    questions.forEach(q => {
        let html = `
                <div class="my-5">
                    <p class="lead font-weight-normal">${q.question}</p>
                </div>
                <div class="form-check my-2 text-white-50">
                    <input type="radio" name="q${q.id}" value="A">
                    <label class="form-check-label">${q.answers[0]}</label>
                </div>
                <div class="form-check my-2 text-white-50">
                    <input type="radio" name="q${q.id}" value="B">
                    <label class="form-check-label">${q.answers[1]}</label>
                </div>
                <div class="form-check my-2 text-white-50">
                    <input type="radio" name="q${q.id}" value="C">
                    <label class="form-check-label">${q.answers[2]}</label>
                </div>
    `;

        quizQuestions.innerHTML += html;
    });
};

const correctAnswers = questions.map(q => q.correctAnswer);

quizForm.addEventListener('submit', e => {
   e.preventDefault();
   let score = 0;
   const userAnswers = [quizForm.q1.value, quizForm.q2.value, quizForm.q3.value, quizForm.q4.value];

   userAnswers.forEach((userAnswer, index) => {
       userAnswer === correctAnswers[index] ? score += 25 : score;
   });

    console.log(score);
    console.log(userAnswers);

    results.classList.remove('d-none');
    scrollTo(0,0);
    results.querySelector('span').textContent = `${score}`;
    results.innerHTML += `<input class="d-none" name="score" value="${score}">`;



});

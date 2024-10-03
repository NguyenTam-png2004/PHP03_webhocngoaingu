window.history.pushState(null, document.title, window.location.href);
window.addEventListener('popstate', function(event) {
    window.history.pushState(null, document.title, window.location.href);
});


const answerSuccess = document.querySelector('.answer_success');
const answerFalse = document.querySelector('.answer_false');

function submitAnswer(correctAnswer) {
    const userField = document.querySelector('.input-field');
    const userInput = userField ? userField.value.trim() : null;
    const selectedRadio = document.querySelector('input:checked');
    const userSelect = selectedRadio ? selectedRadio.value : null;
    console.log(selectedRadio)
    let userAnswer = "";
    if (userInput){
        userAnswer = userInput
    }
    if (selectedRadio){
        userAnswer = userSelect;
    }
    if (userAnswer) {
        checkAnswer(userAnswer,correctAnswer);
    } else {
        alert('Please fill in the blank before continuing.');
    }
}

function checkAnswer(userAnswer,correctAnswer) {
    if (userAnswer.toLowerCase() === correctAnswer.toLowerCase()) {
        showMessage(true,answerSuccess,answerFalse);
    } else {
        showMessage(false,answerSuccess,answerFalse);
    }
}

function showMessage(isCorrect,answerSuccess,answerFalse) {
    if (isCorrect) {
        answerSuccess.classList.add('show');
    } else {
        answerFalse.classList.add('show');
    }
}


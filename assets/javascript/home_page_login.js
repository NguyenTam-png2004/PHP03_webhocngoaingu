

function increaseProgress(progressBar,newValue) {
    progressBar.style.width = newValue + '%';
    progressBar.setAttribute('aria-valuenow', newValue);
}

const progressBars = document.querySelectorAll('.progress-bar');
    progressBars.forEach(progressBar => {
        const currentValue = progressBar.querySelector('span');
    const newValue = currentValue.dataset.value;
    increaseProgress(progressBar,newValue);
})



document.querySelector('.course_current').addEventListener('click', function() {
    const list = document.querySelector('.list_courses');
    list.style.display = list.style.display === 'none' || list.style.display === '' ? 'block' : 'none';
});






require('./bootstrap');
document.addEventListener('DOMContentLoaded', function() {
    const progressBar = document.getElementById('progressBar');
    const formSteps = document.querySelectorAll('.form-step');
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');
    const submitButton = document.getElementById('submitButton');

    let currentStep = 1;

    updateProgress();

    function updateProgress() {
        const totalSteps = formSteps.length;
        const progressPercentage = ((currentStep - 1) / (totalSteps - 1)) * 100;
        progressBar.style.width = progressPercentage + '%';
        progressBar.setAttribute('aria-valuenow', progressPercentage);
    }

    function showStep(step) {
        formSteps.forEach((stepElement) => {
            stepElement.classList.remove('active');
        });

        formSteps[step - 1].classList.add('active');

        prevButton.disabled = step === 1;
        nextButton.disabled = step === formSteps.length;

        if (step === formSteps.length) {
            submitButton.style.display = 'block';
            nextButton.style.display = 'none';
        } else {
            submitButton.style.display = 'none';
            nextButton.style.display = 'block';
        }

        currentStep = step;
        updateProgress();
    }

    function showPrevStep() {
        if (currentStep > 1) {
            showStep(currentStep - 1);
        }
    }

    function showNextStep() {
        if (currentStep < formSteps.length) {
            showStep(currentStep + 1);
        }
    }

    prevButton.addEventListener('click', showPrevStep);
    nextButton.addEventListener('click', showNextStep);
});

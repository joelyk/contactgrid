<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ajouter un contact</title>
    <style>
        /* CSS pour la barre de progression */
        .progress-container {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .progress {
            height: 10px;
            width: 80%;
            margin-bottom: 15px;
        }

        .progress-bar {
            background-color: #007bff;
        }

        /* CSS pour masquer les étapes non actives du formulaire */
        .form-step:not(.active) {
            display: none;
        }

        /* CSS pour les étapes marquées en haut de la page */
        .step-indicator {
            width: 30px;
            height: 30px;
            border: 2px solid #007bff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            color: #007bff;
            font-weight: bold;
            margin: 0 10px;
        }

        .step-indicator.active {
            background-color: #007bff;
            color: #fff;
        }

        /* CSS pour rendre le formulaire responsive */
        .form-fieldset {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
        }

        .button-container button {
            width: 120px;
        }

        @media (max-width: 768px) {
            .step-indicator {
                font-size: 14px;
            }

            .button-container {
                flex-direction: column;
            }

            .button-container button {
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Ajouter un contact</h1>
        <div class="progress-container">
            <div class="step-indicator active">1</div>
            <div class="step-indicator">2</div>
            <div class="step-indicator">3</div>
        </div>
        <div class="progress">
            <div id="progressBar" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <form id="contactForm" action="{{ route('contacts.store') }}" method="POST" class="form-fieldset">
            @csrf
            <div class="form-step active" data-step="1">
                <fieldset>
                    <legend>Informations personnelles</legend>
                    <div class="form-group">
                        <label for="first_name">Prénom :</label>
                        <input type="text" id="first_name" name="first_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Nom :</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Sexe :</label>
                        <input type="text" id="gender" name="gender" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="education_level">Niveau d'études :</label>
                        <input type="text" id="education_level" name="education_level" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="field">Filière :</label>
                        <input type="text" id="field" name="field" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="specialization">Spécialité :</label>
                        <input type="text" id="specialization" name="specialization" class="form-control">
                    </div>
                </fieldset>
            </div>

            <div class="form-step" data-step="2">
                <fieldset>
                    <legend>Coordonnées</legend>
                    <div class="form-group">
                        <label for="address">Adresse :</label>
                        <input type="text" id="address" name="address" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Numéro de téléphone :</label>
                        <input type="text" id="phone_number" name="phone_number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse e-mail :</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="age">Âge :</label>
                        <input type="text" id="age" name="age" class="form-control">
                    </div>
                </fieldset>
            </div>

            <div class="form-step" data-step="3">
                <fieldset>
                    <legend>Stage</legend>
                    <div class="form-group">
                        <label for="interests">Domaine intéressé par le stage :</label>
                        <select id="interests" name="interests" class="form-control" required>
                            <option value="Creation de contenu">Création de contenu</option>
                            <option value="Developpement Backend">Développement Backend</option>
                            <option value="Developpement frontend">Développement Frontend</option>
                            <option value="DevOps et Automatisation">DevOps et Automatisation</option>
                            <option value="Community Management">Community Management</option>
                            <option value="Rédaction">Rédaction</option>
                            <option value="Infrastructure des SI">Infrastructure des SI</option>
                            <option value="Autres">Autres</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="career_project">Description du projet professionnel :</label>
                        <textarea id="career_project" name="career_project" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="stage_requirements">Ce qu'il vous faut pour mener à bien votre stage :</label>
                        <select id="stage_requirements" name="stage_requirements" class="form-control">
                            <option value="Fonctionnement plateforme Upwork">Fonctionnement plateforme Upwork</option>
                            <option value="Autre">Autre</option>
                        </select>
                    </div>
                </fieldset>
            </div>

            <div class="button-container">
                <button type="button" class="btn btn-primary" id="prevButton" onclick="showPrevStep()">Précédent</button>
                <button type="button" class="btn btn-primary" id="nextButton" onclick="showNextStep()">Suivant</button>
            </div>
            <button type="submit" class="btn btn-primary" id="submitButton" style="display: none;">Ajouter</button>
        </form>
    </div>

    <script>
        // JavaScript pour la barre de progression et les étapes marquées
        document.addEventListener('DOMContentLoaded', function() {
            const progressBar = document.getElementById('progressBar');
            const formSteps = document.querySelectorAll('.form-step');
            const stepIndicators = document.querySelectorAll('.step-indicator');
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
                updateStepIndicators();
            }

            function updateStepIndicators() {
                stepIndicators.forEach((indicator, index) => {
                    if (index + 1 === currentStep) {
                        indicator.classList.add('active');
                    } else {
                        indicator.classList.remove('active');
                    }
                });
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
    </script>
</body>
</html>

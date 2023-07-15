<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width={device-width}, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ajouter un contact</title>
</head>
<body>
    <div class="container">
        <h1>Ajouter un contact</h1>
        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <fieldset style="width: 70%; margin: 0 auto;">
                <legend>Informations personnelles</legend>
                <div class="form-group">
                    <label for="first_name">Prénom :</label>
                    <input type="text" id="first_name" name="first_name" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="last_name">Nom :</label>
                    <input type="text" id="last_name" name="last_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="gender">Sexe :</label>
                    <input type="text" id="gender" name="gender" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="education_level">Niveau d'études :</label>
                    <input type="text" id="education_level" name="education_level" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="field">Filière :</label>
                    <input type="text" id="field" name="field" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="specialization">Spécialité :</label>
                    <input type="text" id="specialization" name="specialization" class="form-control">
                </div>
            </fieldset>

            <fieldset style="width: 70%; margin: 0 auto;">
                <legend>Coordonnées</legend>
                <div class="form-group">
                    <label for="address">Adresse :</label>
                    <input type="text" id="address" name="address" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="phone_number">Numéro de téléphone :</label>
                    <input type="text" id="phone_number" name="phone_number" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="email">Adresse e-mail :</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="age">Âge :</label>
                    <input type="text" id="age" name="age" class="form-control">
                </div>
            </fieldset>

            <fieldset style="width: 70%; margin: 0 auto;">
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
                <br>
                <div class="form-group">
                    <label for="career_project">Description du projet professionnel :</label>
                    <textarea id="career_project" name="career_project" class="form-control" rows="5" required></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="stage_requirements">Ce qu'il vous faut pour mener à bien votre stage :</label>
                    <select id="stage_requirements" name="stage_requirements" class="form-control">
                        <option value="Fonctionnement plateforme Upwork">Fonctionnement plateforme Upwork</option>
                        <option value="Autre">Autre</option>
                    </select>
                </div>
            </fieldset>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Modifier un contact</title>
</head>
<body>
    <h1>Modifier un Contact :</h1>
    <div class="container" style="width: 50%; margin: 0 auto;">
        <form action="{{route('contacts.update', ['id'=> $contact])}}" method="POST">
            @csrf
            @method('put')
            <fieldset style="width: 50%; margin: 0 auto;">
                <legend>Modifier vos informations personnelles</legend>
                <div class="form-group">
                    <label for="first_name">Prénom :</label>
                    <input type="text" id="first_name" name="first_name" value="{{$contact->first_name}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Nom :</label>
                    <input type="text" id="last_name" name="last_name" value="{{$contact->last_name}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="gender">Sexe :</label>
                    <input type="text" id="gender" name="gender" value="{{$contact->gender}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="education_level">Niveau d'études :</label>
                    <input type="text" id="education_level" name="education_level" value="{{$contact->education_level}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="field">Filière :</label>
                    <input type="text" id="field" name="field" value="{{$contact->field}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="specialization">Spécialité :</label>
                    <input type="text" id="specialization" name="specialization" value="{{$contact->specialization}}" class="form-control">
                </div>
            </fieldset>

            <fieldset style="width: 50%; margin: 0 auto;">
                <legend>Modifier vos coordonnées</legend>
                <div class="form-group">
                    <label for="address">Adresse :</label>
                    <input type="text" id="address" name="address" value="{{$contact->address}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone_number">Numéro de téléphone :</label>
                    <input type="text" id="phone_number" name="phone_number" value="{{$contact->phone_number}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Adresse e-mail :</label>
                    <input type="email" id="email" name="email" value="{{$contact->email}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="age">Âge :</label>
                    <input type="text" id="age" name="age" value="{{$contact->age}}" class="form-control">
                </div>
            </fieldset>

            <fieldset style="width: 50%; margin: 0 auto;">
                <legend>Modifier les informations sur le stage</legend>
                <div class="form-group">
                    <label for="interests">Domaine intéressé par le stage :</label>
                    <input type="text" id="interests" name="interests" value="{{$contact->interests}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="career_project">Description du projet professionnel :</label>
                    <textarea id="career_project" name="career_project" class="form-control" rows="5" required>{{$contact->career_project}}</textarea>
                </div>
                <div class="form-group">
                    <label for="stage_requirements">Ce qu'il vous faut pour mener à bien votre stage :</label>
                    <select id="stage_requirements" name="stage_requirements" class="form-control">
                        <option value="Fonctionnement plateforme Upwork" {{$contact->stage_requirements == 'Fonctionnement plateforme Upwork' ? 'selected' : ''}}>Fonctionnement plateforme Upwork</option>
                        <option value="Autre" {{$contact->stage_requirements == 'Autre' ? 'selected' : ''}}>Autre</option>
                    </select>
                </div>
            </fieldset>

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</body>
</html>

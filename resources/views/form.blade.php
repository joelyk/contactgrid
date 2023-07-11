<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width={device-width}, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container" style="width: 50%; margin: 0 auto;">
        <h1 >Ajouter un contact</h1>
        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <fieldset style="width: 50%; margin: 0 auto;">
                <legend>Informations personnelles</legend>
                <div class="form-group">
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="address">Adresse :</label>
                    <input type="text" id="address" name="address" class="form-control" required>
                </div>
            </fieldset>
    
            <fieldset style="width: 50%; margin: 0 auto;">
                <legend>Coordonnées</legend>
                <div class="form-group">
                    <label for="phone_number">Numéro de téléphone :</label>
                    <input type="text" id="phone_number" name="phone_number" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Adresse e-mail :</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
            </fieldset>
    
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
    
    
    
    
</body>
</html>
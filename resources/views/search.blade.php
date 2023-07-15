<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Mes contacts</title>
</head>
<body>
    <!-- Search Widget -->
    <div class="card my-4">
        <h1 class="card-header">Rechercher un contact</h1>
        <form class="card-body" action="/search" method="GET" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Rechercher..." name="q">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="submit">Go!</button>
                </span>
            </div>
        </form>
    </div>

    <div class="container">
        <h2>
            <a href="{{route('contacts.create')}}" class="btn btn-primary">Ajouter un contact</a>
        </h2>

        <h1>Liste des contacts recherchés :</h1>
        <h3 class="my-4">Résultat de recherche pour : <small>{{$key}}</small></h3>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Sexe</th>
                    <th>Niveau d'études</th>
                    <th>Filière</th>
                    <th>Spécialité</th>
                    <th>Adresse</th>
                    <th>Numéro de téléphone</th>
                    <th>Adresse e-mail</th>
                    <th>Âge</th>
                    <th>Domaine intéressé</th>
                    <th>Description du projet professionnel</th>
                    <th>Exigences pour le stage</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($contacts as $contact)
                    <tr>
                        <td>{{$contact->id}}</td>
                        <td>{{ $contact->first_name }}</td>
                        <td>{{ $contact->last_name }}</td>
                        <td>{{ $contact->gender }}</td>
                        <td>{{ $contact->education_level }}</td>
                        <td>{{ $contact->field }}</td>
                        <td>{{ $contact->specialization }}</td>
                        <td>{{ $contact->address }}</td>
                        <td>{{ $contact->phone_number }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->age }}</td>
                        <td>{{ $contact->interests }}</td>
                        <td>{{ $contact->career_project }}</td>
                        <td>{{ $contact->stage_requirements }}</td>
                        <td> 
                            <a href="{{route('contacts.edit', ['id'=> $contact])}}" class="btn btn-primary">Modifier</a>
                        </td>
                        <td>
                            <form action="{{route('contacts.destroy', ['id'=> $contact])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" value="delete">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="15">Aucun contact trouvé.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-LF8soMnrwF6tc0GLA/VxF4uLx2IBFZXOXtgQxUYv1n3aohVRVlpisJOGGFjnxLCo" crossorigin="anonymous"></script>
</body>
</html>

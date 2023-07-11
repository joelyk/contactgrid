<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Mes contacts</title>
    <style>
        .table-bordered {
            border: 2px solid #dee2e6;
        }
    </style>
</head>
<body>
    <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header">Rechercher un contact</h5>
        <form class="card-body" action="/search" method="GET" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Rechercher..." name="q">
                <button class="btn btn-secondary" type="submit">Go!</button>
            </div>
        </form>
    </div>

    <div class="container">
        <h1>Liste des contacts :</h1>
        <a href="{{route('contacts.create')}}" class="btn btn-primary">Ajouter un contact</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Numéro de téléphone</th>
                    <th>Adresse e-mail</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($contacts as $contact)
                    <tr>
                        <td>{{$contact->id}}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->address }}</td>
                        <td>{{ $contact->phone_number }}</td>
                        <td>{{ $contact->email }}</td>
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
                        <td colspan="7">Aucun contact trouvé.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-LF8soMnrwF6tc0GLA/VxF4uLx2IBFZXOXtgQxUYv1n3aohVRVlpisJOGGFjnxLCo" crossorigin="anonymous"></script>
</body>
</html>
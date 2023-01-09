liste projet
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>liste Des Projets</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                        <th>ID</th>
                        <th>NOM</th>
                        <th>DESCRIPTION</th>
                        <th>DATE DEBUT</th>
                        <th>DATE FIN</th>
                        <th>DETAILS</th>
                </tr>
            </thead>
          @foreach  ($listeprojets as $projet)
            <tr>
                <td>{{$projet->id}}</td>
                <td>{{$projet->nom}}</td>
                <td>{{$projet->description}}</td>
                <td>{{$projet->datedebut}}</td>
                <td>{{$projet->datefin}}</td>
                <td>
                    <a href="">Informations<a>
                </td>
            </tr>
          @endforeach
        </table>    
    </div>
</div>
</body>
</html>
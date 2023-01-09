add phrase
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phrase</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
<div class="container mt-5">
    <div class="card col-md-6">
        <div class="card-header">Phrase Projet</div>
        <div class="card-body"></div>
        @if(isset($confirmation))
            @if ($confirmation ==1)
                <div class="alert alert-success">Phrase Ajouter</div>
            @else
                <div class="alert alert-success">Phrase Non_Ajouter</div>
            @endif
        @endif    
        <form action="phrasepersist" method="POST">

            <label for="">Nom Phrase</label>
            <input type="text" class="form-control" name="nom">
            <label for="">Duree Phrase</label>
            <input type="text" class="form-control" name="duree">
            <label for="">Propriete Phrase</label>
            <input type="text" class="form-control" name="priorite">
            <button name="btnAjout" type="submit" class="btn btn-success mt-2 offset-4">Ajouter</button>
        </form>
    </div>
</div>  

</body>
</html>
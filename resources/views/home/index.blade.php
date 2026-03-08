<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konferencijos</title>
</head>
<body>
    <h1>Studento informacija</h1>
    <p><b>Vardas:</b> Adolis</p>
    <p><b>Pavardė:</b> Daniūnas</p>
    <p><b>Grupė:</b> PIT-23-NL</p>
    <hr>
    <h2>Vaidmenų posistemiai</h2>
    <ul>
        <li><a href="{{ route('home.client') }}">Kliento posistemis</a></li>
        <li><a href="{{ route('home.employee') }}">Darbuotojo posistemis</a></li>
        <li><a href="{{ route('home.admin') }}">Sistemos administratoriaus posistemis</a></li>
    </ul>
</body>
</html>
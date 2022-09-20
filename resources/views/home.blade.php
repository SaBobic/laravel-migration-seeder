<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Biglietti Treni</title>
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center">Acquisto Biglietti Treni</h1>
        <ul>
        @foreach ($trains as $train)
            <li>
                <ul class="mb-3">
                    <li>{{ $train['Azienda'] }}</li>
                    <li>{{ $train['Stazione di partenza'] }}</li>
                    <li>{{ $train['Stazione di arrivo'] }}</li>
                </ul>
            </li>
        @endforeach
        </ul>
    </div>
</body>
</html>
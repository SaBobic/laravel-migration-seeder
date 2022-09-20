@extends('templates.single')

@section('main-content')
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
@endsection
@extends('templates.single')

@section('main-content')
    <div class="container py-5">
        <h1 class="text-center">Acquisto Biglietti Treni</h1>
            <ul>
            @foreach ($trains as $train)
            <li>
                <ul class="mb-3">
                    <li>Codice treno: {{ $train->codice_treno }}</li>
                    <li>Azienda: {{ $train->azienda }}</li>
                    <li>Stazione di partenza: {{ $train->stazione_partenza }}</li>
                    <li>Stazione di arrivo: {{ $train->stazione_arrivo }}</li>
                    <li>Numero carrozze: {{ $train->numero_carrozze }}</li>
                    @if ($train->cancellato)
                        <li><strong>Il treno è stato cancellato!</strong></li>
                    @else
                        <li>Orario di partenza: {{ $train->orario_partenza }}</li>
                        <li>Orario di arrivo: {{ $train->orario_arrivo }}</li>
                        <li>{{ $train->in_orario ? 'Il treno è in orario' : 'Il treno è in ritardo'}}</li>
                    @endif
                </ul>
            </li>
            @endforeach
        </ul>
    </div>
@endsection
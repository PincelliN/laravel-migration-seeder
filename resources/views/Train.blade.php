{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container text-center my-3">
        <h2>Biglietto</h2>
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between">
                    <strong>AZIENDA:</strong><i>{{ $train->azienda }}</i>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>PARTENZA:</strong><i>{{ $train->stazione_di_partenza }}</i>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>ARRIVO:</strong><i>{{ $train->stazione_di_arrivo }}</i>
                </li>
                <li class="list-group-item d-flex justify-content-between"><strong>DATA DI
                        PARTENZA:</strong><i>{{ $train->giorno_di_partenza }}</i></li>
                <li class="list-group-item d-flex justify-content-between"><strong>ORA DI
                        PARTENZA:</strong><i>{{ $train->partenza }}</i></li>
                <li class="list-group-item d-flex justify-content-between"><strong>ORA DI
                        ARRIVO:</strong><i>{{ $train->arrivo }}</i></li>
                <li class="list-group-item d-flex justify-content-between"><strong>CODICE
                        TRENO:</strong><i>{{ $train->codice }}</i></li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>CARROZZE:</strong><i>{{ $train->n_carroze }}</i>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('titlePage')
    Treni
@endsection

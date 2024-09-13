{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container text-center my-3">
        <h2>Biglietto</h2>
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between">
                    <strong>AZIENDA:</strong><i>{{ $train->company }}</i>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>PARTENZA:</strong><i>{{ $train->departure_station }}</i>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>ARRIVO:</strong><i>{{ $train->arrival_station }}</i>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>DATA DI PARTENZA:</strong><i>{{ $train->departure_day }}</i>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>ORA DI PARTENZA:</strong><i>{{ $train->departure }}</i>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>ORA DI ARRIVO:</strong><i>{{ $train->arrival }}</i>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>BINARIO:</strong><i>{{ $train->platform }}</i>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>CODICE TRENO:</strong><i>{{ $train->code }}</i>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>CARROZZE:</strong><i>{{ $train->num_carriages }}</i>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('titlePage')
    Treni
@endsection

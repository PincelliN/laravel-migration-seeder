{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@dump(Route::currentRouteName())
@section('content')
    <div class="container my-5">
        <h1 class="text-light">Treni</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Azienda</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Giorno di Partenza</th>
                    <th scope="col">Partenza</th>
                    <th scope="col">Arrivo</th>
                    <th scope="col">Binario</th>
                    <th scope="col">Codice</th>
                    <th scope="col">N. carrozze</th>
                    <th scope="col">Cancellato</th>
                    <th scope="col">Biglietti</th>
                </tr>
            </thead>
            <tbody>
                @if (Route::currentRouteName() == 'home')
                    @forelse ($trains as $train)
                        <tr>
                            <td>{{ $train->id }}</td>
                            <td>{{ $train->company }}</td>
                            <td>{{ $train->departure_station }}</td>
                            <td>{{ $train->arrival_station }}</td>
                            <td>{{ $train->departure_day }}</td>
                            <td>{{ $train->departure }}</td>
                            <td>{{ $train->arrival }}</td>
                            <td>{{ $train->binary }}</td>
                            <td>{{ $train->code }}</td>
                            <td>{{ $train->num_carriages }}</td>
                            <td>{{ $train->cancelled == 1 ? 'Cancellato' : '' }}</td>
                            <td>
                                <a href="{{ route('train', ['id' => $train->id]) }}" class="btn btn-warning">Biglietto</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="12">Non ci sono treni disponibili</td>
                        </tr>
                    @endforelse
                @else
                    @forelse ($holiday_trains as $train)
                        <tr>
                            <td>{{ $train->id }}</td>
                            <td>{{ $train->company }}</td>
                            <td>{{ $train->departure_station }}</td>
                            <td>{{ $train->arrival_station }}</td>
                            <td>{{ $train->departure_day }}</td>
                            <td>{{ $train->departure }}</td>
                            <td>{{ $train->arrival }}</td>
                            <td>{{ $train->binary }}</td>
                            <td>{{ $train->code }}</td>
                            <td>{{ $train->num_carriages }}</td>
                            <td>{{ $train->cancelled == 1 ? 'Cancellato' : '' }}</td>
                            <td>
                                <a href="{{ route('train', ['id' => $train->id]) }}" class="btn btn-warning">Biglietto</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="12">Non ci sono treni disponibili per il periodo selezionato</td>
                        </tr>
                    @endforelse
                @endif
            </tbody>
        </table>
    </div>
@endsection


@section('titlePage')
    home
@endsection

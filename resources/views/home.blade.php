{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@dump(Route::currentRouteName())
@section('content')
    <div class="container my-5">
        <h1>Treni</h1>
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
                    <th scope="col">Dettagli</th>
                </tr>
            </thead>
            <tbody>
                @if (Route::currentRouteName() == 'home')
                    @foreach ($trains as $train)
                        <tr>
                            <td>{{ $train->id }}</td>
                            <td>{{ $train->azienda }}</td>
                            <td>{{ $train->stazione_di_partenza }}</td>
                            <td>{{ $train->stazione_di_arrivo }}</td>
                            <td>{{ $train->giorno_di_partenza }}</td>
                            <td>{{ $train->partenza }}</td>
                            <td>{{ $train->arrivo }}</td>
                            <td>{{ $train->binario }}</td>
                            <td>{{ $train->codice }}</td>
                            <td>{{ $train->n_carroze }}</td>
                            <td>{{ $train->cancellato }}</td>
                            <td><a href="{{ route('train', ['id' => $train->id]) }}" class="btn btn-warning">Biglietto</a>
                            </td>
                    @endforeach
                @else
                @empty($train)
                    <h3>Non ci sono treni</h3>
                @else
                    <tr>
                        <td>{{ $train->id }}</td>
                        <td>{{ $train->azienda }}</td>
                        <td>{{ $train->stazione_di_partenza }}</td>
                        <td>{{ $train->stazione_di_arrivo }}</td>
                        <td>{{ $train->giorno_di_partenza }}</td>
                        <td>{{ $train->partenza }}</td>
                        <td>{{ $train->arrivo }}</td>
                        <td>{{ $train->binario }}</td>
                        <td>{{ $train->codice }}</td>
                        <td>{{ $train->n_carroze }}</td>
                        <td>{{ $train->cancellato }}</td>
                        <td><a href="{{ route('train', ['id' => $train->id]) }}"class="btn btn-warning">Biglietto</a>
                        </td>
                    </tr>
                @endempty
            @endif
        </tbody>
    </table>
</div>
@endsection


@section('titlePage')
home
@endsection

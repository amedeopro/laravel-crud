
@extends('layout.app')

@section('content')

<div class="lavori">

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Questi sono tutti i lavori da svolgere <a href="{{ route('works.create')}}" class="btn btn-primary">Aggiungi un nuovo lavoro</a></h1>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">cliente</th>
              <th scope="col">Lavoro</th>
              <th scope="col">Assegnato a</th>
              <th scope="col">Visualizza</th>
              <th scope="col">Modifica</th>
              <th scope="col">Elimina</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($works as $work)
              <tr>
                <th scope="row">{{ $work->id }}</th>
                <td>{{ $work->cliente }}</td>
                <td>{{ $work->lavoro }}</td>
                <td>{{ $work->assegnazione }}</td>
                <td><a href="{{ route('works.show', $work->id) }}" class="btn btn-info">Visualizza</a></td>
                <td><a href="#" class="btn btn-warning">Modifica</a></td>
                <td><a href="#" class="btn btn-danger">Elimina</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>

  </div>
</div>


@endsection

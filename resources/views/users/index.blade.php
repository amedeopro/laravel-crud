@extends('layout.app')

@section('content')

  <div class="utenti">

    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Questi sono tutti gli utenti <a href="{{ route('users.create')}}" class="btn btn-primary">Aggiungi un nuovo lavoro</a></h1>

          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Cognome</th>
                <th scope="col">Eta'</th>
                <th scope="col">Cod. Fiscale</th>
                <th scope="col">Visualizza</th>
                <th scope="col">Modifica</th>
                <th scope="col">Elimina</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                  <th scope="row">{{ $user->id }}</th>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->lastname }}</td>
                  <td>{{ $user->age }}</td>
                  <td>{{ $user->cf }}</td>
                  <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-info">Visualizza</a></td>
                  <td><a href="{{ route('users.edit', $user->id)}}" class="btn btn-warning">Modifica</a></td>
                  <td> <form action="{{route('users.destroy', $user->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Elimina">
                  </form> </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>

    </div>
  </div>



@endsection

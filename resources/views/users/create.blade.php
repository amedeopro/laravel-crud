@extends('layout.app')

@section('content')
  <div class="container">
    <div class="row">

      <div class="col-12">
        <h1>Aggiungi utente</h1>
        <form class="form-group" action="{{ route('users.store') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" class="form-control" placeholder="Inserisci il nome ">
          </div>

          <div class="form-group">
            <label for="lastname">Cognome</label>
            <input type="textarea" name="lastname" class="form-control" placeholder="Inserisci cognome">
          </div>

          <div class="form-group">
            <label for="age">Eta'</label>
            <input type="textarea" name="age" class="form-control" placeholder="Inserisci eta'">
          </div>

          <div class="form-group">
            <label for="cf">Codice Fiscale</label>
            <input type="textarea" name="cf" class="form-control" placeholder="Inserisci codice fiscale">
          </div>


          <div class="form-group">
            <input type="submit" class="form-control" value="Inserisci nuovo utente">
          </div>

        </form>
      </div>

    </div>

  </div>
@endsection

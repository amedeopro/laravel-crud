@extends('layout.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3>Nome e Cognome: {{ $user->name }} {{$user->lastname}}</h3>
        <ul>
          <li>Eta': {{ $user->age }}</li>
          <li>Codice Fiscale: {{ $user->cf }}</li>
        </ul>
      </div>
    </div>
  </div>

@endsection

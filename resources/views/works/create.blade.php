@extends('layout.app')

@section('content')

  <div class="container">
    <div class="row">

      <div class="col-12">
        <h1>Aggiungi lavoro</h1>
        <form class="form-group" action="{{ route('works.store') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="cliente">Cliente</label>
            <input type="text" name="cliente" class="form-control" placeholder="Inserisci il nome del cliente">
          </div>

          <div class="form-group">
            <label for="lavoro">Lavoro</label>
            <input type="textarea" name="lavoro" class="form-control" placeholder="Inserisci descrizione lavoro da svolgere">
          </div>

          <div class="form-group">
            <label for="assegnazione">Aseggnsa questo lavoro a</label>
            <select class="form-control" name="assegnazione">
              <option value=""> --- </option>
              <option value="amedeo">Amedeo</option>
              <option value="maurizio">Maurizio</option>
            </select>
          </div>

          <div class="form-group">
            <input type="submit" class="form-control" value="Inserisci nuovo lavoro">
          </div>

        </form>
      </div>

    </div>

  </div>

@endsection

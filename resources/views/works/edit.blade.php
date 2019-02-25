@extends('layout.app')

@section('content')

  <div class="container">
    <div class="row">

      <div class="col-12">
        <h1>Aggiorna lavoro: {{ $work->lavoro}} del cliente {{ $work->cliente}} </h1>
        <form class="form-group" action="{{ route('works.update', $work->id) }}" method="post">

          @method('PUT')
          @csrf

          <div class="form-group">
            <label for="cliente">Cliente</label>
            <input type="text" name="cliente" class="form-control" placeholder="Inserisci il nome del cliente" value="{{$work->cliente}}">
          </div>

          <div class="form-group">
            <label for="lavoro">Lavoro</label>
            <input type="textarea" name="lavoro" class="form-control" placeholder="Inserisci descrizione lavoro da svolgere" value="{{$work->lavoro}}">
          </div>

          <div class="form-group">
            <label for="assegnazione">Aseggnsa questo lavoro a</label>
            <select class="form-control" name="assegnazione">
              <option value=""> --- </option>
              <option value="amedeo"{{ ('amedeo' == $work->assegnazione) ? ' selected' : null }}>Amedeo</option>
              <option value="maurizio"{{ ('maurizio' == $work->assegnazione) ? ' selected' : null }}>Maurizio</option>
            </select>
          </div>

          <div class="form-group">
            <input type="submit" class="form-control" value="Aggiorna">
          </div>

        </form>
      </div>

    </div>

  </div>

@endsection

@extends('layout.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Cliente: {{ $work->cliente }}</h1>
        <ul>
          <li>Lavoro da svolgere: {{ $work->lavoro }}</li>
          <li>Assegnato a: {{ $work->assegnazione }}</li>
        </ul>
      </div>
    </div>
  </div>
  @endsection

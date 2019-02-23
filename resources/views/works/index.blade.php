

@foreach ($works as $work)
  <ul>
    <li>ID: {{ $work['id'] }}</li>
    <li>Cliente: {{ $work['cliente'] }}</li>
    <li>Lavoro: {{ $work['lavoro'] }}</li>
    <li>Assegnazione: {{ $work['assegnazione'] }}</li>
  </ul>
@endforeach

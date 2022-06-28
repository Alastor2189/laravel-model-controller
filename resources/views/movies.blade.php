@extends('layout.app')
@section('main')
    
<h1>Movies Database</h1>
<div class="card-movie">
<ul>
  {{-- {{ dd($movies) }} --}}
  
  @foreach ($movies as $movie)
      <li>
          <h2>{{ $movie->title }}</h2>
          <h3>Title: {{ $movie->original_title }}</h3>
          <h4>Nationality: {{ $movie->nationality }}</h4>
          <p>date: {{\Carbon\Carbon::parse($movie->date)->format('d/M/Y')}}</p>
          <p>vote: {{ $movie->vote }}/10</p>
      </li>
  
  @endforeach
  
</ul>
</div>

@endsection
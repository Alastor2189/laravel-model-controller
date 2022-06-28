<h1>Movies Database</h1>
<ul>
  {{-- {{ dd($movies) }} --}}
  @foreach ($movies as $movie)
      <li>
          <h2>{{ $movie->title }}</h2>
          <h3>Title: {{ $movie->original_title }}</h3>
          <h4>Nationality: {{ $movie->nationality }}</h4>
          <div>date: {{\Carbon\Carbon::parse($movie->date)->format('d/M/Y')}}</div>
          <div>vote: {{ $movie->vote }}/10</div>
      </li>
  @endforeach
</ul>
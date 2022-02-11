<h1>Lista dei film</h1>

@foreach ($movies as $movie)
    <div>
        <h2><a href="{{ route('movie', ['id' => $movie->id]) }}">Title: {{ $movie->title }}</a></h2>
        <p>Nationality: {{ $movie->nationality }}</p>
        <p>Vote: {{ $movie->vote }}</p>
    </div>
@endforeach
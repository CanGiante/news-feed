@extends('layouts.app')
@section('content')

  @foreach($articles['articles'] as $article)
    <div class="container">
      <div class="row">
        <div class="col">
          <article>

            <a href="{{ $article['url'] }}" target="_blank">

              <h1>{{ $article['title'] }} </h1>
              <img src="{{ $article['urlToImage'] }}">

            </a>

            <p>{{ $article['description'] }} </p>

            <div>
              Author: {{ $article['author'] ? : "Unknown" }}
            </div>

            @if($article['publishedAt'] !== null)
              <div>
                Date Published: {{ Carbon\Carbon::parse($article['publishedAt'])->format('l jS \\of F Y ') }}
              </div>
            @else
              <div>
                Date Published: Unknown
              </div>
            @endif

          </article>

        </div>

      </div>

    </div>
    <br>
    <br>
    <br>
  @endforeach

@endsection

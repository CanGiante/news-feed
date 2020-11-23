@extends('layouts.app')
@section('content')

  <example-component></example-component>

  @foreach($articles['articles'] as $article)
    <div class="container mb-3">
      <div class="row">
        <div class="col">

          <a class="text-decoration-none" href="{{ $article['url'] }}" target="_blank">
            <article class="card p-5">

              {{-- title --}}
              <h2 class="text-center mb-4">{{ $article['title'] }} </h2>

              {{-- image --}}
              <div class="align-self-center m-3">
                @if($article['urlToImage'] !== null)

                  <img class="img-fluid" src="{{ $article['urlToImage'] }}">
                @else

                  <img class="img-fluid" src="{{ asset('img/default-img.jpg') }}">
                @endif
              </div>

              {{-- description --}}
              <p class="text-center mx-5 mb-5 mt-2">{{ $article['description'] }}</p>

              <div class="text-right font-italic" style="margin-right:-30px;margin-bottom:-30px;font-size:small">
                {{-- author --}}
                <span class="d-block">
                  Author: {{ $article['author'] ? : "Unknown" }}
                </span>

                {{-- date --}}
                @if($article['publishedAt'] !== null)

                  <span>
                    Published on {{ Carbon\Carbon::parse($article['publishedAt'])->format('l d/m/Y ') }}
                  </span>
                @else

                  <span>
                    Date Published: Unknown
                  </span>
                @endif
              </div>

            </article>
          </a>

        </div>
      </div>
    </div>
  @endforeach

@endsection

@extends('layouts.app')
@section('content')

    @foreach($data['articles'] as $article)
        <article-component
            source="{{ $article['url'] }}"
            title="{{ $article['title'] }}"
            image="{{ $article['urlToImage'] ?: asset('img/default-img.jpg') }}"
            description="{{ $article['description'] }}"
            author="{{ $article['author'] ?: 'Unknown' }}"
            date="{{ Carbon\Carbon::parse($article['publishedAt'])->format('l d/m/Y ') ?: 'Date Published: Unknown' }}">
        </article-component>
    @endforeach

@endsection

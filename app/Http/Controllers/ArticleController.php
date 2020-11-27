<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
// use App\Article;


class ArticleController extends Controller
{
  public function index(){

    $articles = json_decode(file_get_contents(config('services.newsapi.baseurl')
    . 'everything?qInTitle=laravel&pageSize=100&sortBy=publishedAt&apiKey='
    . config('services.newsapi.key')), true);

    return view('welcome', compact('articles'));
  }
}
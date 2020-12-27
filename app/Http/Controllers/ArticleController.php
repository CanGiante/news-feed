<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
  public function index(){

    $data = json_decode(file_get_contents(config('services.newsapi.baseurl')
    . 'everything?language=en&qInTitle=laravel&pageSize=100&sortBy=publishedAt&apiKey='
    . config('services.newsapi.key')), true);

    return view('welcome', compact('data'));
  }
}
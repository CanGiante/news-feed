<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\New;


class NewController extends Controller
{
  public function index(){

    $json = json_decode(file_get_contents(config('services.newsapi.baseurl')
    . 'everything?qInTitle=reputazione&apiKey='
    . config('services.newsapi.key')), true);

    dd($json);

  }
}

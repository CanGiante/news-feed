<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//class ArticleController extends Controller
//{
//    public function index(Request $request){
//
//        $articles = config('services.newsapi.baseurl')
//            . 'everything?qInTitle=laravel&pageSize=100&sortBy=publishedAt&apiKey='
//            . config('services.newsapi.key');
//
//        return response()->json(compact('articles'));
//    }
//}
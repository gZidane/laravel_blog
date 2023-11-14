<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ArticlesController extends Controller
{
    //

    public function index()
    {
        $url = env('URL_API_BLOG', 'http://localhost:8000/api');

        $response = Http::get($url.'/articles');
        $jsonData = $response['articles'];

        return view('articles', compact('jsonData'));

    }

    public function details(Request $request, $article_id)
    {
        $url = env('URL_API_BLOG', 'http://localhost:8000/api');

        $response = Http::get($url.'/articles'.'/'.$article_id);
        $data = $response->json();

        return view('details', compact('data'));
    }

    public function new()
    {
        $url = env('URL_API_BLOG', 'http://localhost:8000/api');

        $response = Http::get($url.'/authors');
        $authors = $response->json();

        return view('new', compact('authors'));
    }

    public function store(Request $request)
    {
        $url = env('URL_API_BLOG', 'http://localhost:8000/api');

        $response = Http::post($url.'/articles',
        [
            'title' => $request->title,
            'author_id'=> $request->author_id,
            'image' => $request->image,
            'content' => $request->content

        ]);


        return redirect()->route('articles.index');
    }

    public function search(Request $request)
    {
        $url = env('URL_API_BLOG', 'http://localhost:8000/api');

        $response = Http::post($url.'/articles/search',
        [
            'keyword' => $request->keyword

        ]);

        $articles_search = $response->json();

        $data = [
            'keyword' => $request->keyword,
            'articles' => $articles_search
        ];

        return view('search', compact('data'));
    }

    

    
}

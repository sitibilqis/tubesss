<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(Request $request) {
        /* menggunakan eloquent */
        $articles = Article::all();

        return view('article.index', [
            'articles' => $articles]);
    }
}

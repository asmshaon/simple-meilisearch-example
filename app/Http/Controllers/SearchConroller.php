<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class SearchConroller extends Controller
{
    public function __invoke(Request $request) {
        $results = [];

        if($request->query('query')) {
            $results = Article::search($request->query('query'))->paginate(5);
        }

        return view('search', compact('results'));
    }
}

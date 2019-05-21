<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use App\Comments;
use App\Categories;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Articles::all();
        $categories = Categories::all();

        return view('index')->with(['data' => $data,'categories' => $categories]);
    }
    /**
     * Show articles assigned to specified category  
     */

    public function filterByCategory(Request $req)
    {

        $data = Articles::where('category',$req->cat)->get();
        $categories = Categories::all();

        return view('index')->with(['data' => $data,'categories' => $categories]);
    }

    public function showArticle($id)
    {

            $article_data = Articles::find($id);
            $comments = Comments::where('article',$id);

        return view('article')->with(['article' => $article_data,'comments' => $comments]);
    }
}

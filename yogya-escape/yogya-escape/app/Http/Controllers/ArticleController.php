<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // $dest = Post::all();
        // return view('/galeri', compact('data'));
        return view('articles', [
            'posts'=>Post::all()
        ]);
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('article-details', [
            'posts'=>$post]);
    }
}

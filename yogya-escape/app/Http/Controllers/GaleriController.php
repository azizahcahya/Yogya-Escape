<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dest = Post::all();
        // return view('/galeri', compact('data'));
        return view('galeri', [
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

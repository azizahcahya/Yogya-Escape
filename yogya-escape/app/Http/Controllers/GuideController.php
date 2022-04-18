<?php

namespace App\Http\Controllers;
use App\Models\guide;
use Illuminate\Http\Request;

class GuideController extends Controller
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
        return view('tour-guide', [
            'posts'=>guide::all()
        ]);
    }
    public function show($id)
    {
        $post = guide::find($id);
        return view('detailGuide', [
            'posts'=>$post]);
    }
}

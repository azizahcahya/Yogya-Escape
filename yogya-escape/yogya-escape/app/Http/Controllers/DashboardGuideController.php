<?php

namespace App\Http\Controllers;

use App\Models\guide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardGuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.guide.index', [
            'posts'=>guide::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.guide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'noHp' => 'required|max:255',
            'image' => 'image|file|max:5120',
            'deskripsi' => 'required'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        
        
        guide::create($validatedData);

        return redirect('/dashboard/guide')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function show(guide $guide)
    {
        return view('dashboard.guide.show', [
            'post' => $guide
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function edit(guide $guide)
    {
        return view('dashboard.guide.edit', [
            'post' => $guide,
            'posts'=>guide::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, guide $guide)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'noHp' => 'required|max:255',
            'image' => 'image|file|max:5120',
            'deskripsi' => 'required'
        ]);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        
        guide::where('id', $guide->id)
            ->update($validatedData);

        return redirect('/dashboard/guide')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function destroy(guide $guide)
    {
        if($guide->image){
            Storage::delete($guide->image);
        }

        guide::destroy($guide->id);

        return redirect('/dashboard/guide')->with('success', 'Post has been deleted!');
    }
}

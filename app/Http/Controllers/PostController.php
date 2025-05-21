<?php

namespace App\Http\Controllers;

use App\Models\comments;
use App\Models\Post;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index()
        {
          $posts = Post::all();
        return view('group', compact( 'posts'));
            //
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
$request->validate( [
'title'=>'required',
'description'=>'required',
'imagePath'=>'required|image|mimes:png,jpg',

]);


if ($request->hasFile('imagePath')) {
    $path = $request->file('imagePath')->store('image', 'public');
}

Post::create([
'title'=>$request->title,
'description'=>$request->description,
'imagePath'=>$path,
'user_id'=>auth()->id()
]);

return redirect()->route('group')->with('success', 'berhasil');



    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
return view('postdiskusi');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\books;

class booksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Books::all();
        return view('books.index', ["books"=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::all();
        return view('books.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required',
            'summary' => 'required',
            'stock' => 'required',
            'category_id' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension(); 
        $request->image->move(public_path('uploads'), $imageName); 

        $books = new Books;
        $books->title = $request->input("title");
        $books->summary = $request->input("summary");
        $books->stock = $request->input("stock");
        $books->category_id = $request->input("category_id");
        $books->image = $imageName;

        $books->save();
 
        return redirect('/books');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $books = Books::find($id);
        return view('books.show' , ['books'=>$books]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = category::all();
        $books = Books::find($id);
        return view('books.edit' , ['boosks'=>$books, 'categories'=>$categories]);
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


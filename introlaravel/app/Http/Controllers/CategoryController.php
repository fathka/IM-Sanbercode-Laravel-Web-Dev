<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function create()
    {
        return view('category.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required'
        ]);
        DB::table('categories')->insert([
            'name' => $request['name']
        ]);

        return redirect('/category');
    }
    public function index()
    {
        $category = DB::table('categories')->get();
        return view('category.index', ['category' => $category]);     
    }
    public function show($category_id)
    {
        $category= DB::table('categories')->where('id' , '$category_id')->first();
        return view('category.show', ['category' => $category]);
    }
    public function edit($category_id)
    {
        $category = DB::table('categories')->where('id', $category_id)->first();
        return view('category.edit', ['category' => $category]);
    }
    public function update(Request $request, $category_id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:45',
            'umur' => 'nullable|integer',
            'bio' =>  'nullable'
        ]);

        DB::table('categories')->where('id', $category_id)->update([
            'name' => $validatedData['name'],
            'umur' => $validatedData['umur'],
            'bio' => $validatedData['bio']
        ]);

        return redirect()->route('category.index');
    }
    public function destroy($category_id)
    {
        DB::table('categories')->where('id', $category_id)->delete();
        return redirect()->route('category.index');
    }
    //
}

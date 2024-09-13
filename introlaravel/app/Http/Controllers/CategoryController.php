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
    public function show($id)
    {
        $category= DB::table('categories')->find($id);
        return view('category.show', ['category' => $category]);
    }
    public function edit($id)
    {
        $category = DB::table('categories')->find($id);
        return view('category.edit', ['category' => $category]);
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required'
        ]);
        DB::table('categories')
        ->where('id', $id)
        ->update([
            'name' => $request['name']
        ]);

        return redirect('/category');
    }
    public function destroy($id)
    {
        DB::table('categories')->where('id', $id)->delete();
        return redirect('/category');
    }
    //
}

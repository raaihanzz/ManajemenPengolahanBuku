<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Book;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Categories::all();
        return view('createBook', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCategories(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Simpan data kategori
        Categories::create([
            'name' => $request->name,
        ]);

        // Redirect dengan pesan sukses
<<<<<<< HEAD
<<<<<<< HEAD
        return redirect()->route('createBook')->with('success', 'Kategori berhasil ditambahkan!');
=======
        return redirect()->route('home')->with('success', 'Kategori berhasil ditambahkan!');
>>>>>>> 20f0b5a (DotIntership DONE)
=======
        return redirect()->route('createBook')->with('success', 'Kategori berhasil ditambahkan!');
>>>>>>> 6467420 (Fix - Tambahan fitur list view untuk Kategori)
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6467420 (Fix - Tambahan fitur list view untuk Kategori)
        $category = Categories::findOrFail($id);
        $category->delete();

        return redirect()->route('createBook')->with('success', 'Kategori Buku Telah Dihapus.');
<<<<<<< HEAD
=======
        //
>>>>>>> 20f0b5a (DotIntership DONE)
=======
>>>>>>> 6467420 (Fix - Tambahan fitur list view untuk Kategori)
    }
}

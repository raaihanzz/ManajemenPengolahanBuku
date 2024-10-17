<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::with('category')->get(); // Memuat relasi kategori
        return view('home', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('createBook', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeBook(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'category_id' => 'required|exists:categories,id', // Validasi relasi category_id harus ada di tabel categories
            'published_at' => 'required|date',
        ]);

        // Jika validasi lolos, data akan disimpan
        Book::create($request->all());

        return redirect()->route('home')->with('success', 'Sukses!, Bukumu Telah Ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $books = Book::with('category')->findOrFail($id);
        return view('show', compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books = Book::find($id);
        $categories = Categories::all();

        if (!$books) {
            return redirect()->route('home')->with('error', 'Book not found');
        }

        return view('editBook', compact('books', 'categories'));
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
        $books = Book::findOrFail($id);

        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'published_at' => 'required|date',
        ]);

        $books->update($request->all());

        return redirect()->route('home')->with('success', 'Sukses!, Bukumu Telah Diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books = Book::findOrFail($id);
        $books->delete();

        return redirect()->route('home')->with('success', 'Buku Telah Dihapus.');
    }

    public function searchBooks(Request $request)
    {
        $query = $request->input('query');
        // Pencarian berdasarkan judul buku
<<<<<<< HEAD
        $books = Book::where('title', 'LIKE', '%' . $query . '%')
            ->orWhere('author', 'LIKE', '%' . $query . '%')
            ->orWhere('published_at', 'LIKE', '%' . $query . '%')
            ->orWhereHas('category', function ($q) use ($query) {
                $q->where('name', 'LIKE', '%' . $query . '%');
            })
            ->with('category') // Eager load category to prevent multiple queries
            ->get();
=======
        $books = Book::where('title', 'LIKE', '%' . $query . '%')->get();
>>>>>>> 20f0b5a (DotIntership DONE)

        // Ambil role pengguna
        $userRole = Auth::user()->role;

        // Buat ulang baris HTML untuk tabel
        $html = '';
        foreach ($books as $book) {
            $html .= '<tr class="text-center">';
            $html .= '<td>' . $book->title . '</td>';
            $html .= '<td>' . $book->author . '</td>';
            $html .= '<td>' . $book->category->name . '</td>';
            $html .= '<td>' . $book->published_at . '</td>';

            // Hanya tampilkan tombol jika pengguna memiliki role yang sesuai
            if ($userRole === 'admin') { // Ganti dengan role yang sesuai
                $html .= '<td>
                        <a href="/editBook/' . $book->id . '" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal' . $book->id . '">Hapus</a>
                    </td>';
            } else {
                $html .= '<td></td>'; // Atau bisa kosong jika tidak ada aksi
            }

            $html .= '</tr>';
        }

        return response()->json($html);
    }
}

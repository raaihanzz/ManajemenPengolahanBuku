@extends('layouts.app')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="text-bold text-center">Edit Bukumu</h1>

                    <!-- Pesan Error -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Form Edit Buku -->
                    <form action="{{ url('updateBook', $books->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            @csrf
                            <div class="mb-3">
                                <label for="judul">Judul:</label>
                                <input type="text" name="title" id="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title', $books->title) }}">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="author">Author:</label>
                                <input type="text" name="author" id="author" class="form-control"
                                    value="{{ old('author', $books->author) }}">
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="category_id">Kategori:</label>
                                    <select name="category_id" id="category_id" class="form-select">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $books->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="col-md-6">
                                    <label for="published_at">Tahun Terbit:</label>
                                    <input class="form-control" type="date" name="published_at" id="published_at"
                                        value="{{ old('published_at', $books->published_at) }}">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="text-bold text-center">Tambahkan Buku Barumu</h1>

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

                    <!-- Form Tambah Buku -->
                    <form action="{{ url('/storeBook') }}" method="POST">
                        <div class="form-group">
                            @csrf
                            <div class="mb-3">
                                <label for="judul">Judul:</label>
                                <input type="text" name="title" id="title"
                                    class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="author">Author:</label>
                                <input type="text" name="author" id="author" class="form-control"
                                    value="{{ old('author') }}">
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="category_id">Category:</label>
                                    <select name="category_id" id="category_id" class="form-select">
                                        <option value="">Pilih Kategori Buku</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="published_at">Tahun Terbit:</label>
                                    <input class="form-control" type="date" name="published_at" id="published_at"
                                        value="{{ old('published_at') }}">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Tambahkan Buku</button>
                        </div>
                    </form>
                </div>

                @if (Auth::user()->role == 'admin')
                    <div class="col-lg-8">
                        <h1 class="text-bold text-center">Tambahkan Kategori</h1>

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


                        <!-- Form Kategori -->
                        <form action="{{ url('/storeCategories') }}" method="POST">
                            <div class="form-group">
                                @csrf
                                <div class="mb-3">
                                    <label for="judul">Masukkan Kategori Buku:</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ old('name') }}">
                                </div>

                                <button type="submit" class="btn btn-success">Tambah Kategori Buku</button>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection

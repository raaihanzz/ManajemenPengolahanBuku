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
                        @csrf
                        <div class="form-group">
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
                            @csrf
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="judul">Masukkan Kategori Buku:</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ old('name') }}">
                                </div>
                                <button type="submit" class="btn btn-success mb-3">Tambah Kategori Buku</button>
                            </div>
                        </form>

                        <div class="container mt-4">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center">
                                    <thead class="thead-dark">
                                        <tr class="text-center">
                                            <th scope="col">Daftar Kategori Buku</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                </table>

                                <div style="max-height: 200px; overflow-y: auto;">
                                    <table class="table table-bordered text-center">
                                        <tbody>
                                            @foreach ($categories as $category)
                                                <tr>
                                                    <td>{{ $category->name }}</td>
                                                    <td>
                                                        <a href="#" class="btn btn-danger me-2" data-bs-toggle="modal"
                                                            data-bs-target="#deleteModal{{ $category->id }}">Hapus</a>

                                                        <!-- Modal untuk konfirmasi hapus -->
                                                        <div class="modal fade" id="deleteModal{{ $category->id }}"
                                                            tabindex="-1"
                                                            aria-labelledby="deleteModalLabel{{ $category->id }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="deleteModalLabel{{ $category->id }}">
                                                                            Konfirmasi Penghapusan</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Apakah Anda yakin ingin menghapus kategori
                                                                        <strong>{{ $category->name }}</strong>?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Batal</button>
                                                                        <a href="{{ url('/deleteCategory/' . $category->id) }}"
                                                                            class="btn btn-danger">Hapus</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection

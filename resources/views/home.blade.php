@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="d-flex justify-content-between mb-5">
                    <div>
                        @if (Auth::user()->role == 'admin')
                            <a class="btn btn-success" href="{{ url('/createBook') }}" role="button">Tambah Data Buku dan
                                Kategori</a>
                        @elseif (Auth::user()->role == 'user')
                            <a class="btn btn-primary" href="{{ url('/createBook') }}" role="button">Tambah Data Buku</a>
                        @endif
                    </div>
                    <div>
                        <form class="d-flex" role="search">
                            <input id="search" class="form-control me-2" type="search" placeholder="Cari Buku..."
                                aria-label="search">
                        </form>
                    </div>
                </div>

                <div class="mb-5">
                    @if (session('success'))
                        <div class="alert alert-success" id="success-alert">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th scope="col">Judul Buku</th>
                                <th scope="col">Author</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Terbit</th>
                                @if (Auth::user()->role == 'admin')
                                    <th scope="col">Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody id="book-table-body">
                            @foreach ($books as $book)
                                <tr class="text-center">
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->author }}</td>
                                    <td>{{ $book->category->name }}</td>
                                    <td>{{ $book->published_at }}</td>

                                    @if (Auth::user()->role == 'admin')
                                        <td>
                                            <a href="{{ url('/editBook/' . $book->id) }}"
                                                class="btn btn-warning me-2">Edit</a>
                                            <a href="#" class="btn btn-danger me-2" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal{{ $book->id }}">Hapus</a>

                                            <!-- Modal untuk konfirmasi hapus -->
                                            <div class="modal fade" id="deleteModal{{ $book->id }}" tabindex="-1"
                                                aria-labelledby="deleteModalLabel{{ $book->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="deleteModalLabel{{ $book->id }}">Konfirmasi
                                                                Penghapusan</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda yakin ingin menghapus buku
                                                            <strong>{{ $book->title }}</strong>?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <a href="{{ url('/deleteBook/' . $book->id) }}"
                                                                class="btn btn-danger">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        setTimeout(function() {
            document.getElementById('success-alert').style.display = 'none';
        }, 3000); // 3000 ms = 3 detik
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).ready(function() {
                $('#search').on('keyup', function() {
                    var query = $(this).val();
                    $.ajax({
                        url: "{{ route('searchBooks') }}",
                        type: "GET",
                        data: {
                            'query': query
                        },
                        success: function(data) {
                            $('#book-table-body').html(data);
                        },
                        error: function(xhr, status, error) {
                            console.log(
                                error); // Cek error di sini jika data tidak terpanggil
                        }
                    });
                });
            });
        });
    </script>
@endsection

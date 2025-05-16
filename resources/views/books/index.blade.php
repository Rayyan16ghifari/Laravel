<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: #f8f9fa;
        }
        .book-card {
            transition: box-shadow 0.3s ease;
        }
        .book-card:hover {
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
        }
        .book-cover {
            height: 200px;
            object-fit: cover;
            border-radius: 5px 5px 0 0;
        }
    </style>
</head>
<body>
<div class="container py-5">
    <h1 class="mb-4 text-center">Daftar Buku</h1>

    @if(session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
    @endif

    @if($books->isEmpty())
        <p class="text-center fs-5">Belum ada buku tersedia.</p>
    @else
    <div class="row g-4">
        @foreach($books as $book)
            <div class="col-md-4 col-lg-3">
                <div class="card book-card">
                    {{-- Kalau kamu punya cover gambarnya, bisa pakai ini --}}
                    {{-- <img src="{{ asset('storage/covers/' . $book->cover) }}" alt="{{ $book->title }}" class="card-img-top book-cover" /> --}}
                    <img src="https://via.placeholder.com/300x200?text=Book+Cover" alt="Book Cover" class="card-img-top book-cover" />

                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">
                            <small class="text-muted">Penulis: {{ $book->author->name ?? 'Unknown' }}</small><br>
                            <small class="text-muted">Genre: {{ $book->genre->name ?? 'Unknown' }}</small><br>
                            <small class="text-muted">Tahun: {{ $book->published_year }}</small>
                        </p>
                        <p class="card-text">{{ Str::limit($book->description, 80) }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">Rp {{ number_format($book->price, 0, ',', '.') }}</span>
                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-sm btn-outline-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .action-buttons {
            white-space: nowrap;
        }

        .action-buttons a {
            color: #000;
            text-decoration: none;
        }

        .table-responsive {
            margin-top: 20px;
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Daftar Buku</h1>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <!-- Tabel Data Buku -->
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Pengarang</th>
                        <th>Tahun Terbit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($buku as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->pengarang }}</td>
                            <td>{{ $item->tahun_terbit }}</td>
                            <td class="action-buttons">
                                <a href="{{ route('book.edit', ['id' => $item->id]) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('book.destroy', ['id' => $item->id]) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus?')"
                                        class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash-alt"></i> Hapus
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Form Tambah Data (opsional) -->
        <div class="mt-4 p-3 bg-light rounded">
            <h3>{{ isset($detail) ? 'Edit Buku' : 'Tambah Buku' }}</h3>
            <form action="{{ isset($detail) ? route('book.update', ['id' => $detail->id]) : route('book.store') }}"
                method="post">
                @csrf
                @if (isset($detail))
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $detail->id }}">
                @endif
                <div class="mb-3">
                    <label for="title" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" id="title" name="title"
                        value="{{ old('title', $detail->title ?? '') }}" required>
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pengarang" class="form-label">Pengarang</label>
                    <input type="text" class="form-control" id="pengarang" name="pengarang"
                        value="{{ old('pengarang', $detail->pengarang ?? '') }}" required>
                    @error('pengarang')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                    <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" min="1900"
                        max="2099" value="{{ old('tahun_terbit', $detail->tahun_terbit ?? '') }}" required>
                    @error('tahun_terbit')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>



   <!-- resources/views/registeredit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Edit Data Registrasi</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('registrasi.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" value="{{ $item->name }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $item->email }}" required>
                </div>

                <div class="mb-3">
                    <label for="telepon" class="form-label">No. Telepon</label>
                    <input type="text" name="telepon" class="form-control" value="{{ $item->no_telpon }}" required>
                </div>

                <div class="mb-3">
                    <label for="nama_bisnis" class="form-label">Nama Bisnis</label>
                    <input type="text" name="nama_bisnis" class="form-control" value="{{ $item->nama_bisnis }}" required>
                </div>

                <div class="mb-3">
                    <label for="addres" class="form-label">Alamat</label>
                    <textarea name="addres" class="form-control" rows="3" required>{{ $item->Addres }}</textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <a action="{{ route('registrasi.update', $item->id) }}" method="POST" class="p-4 border rounded shadow-sm bg-light">
                  @csrf
                  @method('PUT')</a>
                    <button type="submit" class="btn btn-success">Update Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>


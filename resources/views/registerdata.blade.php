<!-- resources/views/registerdata.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Data Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4">Data Registrasi</h2>

    <a href="{{ route('registrasi.form') }}" class="btn btn-primary mb-3">Form Registrasi</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>No Telpon</th>
                <th>Nama Bisnis</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->no_telpon }}</td>
                    <td>{{ $item->nama_bisnis }}</td>
                    <td>{{ $item->Addres }}</td>
                    <td>
                        <a href="{{ route('registrasi.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('registrasi.delete', $item->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Belum ada data registrasi.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
</body>
</html>

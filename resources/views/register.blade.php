<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Form Registrasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-semibold text-center mb-6">Form Registrasi</h2>

        <form action="{{ route('registrasi.store') }}" method="POST" class="space-y-5">
            @csrf
            <!-- Nama Lengkap -->
            <div>
                <label for="nama_lengkap" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" />
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" id="email" name="email" required
                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" />
            </div>

            <!-- Telepon -->
            <div>
                <label for="telepon" class="block text-sm font-medium text-gray-700 mb-1">Telepon</label>
                <input type="text" id="telepon" name="telepon" required
                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" />
            </div>

            <!-- Nama Bisnis -->
            <div>
                <label for="nama_bisnis" class="block text-sm font-medium text-gray-700 mb-1">Nama Bisnis</label>
                <input type="text" id="nama_bisnis" name="nama_bisnis" required
                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" />
            </div>

            <!-- Alamat -->
            <div>
                <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                <textarea id="addres" name="addres" rows="3" required
                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
            </div>

            <!-- Tombol Simpan -->
            <div>
                <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition duration-200">
                    Simpan
                </button>
            </div>
        </form>
    </div>
@if(session('success'))
    <div id="successAlert" class="fixed top-1/3 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-green-100/80 border border-green-400 text-green-700 px-6 py-4 rounded shadow-lg z-50 flex items-center space-x-4">
        <span class="font-medium text-center">{{ session('success') }}</span>
        <button onclick="document.getElementById('successAlert').remove();" class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600 text-sm">
            OK
        </button>
    </div>
@endif


</body>
</html>
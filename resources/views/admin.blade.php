<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Project</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-100 p-6">

    <div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow">
        <div class="flex justify-center">
            <h1 class="text-2xl font-bold mb-6">Manajemen Project</h1>
            <form action="{{ route('logout') }}" method="POST" class="mt-4">
                @csrf
                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded">Logout</button>
            </form>
        </div>

        <!-- Alert -->
        @if(session('success'))
            <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form Tambah -->
        <form action="{{ route('projects.store') }}" method="POST" class="mb-6 space-y-4">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <input type="text" name="name" placeholder="Nama Project" class="border p-2 rounded w-full" required>
                <input type="text" name="cover" placeholder="URL Cover" class="border p-2 rounded w-full" required>
                <input type="text" name="language" placeholder="Bahasa" class="border p-2 rounded w-full" required>
                <input type="text" name="framework" placeholder="Framework" class="border p-2 rounded w-full" required>
            </div>
            <textarea name="content" placeholder="Deskripsi Project" class="border p-2 rounded w-full"
                required></textarea>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah
                Project</button>
        </form>

        <!-- Tabel Data -->
        <table class="w-full border-collapse border border-gray-300">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border p-2">Nama</th>
                    <th class="border p-2">Cover</th>
                    <th class="border p-2">Bahasa</th>
                    <th class="border p-2">Framework</th>
                    <th class="border p-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr class="border" x-data="{ edit: false }">
                        <td class="border p-2" colspan="6">
                            <form action="{{ route('projects.update', $project->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div x-show="edit" class="grid grid-cols-2 gap-2">
                                    <input type="text" name="name" value="{{ $project->name }}"
                                        class="border p-1 rounded w-full">
                                    <input type="text" name="cover" value="{{ $project->cover }}"
                                        class="border p-1 rounded w-full">
                                    <input type="text" name="language" value="{{ $project->language }}"
                                        class="border p-1 rounded w-full">
                                    <input type="text" name="framework" value="{{ $project->framework }}"
                                        class="border p-1 rounded w-full">
                                    <textarea name="content"
                                        class="border p-1 rounded w-full">{{ $project->content }}</textarea>
                                </div>

                                <div x-show="!edit">
                                    <p><b>{{ $project->name }}</b></p>
                                    <p>{{ $project->cover }}</p>
                                    <p>{{ $project->language }}</p>
                                    <p>{{ $project->framework }}</p>
                                    <p>{{ Str::limit(strip_tags($project->content), 50) }}</p>
                                </div>

                                <!-- Tombol -->
                                <div class="flex space-x-2 mt-2">
                                    <button type="button" @click="edit = !edit"
                                        class="bg-yellow-500 text-white px-2 py-1 rounded">
                                        <span x-show="!edit">Edit</span>
                                        <span x-show="edit">Batal</span>
                                    </button>
                                    <template x-if="edit">
                                        <button type="submit"
                                            class="bg-green-600 text-white px-2 py-1 rounded">Simpan</button>
                                    </template>
                                </div>
                            </form>
                        </td>

                        <!-- Form delete sendiri -->
                        <td class="border p-2">
                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST"
                                onsubmit="return confirm('Yakin hapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 text-white px-2 py-1 rounded">Hapus</button>
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
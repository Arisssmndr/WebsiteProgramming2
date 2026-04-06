<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
</head>

<body>
    <h1>Ini halaman categories</h1> <br>
    <a href="{{ route('categories.create') }}">Tambah Kategori</a>

    @if (session('succes'))
    <p>{{ session('succes') }}</p>
    @endif

    <form action="" method="GET">
        <input type="text" name="category_id" placeholder="category_id">
        <input type="text" name="category_name" placeholder="category_name" value="{{ Request('category_name') }}" >
        <button>Cari Data</button>
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category_Name</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ( $categories as $category )
            <tr>
                <th>{{ $category->id }}</th>
                <th>{{ $category->category_name }}</th>
                <th>
                    <button> <a href="{{ route('categories.update', $category->id) }}">Edit</a></button>
                    <form action="/categories/delete/{{ $category->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure delete this data')">Delete</button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

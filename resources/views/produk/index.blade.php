<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body>
    <h1>Ini halaman Produk</h1> <br>

    @session('success')
    {{ session('success') }}
    @endsession

    @session('erorr')
    {{ session('erorr') }}
    @endsession <br>

    <a href="/produk/create">Tambah Kategori</a>

    <form action="" method="GET">
        <input type="text" name="category_id" placeholder="category_id">
        <input type="text" name="category_name" placeholder="category_name" value="{{ Request('category_name') }}" >
        <button>Cari Data</button>
    </form>

    <div>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Produk</th>
                    <th>Kategori Produk</th>
                    <th>Nama Produk</th>
                    <th>Price</th>
                    <th>Unit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $products)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $products->products_code }}</td>
                        <td>{{ $products->category_name }}</td>
                        <td>{{ $products->products_name }}</td>
                        <td>{{ $products->price }}</td>
                        <td>{{ $products->unit }}</td>
                        <td style="display: flex; gap: 5px;">
                            <button> <a href="/produk/update/{{ $products->id }}">Edit</a></button>
                            <form action="/produk/delete/{{ $products->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure delete this data')" >Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

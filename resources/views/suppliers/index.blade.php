<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supplier</title>
</head>

<body>
    <h1>Ini halaman Supplier</h1>
    
    @session('success')
    {{ session('success') }}
    @endsession

    @session('error')
    {{ sessiom('error') }}
    @endsession <br>

    <a href="/supplier/create">Tambah Kategori</a>

    <form action="" method="GET">
        <input type="text" name="supplier_name" placeholder="supplier_name" value="{{ Request('supplier_name') }}" >
        <input type="text" name="addres" placeholder="addres">
        <button>Cari Data</button>
    </form>

    <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Supplier</th>
                    <th>Nama Supplier</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suppliers as $suply)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $suply->supplier_code }}</td>
                        <td>{{ $suply->supplier_name }}</td>
                        <td>{{ $suply->addres }}</td>
                        <td>{{ $suply->phone }}</td>
                        <td style="display: flex; gap: 5px;">
                            <button> <a href="/supplier/update/{{ $suply->id }}">Edit</a></button>
                            <form action="/supplier/delete/{{ $suply->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure delete this data')" >Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>

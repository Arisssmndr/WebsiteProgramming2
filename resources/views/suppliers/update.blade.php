<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/supplier/edit/{{ $suppliers->id }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="">Kode Supplier</label>
            <input type="text" name="supplier_code" id="" placeholder="supplier_code" value="{{ $suppliers->supplier_code }}">
            @error('products_code')
            {{ $message }}
            @enderror
        </div>

        <div>
            <label for="">Nama Supplier</label>
            <input type="text" name="supplier_name" id="" placeholder="supplier_name" value="{{ $suppliers->supplier_name }}">
            @error('products_name')
            {{ $message }}
            @enderror
        </div>

        <div>
            <label for="">Address</label>
            <input type="text" name="addres" id="" placeholder="addres" value="{{ $suppliers->addres }}">
            @error('price')
            {{ $message }}
            @enderror
        </div>

        <div>
            <label for="">Phone</label>
            <input type="number" name="phone" id="" placeholder="phone" value="{{ $suppliers->phone }}">
            @error('unit')
            {{ $message }}
            @enderror
        </div>
        <button class="" type="submit">simpan</button>
        <button type="">Batal</button>
    </form>
</body>
</html>

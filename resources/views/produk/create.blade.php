<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>create</h1>
    <form action="/produk/store" method="POST">
        @csrf
        <div>
            <label for="">Kategori Produk</label>
            <select name="category_id" id="category_id" required>
                <option value="">---Pilih Kategori---</option>
                @foreach ($categories as $products)
                <option value="{{ $products->id }}">{{ $products->category_name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="">Kode Produk</label>
            <input type="text" name="products_code" id="" placeholder="products_code">
            @error('products_code')
            {{ $message }}
            @enderror
        </div>

        <div>
            <label for="">Nama Produk</label>
            <input type="text" name="products_name" id="" placeholder="products_name">
            @error('products_name')
            {{ $message }}
            @enderror
        </div>

        <div>
            <label for="">Harga (Price)</label>
            <input type="number" name="price" id="" placeholder="price">
            @error('price')
            {{ $message }}
            @enderror
        </div>

        <div>
            <label for="">Unit</label>
            <input type="text" name="unit" id="" placeholder="Pcs / Box / Kg" maxlength="3">
            @error('unit')
            {{ $message }}
            @enderror
        </div>
        <button class="" type="submit">simpan</button>
        <button type="">Batal</button>
    </form>
</body>
</html>

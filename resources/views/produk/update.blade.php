<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/produk/edit/{{ $produk->id }} " method="POST">
        @csrf
        @method('PUT')
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
            <input type="text" name="products_code" id="" placeholder="products_code" value="{{ $produk->products_code }}">
        </div>
                <div>
            <label for="">Nama Produk</label>
            <input type="text" name="products_name" id="" placeholder="products_name" value="{{ $produk->products_name }}">
        </div>
                <div>
            <label for="">Harga (Price)</label>
            <input type="number" name="price" id="" placeholder="price" value="{{ $produk->price }}">
        </div>
                <div>
            <label for="">Unit</label>
            <input type="text" name="unit" id="" placeholder="Pcs / Box / Kg" value="{{ $produk->unit }}">
        </div>
        <button class="" type="submit">simpan</button>
        <button type="">Batal</button>
    </form>
</body>
</html>

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
    <form action="/categories/store" method="POST">
        @csrf
        <div>
            <label for="">category_name</label>
            <input type="text" name="category_name" id="" placeholder="category_name">
        </div>
        <button class="" type="submit">simpan</button>
        <button type="">Batal</button>
    </form>
</body>
</html>

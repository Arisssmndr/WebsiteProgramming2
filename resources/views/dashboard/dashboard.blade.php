<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Ini Halaman Dashboard</h1>

    <b>Login Us </b> {{ Auth()->user()->name }} ({{ Auth()->user()->role }})

    <h2>List Menu</h2>
    <nav>
        <ul style="list-style:none">
            @if (Auth::User()->role === 'admin')
                <li> <a href="/produk">Products</a> </li>
                <li> <a href="/categories">Categories</a>
                <li>
            @endif
            <li> <a href="/supplier">Suppliers</a> </li>
        </ul>
    </nav>

    <form action="/proseslogout" method="POST">
        @csrf
        <button type="submit">Log Out</button>
    </form>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
</head>
<body>
    Ini halaman categories
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category_Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $categories as $category )
            <tr>
                <th>{{ $category->id }}</th>
                <th>{{ $category->category_name }}</th>
            </tr>

            @endforeach
        </tbody>
    </table>
</body>
</html>

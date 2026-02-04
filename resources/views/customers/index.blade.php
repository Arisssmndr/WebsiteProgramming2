<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customers</title>
</head>
<body>
    Ini halaman Customers
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category_Code</th>
                <th>Category_Name</th>
                <th>Category_Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $customers as $customer )
            <tr>
                <th>{{ $customer->id }}</th>
                <th>{{ $customer->customer_code }}</th>
                <th>{{ $customer->customer_name }}</th>
                <th>{{ $customer->customer_phone }}</th>
            </tr>

            @endforeach
        </tbody>
    </table>
</body>
</html>

@extends('dashboard');
@section('table');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Table</title>
    <link rel="stylesheet" href="css/post.css">
</head>
<body>

<center><h2>Post Table</h2></center>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Sample Post 1</td>
            <td>John Doe</td>
            <td>2024-04-14</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Sample Post 2</td>
            <td>Jane Smith</td>
            <td>2024-04-15</td>
        </tr>
    </tbody>
</table>

</body>
</html>
@endsection

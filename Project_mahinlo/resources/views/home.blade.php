@extends('dashboard')

@section('table')
    <style>
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        .container {
            margin: 20px auto;
            max-width: 800px;
            padding: 0 20px;
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            font-weight: bold;
        }

        .card {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

    </style>
<div class="container">
    <table class='table'>
        <thead>
            <tr>
                <th>Total Users</th>
            </tr>
        </thead>
    </table>
    <tbody>
        <tr>
            <td>1</td>
        </tr>
    </tbody>
</div>
@endsection

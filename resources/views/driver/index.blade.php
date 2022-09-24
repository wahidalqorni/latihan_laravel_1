<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</head>

<body>
    <a href="{{ url('add-driver') }}" class="btn btn-primary">Add</a>
    <br>
    <table class="table table-bordered mt-4">

        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kota</th>
            </tr>
        </thead>


        <tbody>
            <tr>
                <td>1</td>
                <td>Driver</td>
                <td>Palembang</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Driver</td>
                <td>Palembang</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Driver</td>
                <td>Palembang</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Driver</td>
                <td>Palembang</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Driver</td>
                <td>Palembang</td>
            </tr>
        </tbody>

    </table>
</body>

</html>

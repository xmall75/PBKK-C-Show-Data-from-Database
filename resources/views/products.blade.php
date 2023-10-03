<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="p-10">
        <p>Revanantyo Dwigantara</p>
        <p>5025211113</p>
        <p>PBKK C</p>
        <h1 class="text-lg font-bold">Menampilkan Data dari Database</h1>
    </div>
    

    <table class="table-auto m-auto w-3/4 text-center">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{$item['title']}}</td>
                <td>{{$item['description']}}</td>
                <td>${{$item['price']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
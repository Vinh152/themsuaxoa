<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/show.css">
</head>
<body>
    <div class="container">
        <ul class="menu">
            <li><a href="">Trang chủ</a></li>
            <li><a href="{{route('products.create')}}">Thêm</a></li>
        </ul>

        <h1 class="tittle">Bảng chi tiết</h1>
        <table>
            <th>ID</th>
            <th>Name</th>
            <th>Function</th>

            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td><a href="{{route('products.edit', $product->id)}}">Sửa</a> / <form action="{{route('products.destroy', $product->id)}}" method="POST">@method('DELETE') @csrf <button>Xóa</button></form></td>
            </tr>
            @endforeach

            {{-- {{ $products->links() }} --}}
        </table>
    </div>
</body>
</html>

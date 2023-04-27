<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <p>Điền tên sản phẩm</p>
        <input type="text" name="name" placeholder="Nhập tên sản phẩm">
        <p style="color: red">@error('name')
            {{$message}}
        @enderror</p>
        <button>Thêm</button>
    </form>
</body>
</html>

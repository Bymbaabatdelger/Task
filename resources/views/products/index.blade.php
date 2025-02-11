<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <h1>Products</h1>
    <div>
     <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Detail</th>
            <th>User_id</th>
            <th>Edit</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->detail}}</td>
            <td>{{$product->user_id}}</td>
            <td><a href='{{route('product.edit' , ['product' => $product])}}'>Edit</a></td>
        </tr>
        @endforeach
     </table>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>

<body>
    <h1>Create a product</h1>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            @if($errors -> any())
            <ul>
                @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <div>
            <label>Naaameee</label>
            <input type="name" name="name" placeholder="Name"/>
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price"/>
        </div>
        <div>
            <label>Detail</label>
            <input type="text" name="detail" placeholder="Detail"/>
        </div>
        <div>
            <label>User_id</label>
            <input type="text" name="user_id" placeholder="User_id"/>
        </div>
        <div>
            <input type="submit" value="Save"/>
        </div>
    </form>
</body>

</html>
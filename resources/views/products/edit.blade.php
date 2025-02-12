<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Edit</title>
</head>
<x-app-layout>
<a class="m-10 font-bold" href="{{ route('product.index') }}"> < Back </a>
<div class="flex flex-col justify-center items-center w-full h-screen bg-slate-100">
    <h1 class="font-bold text-3xl mb-4">Edit a Product</h1>
    <form class="border-2 rounded-xl p-4 w-[500px]"  method="post" action="{{route('product.update' , ['product' => $product])}}">
        @csrf 
        @method('put')
        <div class="flex flex-col">
            <label class="py-2 font-bold">Name</label>
            <input class="p-2 rounded-xl"  type="text" name="name" placeholder="Name" value="{{$product->name}}" />
        </div>
        <div class="flex flex-col">
            <label class="py-2 font-bold">Price</label>
            <input class="p-2 rounded-xl"  type="text" name="price" placeholder="Price" value="{{$product->price}}" />
        </div>
        <div class="flex flex-col">
            <label class="py-2 font-bold">Detail</label>
            <input class="p-2 rounded-xl"  type="text" name="detail" placeholder="detail" value="{{$product->detail}}" />
        </div>
        <div class="flex justify-center bg-blue-300 border-2 p-2 mt-2 rounded-xl">
            <input class="text-xl font-bold" type="submit" value="Update" />
        </div>
    </form>
</div>
</x-app-layout>
</html>
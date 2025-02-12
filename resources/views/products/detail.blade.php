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
<div class="flex flex-col m-20 w-full h-screen bg-slate-100">
    <a class="mb-2 font-bold" href="{{ route('product.index') }}"> < Back </a>
    <h1 class="font-bold text-3xl mb-4">Product detail</h1>
    <form class="border-2 rounded-xl p-4 w-[500px] bg-blue-100"  method="post" action="{{route('product.update' , ['product' => $product])}}">
        @csrf 
        @method('put')
        <div class="flex flex-col">
            <div class="py-2 font-bold">Name : {{$product->name}}</div>
        </div>
        <div class="flex flex-col">
            <label class="py-2 font-bold">Price : {{$product->price}}</label>
        </div>
        <div class="flex flex-col">
            <label class="py-2 font-bold">Detail {{$product->detail}}</label>
        </div>
        <div class="flex flex-col">
            <label class="py-2 font-bold">Created_at {{$product->created_at}}</label>
        </div>
        <div class="flex flex-col">
            <label class="py-2 font-bold">Owner ID: {{$product->user_id}}</label>
        </div>
    </form>
</div>
</x-app-layout>

</html>
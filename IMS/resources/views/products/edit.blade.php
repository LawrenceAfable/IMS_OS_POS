<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/product/createproduct.css') }}">
  <title>Document</title>
</head>
<body>
  <h1>Edit Product</h1>
  <form action="{{ route('products.update', ['product' => $product]) }}" method="POST">
    @csrf 
    @method('put')
    <div>
      <label>Name: </label>
      <input type="text" name="name" placeholder="Name" value="{{$product -> name}}">
    </div>
    <div>
      <label>Qty: </label>
      <input type="text" name="qty" placeholder="Qty" value="{{$product -> qty}}">
    </div>
    <div>
      <label>Price: </label>
      <input type="text" name="price" placeholder="Price" value="{{$product -> price}}">
    </div>
    <div>
      <label>Description: </label>
      <input type="text" name="description" placeholder="Description" value="{{$product -> description}}">
    </div>
    <div>
      <input type="submit" value="Update">
    </div>
  </form>
</body>
</html>
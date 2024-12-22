<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Adding Product</h1>
  <form action="{{ route('products.store') }}" method="POST">
    @csrf 
    @method('post')
    <div>
      <label>Name: </label>
      <input type="text" name="name" placeholder="Name">
    </div>
    <div>
      <label>Qty: </label>
      <input type="text" name="qty" placeholder="Qty">
    </div>
    <div>
      <label>Price: </label>
      <input type="text" name="price" placeholder="Price">
    </div>
    <div>
      <label>Description: </label>
      <input type="text" name="description" placeholder="Description">
    </div>
    <div>
      <input type="submit" value="Submit">
    </div>
  </form>
</body>
</html>
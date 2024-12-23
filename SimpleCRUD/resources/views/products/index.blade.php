<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Products</h1>
  <div>
    <table border="1">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>

      <tbody>
      @forelse($products as $product)
        <tr>
          <td>{{ $product->id }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->description }}</td>
          <td>{{ $product->price }}</td>
          <td>{{ $product->qty }}</td>
          <td>
            <a href="{{route('products.edit', ['product' => $product])}}">
              Edit
            </a>
          </td>
          <td>
            <form method="POST" action="{{route('products.destroy', ['product' => $product])}}">
              @csrf
              @method('delete')
              <input type="submit" value="Delete"> 
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="5">No products available.</td>
        </tr>
      @endforelse
    </tbody>
    </table>
  </div>

  <div>
    <a href="{{ route('products.create') }}">
      <button>Add a new product</button>
    </a>
  </div>
</body>
</html>
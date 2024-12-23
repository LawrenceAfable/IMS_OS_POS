<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/product/product.css') }}">
  <title>Document</title>
  <!-- <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      color: #333;
      margin: 0;
      padding: 0;
      text-align: center;
    }
    h1 {
      color: #444;
      margin: 20px 0;
    }
    table {
      margin: 20px auto;
      border-collapse: collapse;
      width: 80%;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    th, td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: left;
    }
    th {
      background-color: #007bff;
      color: #fff;
    }
    tbody tr:nth-child(odd) {
      background-color: #f9f9f9;
    }
    tbody tr:nth-child(even) {
      background-color: #fff;
    }
    tbody tr:hover {
      background-color: #f1f1f1;
      transition: background-color 0.2s ease-in-out;
    }
    td[colspan="5"] {
      text-align: center;
      font-style: italic;
      color: #999;
    }
    a {
      text-decoration: none;
      color: #007bff;
    }
    a:hover {
      text-decoration: underline;
    }
    button {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 14px;
      cursor: pointer;
      border-radius: 5px;
    }
    button:hover {
      background-color: #0056b3;
    }
    div {
      margin: 20px;
    }
  </style> -->
</head>
<body>
  <h1>INVENTORY MANAGEMENT SYSTEM</h1>
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
          <td colspan="7">No products available.</td>
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

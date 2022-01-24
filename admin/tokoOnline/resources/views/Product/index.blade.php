
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/products/create">Create</a>
    <table>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
        </tr>
       @foreach ($product as $item)
       <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->description }}</td>
        <td>{{ $item->price }}</td>
        <td><a href="products/{{ $item->id }}/edit">Edit</a></td>
        <td><a href="products/{{ $item->id }}/delete">Delete</a></td>
      </tr>
       @endforeach
       
      </table>
</body>
</html>
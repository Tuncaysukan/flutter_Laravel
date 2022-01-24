<h1>Edit {{ $product->name }}</h1>

<form action="/products/{{ $product->id }}" method="POST">
    @csrf
   Name : <input type="text" name="name" value="{{ $product->name }}" id=""><br>
    Description :<input type="text" name="description"  value="{{ $product->description }}"id=""><br>
    Price : <input type="text" name="price" value="{{ $product->price }}" id=""><br>
    İmage URL : <input type="text" name="image_url" value="{{ $product->image_url }}" id=""><br>

    <input type="submit" value="Save">
</form>
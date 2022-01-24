<h1>Create</h1>

<form action="/products/store" method="POST">
    @csrf
   Name : <input type="text" name="name" id=""><br>
    Description :<input type="text" name="description" id=""><br>
    Price : <input type="text" name="price" id=""><br>
    İmage URL : <input type="text" name="image_url" id=""><br>

    <input type="submit" value="Save">
</form>
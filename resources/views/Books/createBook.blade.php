<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Create Books</title>
</head>
<body>
    <form action="/add-book-post" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" value="{{ old("title") }}">
            @error('title')
                <div style="color: red">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="author" class="form-label">Author</label>
          <input type="text" class="form-control" id="" name="author" value="{{ old("author") }}">
          @error('author')
                <div style="color: red">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" id="" name="isbn" value="{{ old("isbn") }}">
            @error('isbn')
                <div style="color: red">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="" name="description" value="{{ old("description") }}">
            @error('description')
                <div style="color: red">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control" id="" name="genre" value="{{ old("genre") }}">
            @error('genre')
                <div style="color: red">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="" name="price" value="{{ old("price") }}">
            @error('price')
                <div style="color: red">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="" name="stock">
            @error('stock')
                <div style="color: red">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="photo" class="form-label">Photo Product</label>
            <input type="file" class="form-control" id="" name="photo">
            @error('photo')
                <div style="color: red">{{ $message }}</div>
            @enderror
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
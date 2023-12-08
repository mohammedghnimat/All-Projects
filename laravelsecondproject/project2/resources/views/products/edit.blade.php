<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Movie</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" enctype="multipart/form-data" action="{{ route('product.update',['product'=>$product]) }}">
        @csrf
        @method('put')
        <div>
            <label>Movie name</label>
            <input type="text" name="movie_name" placeholder="name" value="{{ $product->movie_name }}">
        </div>
         <div>
            <label>Movie description</label>
            <input type="text" name="movie_description" placeholder="name" value="{{ $product->movie_description }}">
        </div>
           <div>
            <label>Movie gener</label>
            <input type="text" name="movie_gener" placeholder="name" value="{{ $product->movie_gener }}">
        </div>
           <div>
            <label>Movie image</label>
            <input type="file" name="movie_img" placeholder="name" value="{{ $product->movie_img }}">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>

</body>
</html>

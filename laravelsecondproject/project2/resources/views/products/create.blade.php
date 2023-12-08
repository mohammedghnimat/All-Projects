<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>create product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="POST" enctype="multipart/form-data" action="{{ route('product.store') }}">
        @csrf

        <div>
            <label>Movie name</label>
            <input type="text" name="movie_name" placeholder="name">
        </div>
         <div>
            <label>Movie description</label>
            <input type="text" name="movie_description" placeholder="name">
        </div>
           <div>
            <label>Movie gener</label>
            <input type="text" name="movie_gener" placeholder="name">
        </div>
           <div>
            <label>Movie image</label>
            <input type="file" name="movie_img" placeholder="name">
        </div>
        <div>
            <input type="submit" value="Insert a new movie">
        </div>
    </form>

</body>
</html>

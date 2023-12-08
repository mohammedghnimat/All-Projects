<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Movies</title>
</head>
<body>
     <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Movies</title>
</head>
<body>
    <h1>Movies</h1>

    {{-- Add a search form --}}
    <form action="{{ route('movies.search') }}" method="GET">
        @csrf
        <label for="search">Search:</label>
        <input type="text" id="search" name="search" placeholder="Search movies...">
        <button type="submit">Search</button>
    </form>

    <div>
        <table border="1">
            <!-- Your table rows here -->
        </table>
    </div>
</body>
</html>

            <h1>Movies</h1>
               {{--  <div>
          @if(session()->has('success'))
          <div>
            {{ session('success') }}
          </div>
          @endif
        </div>  --}}
            <div>
                <table border="1">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Gener</th>
                        <th>Image</th>
                        <th>actors</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>add</th>
                    </tr>
                    @foreach($movies as $movie)
                    <tr>
                        <td>{{ $movie->id }}</td>
                        <td>{{ $movie->name }}</td>
                        <td>{{ $movie->Description }}</td>
                        <td>{{ $movie->gener }}</td>
                        <td><img src="{{ asset('storage/images/'.$movie->image) }}"width="80px" height="80px" alt=""></td>
                        <td>
                            @if ($movie->actors->isNotEmpty())
                        <table>

                            <tbody>
                                @foreach ($movie->actors as $actor)
                                    <tr>
                                        <td>{{ $actor->name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No actors for this movie.</p>
                    @endif
                        </td>
                        <td>
                            <a href="{{ route('movie.edit',['movie'=>$movie]) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('movie.delete',['movie'=>$movie]) }}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('movie.create') }}">Add</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>
        @foreach ($movies as $movie)
            <h2> {{ $movie['original_title'] }}</h2>
            <img src="{{ Vite::asset('resources/img/' . $movie->id . '.jpg') }}" alt="" height="150">
        @endforeach
    </h2>
</body>

</html>

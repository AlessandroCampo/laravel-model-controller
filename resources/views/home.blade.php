<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/js/app.js')
    <title>Document</title>
</head>

<body>
    <div class="cards-container">
        @foreach ($movies as $movie)
            <div class="card">
                <img src="{{ Vite::asset('resources/img/' . $movie->id . '.jpg') }}" alt="">
                <div class="title">
                    <h2 class="text-danger"> {{ $movie['original_title'] }} </h2>
                    <span>
                        ({{ $movie->getReleaseYear() }})
                    </span>
                </div>

                <div class="stars-container">
                    @for ($i = 0; $i < $movie->getStars()['filled']; $i++)
                        <i class="fa-solid fa-star"></i>
                    @endfor
                    @for ($i = 0; $i < $movie->getStars()['half']; $i++)
                        <i class="fa-solid fa-star-half-stroke"></i>
                    @endfor
                    @for ($i = 0; $i < $movie->getStars()['empty']; $i++)
                        <i class="fa-regular fa-star"></i>
                    @endfor
                </div>


            </div>
        @endforeach
    </div>



</body>

</html>


<style>
    body {
        background-color: #121212;
    }

    div.cards-container {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        align-items: center;
        justify-content: center;
        padding-block: 50px;
    }

    div.card {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: fit-content;
        border: 1px solid gray;
        border-radius: 20px;
        overflow: hidden;
        padding-bottom: 20px;
        background-color: antiquewhite;
        height: 550px;
    }

    h2 {
        font-size: 1.15em;
    }

    .title {
        display: flex;
        gap: 0.2em;
        align-items: center;
        text-transform: uppercase;
    }

    .title span {
        font-size: 0.85em;
        color: gray;
    }

    img {
        width: 300px;
        height: 450px;
    }

    .fa-solid,
    .fa-regular {
        color: gold;
        font-size: 0.8em;
    }
</style>

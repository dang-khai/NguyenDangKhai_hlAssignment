<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div style="width:100%; height: 200px; background-color: #29B363;" class="d-flex align-items-center">
        <div class="container">
            <h1 class="text-center text-white">A Joke a day keeps the doctor away</h1>
            <p class="text-center text-white">If you joke wrong way, your teeth have to pay. (Serious)</p>
        </div>
    </div>

    @if ($index <= count($contents)-1)
        <div class="container my-5 d-flex justify-content-center">
            <div style="width: 70%" class="text-center">{{ $contents[$index]->content }}</div>
        </div>
        <div class="d-flex justify-content-center mb-5">
            <hr width="45%">
        </div>
        <div class="text-center">
            <form action="{{ asset('/') }}" method="POST">
                @csrf
                <input type="hidden" value="{{ $index }}" name="index">
                <button class="btn btn-primary me-5" value="funny" name="vote">This is funny!</button>
                <button class="btn text-white ms-5" style="background-color: #29B363" value="notFunny" name="vote">This is not funny!</button>
            </form>
        </div>
    @else
        <h3 class="text-center mt-5">That's all the jokes for today! Come back another day!</h3>
    @endif
</body>

</html>

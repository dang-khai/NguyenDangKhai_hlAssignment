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
    <header class="container" style="width: 100%; height: 10vh">
        <div class="d-flex justify-content-between align-items-center">
            <img src="{{ asset('asset/img/Screenshot 2023-06-26 125604.png') }}" alt="">
            <div class="d-flex align-items-center">
                <div class="text-end" style="font-size: 14px">Handicrafted by <br> Jim HLS</div>
                <img src="{{ asset('asset/img/Screenshot 2023-06-26 130129.png') }}" alt="">
            </div>
        </div>
    </header>
    <div style="width:100%; height: 200px; background-color: #29B363;" class="d-flex align-items-center">
        <div class="container">
            <h1 class="text-center text-white">A Joke a day keeps the doctor away</h1>
            <p class="text-center text-white">If you joke wrong way, your teeth have to pay. (Serious)</p>
        </div>
    </div>

    @if ($index <= count($contents) - 1)
        <div class="container mt-5 mb-3 d-flex justify-content-center">
            <div style="width: 70%" class="text-center">{{ $contents[$index]->content }}</div>
        </div>
        <div class="d-flex justify-content-center mb-3">
            <hr width="45%">
        </div>
        <div class="text-center mb-5">
            <form action="{{ asset('/') }}" method="POST">
                @csrf
                <input type="hidden" value="{{ $index }}" name="index">
                <button class="btn btn-primary me-5" value="funny" name="vote">This is funny!</button>
                <button class="btn text-white ms-5" style="background-color: #29B363" value="notFunny"
                    name="vote">This is not funny!</button>
            </form>
        </div>
    @else
        <h3 class="text-center mt-5">That's all the jokes for today! Come back another day!</h3>
    @endif
    <hr>
    <footer class="text-center" style="height: 10vh">
        <div>
            <div style="font-size: 12px; opacity: .6; margin-top: 8px">This website created as part of Hlsolutions
                program. The materials contained on this website are provied for general <br> information only and do
                not constitute any from of advice. HLS assumes no responsibility for the accuracy of any particular
                statement and <br> accepts no liability for any loss or damage which may arise from relian on the
                information contained on this site.</div>
            <div style="font-size: 14px;">Copyright 2021 HLS</div>
        </div>
    </footer>
</body>

</html>

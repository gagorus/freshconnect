<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
</head>
<body>
@guest
    @include('header')
@else
    @include('headerlogin')
@endguest

<br><br><br><br><br>
<div class = "d-flexitem box border border-secondary shadow-sm pt-3 pb-3 pe-3 rounded-4 w-50" style="background-color: #E6F9E8; margin-left:25%">
    <div class = "d-flex justify-content-center">
        <img src="{{asset($item->image)}}.png" style = "height:300px; width: 200px;"alt="" >
        <div class ="infos">
            <div class = "ms-5 fs-2">{{$item->name}}</div>
            <div class = "ms-5 fs-4 text-muted">{{$item->shortdesc}}</div>

            <div class = "ms-5 fs-2"><img class = "pe-3"src="{{asset("images/rating-star.png")}}" style="width: 55px; height: 35 px" alt="">{{$item->rating}} / 5 </div>
            <div class = "ms-5 fs-4">Location: {{$item->location}}</div>
            <div class = "ms-5 fs-2">Rp {{ number_format($item->price, 0, ',', '.') }}</div>
        </div>

    </div>
    <div class = "ms-3 fs-3 text-center">Information:</div>
    <div class = "ms-3 fs-6 text-center text-secondary">{{$item->longdesc}}</div>
</div>
</body>
</html>

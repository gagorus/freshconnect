<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">



    <title>Home</title>
</head>
<body>
@guest
    @include('header')
@else
    @include('headerlogin')
@endguest




    <div class = "text-center fs-1">NEWS</div>
    <div class = "d-flex justify-content-center"> <img src="images/News-banner.png" alt=""></div>
    <br> <br><br><br><br><br><br>
    <div class = "ms-3 fs-4">Buah recommended </div>
    <div class="border-secondary border-top p-3"></div>
    <div class = "d-flex justify-content-between">
        @foreach ($fruits as $fruit)
            <div class = "ms-4"></div>
            <div class = "item box border border-secondary shadow-sm pt-3 pb-3 ps-3 pe-3 rounded-4" style="background-color: #E6F9E8">
                {{-- ini nanti diganti sama data dari database --}}
                <img src="{{$fruit->image}}.png" style = "width:120px; height: 100px; "alt="">
                <div class = "mt-3 text-center fs-5">{{$fruit->name}}</div>
                <div class = "mt-3 text-center text-muted" style = "opacity: 0.6;">{{$fruit->shortdesc}}</div>
                <div class ="rating d-flex">
                    <img class = "pt-3"src="images/rating-star.png" style="width: 25px; height: 20 px" alt="">
                    <div class="pt-3 ms-4 fs-5">{{$fruit->rating}}/5</div>
                </div>

                <div class = "price mt-4 text-center fs-4" style="font-weight: 900;">Rp {{number_format($fruit->price, 0, ',', '.')}}</div>
                <div>
                    <button class="btn btn-outline-success mt-3 ms-2 fs-5 shadow-sm" type="submit">

                        @guest
                            <a href="{{ route('login') }} " class = " text-decoration-none text-dark">+Keranjang</a>
                        @endguest
                        @auth
                            <a href="{{ route('add_cart', ['id' => $fruit->fruitid, 'category' => $fruit->category, 'userid' => Auth::user()->id]) }} " class = " text-decoration-none text-dark">+Keranjang</a>

                        @endauth
                    </button>
                </div>

                <div class = "mt-3 text-center">{{$fruit->location}}</div>


            </div>
            <div class = "me-4"></div>
        @endforeach


    </div>
    <br>

    <br>
    <div class = "ms-3 fs-4">Sayuran recommended</div>
    <div class="border-secondary border-top p-3"></div>

    <div class = "d-flex justify-content-between">
        @foreach ($vegetables as $vegetable)
            <div class = "ms-4"></div>
            <div class = "item box border border-secondary shadow-sm pt-3 pb-3 ps-3 pe-3 rounded-4" style="background-color: #E6F9E8">
                {{-- ini nanti diganti sama data dari database --}}
                <img src="{{$vegetable->image}}.png" style = "width:120px; height: 100px; "alt="">
                <div class = "mt-3 text-center fs-5">{{$vegetable->name}}</div>
                <div class = "mt-3 text-center text-muted" style = "opacity: 0.6;">{{$vegetable->shortdesc}}</div>
                <div class ="rating d-flex">
                    <img class = "pt-3"src="images/rating-star.png" style="width: 25px; height: 20 px" alt="">
                    <div class="pt-3 ms-4 fs-5">{{$vegetable->rating}}/5</div>
                </div>

                <div class = "price mt-4 text-center fs-4" style="font-weight: 900;">Rp {{number_format($vegetable->price, 0, ',', '.')}}</div>
                <div>
                    <button class="btn btn-outline-success mt-3 ms-2 fs-5 shadow-sm" type="submit">
                        @guest
                            <a href="{{ route('add_cart', ['id' => $vegetable->vegetableid, 'category' => $vegetable->category, 'userid' => 0]) }} " class = " text-decoration-none text-dark">+Keranjang</a>
                        @endguest

                        @auth
                            <a href="{{ route('add_cart', ['id' => $vegetable->vegetableid, 'category' => $vegetable->category, 'userid' => Auth::user()->id]) }} " class = " text-decoration-none text-dark">+Keranjang</a>

                        @endauth
                    </button>
                </div>

                <div class = "mt-3 text-center">{{$vegetable->location}}</div>


            </div>
            <div class = "me-4"></div>
        @endforeach
    </div>
    <br>
    <br>
    <div class = "ms-3 fs-4">Paket Spesial</div>
    <div class="border-secondary border-top p-3"></div>

    <div class = "d-flex justify-content-between">
        @for ($i = 1; $i <=9; $i++)
            <div class = "ms-4"></div>
            <div class = "item box border border-secondary shadow-sm pt-3 pb-3 ps-3 pe-3 rounded-4" style="background-color: #E6F9E8">
                {{-- ini nanti diganti sama data dari database --}}
                <img src="images/fruits/stroberi.png" style = "width:120px; height: 100px; "alt="">
                <div class = "mt-3 text-center fs-5">Stroberi lokal</div>
                <div class = "mt-3 text-center text-muted" style = "opacity: 0.6;">1 pack = 500 gram</div>
                <div class ="rating d-flex">
                    <img class = "pt-3"src="images/rating-star.png" style="width: 25px; height: 20 px" alt="">
                    <div class="pt-3 ms-3 fs-5">4.9/5.0</div>
                </div>

                <div class = "price mt-4 text-center fs-4" style="font-weight: 900;">Rp 10.000</div>
                <div>
                    <button class="btn btn-outline-success mt-3 ms-2 fs-5 shadow-sm" type="submit">
                        +Keranjang
                    </button>
                </div>

                <div class = "mt-3 text-center">Jakarta Utara</div>

            </div>
        @endfor
    </div>
    <br>
    <br>
@include('footer')
</body>
</html>

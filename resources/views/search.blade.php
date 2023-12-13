@guest
    @include('header')
@else
    @include('headerlogin')
@endguest
    <div class = "ms-3 fs-4">Buah</div>
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

                <button class="btn btn-info mt-3 ms-3 fs-5 shadow-sm" type="submit"><a href={{route('detail_check', ['id' =>$fruit->fruitid, 'category' => $fruit->category])}} class = " text-decoration-none text-dark">More info</a></button>
                <div class = "mt-3 text-center">{{$fruit->location}}</div>


            </div>
            <div class = "me-4"></div>
        @endforeach


    </div>
    <br>

    <br>
    <div class = "ms-3 fs-4">Sayuran</div>
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
                        <a href="{{ route('login') }} " class = " text-decoration-none text-dark">+Keranjang</a>
                        @endguest

                        @auth
                            <a href="{{ route('add_cart', ['id' => $vegetable->vegetableid, 'category' => $vegetable->category, 'userid' => Auth::user()->id]) }} " class = " text-decoration-none text-dark">+Keranjang</a>

                        @endauth
                    </button>
                </div>
                <button class="btn btn-info mt-3 ms-3 fs-5 shadow-sm" type="submit"><a href={{route('detail_check', ['id' =>$vegetable->vegetableid, 'category' => $vegetable->category])}} class = " text-decoration-none text-dark">More info</a></button>
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
        @foreach ($pakets as $paket)
            <div class = "ms-4"></div>
            <div class = "item box border border-secondary shadow-sm pt-3 pb-3 ps-3 pe-3 rounded-4" style="background-color: #E6F9E8">
                {{-- ini nanti diganti sama data dari database --}}
                <img src="{{$paket->image}}.png" style = "width:120px; height: 100px; "alt="">
                <div class = "mt-3 text-center fs-5" style="max-width:120px">{{$paket->name}}</div>
                <div class = "mt-3 text-center text-muted" style = "opacity: 0.6; max-width:120px;">{{$paket->shortdesc}}</div>
                <div class ="rating d-flex">
                    <img class = "pt-3"src="images/rating-star.png" style="width: 25px; height: 20 px" alt="">
                    <div class="pt-3 ms-4 fs-5">{{$paket->rating}}/5</div>
                </div>

                <div class = "price mt-4 text-center fs-4" style="font-weight: 900;">Rp {{number_format($paket->price, 0, ',', '.')}}</div>
                <div>
                    <button class="btn btn-outline-success mt-3 ms-2 fs-5 shadow-sm" type="submit">
                        @guest
                            <a href="{{ route('login') }} " class = " text-decoration-none text-dark">+Keranjang</a>
                        @endguest

                        @auth
                            <a href="{{ route('add_cart', ['id' => $paket->paketid, 'category' => $paket->category, 'userid' => Auth::user()->id]) }} " class = " text-decoration-none text-dark">+Keranjang</a>

                        @endauth
                    </button>
                </div>
                <button class="btn btn-info mt-3 ms-3 fs-5 shadow-sm" type="submit"><a href={{route('detail_check', ['id' =>$paket->paketid, 'category' => $paket->category])}} class = " text-decoration-none text-dark">More info</a></button>
                <div class = "mt-3 text-center">{{$paket->location}}</div>


            </div>
            <div class = "me-4"></div>
        @endforeach
    </div>
    <br>
    <br>
@include('footer')
</body>
</html>
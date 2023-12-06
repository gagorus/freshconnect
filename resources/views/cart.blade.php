<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/updateprice.js') }}"></script>
    <title>Document</title>
</head>
<body>
    @guest
        @include('header')
    @else
        @include('headerlogin')
    @endguest
    <div class="text-center mt-3 pb-3 fs-2">Shopping Cart</div>
    <div id = "counter" hidden>{{count($carts)}}</div>
    @for ($i = 1; $i <= count($carts); $i++)
        <div class="item border-top border-bottom border-secondary " >
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <img class = "ms-5"src="{{asset($items[$i-1]->image)}}.png" style="width: 120px; height: 100px;" alt="">
                    <div class="ms-3">
                        <div id = "title" class="fs-5">{{$items[$i-1]->name}}</div>
                        <div class="rating d-flex">
                            <img class="pt-3" src="{{asset("images/rating-star.png")}}" style="width: 30px; height: 40px" alt="">
                            <div class="mt-3 ms-1 fs-5">{{$items[$i-1]->rating}}</div>
                        </div>
                        <div class="mt-3 text-center text-muted" style="opacity: 0.6;">{{$items[$i-1]->shortdesc}}</div>
                    </div>
                </div>
                <div class = "ms-5 justify-content-center">
                    <div class="d-flex mb-4" style="max-width: 350px">
                        <button class="btn btn-success  me-2 " onclick="updateQuantity(-1, {{$i}})">
                        <span class="fas fa-minus">-</span>
                        </button>

                        <div class="form-outline">
                            <input id="quantity{{$i}}" min="1" name="quantity" value="1" type="number" class="form-control" onchange="updatePrice({{$i}})">
                        </div>

                        <button class="btn btn-success ms-2" onclick="updateQuantity(1, {{$i}})">
                        <span class="fas fa-plus">+</span>
                        </button>

                        <form action="{{route('destroy_cart', ['d_id' =>$carts[$i-1]->cartid, 'userid' => Auth::user()->id]) }}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button type = "submit" class = "btn btn-danger ms-5">Hapus</button>

                        </form>

                    </div>


                </div>
                <div class="text-end">
                    <div id = "baseprice{{$i}}" class = "me-5 fs-3" hidden> {{$items[$i-1]->price}}</div>
                    <div id = "price{{$i}}" class = "me-5 fs-3"> {{$items[$i-1]->price}}</div>
                </div>

            </div>
        </div>
    @endfor

    <div id = "grandTotal"class = "border-top border-secondary p-5 fs-3" >Grand total: Rp 25.000</div>

    <div class = "text-center" >
        <button class="btn btn-outline-success mt-3 ps-5 pe-5 mb-3 fs-4 shadow-sm"  type="submit" style="width: 700px;">Beli semua</button>
    </div>



    @include('footer')
</body>
</html>

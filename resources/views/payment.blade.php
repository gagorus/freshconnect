<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/payment.css">

    <title>Document</title>
</head>
<body>
    @guest
        @include('header')
    @else
        @include('headerlogin')
    @endguest


    <div style="height: 280px">
        <div>
            <h1 class="alamat-text1">1. Alamat Pengiriman</h1>
        </div>
        <div>
            <input class="alamat-input" type="text">
        </div>
    </div>

    <hr class="line1">

    <div class="pym-box">
        <div class="subox-row">
            
            <button class="pym-subox" onclick="">
                <img class="pym-img" src="/images/payment-method/gopay.png">
            </button>

            <button class="pym-subox" onclick="">
                <img class="pym-img" src="/images/payment-method/atm.png">
            </button>
        </div>
        <div class="subox-row">
            <button class="pym-subox" onclick="">
                <img class="pym-img" src="/images/payment-method/shopee.png">
            </button>
            <button class="pym-subox" onclick="">
                <img class="pym-img" src="/images/payment-method/ovo.png">
            </button>
        </div>
        <div class="subox-row">
            <button class="pym-subox" onclick="">
                <img class="pym-img" src="/images/payment-method/card.png">
            </button>
            <button class="pym-subox" onclick="">
                <img class="pym-img" src="/images/payment-method/telkomsel.png">
            </button>
        </div>

        <hr style="margin-top: 60px; margin-left: 50px; width:950px">

        <div class="total">
            <h1 class="total1">
                Pesanan
            </h1>
            <p style="margin-top: 10px;margin-bottom: 0px;font-weight: lighter;">Total barang:</p>
            <p class="total2">Delivery:</p>
            <p class="total2">Total:</p>
            <p class="total2">Diskon:</p>
            <hr style="width: 400px;">
            <h1 class="total1" style="margin-top: 10px; color: rgba(35, 195, 80, 0.95);">
                Harga total:
            </h1>
            <hr style="width: 400px;">
            
        </div>
        
        <button class="nav-link rounded-5" style="background-color: gray; 
        width:180px;
        height: 70px;
        margin-left: 50px;
        border-radius: 20px;
        background-color: #E7964C;
        display: inline;">
            Gunakan promo
        </button>
        <button class="nav-link rounded-5" style="height: 70px;margin-left: 20px; width: 750px; background-color:rgba(35, 195, 80, 0.95);display: inline;">
            Beli sekarang
        </button>
    </div>

    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
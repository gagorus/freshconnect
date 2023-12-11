<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @guest
        @include('header')
    @else
        @include('headerlogin')
    @endguest

    <div class = "container ">
        <div class="fs-2 mt-3 text-center">Pesananmu berhasil diproses. Terima kasih telah berbelanja bersama kami</div>
        <div class = "text-center">
            <button class = "btn btn-success fs-2 mt-4"><a class ="text-decoration-none text-dark"href="/home">Kembali</a> </button>
        </div>

    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


    @include('footer')
</body>
</html>

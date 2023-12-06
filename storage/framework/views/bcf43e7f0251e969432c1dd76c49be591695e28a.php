<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href=<?php echo e(asset("css/header.css")); ?> rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light fs-3" style = "background-color: #CCEA9C">
        <a class="navbar-brand" href="#"><img src=<?php echo e(asset("images/Fresh_Connect.png")); ?> style="width: 150px; height: 100px" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse flex-row" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item ms-4">
              <a class="nav-link" href="#">Buah</a>
            </li>
            <li class="nav-item ms-4">
                <a class="nav-link" href="#">Sayuran</a>
              </li>

          </ul>
          <div class = "col-md-1"></div>
          <div class = "col-md-4">
            <form class="d-flex form-inline ">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-8 my-sm-0" type="submit"><img src= <?php echo e(asset("images/search-icon.png")); ?> style="width: 25px; height: 25px" alt=""></button>

            </form>

          </div>

          <div class="collapse navbar-collapse flex-row-reverse" id="navbarSupportedContent">
            <?php if(auth()->guard()->check()): ?>
            <li class="nav-item dropdown" style = "list-style: none">
                <a id="navbarDropdown" class="nav-link dropdown-toggle fs-4 rounded-5" href="#" style="background-color: #E7964C" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo e(Auth::user()->email); ?>

                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        <?php echo e(__('Logout')); ?>

                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </li>
            <?php endif; ?>
            <ul class="navbar-nav mr-auto ">
              <li class="nav-item active me-4">
                <a class="nav-link rounded-5" href="<?php echo e(route('check_cart', ['id' => Auth::user()->id])); ?>" style="background-color: #23C350"><img style="width: 60px; height: 50px" src=<?php echo e(asset("images/cart-icon.png")); ?> alt=""><span class="sr-only"></span></a>
              </li>



            </ul>
        </div>
      </nav>
</body>
</html>
<?php /**PATH D:\XAMPP\htdocs\final_project\resources\views/headerlogin.blade.php ENDPATH**/ ?>
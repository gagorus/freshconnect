<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="<?php echo e(asset("css/header.css")); ?>" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fs-3" style = "background-color: #CCEA9C">
        <a class="navbar-brand" href="#"><img src="<?php echo e(asset("images/Fresh_Connect.png")); ?>" style="width: 150px; height: 100px" alt=""></a>
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
                <button class="btn btn-outline-success my-8 my-sm-0" type="submit"><img style="width: 25px; height: 25px"  src=<?php echo e(asset("images/search-icon.png")); ?> alt=""></button>

            </form>

          </div>

          <div class="collapse navbar-collapse flex-row-reverse" id="navbarSupportedContent">
            <!-- <ul class="navbar-nav mr-auto ">
              <li class="nav-item active me-4">
                <a class="nav-link rounded-5" href="#" style="background-color: #23C350">Login <span class="sr-only"></span></a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link rounded-5" href="#" style="background-color: #E7964C">Sign Up</a>
              </li>


            </ul> -->

            <?php if(auth()->guard()->guest()): ?>
            <ul class="navbar-nav mr-auto ">
              <li class="nav-item active me-4">
              <?php if(Route::has('login')): ?>
              <a class="nav-link rounded-5"href="<?php echo e(route('login')); ?>" style="background-color: #23C350">Login <span class="sr-only"></span></a>
                            <?php endif; ?>

              </li>
              <li class="nav-item me-4">
              <?php if(Route::has('register')): ?>
              <a class="nav-link rounded-5" href="<?php echo e(route('register')); ?>" style="background-color: #E7964C">Sign Up</a>
                            <?php endif; ?>

              </li>
            </ul>
            <?php endif; ?>
        </div>
      </nav>
</body>
</html>
<?php /**PATH D:\XAMPP\htdocs\final_project\resources\views/header.blade.php ENDPATH**/ ?>
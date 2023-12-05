<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Home</title>
</head>
<body>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <div class = "text-center fs-1">NEWS</div>
    <div class = "d-flex justify-content-center"> <img src="images/News-banner.png" alt=""></div>
    <br> <br><br><br><br><br><br>
    <div class = "ms-3 fs-4">Buah recommended </div>
    <div class="border-secondary border-top p-3"></div>
    <div class = "d-flex justify-content-between">
        <?php $__currentLoopData = $fruits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fruit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class = "ms-4"></div>
            <div class = "item box border border-secondary shadow-sm pt-3 pb-3 ps-3 pe-3 rounded-4" style="background-color: #E6F9E8">
                
                <img src="<?php echo e($fruit->image); ?>.png" style = "width:120px; height: 100px; "alt="">
                <div class = "mt-3 text-center fs-5"><?php echo e($fruit->name); ?></div>
                <div class = "mt-3 text-center text-muted" style = "opacity: 0.6;"><?php echo e($fruit->shortdesc); ?></div>
                <div class ="rating d-flex">
                    <img class = "pt-3"src="images/rating-star.png" style="width: 25px; height: 20 px" alt="">
                    <div class="pt-3 ms-4 fs-5"><?php echo e($fruit->rating); ?>/5</div>
                </div>

                <div class = "price mt-4 text-center fs-4" style="font-weight: 900;">Rp <?php echo e(number_format($fruit->price, 0, ',', '.')); ?></div>
                <div>
                    <button class="btn btn-outline-success mt-3 ms-2 fs-5 shadow-sm" type="submit">

                        <a href="<?php echo e(route('add_cart', ['id' => $fruit->fruitid, 'category' => $fruit->category])); ?>" class = " text-decoration-none text-dark">+Keranjang</a>
                    </button>
                </div>

                <div class = "mt-3 text-center"><?php echo e($fruit->location); ?></div>


            </div>
            <div class = "me-4"></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div>
    <br>

    <br>
    <div class = "ms-3 fs-4">Sayuran recommended</div>
    <div class="border-secondary border-top p-3"></div>

    <div class = "d-flex justify-content-between">
        <?php $__currentLoopData = $vegetables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vegetable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class = "ms-4"></div>
            <div class = "item box border border-secondary shadow-sm pt-3 pb-3 ps-3 pe-3 rounded-4" style="background-color: #E6F9E8">
                
                <img src="<?php echo e($vegetable->image); ?>.png" style = "width:120px; height: 100px; "alt="">
                <div class = "mt-3 text-center fs-5"><?php echo e($vegetable->name); ?></div>
                <div class = "mt-3 text-center text-muted" style = "opacity: 0.6;"><?php echo e($vegetable->shortdesc); ?></div>
                <div class ="rating d-flex">
                    <img class = "pt-3"src="images/rating-star.png" style="width: 25px; height: 20 px" alt="">
                    <div class="pt-3 ms-4 fs-5"><?php echo e($vegetable->rating); ?>/5</div>
                </div>

                <div class = "price mt-4 text-center fs-4" style="font-weight: 900;">Rp <?php echo e(number_format($vegetable->price, 0, ',', '.')); ?></div>
                <div>
                    <button class="btn btn-outline-success mt-3 ms-2 fs-5 shadow-sm" type="submit">
                        <a href="<?php echo e(route('add_cart', ['id' => $vegetable->vegetableid, 'category' => $vegetable->category])); ?> " class = " text-decoration-none text-dark">+Keranjang</a>

                    </button>
                </div>

                <div class = "mt-3 text-center"><?php echo e($vegetable->location); ?></div>


            </div>
            <div class = "me-4"></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <br>
    <br>
    <div class = "ms-3 fs-4">Paket Spesial</div>
    <div class="border-secondary border-top p-3"></div>

    <div class = "d-flex justify-content-between">
        <?php for($i = 1; $i <=9; $i++): ?>
            <div class = "ms-4"></div>
            <div class = "item box border border-secondary shadow-sm pt-3 pb-3 ps-3 pe-3 rounded-4" style="background-color: #E6F9E8">
                
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
        <?php endfor; ?>
    </div>
    <br>
    <br>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\Users\Ruben\freshconnect\resources\views/home.blade.php ENDPATH**/ ?>
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
<?php if(auth()->guard()->guest()): ?>
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('headerlogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<div class = "ms-3 fs-4">List Sayuran</div>
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
                        <?php if(auth()->guard()->guest()): ?>
                            <a href="<?php echo e(route('add_cart', ['id' => $vegetable->vegetableid, 'category' => $vegetable->category, 'userid' => 0])); ?> " class = " text-decoration-none text-dark">+Keranjang</a>
                        <?php endif; ?>

                        <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(route('add_cart', ['id' => $vegetable->vegetableid, 'category' => $vegetable->category, 'userid' => Auth::user()->id])); ?> " class = " text-decoration-none text-dark">+Keranjang</a>

                        <?php endif; ?>
                    </button>
                </div>
                <button class="btn btn-info mt-3 ms-3 fs-5 shadow-sm" type="submit"><a href=<?php echo e(route('detail_check', ['id' =>$vegetable->vegetableid, 'category' => $vegetable->category])); ?> class = " text-decoration-none text-dark">More info</a></button>
                <div class = "mt-3 text-center"><?php echo e($vegetable->location); ?></div>


            </div>
            <div class = "me-4"></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div><?php /**PATH C:\Users\Ruben\freshconnect\resources\views/vegetable.blade.php ENDPATH**/ ?>
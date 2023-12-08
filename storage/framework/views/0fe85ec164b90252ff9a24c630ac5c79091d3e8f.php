<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="<?php echo e(asset('js/updateprice.js')); ?>"></script>
    <title>Document</title>
</head>
<body>
    <?php if(auth()->guard()->guest()): ?>
        <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('headerlogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <div class="text-center mt-3 pb-3 fs-2">Shopping Cart</div>
    <div id = "counter" hidden><?php echo e(count($carts)); ?></div>
    <?php for($i = 1; $i <= count($carts); $i++): ?>
        <div class="item border-top border-bottom border-secondary " >
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <img class = "ms-5"src="<?php echo e(asset($items[$i-1]->image)); ?>.png" style="width: 120px; height: 100px;" alt="">
                    <div class="ms-3">
                        <div id = "title" class="fs-5"><?php echo e($items[$i-1]->name); ?></div>
                        <div class="rating d-flex">
                            <img class="pt-3" src="<?php echo e(asset("images/rating-star.png")); ?>" style="width: 30px; height: 40px" alt="">
                            <div class="mt-3 ms-1 fs-5"><?php echo e($items[$i-1]->rating); ?></div>
                        </div>
                        <div class="mt-3 text-center text-muted" style="opacity: 0.6;"><?php echo e($items[$i-1]->shortdesc); ?></div>
                    </div>
                </div>
                <div class = "ms-5 justify-content-center">
                    <div class="d-flex mb-4" style="max-width: 350px">
                        <button class="btn btn-success  me-2 " onclick="updateQuantity(-1, <?php echo e($i); ?>)">
                        <span class="fas fa-minus">-</span>
                        </button>

                        <div class="form-outline">
                            <input id="quantity<?php echo e($i); ?>" min="1" name="quantity" value="1" type="number" class="form-control" onchange="updatePrice(<?php echo e($i); ?>)">
                        </div>

                        <button class="btn btn-success ms-2" onclick="updateQuantity(1, <?php echo e($i); ?>)">
                        <span class="fas fa-plus">+</span>
                        </button>

                        <form action="<?php echo e(route('destroy_cart', ['d_id' =>$carts[$i-1]->cartid, 'userid' => Auth::user()->id])); ?>" method="POST">
                            <?php echo method_field("DELETE"); ?>
                            <?php echo csrf_field(); ?>
                            <button type = "submit" class = "btn btn-danger ms-5">Hapus</button>

                        </form>

                    </div>


                </div>
                <div class="text-end">
                    <div id = "baseprice<?php echo e($i); ?>" class = "me-5 fs-3" hidden> <?php echo e($items[$i-1]->price); ?></div>
                    <div id = "price<?php echo e($i); ?>" class = "me-5 fs-3"> <?php echo e($items[$i-1]->price); ?></div>
                </div>

            </div>
        </div>
    <?php endfor; ?>

    <div id = "grandTotal"class = "border-top border-secondary p-5 fs-3" >Grand total: Rp 25.000</div>

    <div class = "text-center" >
        <button class="btn btn-outline-success mt-3 ps-5 pe-5 mb-3 fs-4 shadow-sm"  type="submit" style="width: 700px;">Beli semua</button>
    </div>



    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\Users\Ruben\freshconnect\resources\views/cart.blade.php ENDPATH**/ ?>
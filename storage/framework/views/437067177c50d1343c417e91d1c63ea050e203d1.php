<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/updateprice.js"></script>
    <title>Document</title>
</head>
<body>
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="text-center mt-3 pb-3 fs-2">Shopping Cart</div>
    <?php for($i = 1; $i <=5; $i++): ?>
        <div class="item border-top border-bottom border-secondary " >
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <img class = "ms-5"src="images/stroberi.png" style="width: 120px; height: 100px;" alt="">
                    <div class="ms-3">
                        <div id = "title" class="fs-5">Stroberi lokal</div>
                        <div class="rating d-flex">
                            <img class="pt-3" src="images/rating-star.png" style="width: 30px; height: 40px" alt="">
                            <div class="mt-3 ms-1 fs-5">4.9/5.0</div>
                        </div>
                        <div class="mt-3 text-center text-muted" style="opacity: 0.6;">1 pack = 500 gram</div>
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

                        <button class ="ms-5 btn btn-danger">Hapus</button>
                    </div>


                </div>
                <div class="text-end">
                    <div id = "price<?php echo e($i); ?>" class = "me-5 fs-3"> Rp 10.000</div>
                </div>



            </div>
        <?php endfor; ?>

        <div id = "grandTotal"class = "border-top border-secondary p-5 fs-3" >Grand total: Rp 25.000</div>

        <div class = "text-center" >
            <button class="btn btn-outline-success mt-3 ps-5 pe-5 mb-3 fs-4 shadow-sm"  type="submit" style="width: 700px;">Beli semua</button>
        </div>
    </div>



    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH D:\XAMPP\htdocs\final_project\resources\views/cart.blade.php ENDPATH**/ ?>
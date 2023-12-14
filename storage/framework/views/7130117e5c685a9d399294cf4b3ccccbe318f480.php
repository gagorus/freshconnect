<?php if(auth()->guard()->guest()): ?>
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('headerlogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>


    <div class = " fs-3">Hasil pencarian untuk: <?php echo e($search_text); ?></div>
    <br><br><br><br>
    <div class = "ms-3 fs-4">Buah</div>
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

                        <?php if(auth()->guard()->guest()): ?>
                            <a href="<?php echo e(route('login')); ?> " class = " text-decoration-none text-dark">+Keranjang</a>
                        <?php endif; ?>
                        <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(route('add_cart', ['id' => $fruit->fruitid, 'category' => $fruit->category, 'userid' => Auth::user()->id])); ?> " class = " text-decoration-none text-dark">+Keranjang</a>

                        <?php endif; ?>
                    </button>
                </div>

                <button class="btn btn-info mt-3 ms-3 fs-5 shadow-sm" type="submit"><a href=<?php echo e(route('detail_check', ['id' =>$fruit->fruitid, 'category' => $fruit->category])); ?> class = " text-decoration-none text-dark">More info</a></button>
                <div class = "mt-3 text-center"><?php echo e($fruit->location); ?></div>


            </div>
            <div class = "me-4"></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div>
    <br>

    <br>
    <div class = "ms-3 fs-4">Sayuran</div>
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
                        <a href="<?php echo e(route('login')); ?> " class = " text-decoration-none text-dark">+Keranjang</a>
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
    </div>
    <br>
    <br>
    <div class = "ms-3 fs-4">Paket Spesial</div>
    <div class="border-secondary border-top p-3"></div>

    <div class = "d-flex justify-content-between">
        <?php $__currentLoopData = $pakets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class = "ms-4"></div>
            <div class = "item box border border-secondary shadow-sm pt-3 pb-3 ps-3 pe-3 rounded-4" style="background-color: #E6F9E8">
                
                <img src="<?php echo e($paket->image); ?>.png" style = "width:120px; height: 100px; "alt="">
                <div class = "mt-3 text-center fs-5" style="max-width:120px"><?php echo e($paket->name); ?></div>
                <div class = "mt-3 text-center text-muted" style = "opacity: 0.6; max-width:120px;"><?php echo e($paket->shortdesc); ?></div>
                <div class ="rating d-flex">
                    <img class = "pt-3"src="images/rating-star.png" style="width: 25px; height: 20 px" alt="">
                    <div class="pt-3 ms-4 fs-5"><?php echo e($paket->rating); ?>/5</div>
                </div>

                <div class = "price mt-4 text-center fs-4" style="font-weight: 900;">Rp <?php echo e(number_format($paket->price, 0, ',', '.')); ?></div>
                <div>
                    <button class="btn btn-outline-success mt-3 ms-2 fs-5 shadow-sm" type="submit">
                        <?php if(auth()->guard()->guest()): ?>
                            <a href="<?php echo e(route('login')); ?> " class = " text-decoration-none text-dark">+Keranjang</a>
                        <?php endif; ?>

                        <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(route('add_cart', ['id' => $paket->paketid, 'category' => $paket->category, 'userid' => Auth::user()->id])); ?> " class = " text-decoration-none text-dark">+Keranjang</a>

                        <?php endif; ?>
                    </button>
                </div>
                <button class="btn btn-info mt-3 ms-3 fs-5 shadow-sm" type="submit"><a href=<?php echo e(route('detail_check', ['id' =>$paket->paketid, 'category' => $paket->category])); ?> class = " text-decoration-none text-dark">More info</a></button>
                <div class = "mt-3 text-center"><?php echo e($paket->location); ?></div>


            </div>
            <div class = "me-4"></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <br>
    <br>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\Users\Ruben\freshconnect\resources\views/search.blade.php ENDPATH**/ ?>
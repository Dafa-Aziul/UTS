<?php $__env->startSection('title', 'Homepage'); ?>

<?php $__env->startSection('content'); ?>

<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>    
<?php endif; ?>

<h1>Popular Movie</h1>
<div class="row">
    <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-6">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="<?php echo e(asset('storage/' . $movie['foto_sampul'])); ?>" class="img-fluid" alt="<?php echo e($movie['judul']); ?>">
            </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($movie['judul']); ?></h5>
                        <p class="card-text"><?php echo e($movie['sinopsis']); ?></p>
                        <a href="/movie/<?php echo e($movie['id']); ?>" class="btn btn-success">Lihat Selanjutnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="d-flex justify-content-center">
        <?php echo e($movies->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester 4\movie-main\resources\views/homepage.blade.php ENDPATH**/ ?>
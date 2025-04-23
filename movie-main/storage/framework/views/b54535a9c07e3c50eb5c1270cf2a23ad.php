<?php $__env->startSection('title', $movie['judul']); ?>

<?php $__env->startSection('content'); ?>

<div class="card mb-3">
    <div class="row g-0">
      <div class="col-md-3">
        <img src="<?php echo e(asset('storage/'. $movie['foto_sampul'])); ?>" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-9">
        <div class="card-body">
          <h2 class="card-title"><?php echo e($movie['judul']); ?></h2>
          <p class="card-text"><?php echo e($movie['sinopsis']); ?></p>
          <p class="card-text">Kategori : <?php echo e($movie->category->nama_kategori); ?></p>
          <p class="card-text">Tahun : <?php echo e($movie['tahun']); ?></p>
          <p class="card-text">Pemain : <?php echo e($movie['pemain']); ?></p>
          <a href="/" class="btn btn-success">Kembali</a>
        </div>
      </div>
    </div>
  </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester 4\movie-main\resources\views/detail.blade.php ENDPATH**/ ?>
  
<?php $__env->startSection('title', 'Input Data Movie'); ?>  
<?php $__env->startSection('content'); ?>
<a href="<?php echo e(route('categories.index')); ?>" class="btn btn-primary mt-4">List Ketegori</a>
<h2 class="mb-4">Tambah Movie Baru</h2>
<form action="<?php echo e(route('categories.update', $category->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div class="mb-3">
        <label for="nama_kategori" class="form-label">Nama Kategori:</label>
        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required="" value="<?php echo e($category->nama_kategori); ?>">
    </div>
    <div class="mb-3">
        <label for="keterangan" class="form-label">keterangan:</label>
        <input type="text" class="form-control" id="keterangan" name="keterangan" required="" value="<?php echo e($category->keterangan); ?>">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester 4\movie-main\resources\views/category/edit.blade.php ENDPATH**/ ?>


<?php $__env->startSection('title', 'Data Kategori'); ?>

<?php $__env->startSection('content'); ?>

<h1>Data-Movie</h1>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Kategori</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($loop->iteration); ?></th>
            <td><?php echo e($category->nama_kategori); ?></td>
            <td><?php echo e($category->keterangan); ?></td>
            <td class="text-nowrap">
                <a href="<?php echo e(route('categories.edit', $category->id)); ?>" class="btn btn-warning">Edit</a>
                <form action="/categories/<?php echo e($category->id); ?>" method="post" class="d-inline">
                    <?php echo method_field('delete'); ?>
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
    <div class="d-flex justify-content-center">
        <?php echo e($categories->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester 4\movie-main\resources\views/category/index.blade.php ENDPATH**/ ?>
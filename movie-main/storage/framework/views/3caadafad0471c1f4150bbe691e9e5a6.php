<?php $__env->startSection('title', 'Data Movie'); ?>

<?php $__env->startSection('content'); ?>

<h1>Data-Movie</h1>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Kategori</th>
        <th scope="col">Tahun</th>
        <th scope="col">Pemain</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($loop->iteration); ?></th>
            <td><?php echo e($movie->judul); ?></td>
            <td><?php echo e($movie->category->nama_kategori); ?></td>
            <td><?php echo e($movie->tahun); ?></td>
            <td><?php echo e($movie->pemain); ?></td>
            <td class="text-nowrap">
                <a href="/movies/edit/<?php echo e($movie['id']); ?>" class="btn btn-warning">Edit</a>
                <a href="<?php echo e(route('movies.delete', ['id' => $movie->id])); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
    <div class="d-flex justify-content-center">
        <?php echo e($movies->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester 4\movie-main\resources\views/data-movies.blade.php ENDPATH**/ ?>
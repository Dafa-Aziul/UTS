  
<?php $__env->startSection('title', 'Input Data Movie'); ?>  
<?php $__env->startSection('content'); ?>
<a href="/movies/data" class="btn btn-primary mt-4">List Movie</a>
<h2 class="mb-4">Tambah Movie Baru</h2>
<form action="/movies/store" method="POST" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
	<div class="mb-3">
		<label for="id" class="form-label">ID Film:</label>
		<input type="text" class="form-control" id="id" name="id" required="">
	</div>
	<div class="mb-3">
		<label for="judul" class="form-label">Judul:</label>
		<input type="text" class="form-control" id="judul" name="judul" required="">
	</div>
	<div class="mb-3">
		<label for="category_id" class="form-label">Kategori:</label>
		<select name="category_id" id="category_id" class="form-select" required>
			<option value="">Pilih Kategori</option>
			<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($category->id); ?>"><?php echo e($category->nama_kategori); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select>
	</div>
	<div class="mb-3">
		<label for="sinopsis" class="form-label">Sinopsis:</label>
		<textarea class="form-control" id="sinopsis" name="sinopsis" rows="4" required=""></textarea>
	</div>
	<div class="mb-3">
		<label for="tahun" class="form-label">Tahun:</label>
		<input type="number" class="form-control" id="tahun" name="tahun" required="">
	</div>
	<div class="mb-3">
		<label for="pemain" class="form-label">Pemain:</label>
		<input type="text" class="form-control" id="pemain" name="pemain" required="">
	</div>
	<div class="mb-3">
		<label for="foto_sampul" class="form-label">Foto Sampul:</label>
		<input type="file" class="form-control" id="foto_sampul" name="foto_sampul" required="">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester 4\movie-main\resources\views/input.blade.php ENDPATH**/ ?>
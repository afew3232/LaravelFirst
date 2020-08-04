

<?php $__env->startSection("content"); ?>
	<h1><?php echo e($article->title); ?></h1>
	<hr/>

	<article>
		<div class="body"><?php echo e($article->body); ?></div>
	</article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Shouichi\Desktop\work\laravel\test\resources\views/articles/show.blade.php ENDPATH**/ ?>
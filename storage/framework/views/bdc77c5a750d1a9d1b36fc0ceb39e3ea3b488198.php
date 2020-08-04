

<?php $__env->startSection("content"); ?>
	<h1>Articles</h1>
	<hr/>

	<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<article>
			<h2>
				<a href="<?php echo e(url('articles', $article->id)); ?>">"
					<?php echo e($article->title); ?>

				</a>
			</h2>
		</article>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Shouichi\Desktop\work\laravel\test\resources\views/articles/index.blade.php ENDPATH**/ ?>
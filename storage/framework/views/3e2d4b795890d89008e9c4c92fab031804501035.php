<?php echo Form::open(['url'=>'books','method'=>'post']); ?>

<div class="form-group">
<label for="title">Book Title</label>
<?php echo Form::text('bookTitle','',['placeholder'=>' Title...','required']); ?>

<?php $__errorArgs = ['bookTitle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<div class="alert alert-danger"><?php echo e($message); ?></div>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<div class="from-group">
<label for="body">Author</label>
<?php echo Form::text('author','',['placeholder'=>'Author... ']); ?>

<?php $__errorArgs = ['author'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<div class="alert alert-danger"><?php echo e($message); ?></div>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<button type="submit" class="btn btn-primary">submit</button>
<?php echo Form::Close(); ?>  <?php /**PATH C:\xampp\htdocs\ITI_OpenSource\blog\resources\views/create.blade.php ENDPATH**/ ?>
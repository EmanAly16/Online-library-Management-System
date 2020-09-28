<?php echo Form::open(['route'=>['books.update',$post->id],'method'=>'put']); ?>

<div class="form-group">
<label for="title">Book Title</label>
<?php echo Form::text('bookTitle',$post->bookTitle,['placeholder'=>'Title..']); ?>

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
<lavel for="body">Author</label>
<?php echo Form::text('author',$post->author,['placeholder'=>'Author...']); ?>

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
<button type="submit" class="btn btn-primary">Submit</button>
<?php echo Form::close(); ?><?php /**PATH C:\xampp\htdocs\ITI_OpenSource\blog\resources\views/edit.blade.php ENDPATH**/ ?>
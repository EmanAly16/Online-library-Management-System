
    
<?php $__env->startSection('content'); ?>
<div class="card mt-5">
         <div class="card-header">
            <div class="col-md-12">
                  <a class="btn btn-success ml-5" href="<?php echo e(route('books.index')); ?>">Back</a>
                </h4>
            </div>
         </div>
         <div class="card-body">
           <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Book Title:</strong>
                        <?php echo e($bro->bookTitle); ?>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Author:</strong>
                        <?php echo e($bro->author); ?>

                    </div>
                </div>
            </div>
            

        </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITI_OpenSource\blog\resources\views/show.blade.php ENDPATH**/ ?>
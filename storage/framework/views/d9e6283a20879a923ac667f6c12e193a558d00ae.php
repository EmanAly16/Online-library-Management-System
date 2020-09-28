
<?php $__env->startSection('head'); ?>All Books            <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container bg-dark">
                <div class="row">
                    <div class="col-md-12">
                    <div class="card mt-5">
                    <div class="card-header">
                        <div class="col-md-10">
            <?php if(Auth::user()->state =='admin'): ?>
            <a class="btn btn-success ml-5" href="<?php echo e(route('books.create')); ?>" id="createNewItem"> Add Book</a>
            <?php endif; ?>

  </div>
</div>

    <table border="2">
                    <tr>
                        <th>ID</th>
                        <th>BookTitle</th>
                        <th>Author</th>
                        <?php if(Auth::user()->state =='student'): ?>
                        <th>Select Book to Borrow</th>
                        <?php else: ?>
                        <th>Operation</th>
                        <?php endif; ?>

                    </tr>
                    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->id); ?></td>
                        <td><?php echo e($item->bookTitle); ?></td>
                        <td><?php echo e($item->author); ?></td>
                        <?php if(Auth::user()->state =='student'): ?>
                        <td>
                        <div class="center">
                            <a  class="btn btn-warning" href="<?php echo e(route('books.delete',$item->id)); ?>">Borrow </a>
                            </div>
                        </td>
                        <?php else: ?>

                        <td>
                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('books.edit',$item->id)); ?>">Edit</a>
                            <br>
                        <?php echo Form::open(['route'=>['books.destroy',$item->id],'method'=>'delete']); ?>

                        <button type="submit" class="btn btn-danger btn-sm">Delete</button> 
                        <?php echo Form::close(); ?></td>
                        <?php endif; ?>


                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </br>
            </div>
            </div></div></div></div></div>

            <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITI_OpenSource\blog\resources\views/allbooks.blade.php ENDPATH**/ ?>
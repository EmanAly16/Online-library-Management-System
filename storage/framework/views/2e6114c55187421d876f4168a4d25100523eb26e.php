
<?php $__env->startSection('head'); ?>Borrowed Books            <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container bg-dark">
                <div class="row">
                    <div class="col-md-12">
                    <div class="card mt-5">

<table border="2">
                <tr>
                    <th>ID</th>
                    <th>BookTitle</th>
                    <th>Author</th>
                    <th>Date_Time</th>

                </tr>
                <?php $__currentLoopData = $brobooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->bookTitle); ?></td>
                    <td><?php echo e($item->author); ?></td>
                    <td><?php echo e($item->date_time); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </br>
        </div>
        </div></div></div></div></div>

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITI_OpenSource\blog\resources\views/borrowed.blade.php ENDPATH**/ ?>
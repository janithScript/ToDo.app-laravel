<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">My ToDo List</h1>
        </div>
    </div>
</div>
<form action="<?php echo e(route('todo.store')); ?>" method="POST" enctype="multipart/form">
    <?php echo csrf_field(); ?>
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-8">
                <div class="form-group">
                    <input class="form-control" type="text" name="title" placeholder="Enter the task" >
                </div>
            </div>
            <div class="col-lg-4">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
            <div class="col-lg-12 mt-5">
                <div>
                    <table class="table table-success table-striped-columns">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>

                        <tbody>

                        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e(++$key); ?></th>
                            <td><?php echo e($task->title); ?></td>
                            <td>
                                <?php if($task->done == 0): ?>
                                    <span class="badge bg-warning">Not Completed</span>
                                <?php else: ?>
                                <span class="badge bg-success">Completed</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo e(route('todo.delete', $task-> id)); ?>" class="btn btn-danger"> <i class="fa-solid fa-delete-left"></i></a>
                                <a href="<?php echo e(route('todo.done', $task-> id)); ?>" class="btn btn-success"> <i class="fa-solid fa-circle-check"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                      </table>
                </div>
            </div>

        </div>
    </div>
</form>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('css'); ?>
    <style>
        .page-title{
            padding: 5vh;
        }
        .form-group input{
            margin-left: 15vh;
            border: 2px solid #171d20; /* Set the border color to your desired color (e.g., #3498db) */
            border-radius: 5px; /* Optional: Add border-radius for rounded corners */
        }
        .row button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 25vh;
        }
        .table {
            width: 70%; /* Adjust the width of the table as needed */
            margin: auto; /* Set left and right margins to auto */
        }

        body{
            background: linear-gradient(0.33turn, #3f87a6, #ebf8e1, #f69d3c, #16493e);
            background-size: cover;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\PHP_xampp\1 NEW XAMPP\htdocs\Laravel\Projects\test\resources\views/pages/pages/todo/index.blade.php ENDPATH**/ ?>
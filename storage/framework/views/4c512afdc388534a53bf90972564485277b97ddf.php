  


<?php $__env->startSection('content'); ?>
<?php if($errors->any()): ?>
    <div style="color:#f00;">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
    <!-- Page Content -->
    <?php if(session('status')): ?>
        <div class="alert alert-success">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('admin.articles.store')); ?>" method="post">
        <div id="page-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Create New Article</h1>
                    </div>
                </div>
                  <label for="male"> Title </label>

                <div class="input-group mb-3">
                    <input type="text"  name='title' class="form-control" aria-label="title" aria-describedby="basic-addon1" required>
                </div>
                <label for="male"> Content </label>
                <div class="input-group">
                    <textarea  rows="20" cols="80" class="form-control" name='content' aria-label="Article Content" required></textarea>
                </div>
            </div><br>
            <select style="margin-left: 15px;" name='category'>
                
                     <option value='none'> -- category -- </option>

                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value='<?php echo e($category->id); ?>'> <?php echo e($category->title); ?> </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <br><br>
            <input style="margin-left: 15px;" type="submit" value='create' class="btn btn-primary">
        </div>
        <?php echo csrf_field(); ?>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aqarmap\resources\views/admin/new.blade.php ENDPATH**/ ?>
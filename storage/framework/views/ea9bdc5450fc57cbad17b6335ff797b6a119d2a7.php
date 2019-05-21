<?php $__env->startSection('title', 'AqarMap Blog'); ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>AqarMap Blog</h1>
          </div>
        </div>
      </div>
    </div>
  </header>
  category :
  <form action="<?php echo e(route('articles.bycat')); ?>" method="get">
    <select>
      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($cat->id); ?>"> <?php echo e($cat->title); ?> </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </select>
    <input type="hidden" id="cat" name="cat" value="1">
    <input type="submit">
</form>
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php if(count($data) > 0): ?>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="post-preview">
          <a href="<?php echo e(route('article.show',$article->id)); ?>">
            <h2 class="post-title">
              <?php echo e($article->title); ?>

            </h2>
          </a>
          <p class="post-meta">
                <?php echo e($article->created_at); ?>

            </p>
        </div>


        <hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <center>There is no articles at this time , see you soon </center>
        <?php endif; ?>
        <!-- Pager -->

      </div>
    </div>
  </div>

  <hr>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aqarmap\resources\views/index.blade.php ENDPATH**/ ?>
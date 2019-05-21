  


<?php $__env->startSection('title', 'AqarMap Blog'); ?>

<?php $__env->startSection('content'); ?>
  <header class="masthead" style="background-image: url(<?php echo e(asset('img/post-bg.jpg')); ?>)">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1><?php echo e($article->title); ?></h1>
            <span class="meta">
              on <?php echo e($article->created_at); ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">

        <div class="col-lg-8 col-md-10 mx-auto">
          <p><?php echo e($article->content); ?></p>
        </div>
      </div>
    </div>
  </article>

  <hr>

  <div style='width: 30%;margin: auto;'>
  <?php $__currentLoopData = $article->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <span style="background-color: #ccc;padding: 4px">
      <b>
      <?php echo e($comment->username); ?>

    </b>
       </span>
      <br>
    <?php echo e($comment->comment); ?><br>
    <small>on <?php echo e($comment->created_at); ?></small><br>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


  <br><br>
    Do Have a Comment ?
    <form action="<?php echo e(route('comment.store')); ?>" method="post">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">Name</span>
        </div>
        <input type="text" class="form-control" placeholder="type your name" aria-label="Username" aria-describedby="basic-addon1" name='username' required>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">Comment</span>
        </div>
        <textarea rows="5" cols="50" name='comment' class="form-control" aria-label="With textarea" required></textarea>
      </div>
      <div class="input-group mb-3" style="margin-top: 8px;">
        <div class="input-group-prepend">
          <input type="submit" class="btn btn-outline-secondary" value="submit">
        </div>
      </div>
      <input type="hidden" name="article" value="<?php echo e($article->id); ?>">
      <?php echo csrf_field(); ?>
  </form>
  <hr>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aqarmap\resources\views/article.blade.php ENDPATH**/ ?>
 <!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Daily Trends</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    </head>
    <body>
    <div id="appendDivNews">
        <nav class="navbar fixed-top navbar-light bg-faded" style="background-color: #e3f2fd;">
          <a class="navbar-brand" href="#">Daily Trends News</a>
        </nav>
         <div id="crud">
        <nav class="fixed-right navbar-light bg-faded" style="background-color: #e3f2fd;">
          <a class="navbar-brand" href="/createdailytrends">CRUD</a>
        </nav>

            <?php echo e(csrf_field()); ?>

<section id="content" class="section-dropdown">
<p class="select-header"> Select a news source: </p>
<label class="select"> 
    <select name="news_sources" id="news_sources">
    <option value="<?php echo e(@$source_id); ?> : <?php echo e(@$source_name); ?>"><?php echo e($source_name); ?></option>
    <?php $__currentLoopData = $news_sources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_source): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($news_source['id']); ?> : <?php echo e($news_source['name']); ?>"><?php echo e($news_source['name']); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</label>

 </section> 
<p> News Source : <?php echo e($source_name); ?></p>
    <section class="news">
    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $selected_news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <article>
        <img src="<?php echo e($selected_news['urlToImage']); ?>" alt="" />
        <div class="text">
            <h1><?php echo e($selected_news['title']); ?></h1>
            <p style="font-size: 14px"><?php echo e($selected_news['description']); ?> <a href="<?php echo e($selected_news['url']); ?>" target="_blank"><small>read more...</small></a> </p>
            <div style="padding-top: 5px;font-size: 12px">Author: <?php echo e($selected_news['author']); ?></div>
            <?php if($selected_news['publishedAt'] != null): ?>
             <div style="padding-top: 5px;">Date Published: <?php echo e(Carbon\Carbon::parse($selected_news['publishedAt'])->format('l jS \\of F Y ')); ?></div>
             <?php else: ?>
             <div style="padding-top: 5px;">Date Published: Unknown</div>

             <?php endif; ?>

        </div>
    </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
</div>

         </body>
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>

</html><?php /**PATH C:\xampp\htdocs\DailyTrends\resources\views/welcome.blade.php ENDPATH**/ ?>
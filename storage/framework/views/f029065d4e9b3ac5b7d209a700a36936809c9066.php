<!-- f1racecreate.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create Daily Trends </title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h2>Create Daily Trends News</h2><br/>
      <form method="post" action="<?php echo e(url('create')); ?>">
        <?php echo csrf_field(); ?>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="date">Date:</label>
            <input type="text" class="form-control" name="date">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="author">Author:</label>
              <input type="text" class="form-control" name="author">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="source">Source:</label>
            <input type="text" class="form-control" name="source">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\DailyTrends\resources\views/createdailytrends.blade.php ENDPATH**/ ?>
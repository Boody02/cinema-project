<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign In</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>



</head>
<body>


 <?php include 'common/header.php'; ?> 












<div class="container">
    <div class="row shadow-lg my-3">
<div class="col-md-6 image">

    <img style="size: 50%;" src="images/bg1.png" alt="bg">    
</div>



<div class="col-md-6 container2">
    <h1 style="text-align: center; padding-bottom: 30px;"><b>Log in</b></h1>
    <form action="loginProcess.php" method="post">
      <div class="mb-3 mt-3">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
      </div>
      <div class="form-check mb-3">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="remember" required> I Agree for all terms
        </label>
      </div>
      <button type="submit" style="width: 100%; margin-top: 12%;" class="btn btn-outline-success" >Submit</button>
    </form>
  </div>
  </div>





</div>


</body>
</html>

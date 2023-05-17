<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <body>
    </head>
<form action="projek_post.php" method="POST">
  <div class="form-group">
    <label for="username">username</label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-address-card"></i>
        </div>
      </div> 
      <input id="username" name="username" placeholder="masukan username" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="password">password</label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-lock"></i>
        </div>
      </div> 
      <input id="password" name="password" placeholder="masukan password" type="password" class="form-control">
    </div>
  </div> 
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Login</button>
  </div>
</form>
</body>
</html>
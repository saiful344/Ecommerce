<!DOCTYPE html>
<html>
<head>
  <title>Sign_in || thing</title>
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css">
</head>
<style type="text/css">
@media(min-width: 992px){
  body{
    
  }
  .login{
    margin-top: 10%;
    margin-left: 30%;
  }
    .login label{
    font-size: 15px;
  }
}
</style>
<body>
  <div class="container justify-content-center">
    <div class="login col-md-5   shadow p-3 mb-5 bg-white rounded">
    <form method="post">
      <h5 style="margin-left: 37%;">Thing~baby</h5>
      <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">Input your username for login</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary float-right">Submit</button>
      <div class="clearfix"></div>
      <span >Create acount <a href="<?= site_url("Login/sign_up");?>" class="text-primary">Sign_up</a></span>
    </form>
  </div>
</div>
<script type="text/javascript" src="<?= base_url();?>assets/bootstrap/css/bootstrap.min.js"></script>
</body>
</html>

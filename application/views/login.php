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

      <h5 style="border-bottom:1px solid #2fce98 " class="mb-5"><img src="<?= base_url() ?>assets/user_2/images/logo_1.png" alt="">Thing~baby</h5>
        
      <div class="form-group">
        <label for="exampleInputEmail1"><img src="<?= base_url() ?>assets/user_2/images/user.svg" alt="https://www.flaticon.com/authors/freepik" width="55"></label>
        <input type="text" class="form-control float-right col-md-9 mt-3 mr-4" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Enter email">
      </div>
  <div class="form-group">
        <label for="password"><img src="<?= base_url() ?>assets/user_2/images/user.svg" alt="https://www.flaticon.com/authors/freepik" width="55"></label>
        <input type="password" class="form-control float-right col-md-9 mt-3 mr-4" id="password" aria-describedby="emailHelp" name="username" placeholder="*********">
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

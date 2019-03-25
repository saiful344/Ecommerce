<!DOCTYPE html>
<html>
<head>
  <title>Sign_in || thing</title>
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css">
</head>
<style type="text/css">
@media(min-width: 992px){

  .login_2{
    margin-top: 10%;
    margin-left: 28%;

  }
  .login_2 label{
    font-size: 15px;
  }
}
</style>
<body>
  <div class="container justify-content-center">
    <div class="login_2 col-md-6   shadow p-3 mb-5 bg-white rounded">
<?php echo form_open_multipart("Login/sign_up");?>
 <h5 style="border-bottom:1px solid #2fce98 " class="mb-5"><img src="<?= base_url() ?>assets/user_2/images/logo_1.png" alt="">Thing~baby</h5>
 <input type="hidden" name="level" value="user">
          <div class="form-row login">
              <div class="form-group col-md-6">
                <i class="zmdi zmdi-account material-icons-name"></i>
              <input type="text" class="form-control" id="exampleInputEmail1" name="username" placeholder="Username">
            </div>
            <div class="form-group col-md-6">
              <i class="zmdi zmdi-lock"></i>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
            </div>
          </div>
          <div class="form-row login">
              <div class="form-group col-md-6">
                <i class="fas fa-envelope-square"></i>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
            </div>
            <div class="form-group col-md-6">
               <i class="far fa-address-card"></i>
               <input type="text" class="form-control" id="exampleInputPassword1" name="nama" placeholder="Full name">
            </div>
          </div>
           <div class="form-group ">
              <label for="inputCity"><i class="fas fa-map-marker-alt"></i> Address</label>
              <input type="text" class="form-control" name="address" id="inputCity">
            </div>
            <div class="form-group">
              <label for="exampleFormControlFile1"><i class="fas fa-chalkboard-teacher"></i> Profile</label>
              <input type="file" class="form-control-file" name=
              "foto" id="exampleFormControlFile1">
              <div class="invalid-feedback">Example invalid custom file feedback</div>
            </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity"><i class="fas fa-globe"></i> No hp</label>
              <input type="text" name="no_hp" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-6">
              <label for="inputState"><i class="fas fa-genderless"></i> Gender</label>
              <select id="inputState" name="gender" class="form-control">
                <option selected value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck" checked>
              <label class="form-check-label" for="gridCheck">
                Check me out
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary float-right">Sign in</button>
          <?= $error ?>
        </form>
    <div class="clearfix"></div>
            <div class="text-block text-center my-3">
            <span class="text-small font-weight-semibold">Already have an account? </span>
              <a href="<?= site_url("Login");?>" class="text-black text-small">Login</a>
            </div>
  </div>
  </div>
</div>
<script type="text/javascript" src="<?= base_url();?>assets/bootstrap/css/bootstrap.min.js"></script>
</body>
</html>

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
 <h5 style="margin-left: 37%;">Thing~baby</h5>
<input type="hidden" name="level" value="user">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Username</label>
      <input type="text" class="form-control" id="inputEmail4" name="nama">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Profil</label>
    <input type="file" class="form-control-file" id="inputAddress" name="foto" placeholder="..">
  </div>
  <div class="form-group">
    <label for="inputAddress2">City</label>
    <input type="text" class="form-control" id="inputAddress2" name="city" placeholder="..">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ligancy</label>
      <input type="text" class="form-control" name="kecamatan" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState" >Gender</label>
      <select id="inputState" name="gender" class="form-control">
        <option selected value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Koe pos</label>
      <input type="text" class="form-control" name="kode" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary float-right">Sign in</button>
  <?= $error ?>
  <div class="clearfix"></div>
    <span >I have a acount <a href="<?= site_url("Login");?>" class="text-primary">Log_in</a></span>
</form>
  </div>
</div>
<script type="text/javascript" src="<?= base_url();?>assets/bootstrap/css/bootstrap.min.js"></script>
</body>
</html>

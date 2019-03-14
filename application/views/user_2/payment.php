
<style type="text/css">
.gambar img{
  width: 70px;
}
</style>

<div class="super_container_inner">
    <div class="super_overlay"></div>


    <!-- Home -->

    <!-- Products -->

  <div class="products">    
  <div class="container">++++
  <!-- section -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
          <div class="col-md-12 mt-4">
            <div class="order-summary clearfix">
              <div><h3>Payment</h3></div>
              <?php echo form_open("user/bayar");?>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">City</label>
                  <select id="inputCity" class="form-control" id="sel11" name="city">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>

                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">State</label>
                  <select id="inputState" class="form-control" id="sel22" name="state">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">Zip</label>
                  <input type="text" class="form-control" id="inputZip" name="poszip">
                </div>
              </div>
                <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="inputCity">Kurir</label>
                  <select id="inputCity" class="form-control" id="kurir" name="kurir">
                        <option value=""> Pilih Kurir</option>
                        <option value="jne">JNE</option>
                        <option value="tiki">TIKI</option>
                        <option value="pos">POS Indonesia</option>
                  </select>

                </div>
                <div class="form-group col-md-2">
                  <label for="inputState">Service</label>
                  <select id="inputState" class="form-control" name="paket">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">Time</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
              </div>
              <input type="hidden" name="ongkir">
              <div class="float-right" style="font-size: 20px;">Total : 500 .000</div>
              <button type="submit" class="btn btn-success mb-5 mt-4">Payment</button> 
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

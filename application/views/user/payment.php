  
<div class="container p-5">

  <div class="input-group">
   <div class="input-group-append">
      <span class="input-group-text">Berat</span>
    </div>
         <?php $sum=0; foreach ($this->cart->contents() as $items) :?>
                    <?php $sum += $items['total'];?>
            <?php endforeach ?>
    <input type="number" value="<?= $sum ?>" min="1" class="form-control" id="berat" name="berat"> 
    <div class="input-group-append">
      <span class="input-group-text">Kg</span>
    </div>
  </div>

<div class="form-group">  
  
</div>

<p>Lokasi Asal :</p>
<div class="form-group">  
  <select class="form-control" id="sel1">
    <option value=""> Pilih Provinsi</option>            
  </select>
</div>

<div class="form-group">  
  <select class="form-control" id="sel2" disabled>
    <option value=""> Pilih Kota</option>            
  </select>
</div>

<p>Lokasi Tujuan :</p>


<div class="form-group">  
  <select class="form-control" id="sel11">
    <option value=""> Pilih Provinsi</option>            
  </select>
</div>

<div class="form-group">  
  <select class="form-control" id="sel22" disabled>
    <option value=""> Pilih Kota</option>            
  </select>
</div>

<div class="form-group">  
  <select class="form-control" id="kurir" disabled>
    <option value=""> Pilih Kurir</option>
    <option value="jne">JNE</option>
    <option value="tiki">TIKI</option>
    <option value="pos">POS Indonesia</option>
  </select>
</div>
<div class="form-group">  
  <select class="form-control" id="mode" disabled>
    <option value=""> Mode kirim</option>            
  </select>
</div>
<label>Total :</label>
<label id="harga"></label>
         <div class="pull-right">
          <?php echo form_open('checkout/payment');?>
                <input type="email" name="email">
                <input type="submit" class="primary-btn"></a>
            </form>
                <a href="<?= site_url("User/cart_trash")?>" class="primary-btn">Cencel</a>
          </div>
<div id="hasil" style="height: 300px;"></div>

</div>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small>Tambah barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">tambah</li>
      </ol>
    </section>
    <?php echo form_open_multipart('Admin/tambah');?>
    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Select2</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Jumlah</label>
                <input type="number" class="form-control" name="jumlah" placeholder="jumlah barang">
              </div>
              <!-- /.form-group -->
               <div class="form-group">
                <label>Haraga</label>
                <input type="number" class="form-control" name="harga" placeholder="Rp.....">
              </div>
              <!-- /.form-group -->
               <div class="form-group">
                <label>Jenis</label>
                <input type="text" class="form-control" name="jenis" placeholder="Jenis barang">
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" type="yy-mm-dddd" class="form-control pull-right" id="datepicker" name="date">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- /.form-group -->
              <div class="form-group">
                <label>Kondisi</label>
                <select class="form-control select2" name="kondisi" style="width: 100%;">
                 <option value="baru">Baru</option>
                 <option value="bekas">Bekas</option>
                </select>
              </div>
              <!-- /.form-group -->
                        <!-- /.form-group -->
              <div class="form-group">
                <label>Berat</label>
                <input type="number" name="berat" class="form-control" placeholder="....gram">
              </div>
              <!-- /.form-group -->
                        <!-- /.form-group -->
              <div class="form-group">
                <label>Foto</label>
               <input type="file" name="foto" >
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

        </div>
           <div class="box">
            <div class="box-header">
              <h3 class="box-title">Deskripsi barang
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="deskripsi"></textarea>
              </form>
            </div>
          </div>
        <!-- /.box-body -->
                        <div>
                      <button type="submit" class="btn btn-outline-info btn-fw float-right m-3">
                          <i class="mdi mdi-upload"></i>Upload</button>
                          <?= $error ?>
                     </div>
      </form>
        <div class="box-footer">
          Isi <a href="https://select2.github.io/">data product dengan benar</a>
        </div>
      </div>
      <!-- /.box -->
    </section>
  </div>


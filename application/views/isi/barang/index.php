   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Record Product
        <small>Product selling</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            <a href="<?= site_url("Admin/tambah")?>" class="btn btn-primary" style="">
                <i class="fa fa-inbox"></i> Tambah
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1 jadi" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="1">No</th>
                  <th>Nama</th>
                  <th>Harga</th>
                  <th>tgl</th>
                  <th>gambar</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
                <tbody>
               <?php $i=1;foreach($content as $b):?>
                <tr>
                  <td><?= $i++ ;?></td>
                  <td><?= $b->nama ?></td>
                  <td><?= $b->harga ?></td>
                  <td><?= $b->tgl ?></td>
                  <td><img src="<?= base_url()?>assets/images/<?= $b->foto ?>" width="50"></td>
                  <td><a class="btn" href="<?= site_url("Admin/edit/").$b->id ?>">Hapus</a><a class="btn" href="<?= site_url("Admin/hapus/").$b->id ?>">Edit</a></td>
                </tr>
              <?php endforeach ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
</div>

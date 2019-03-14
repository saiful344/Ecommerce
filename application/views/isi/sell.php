   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Record product
        <small>product selling</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">chekcout</a></li>
        <li class="active">Product</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1 jadi" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="1">No</th>
                  <th>Nama</th>
                  <th>Harga</th>
                  <th>Jumlah</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
               <?php $i=1;foreach($content as $b):?>
                <tr>
                  <td><?= $i++ ;?></td>
                  <td><?= $b->nama ?></td>
                  <td><?= $b->harga ?></td>
                  <td><?= $b->qty ?></td>
                  <td><?= $b->status ?></td>
                 <tr>
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

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Record Selling
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Record selling</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                        <a href="<?= site_url("cetak")?>" class="btn btn-primary ">Report</a>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1 jadi" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="1">No</th>
                  <th>Date</th>
                  <th>Expire</th>
                  <th>user_id</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
               <?php $i=1;foreach($content as $b):?>
                <tr>
                  <td><?= $i++ ;?></td>
                  <td><?= $b->date ?></td>
                  <td><?= $b->due_date ?></td>
                  <td><?= $b->user_id ?></td>
                  <td><?= $b->status ?></td>
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



<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Pengajuan Kesepakatan Kinerja
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pengajuan Kesepakatan Kinerja</li>
    </ol>
</section>
<!-- Main content -->
<section class="content col-lg-12">
    <div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">Masukkan 5 Tugas Pokok</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <?php if ($pengajuan>1): ?>
    <form role="form">
        <!-- text textarea -->
        <div class="form-group">
            <div class="box-body">
              <div class="row">
                <div class="col-xs-1">
                    <label class="control-label">Tugas 1</label>
                </div>
                <div class="col-xs-5">
                    <textarea  type="text" class="form-control" name="faktor1"></textarea>
                </div>
                <div class="col-xs-5">
                    <textarea  type="text" class="form-control" name="standart1"></textarea>
                </div>
              </div>
            </div>
        </div>
        <div class="form-group">
            <div class="box-body">
              <div class="row">
                <div class="col-xs-1">
                    <label class="control-label">Tugas 2</label>
                </div>
                <div class="col-xs-5">
                    <textarea  type="text" class="form-control" name="faktor2"></textarea>
                </div>
                <div class="col-xs-5">
                    <textarea  type="text" class="form-control" name="standart2"></textarea>
                </div>
              </div>
            </div>
        </div>
        <div class="form-group">
            <div class="box-body">
              <div class="row">
                <div class="col-xs-1">
                    <label class="control-label">Tugas 3</label>
                </div>
                <div class="col-xs-5">
                    <textarea  type="text" class="form-control" name="faktor3"></textarea>
                </div>
                <div class="col-xs-5">
                    <textarea  type="text" class="form-control" name="standart3"></textarea>
                </div>
              </div>
            </div>
        </div>
        <div class="form-group">
            <div class="box-body">
              <div class="row">
                <div class="col-xs-1">
                    <label class="control-label">Tugas 4</label>
                </div>
                <div class="col-xs-5">
                    <textarea  type="text" class="form-control" name="faktor3" ></textarea>
                </div>
                <div class="col-xs-5">
                    <textarea  type="text" class="form-control" name="standart4" ></textarea>
                </div>
              </div>
            </div>
        </div>
        <div class="form-group">
            <div class="box-body">
              <div class="row">
                <div class="col-xs-1">
                    <label class="control-label">Tugas 5</label>
                </div>
                <div class="col-xs-5">
                    <textarea  type="text" class="form-control" name="faktor5"></textarea>
                </div>
                <div class="col-xs-5">
                    <textarea  type="text" class="form-control" name="standart5"></textarea>
                </div>
              </div>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
    </form>
    <?php else: ?>
    <div class="callout callout-info">
        <h4>Pengajuan Semester ini Belum Diapprove Pejabat Penilai</h4>

        <p>Add the layout-top-nav class to the body tag to get this layout. This feature can also be used with a
        sidebar! So use this class if you want to remove the custom dropdown menus from the navbar and use regular
        links instead.</p>
    </div>
    <?php endif ?>
</section>
<!-- /.content -->


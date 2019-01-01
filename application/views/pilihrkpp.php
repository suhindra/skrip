

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Pemilihan Rekan Kerja dan Pejabat Penilai
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pemilihan Rekan Kerja dan Pejabat Penilai</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <!-- Main row -->
    <?php if ($pengajuan > 0): ?>
    <div class="row">
        <form action="pilihrkpp/create" method="post" class="form-group">
            <!-- Left col -->
            <section class="col-lg-6 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="box box-solid  bg-aqua">
                    <div class="box-header">
                        <i class="fa fa-user"></i>
                        <h3 class="box-title">
                            Silahkan Pilih Rekan Kerja Anda
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="input-group">
                            <select class="form-control select2" name="rk" style="width: 100%;">
                                <?php foreach ($users as $item): ?>
                                <option value="<?php echo $item['id']; ?>"><?php echo $item['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /.nav-tabs-custom -->
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-6 connectedSortable">
                <!-- Map box -->
                <div class="box box-solid bg-light-blue-gradient">
                    <div class="box-header">
                        <i class="fa fa-user"></i>
                        <h3 class="box-title">
                            Silahkan Pilih Pejabat Penilai Anda
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="input-group">
                            <select class="form-control select2" name="pp" style="width: 100%;">
                                <?php foreach ($users as $item): ?>
                                <option value="<?php echo $item['id']; ?>"><?php echo $item['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="box-footer clearfix">
                        <input type="submit" value="submit" name="submit" class="pull-right btn btn-default"/>
                    </div>
                </div>
                <!-- /.box -->
            </section>
            <!-- right col -->
        </form>
    </div>        
    <?php else: ?>
    <div class="callout callout-info">
        <h4>Anda Telah Melakukan Pengajuan Semester ini</h4>

        <p>Add the layout-top-nav class to the body tag to get this layout. This feature can also be used with a
        sidebar! So use this class if you want to remove the custom dropdown menus from the navbar and use regular
        links instead.</p>
    </div>
    <?php endif ?>
    <!-- /.row (main row) -->
</section>
<!-- /.content -->


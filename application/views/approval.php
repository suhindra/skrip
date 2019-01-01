

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Penilaian Generik Rekan Kerja / Anggota Yang Dinilai
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Penilaian Generik Rekan Kerja / Anggota Yang Dinilai</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header with-border">
	        <h3 class="box-title">Permintaan penilaian dari Anggota Yang ingin Dinilai </h3>
	    </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered">
                <tr>
                    <th>No.</th>
                    <th>Nama Pemohon</th>
                    <th>Tanggal Pemohon</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($all_pengajuan as $item): ?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$item['nama']?></td>
                    <td><?=$item['tanggal_pengajuan']?></td>
                    <td><?=$item['tanggal_pengajuan']?></td>
                    <td>
                        <button type="button" class="btn btn-block btn-success">Terima</button>
                        <button type="button" class="btn btn-block btn-warning">Tolak</button>
                    </td>
                </tr>    
                <?php 
                $no++;
                endforeach ?>
            </table>
        </div>
    </div>
</section>
<!-- /.content -->


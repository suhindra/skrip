

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
	        <h3 class="box-title">Penilaian Generik Rekan Kerja / Anggota Yang Dinilai </h3>
	    </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered">
                <tr>
                    <th>No.</th>
                    <th>Faktor Kinerja</th>
                    <th>Pencapaian Kinerja</th>
                </tr>
                <?php $no=1;
                foreach ($generik as $item): ?>
                <tr>
                    <td><?php echo $no;?>.</td>
                    <td><?php echo $item['faktor_kinerja'];?></td>
                    <td>
                        <div class="form-group">
                            <div class="radio">
                                <label>
                                <input type="radio" name="options<?php echo $no;?>" value="1" checked="">
                                1
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                <input type="radio" name="options<?php echo $no;?>" value="3" checked="">
                                3
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                <input type="radio" name="options<?php echo $no;?>" value="5" checked="">
                                5
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                <input type="radio" name="options<?php echo $no;?>" value="8" checked="">
                                8
                                </label>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php 
                $no++;
            	endforeach ?>
                <!-- <tr>
                    <td colspan="3">Total Nilai Generik</td>
                    <th>
                        <font size="+2">
                        <div id="rTotalGenerikPP"></div>
                    </th>
                </tr>
                <tr>
                    <td colspan="3">Total Nilai Akhir Generik x <input type="text" name="c_PPbobot" id="c_PPbobot" size="1" value="35" onChange="updateDB('c_PPbobot',this.value);" onFocus="document.getElementById('c_PPbobot').select();" onClick="document.getElementById('c_PPbobot').select();"> %</td>
                    <th>
                        <font size="+2">
                        <div id="rTotalGenerikPPA"></div>
                    </th>
                </tr> -->
                <tr>
                    <td colspan="4"><textarea name="c_PPcatatan" rows="3" cols="40" onChange="updateDB('c_PPcatatan',this.value);" placeholder="Catatan"></textarea></td>
                </tr>
            </table>
        </div>
    </div>
</section>
<!-- /.content -->




<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Penilaian Spesifik
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Penilaian Spesifik</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="box-header with-border">
        <h3 class="box-title">Penilaian Spesifik</h3>
    </div>
    <div class="box-body">
        <table border="1" cellspacing="0" cellpadding="3" style="border: 0px">
            <tr>
                <th>No.</th>
                <th>Faktor Kinerja</th>
                <th>Standar Kinerja</th>
                <th>Pencapaian Kinerja</th>
                <th>TOTAL</th>
            </tr>
            <tr>
                <td align="center">1.</td>
                <td>
                    <div id="KSfk1">Bertanggungjawab pada terlaksananya proses Usulan Kenaikan Pangkat ( UKP ) untuk anggota Polri dan Ujiian Dinas Kenaikan Pangkat ( UDKP ) untuk PNS Polri,</div>
                </td>
                <td>
                    <div id="KSsk1">Terlaksananya proses usulan UKP utk Polri dan UDKP utk PNS Polri 2 X berkas dan dilaksananakannya penyumpahan pangkat PNS 1 X</div>
                </td>
                <td nowrap>
                    <input type="radio" name="S1" id="S11" onClick="calcSMK(document.catt.c_KSnilai1,'c_KSnilai1','1');"> 1
                    <input type="radio" name="S1" id="S13" onClick="calcSMK(document.catt.c_KSnilai1,'c_KSnilai1','3');"> 3
                    <input type="radio" name="S1" id="S15" onClick="calcSMK(document.catt.c_KSnilai1,'c_KSnilai1','5');"> 5
                    <input type="radio" name="S1" id="S18" onClick="calcSMK(document.catt.c_KSnilai1,'c_KSnilai1','8');" checked> 8
                </td>
                <td align="center"><input type="text" class="roundedC" name="c_KSnilai1" id="c_KSnilai1" size="1" value="8" onChange="if (chkSMKValue(this)) calcSMK(document.catt.c_KSnilai1,'c_KSnilai1',this.value); chRadio('S1',this.value);" onFocus="document.getElementById('c_KSnilai1').select();" onClick="document.getElementById('c_KSnilai1').select();" onKeyDown="return tabOnEnter(document.getElementById('c_KSnilai2'), event);"></td>
            </tr>
            <tr>
                <td align="center">2.</td>
                <td>
                    <div id="KSfk2">Bertanggungjawab pada terlaksananya pengusulan pembinaan karir personel Polri dan PNS, yang meliputi proses mutasi dan pemberhentian dalam jabatan</div>
                </td>
                <td>
                    <div id="KSsk2">Terlaksananya proses mutasi dan pemberhentian serta pengangkatan jabatan personel baik Polri dan PNS sebanyak 5 X giat sidang DPK</div>
                </td>
                <td>
                    <input type="radio" name="S2" id="S21" onClick="calcSMK(document.catt.c_KSnilai2,'c_KSnilai2','1');"> 1
                    <input type="radio" name="S2" id="S23" onClick="calcSMK(document.catt.c_KSnilai2,'c_KSnilai2','3');"> 3
                    <input type="radio" name="S2" id="S25" onClick="calcSMK(document.catt.c_KSnilai2,'c_KSnilai2','5');"> 5
                    <input type="radio" name="S2" id="S28" onClick="calcSMK(document.catt.c_KSnilai2,'c_KSnilai2','8');" checked> 8
                </td>
                <td align="center"><input type="text" class="roundedC" name="c_KSnilai2" id="c_KSnilai2" size="1" value="8" onChange="if (chkSMKValue(this)) calcSMK(document.catt.c_KSnilai1,'c_KSnilai2',this.value); chRadio('S2',this.value);" onFocus="document.getElementById('c_KSnilai2').select();" onClick="document.getElementById('c_KSnilai2').select();" onKeyDown="return tabOnEnter(document.getElementById('c_KSnilai3'), event);"></td>
            </tr>
            <tr>
                <td align="center">3.</td>
                <td>
                    <div id="KSfk3">Bertanggungjwab pada terlaksananya penyiapan calon peserta penugasan personel diluar struktur Polri baik dalam dan luar negeri yang disesuaikan dengan Program Mabes Polri.</div>
                </td>
                <td>
                    <div id="KSsk3">Terlaksananya penyiapan calon peserta penugasan personel diluar sturktur Polri baik didalam dan luar negeri yang disesuaikan dengan Program dari Mabes Polri.</div>
                </td>
                <td>
                    <input type="radio" name="S3" id="S31" onClick="calcSMK(document.catt.c_KSnilai3,'c_KSnilai3','1');"> 1
                    <input type="radio" name="S3" id="S33" onClick="calcSMK(document.catt.c_KSnilai3,'c_KSnilai3','3');"> 3
                    <input type="radio" name="S3" id="S35" onClick="calcSMK(document.catt.c_KSnilai3,'c_KSnilai3','5');"> 5
                    <input type="radio" name="S3" id="S38" onClick="calcSMK(document.catt.c_KSnilai3,'c_KSnilai3','8');" checked> 8
                </td>
                <td align="center"><input type="text" class="roundedC" name="c_KSnilai3" id="c_KSnilai3" size="1" value="8" onChange="if (chkSMKValue(this)) calcSMK(document.catt.c_KSnilai1,'c_KSnilai3',this.value); chRadio('S3',this.value);" onFocus="document.getElementById('c_KSnilai3').select();" onClick="document.getElementById('c_KSnilai3').select();" onKeyDown="return tabOnEnter(document.getElementById('c_KSnilai4'), event);"></td>
            </tr>
            <tr>
                <td align="center">4.</td>
                <td>
                    <div id="KSfk4">Bertanggungjawab pada terlaksananyakegiatan Assessment center jabatan AKBP ke bawah pada tingkat Polda dan Satwil</div>
                </td>
                <td>
                    <div id="KSsk4">Terlaksananya kegiatan assessment center di lingkungan Polda DIY 6 X giat</div>
                </td>
                <td>
                    <input type="radio" name="S4" id="S41" onClick="calcSMK(document.catt.c_KSnilai4,'c_KSnilai4','1');"> 1
                    <input type="radio" name="S4" id="S43" onClick="calcSMK(document.catt.c_KSnilai4,'c_KSnilai4','3');"> 3
                    <input type="radio" name="S4" id="S45" onClick="calcSMK(document.catt.c_KSnilai4,'c_KSnilai4','5');"> 5
                    <input type="radio" name="S4" id="S48" onClick="calcSMK(document.catt.c_KSnilai4,'c_KSnilai4','8');" checked> 8
                </td>
                <td align="center"><input type="text" class="roundedC" name="c_KSnilai4" id="c_KSnilai4" size="1" value="8" onChange="if (chkSMKValue(this)) calcSMK(document.catt.c_KSnilai1,'c_KSnilai4',this.value); chRadio('S4',this.value);" onFocus="document.getElementById('c_KSnilai4').select();" onClick="document.getElementById('c_KSnilai4').select();" onKeyDown="return tabOnEnter(document.getElementById('c_KSnilai5'), event);"></td>
            </tr>
            <tr>
                <td align="center">5.</td>
                <td>
                    <div id="KSfk5">Bertanggungjwab pada terlaksananya pembinaan personel Polda DIY .</div>
                </td>
                <td>
                    <div id="KSsk5">Terlaksananya sosialisasi atau supervise terkait dengan giat Bin karir personel Polda DIY 2 X giat</div>
                </td>
                <td>
                    <input type="radio" name="S5" id="S51" onClick="calcSMK(document.catt.c_KSnilai5,'c_KSnilai5','1');"> 1
                    <input type="radio" name="S5" id="S53" onClick="calcSMK(document.catt.c_KSnilai5,'c_KSnilai5','3');"> 3
                    <input type="radio" name="S5" id="S55" onClick="calcSMK(document.catt.c_KSnilai5,'c_KSnilai5','5');"> 5
                    <input type="radio" name="S5" id="S58" onClick="calcSMK(document.catt.c_KSnilai5,'c_KSnilai5','8');" checked> 8
                </td>
                <td align="center"><input type="text" class="roundedC" name="c_KSnilai5" id="c_KSnilai5" size="1" value="8" onChange="if (chkSMKValue(this)) calcSMK(document.catt.c_KSnilai1,'c_KSnilai5',this.value); chRadio('S5',this.value);" onFocus="document.getElementById('c_KSnilai5').select();" onClick="document.getElementById('c_KSnilai5').select();" onKeyDown="return tabOnEnter(document.getElementById('c_KSnilai1'), event);"></td>
            </tr>
            <tr>
                <td colspan="4">Total Nilai Spesifik</td>
                <th>
                    <font size="+2">
                    <div id="rTotalSpesifik"></div>
                </th>
            </tr>
            <tr>
                <td colspan="4">Total Nilai Akhir Spesifik x <input type="text" name="c_KSbobot" id="c_KSbobot" size="1" value="65" onChange="updateDB('c_KSbobot',this.value);" onFocus="document.getElementById('c_KSbobot').select();" onClick="document.getElementById('c_KSbobot').select();"> %</td>
                <th>
                    <font size="+2">
                    <div id="rTotalSpesifikA"></div>
                </th>
            </tr>
            <tr>
                <td colspan="5"><textarea name="c_KScatatan" rows="3" cols="60" onChange="updateDB('c_KScatatan',this.value);" placeholder="Catatan"></textarea></td>
            </tr>
        </table>
    </div>
</section>
<!-- /.content -->


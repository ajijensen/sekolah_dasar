<style type="text/css">
  *{
    font-family: Arial;
    font-size: 12px;
    margin:0px;
    padding:0px;
  }
  @page {
   margin-left:3cm 2cm 2cm 2cm;
 }
 .container{
  margin-top: 10px;
  width: 780px;
  margin-left: auto;
  margin-right: auto;
}
table.grid{
  width:20.4cm ;
  font-size: 9pt;
  border-collapse:collapse;
}
table.grid th{
  padding-top:1mm;
  padding-bottom:1mm;
}
table.grid th{
  background: #F0F0F0;
  border: 0.2mm solid #000;
  text-align:center;
  padding-left:0.2cm;
}
table.grid tr td{
  padding-top:0.5mm;
  padding-bottom:0.5mm;
  padding-left:2mm;
  border:0.2mm solid #000;
}
h1{
  font-size: 18pt;
}
h2{
  font-size: 14pt;
}
h3{
  font-size: 10pt;
}
.header{
  display: block;
  width:20.4cm ;
  margin-bottom: 0.3cm;
  text-align: center;
  margin-top: 10px;
}
.attr{
  font-size:9pt;
  width: 100%;
  padding-top:2pt;
  padding-bottom:2pt;
  border-top: 0.2mm solid #000;
  border-bottom: 0.2mm solid #000;
}
.pagebreak {
  width:20cm ;
  page-break-after: always;
  margin-bottom:10px;
}
.akhir {
  width:20cm ;
}
.page {
  font-size:13px;
  padding-top: 20px;
}
.footer{
  padding-top: 20px;
  margin-left: 600px;
}
</style>
<?php
$ambil = $koneksi->query("SELECT * FROM tb_rapor INNER JOIN tb_siswa
  ON tb_rapor.NIS=tb_siswa.NIS
  WHERE tb_rapor.NIS='$_GET[kd]'");
$detailnilai = $ambil ->fetch_assoc(); 
?>
</style>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="7">
      <div align="center">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td colspan="3"><div align="center" class="style9b">
              <div align="left" class="style19b"><strong><u>Rapor Nilai Siswa</u></strong></div>
            </div></td>
          </tr>
          <tr>
            <td width="11%" height="18" class="style9">NIS</td>
            <td width="1%" class="style9"><div align="center">:</div></td>
            <td width="14%" class="style9"><?php echo $detailnilai['NIS']; ?></td>
          </tr>
          <tr>
            <td width="11%" height="18" class="style9">Nama Lengkap</td>
            <td width="1%" class="style9"><div align="center">:</div></td>
            <td width="14%" class="style9"><?php echo $detailnilai['nama_siswa']; ?></td>
          </tr>
          <tr>
            <td width="11%" height="18" class="style9">Semester</td>
            <td width="1%" class="style9"><div align="center">:</div></td>
            <td width="14%" class="style9"><?php echo $detailnilai['semester']; ?></td>
          </tr>
          <tr>
            <td width="11%" height="18" class="style9">Tahun Ajaran</td>
            <td width="1%" class="style9"><div align="center">:</div></td>
            <td width="14%" class="style9"><?php echo $detailnilai['tahun_pelajaran']; ?></td>
          </tr>
        </table>
      </div>
    </td>
  </tr>
</table>
</br>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="7">
      <hr />      </td>
    </tr>
    <tr>
      <td width="10s" class="style6"><div align="left">No</div></td>
      <td width="95" class="style6"><div align="center">Kode Mata Pelajaran</div></td>
      <td width="100s" class="style6"><div align="center">Nama Mata Pelajaran</div></td>
      <td width="94" class="style6"><div align="center">Nilai</div></td>
      <td width="93s" class="style6"><div align="center">Indeks</div></td>
    </tr>
    <tr>
      <td colspan="7">
        <hr />      </td>
      </tr>
      <?php $nomor=1; ?>
      <?php $ambil = $koneksi->query("SELECT tb_rapor.kode_mapel,tb_mapel.nama_mapel,tb_rapor.nilai,tb_rapor.indeks
                  FROM tb_rapor
                  JOIN tb_siswa
                  ON tb_rapor.NIS=tb_siswa.NIS
                  JOIN tb_mapel
                  ON tb_rapor.kode_mapel=tb_mapel.kode_mapel"); ?>
      <?php while ($pecah = $ambil->fetch_assoc()) { ?>
        <tr>
          <td width="10s" class="style6"><div align="left"><?php echo $nomor; ?></div></td>
          <td width="100s" class="style6"><div align="center"><?php echo $pecah['kode_mapel'] ?></div></td>
          <td width="94" class="style6"><div align="center"><?php echo $pecah['nama_mapel'] ?></div></td>
          <td width="93s" class="style6"><div align="center"><?php echo $pecah['nilai'] ?></div></td>
          <td width="95" class="style6"><div align="center"><?php echo $pecah['indeks'] ?></div></td>
        </tr>
      <?php } ?>
    </table>
    <table width="98%" border="0" align="center">
     <tr>
       <td colspan="3">&nbsp;</td>
       <td colspan="3">&nbsp;</td>
       <td colspan="3">&nbsp;</td>
     </tr>
     <tr>
       <td colspan="3">&nbsp;</td>
       <td colspan="3">&nbsp;</td>
       <td colspan="3">&nbsp;</td>
     </tr>
     <tr>
       <td colspan="3">&nbsp;</td>
       <td colspan="3">&nbsp;</td>
       <td colspan="3">&nbsp;</td>
     </tr>
   </table>
   <br>
   <div align="center" class="cetak no-print">
     <a href="" onclick="print();">(Cetak)</a>
   </div>
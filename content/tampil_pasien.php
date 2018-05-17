<?php
include "../include/connect.php"; 

$hasil=mysql_query("select * from pasien order by kode_pasien");

?>

<div align="center">
  <h2><u>Data Pasien Rumah Sakit</u></h2>
  <table width="978" border="1">
    <tr>
      <th width="48" scope="col">Kode Pasien </th>
      <th width="147" scope="col">Nama Pasien </th>
      <th width="102" scope="col">Tanggal Lahir </th>
      <th width="96" scope="col">Tempat Lahir </th>
      <th width="69" scope="col">Jenis Kelamin </th>
      <th width="105" scope="col">Alamat Pasien </th>
      <th width="30" scope="col">Usia</th>
      <th width="160" scope="col">Jenis Penyakit</th>
      <th width="74" scope="col">Rincian</th>
    </tr>
<?php
while ($baris = mysql_fetch_array($hasil)){
  
echo "
<tr>
<td>$baris[kode_pasien]</td>
<td>$baris[nama_pasien]</td>
<td>$baris[tanggal_lahir]</td>
<td>$baris[tempat_lahir]</td>
<td>$baris[jenis_kelamin]</td>
<td>$baris[alamat_pasien]</td>
<td>$baris[usia]</td>
<td>$baris[penyakit_diderita]</td>
<td><a href=rincian_pasien.php?kodepasien=$baris[kode_pasien]>Lihat Rincian</a></td>
</tr>
";
}

?>	
  </table>
</div>
<html>
<head>
<title>Form Registrasi DIMASEDU INSTITUE </title>
<style>
 body
 {
 margin:50px;
 font-family:Arial;
 background:#eee;
 }
 #wrap
 {
 margin:auto;
 width:auto;
 border:5px solid #ccc;
 padding:5px;
 background:#fff;
 box-shadow:4px 4px 10px 2px #888;
 }
 #content
 {
 padding:3px;
 }
 #content h2
 {
 font-size:22px;
 font-weight:bold;
 color:#FF9900;
 }
 .t_reg
 {
 padding:4px;
 }
 .t_reg tr td
 {
 font-size:12px;
 font-weight:bold;
 }
 .teks
 {
 padding:5px;
 border:1px #ccc solid;
 }
 .teksarea
 {
 padding:5px;
 border:1px #ccc solid;
 }
 .tombol
 {
 padding:5px;
 background:#cc0000;
 color:#fff;
 border:1px solid #fff;
 font-size:11px;
 font-weight:bold;
 }
 #footer
 {
 font-size:11px;
 margin:auto;
 margin-top:20px;
 text-align:center;
 }
 #footer a
 {
 text-decoration:none;
 color:#000;
 font-weight:bold;
 }
 </style>
</head>
<body>
<div id="wrap">
 <div id="content">
 <h2>
USULAN JUDUL TUGAS AKHIR</h2>
<?php
 //deklarasikan awal form
 form_open('registrasi/proses',array('name'=>'regForm', 'method'=>'POST'));
?>
<table>
<tr>  <td>Nama Lengkap</td>  <td>:</td>  <td><?php echo $f_nama;?></td>  </tr>
<tr>  <td>NIM</td>  <td>:</td>  <td><?php echo $f_nim;?></td>  </tr>
<tr>  <td>JUDUL</td>  <td>:</td>  <td><?php echo $f_judul;?></td>  </tr>

<tr>  <td>Deskripsi</td>  <td>:</td>  <td><?php echo $f_deskripsi;?></td>  </tr>


<tr>  <td>Jurusan</td>  <td>:</td>  
<td><?php echo $f_jur1;?> Manajemen Informatika

<?php echo $f_jur2;?> Teknik Komputer

<?php echo $f_jur3;?> Teknik Informatika</td>  </tr>
<tr>  <td></td>  <td></td>  
<td><?php echo $f_tombol;?></td>  </tr>
</table>
<?php
 //deklarasikan akhir form
 form_close();
 ?>
</div>
</div>


</div>
</body>
</html>
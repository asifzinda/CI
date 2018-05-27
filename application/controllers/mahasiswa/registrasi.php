<?php
if(!defined('BASEPATH')) exit('Keluar dari sistem');
class Registrasi extends CI_Controller
{
 public function __construct()
 {
 parent::__construct();
 //load helpernya
 $this->load->helper('form');
}
public function index()
{
//membuat form nama
$ar_name = array('name'=>'nama',
'id'=>'nama',
'value'=>'',
'class'=>'teks',
'size'=>'40'
);
$data['f_nama'] = form_input($ar_name);
//NIM
$ar_nim = array('name'=>'nim',
'id'=>'nim',
'value'=>'',
'class'=>'teks',
'size'=>'40'
);
$data['f_nim'] = form_input($ar_nim);
//JUDUL
//NIM
$ar_judul = array('name'=>'judul',
'id'=>'judul',
'value'=>'',
'class'=>'teks',
'size'=>'40'
);
$data['f_judul'] = form_input($ar_judul);
//membuat form alamat
$ar_deskripsi = array(
'name'=>'deskripsi',
'id'=>'deskripsi',
'rows'=>'5',
'cols'=>'40',
'class'=>'teksarea'
);
$data['f_deskripsi'] = form_textarea($ar_deskripsi);

//membuat form jurusan
$ar_jur1 = array(
'name'=>'jurusan',
'id'=>'jurusan',
'value'=>'mif'
);
$ar_jur2 = array(
'name'=>'jurusan',
'id'=>'jurusan',
'value'=>'tkk'
);
$ar_jur3 = array(
'name'=>'jurusan',
'id'=>'jurusan',
'value'=>'tif'
);
$data['f_jur1'] = form_radio($ar_jur1);
$data['f_jur2'] = form_radio($ar_jur2);
$data['f_jur3'] = form_radio($ar_jur3);
//membuat tombol
$ar_tom = array(
'name'=>'submit',
'id'=> 'submit',
'value'=>'Simpan',
'class'=>'tombol'
);
$data['f_tombol'] = form_submit($ar_tom);
$this->load->view('form_registrasi', $data);
}
//end of class
}
?>
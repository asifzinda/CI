<html>
<head>
<title> Halaman Pencarian </title>
</head>
<body>
<form name="formcari" method="post" action="search_exe.php">
<table width="330" border="0" align="center" cellpadding="0">
<tr bgcolor="orange">
<td height="25" colspan="3">
<strong> Student Searching ! </strong>
</td>
</tr>
<tr> <td>  Name </td>
<td> <input type="text" name="name"> </td>
</tr>
<td></td>
<td> <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="search" > </td>
</table>
</form>
</body>
</html>

Simpan dengan nama formsearching.php
Nb: script diatas adalah HTML script biasa yang akan menampilkan form. Perhatian bagian action="search_exe.php", bagian ini dimaksudkan bahwa form akan diproses oleh script search_exe.php


Langkah 5 : Membuat script pemrosesan dan menampilkan hasil searching
Ketikkan script berikut,

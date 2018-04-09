<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tugas WeB</title>
<link rel="stylesheet" href="style.css" />

</head>
<body>
<div id="main">
    <fieldset style='width:400'><legend style='font-size:16pt'>Edit Data Mahasiswa</legend>
            <?php 
            include('koneksi.php');
            $nim = $_GET['nim'];

            $hasil = mysql_query("select * from mahasiswa where nim=$nim") or die(mysql_error());

            while($data=mysql_fetch_array($hasil))
            {
                $nim=$data['nim'];
                $nama=$data['nama'];
                $prodi=$data['prodi'];
                
                
            echo "<form name=form_mahasiswa METHOD=POST action=proses_edit.php onsubmit=return validasi();>
                <table>
                        <tr>
                            <td height=50>nim</td>
                            <td>:</td>
                            <td><input name=mahasiswa_nim type=text size=20 maxlength=10 value=\"$nim\"></td>
                        </tr>
                        <tr>
                            <td width=150 height=32>nama</td>
                            <td width=8>:</td>
                            <td><input name=mahasiswa_nama type=text size=40 maxlength=50 value=\"$nama\"></td>
                        </tr>
                        <tr>
                            <td width=150 height=32>prodi</td>
                            <td width=8>:</td>
                            <td><input name=mahasiswa_prodi type=text size=40 maxlength=50 value=\"$prodi\"></td>
                        </tr>
                        
                        
                        <tr>
                            <td colspan=3></td>
                        </tr>
                        <tr>
                            <td height=32 colspan=2>&nbsp;</td>
                            <td><input type=SUBMIT name=submit Value=Simpan />&nbsp;
                                <a href=view_data.php>[Back]</a>
                            </td>
                        </tr>
                 </fieldset>
                 </table>";
            echo "</form>";
            }
            ?>
          
</div>
</body>
</html>
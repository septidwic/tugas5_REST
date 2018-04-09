<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tugas WeB</title>
<link rel="stylesheet" href="style.css" />

</head>
<body>
<div id="main">

            <fieldset width="300px">
                <legend style='font-size:16pt'>Input Data Mahasiswa</legend>
                <form name="form_mhs" METHOD="POST" action="proses_input.php" onsubmit="return validasi();">
                    <table>
                        <tr>
                            <td height="50">nim</td>
                            <td>:</td>
                            <td><input name="mahasiswa_nim" type="text" size="20" maxlength="10" /></td>
                        </tr>
                        <tr>
                            <td width="150" height="32">nama</td>
                            <td width="8">:</td>
                            <td><input name="mahasiswa_nama" type="text" size="40" maxlength="50" /></td>
                        </tr>
                        <tr>
                            <td width="150" height="32">prodi</td>
                            <td width="8">:</td>
                            <td><input name="mahasiswa_prodi" type="text" size="40" maxlength="50" /></td>
                        </tr>
                        
                        
                        <tr>
                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <td height="32" colspan="2">&nbsp;</td>
                            <td><input type="SUBMIT" name="submit" Value="Simpan" />&nbsp;
                                <input type="RESET" name="Reset" Value="Batal" />
                            </td>
                        </tr>
          
            </table>
            </form>
            </fieldset>
            <a href="view_data.php">&nbsp&nbsp[Lihat Data]</a>
    </div>
</body>
</html>>
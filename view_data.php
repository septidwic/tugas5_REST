<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tugas WeB</title>
<link rel="stylesheet" href="style.css" />


</head>
<body>
<div id="main">
               <h3 align="center"><font face="Tahoma, sans-serif" color=Blue ><b>
             Daftar Data Mahasiswa</b></font></h3><hr>
                
             <a href="input_data.php">+Tambah Data</a>
            <br>
                <center>
                <table width="792" border=0>
                <tr bgcolor=orange>
                    <td width="111" align="center">nim</td>
                    <td width="151" align="center">nama</td>
                    <td align="center" width="38">prodi</td>
                    <td align="center" width="98">Action</td>
                </tr> 
                <?php
                $i=0;
                $nim=0;
                include('koneksi.php');
                
                $tampil="select * from mahasiswa";
                $hasil=mysql_query($tampil);
                
                while($row=mysql_fetch_array($hasil))
                {
                echo"
                    <tr bgcolor=#BBBCB5>
                        
                        <td>$row[nim]</td>
                        <td>$row[nama]</td>
                        <td>$row[prodi]</td>
                        
                        <td align=center ><a href=update.php?nim=$row[nim]>Edit</a>
                            <a href=delete_data.php?nim=$row[nim]>| Delete</a> 
                           </td>
                    </tr>
                    ";
                $nim++;
                }
                
                ?>
                </table>
                </center>
      
        
  
</div>
</body>
</html>
<html> 
    
<head> 
    <title>Form Input Mahasiswa</title> 
</head> 

<body> 
    <center> 
        <form action="<?= base_url('mahasiswa/cetak'); ?>"
method="post"> 
            <table> 
                <tr> 
                    <th colspan="3"> 
                        Form Input Data Mahasiswa
                    </th> 
                </tr>
                <tr> 
                    <td colspan="3"> 
                        <hr> 
                    </td> 
                </tr> 
                <tr> 
                    <th>Nama Mahasiswa</th> 
                    <th>:</th> 
                    <td> 
                        <input type="text" name="nama" id="nama"> 
                    </td> 
                </tr> 
                <tr> 
                    <th>NIM</th> 
                    <td>:</td> 
                    <td> 
                        <input type="text" name="nim" id="nim">
                    </td> 
                </tr> 
                <tr> 
                    <th>Kelas</th> 
                    <th>:</th> 
                    <td> 
                        <input type="text" name="kelas" id="kelas"> 
                    </td> 
                </tr> 
                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="date" name="tgl" id="tgl">
                    </td>
                </tr>             
            </tr>
                <tr> 
                    <th>Tempat Lahir</th> 
                    <th>:</th> 
                    <td> 
                        <input type="text" name="tempat" id="tempat"> 
                    </td> 
                </tr> 
                <tr> 
                    <th>Alamat</th> 
                    <th>:</th> 
                    <td> 
                        <input type="text" name="alamat" id="alamat"> 
                    </td> 
                </tr> 
                <tr> 
                    <th>Jenis Kelamin</th> 
                    <td>:</td> 
                    <td> 
                        <select name="jenis" id="jenis"> 
                            <option value="">Pilih Jenis Kelamin</option> 
                            <option value="Perempuan">Perempuan</option> 
                            <option value="Laki-Laki">Laki-Laki</option> 
                        </select> 
                    </td> 
                </tr> 

                <tr> 
                    <th>Agama</th> 
                    <td>:</td> 
                    <td> 
                        <select name="agama" id="agama"> 
                            <option value="">Pilih Agama</option> 
                            <option value="Islam">Islam</option> 
                            <option value="Kristen">Kristen</option> 
                            <option value="Katolik">Katolik</option> 
                            <option value="Budha">Budha</option> 
                            <option value="Hindu">Hindu</option> 
                            <option value="Protestan">Protestan</option> 
                            <option value="Khonghucu">Khonghucu</option>
                        </select> 
                    </td> 
                </tr> 
                <tr> 
                    <td colspan="3" align="center"> 
                        <input type="submit" value="Submit"> 
                    </td> 
                </tr> 
            </table> 
        </form> 
    </center> 
</body> 

</html>

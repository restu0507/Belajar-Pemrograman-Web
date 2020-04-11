<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry Mahasiswa</title>
</head>
<body>
  <form action=" " method="post">
    <table width="750" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
      <tr>
        <td height="60" align="center" bgcolor="grey"><strong><font color="#FFFFFF"> MASUKKAN DATA MAHASISWA </font></strong></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="750" border="0" align="center" cellpadding="5" cellspacing="0">
            <tr>
              <td width="113">NIM</td>
              <td width="15">:</td>
              <td width="237"><input name="nim" type="text" id="nim" placeholder="Masukkan NIM Anda"></td>
            </tr>
            <tr>
              <td>Program Studi</td>
              <td>:</td>
              <td><select name="prodi">
              <option>- Pilih Program Studi -</option>
                <option value="Teknik Informatika S1">Teknik Informatika S1</option>
                <option value="Sistem Informasi S1">Sistem Informasi S1</option>
                <option value="Teknik Informatika D3">Teknik Informatika D3</option>
              </select>
            </td>
            </tr>
            <tr>
            <td>Nilai Tugas</td>
            <td> : </td>
            <td><input type="text" name="nilai_tugas" id="nilai_tugas" placeholder="Nilai 0-100"></td>
            </tr>
            <tr>
            <td>Nilai UTS</td>
            <td> : </td>
            <td><input type="text" name="nilai_uts" id="nilai_uts" placeholder="Nilai 0-100"></td>
            </tr>
            <tr>
            <td>Nilai UAS</td>
            <td> : </td>
            <td><input type="text" name="nilai_uas" id="nilai_uas" placeholder="Nilai 0-100"></td>
            </tr>
            <tr>
            <td>Catatan Khusus</td>
            <td> : </td>
            <td><input type="checkbox" name="catatan[]" value="Kehadiran >= 70%" />
            <label for="catatan1"> Kehadiran >= 70% </label><br>
            <input type="checkbox" name="catatan[]" value="Interaktif di kelas" />
            <label for="catatan2">Interaktif Di Kelas </label><br>
            <input type="checkbox" name="catatan[]" value="Tidak Terlambat Mengumpulkan Tugas" />
            <label for="catatan3"> Tidak Terlambat Mengumpulkan Tugas </label><br><br>
            <button type="submit" name="kirim">SIMPAN</button>
            </td>
            </tr>
        </td>
      </tr>
    </table>
  </form>
  
  <br>
  <br>
  <?php
    if (isset($_POST['kirim'])) {
        $nim = $_POST['nim'];
        $prodi = $_POST['prodi'];
        $nilai_tugas = $_POST['nilai_tugas'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];

        $nilai_akhir = (0.4 * $nilai_tugas) + (0.3 * $nilai_uts) + (0.3 * $nilai_uas);
        if ($nilai_akhir > 84) {
            $status = 'Lulus';
        } elseif ($nilai_akhir > 70) {
            $status = 'Lulus';
        } elseif ($nilai_akhir > 60) {
            $status = 'lulus';
        } elseif ($nilai_akhir > 50) {
            $status = 'Tidak Lulus';
        } else {
            $status = "Tidak Lulus";
        }

        $selected_catatan = array();
        if (!empty($_POST['catatan'])) {
            foreach ($_POST['catatan'] as $catatan) {
                array_push($selected_catatan, $catatan);
            }
        }
    ?>
        <table border=3>
            <thead>
                <tr>
                    <th>Program Studi</th>
                    <th>NIM</th>
                    <th>Nilai AKhir</th>
                    <th>Status</th>
                    <th>Catatan Khusus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $prodi ?></td>
                    <td><?= $nim ?></td>
                    <td><?= $nilai_akhir ?></td>
                    <td><?= $status ?></td>
                    <td>
                        <?php
                        foreach ($selected_catatan as $catatan_data) {
                            echo $catatan_data . "<br>";
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>

    <?php
    }
    ?>
  
  
</body>
</html>
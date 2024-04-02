<?php
require_once 'Mahasiswa.php';
//tangkap data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kuliah = $_POST['kuliah'];
    $matkul = $_POST['matkul'];
    $nilai = $_POST['nilai'];
    $tombol = $_POST['proses'];

    //buat objek

    $ns1 = new Mahasiswa($nim, $nama, $kuliah, $matkul, $nilai);
    $grade = $ns1->getgrade();
    $predikat = $ns1->getprediket();
    $status = $ns1->getstatus();


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>hasil nilai ujian</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f2f2f2;
            }

            h2 {
                text-align: center;
                margin-top: 20px;
            }

            table {
                width: 80%;
                margin: 0 auto;
                border-collapse: collapse;
            }

            th,
            td {
                padding: 10px;
                border: 1px solid #ddd;
                text-align: left;
            }

            th {
                background-color: #4CAF50;
                color: white;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            .button-container {
                text-align: center;
                margin-top: 20px;
            }

            .button {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                border-radius: 5px;
            }
        </style>
    </head>

    <body>


        <h2 align='center'>Daftar Nilai Ujian Mahasiswa</h2>
        <table border="1" widht="100%" cellpadding="10px" cellspacing="5px" align="center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Kuliah</th>
                    <th>Mata Kuliah</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Predikat</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($tombol)) {
                    $no = 1;
                    echo '<tr>';
                    echo '<td>' . $no . '</td>';
                    echo '<td>' . $ns1->nim . '</td>';
                    echo '<td>' . $ns1->nama . '</td>';
                    echo '<td>' . $ns1->kuliah . '</td>';
                    echo '<td>' . $ns1->matkul . '</td>';
                    echo '<td>' . $ns1->nilai . '</td>';
                    echo '<td>' . $grade . '</td>';
                    echo '<td>' . $predikat . '</td>';
                    echo '<td>' . $status . '</td>';
                    echo '</tr>';
                    $no++;
                }
                ?>
            </tbody>
        </table>
        <div class='button-container'>
            <a href='objMahasiswa.php' class='button'>Kembali << </a>
        </div>
    </body>

    </html>
<?php } ?>
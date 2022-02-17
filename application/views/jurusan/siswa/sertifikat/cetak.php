<!DOCTYPE html>
<html>

<head>
    <title><?= $title_pdf; ?></title>
    <style type="text/css">
        table {
            border-style: double;
            border-width: 3px;
            border-color: white;
        }

        table tr .text2 {
            text-align: right;
            font-size: 13px;
        }

        table tr .text3 {
            text-align: right;
            font-size: 12px;
            line-height: 1.2
        }

        table tr .text {
            text-align: center;
            font-size: 13px;
        }

        table tr .text1 {
            text-align: left;
            font-size: 10px;
        }

        table tr .ttd {
            text-align: left;
            font-size: 13px;
            z-index: 1;
        }

        table tr td {
            font-size: 13px;
        }

        .p {
            color: navy;
        }

        table .text7 {
            font-size: 13px;
            border-color: black;
            text-align: center;
            font-family: sans-serif;
        }

        table tr .justify {
            text-align: justify;
        }
    </style>
</head>

<body>
    <center>


        <table width="550">
            <tr style="font-family: sans-serif;">
                <td>
                    <center>
                        <font size="2" class="text"><b>REKAP NILAI PESERTA DIDIK PKL (<?php echo $sertifikat->program_studi ?>)</b></font><br>
                </td>
            </tr>
            <br><br>

            <table width="550">
                <tr>
                    <td style="width: 30%;">Nama Peserta Didik</td>
                    <td>:</td>
                    <td><?php echo $sertifikat->nama ?></td>
                </tr>

                <tr>
                    <td>NIS</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?php echo $sertifikat->nis ?></td>
                </tr>

                <tr>
                    <td>Kelas</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?php echo $sertifikat->kelas ?></td>
                </tr>
                <br><br>

            </table>





        </table>
        <br>
        <table border="1" width="530">
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Unsur Nilai</th>
                <th colspan="2">Nilai</th>
            </tr>
            <tr>
                <th>Angka</th>
                <th>Huruf</th>
            </tr>
            <tr>
                <td style="text-align: center;">1.</td>
                <td>Disiplin</td>
                <td><?php echo $sertifikat->angka_disiplin ?></td>
                <td><?php
                    if ($sertifikat->angka_disiplin == "") {
                        echo "";
                    } else if ($sertifikat->angka_disiplin >= 0 && $sertifikat->angka_disiplin <= 74) {
                        echo 'D';
                    } else if ($sertifikat->angka_disiplin >= 75 && $sertifikat->angka_disiplin <= 79) {
                        echo 'C';
                    } else if ($sertifikat->angka_disiplin >= 80 && $sertifikat->angka_disiplin <= 89) {
                        echo 'B';
                    } else if ($sertifikat->angka_disiplin >= 90 && $sertifikat->angka_disiplin <= 100) {
                        echo 'A';
                    } else {
                        echo 'Nilai : ' . $sertifikat->angka_disiplin . ' Nilai tidak valid';
                    }
                    ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">2.</td>
                <td>Kerjasama</td>
                <td><?php echo $sertifikat->angka_kerjasama ?></td>
                <td><?php
                    if ($sertifikat->angka_kerjasama == "") {
                        echo "";
                    } else if ($sertifikat->angka_kerjasama >= 0 && $sertifikat->angka_kerjasama <= 74) {
                        echo 'D';
                    } else if ($sertifikat->angka_kerjasama >= 75 && $sertifikat->angka_kerjasama <= 79) {
                        echo 'C';
                    } else if ($sertifikat->angka_kerjasama >= 80 && $sertifikat->angka_kerjasama <= 89) {
                        echo 'B';
                    } else if ($sertifikat->angka_kerjasama >= 90 && $sertifikat->angka_kerjasama <= 100) {
                        echo 'A';
                    } else {
                        echo 'Nilai : ' . $sertifikat->angka_kerjasama . ' Nilai tidak valid';
                    }
                    ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">3.</td>
                <td>Inisiatif</td>
                <td><?php echo $sertifikat->angka_inisiatif ?></td>
                <td><?php
                    if ($sertifikat->angka_inisiatif == "") {
                        echo "";
                    } else if ($sertifikat->angka_inisiatif >= 0 && $sertifikat->angka_inisiatif <= 74) {
                        echo 'D';
                    } else if ($sertifikat->angka_inisiatif >= 75 && $sertifikat->angka_inisiatif <= 79) {
                        echo 'C';
                    } else if ($sertifikat->angka_inisiatif >= 80 && $sertifikat->angka_inisiatif <= 89) {
                        echo 'B';
                    } else if ($sertifikat->angka_inisiatif >= 90 && $sertifikat->angka_inisiatif <= 100) {
                        echo 'A';
                    } else {
                        echo 'Nilai : ' . $sertifikat->angka_inisiatif . ' Nilai tidak valid';
                    }
                    ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">4.</td>
                <td>Kerajinan</td>
                <td><?php echo $sertifikat->angka_kerajinan ?></td>
                <td><?php
                    if ($sertifikat->angka_kerajinan == "") {
                        echo "";
                    } else if ($sertifikat->angka_kerajinan >= 0 && $sertifikat->angka_kerajinan <= 74) {
                        echo 'D';
                    } else if ($sertifikat->angka_kerajinan >= 75 && $sertifikat->angka_kerajinan <= 79) {
                        echo 'C';
                    } else if ($sertifikat->angka_kerajinan >= 80 && $sertifikat->angka_kerajinan <= 89) {
                        echo 'B';
                    } else if ($sertifikat->angka_kerajinan >= 90 && $sertifikat->angka_kerajinan <= 100) {
                        echo 'A';
                    } else {
                        echo 'Nilai : ' . $sertifikat->angka_kerajinan . ' Nilai tidak valid';
                    }
                    ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">5.</td>
                <td>Tanggungjawab</td>
                <td><?php echo $sertifikat->angka_tanggung_jawab ?></td>
                <td><?php
                    if ($sertifikat->angka_tanggung_jawab == "") {
                        echo "";
                    } else if ($sertifikat->angka_tanggung_jawab >= 0 && $sertifikat->angka_tanggung_jawab <= 74) {
                        echo 'D';
                    } else if ($sertifikat->angka_tanggung_jawab >= 75 && $sertifikat->angka_tanggung_jawab <= 79) {
                        echo 'C';
                    } else if ($sertifikat->angka_tanggung_jawab >= 80 && $sertifikat->angka_tanggung_jawab <= 89) {
                        echo 'B';
                    } else if ($sertifikat->angka_tanggung_jawab >= 90 && $sertifikat->angka_tanggung_jawab <= 100) {
                        echo 'A';
                    } else {
                        echo 'Nilai : ' . $sertifikat->angka_tanggung_jawab . ' Nilai tidak valid';
                    }
                    ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">6.</td>
                <td>Kepribadian</td>
                <td><?php echo $sertifikat->angka_kepribadian ?></td>
                <td><?php
                    if ($sertifikat->angka_kepribadian == "") {
                        echo "";
                    } else if ($sertifikat->angka_kepribadian >= 0 && $sertifikat->angka_kepribadian <= 74) {
                        echo 'D';
                    } else if ($sertifikat->angka_kepribadian >= 75 && $sertifikat->angka_kepribadian <= 79) {
                        echo 'C';
                    } else if ($sertifikat->angka_kepribadian >= 80 && $sertifikat->angka_kepribadian <= 89) {
                        echo 'B';
                    } else if ($sertifikat->angka_kepribadian >= 90 && $sertifikat->angka_kepribadian <= 100) {
                        echo 'A';
                    } else {
                        echo 'Nilai : ' . $sertifikat->angka_kepribadian . ' Nilai tidak valid';
                    }
                    ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">7.</td>
                <td>Prestasi</td>
                <td><?php echo $sertifikat->angka_prestasi ?></td>
                <td><?php
                    if ($sertifikat->angka_prestasi == "") {
                        echo "";
                    } else if ($sertifikat->angka_prestasi >= 0 && $sertifikat->angka_prestasi <= 74) {
                        echo 'D';
                    } else if ($sertifikat->angka_prestasi >= 75 && $sertifikat->angka_prestasi <= 79) {
                        echo 'C';
                    } else if ($sertifikat->angka_prestasi >= 80 && $sertifikat->angka_prestasi <= 89) {
                        echo 'B';
                    } else if ($sertifikat->angka_prestasi >= 90 && $sertifikat->angka_prestasi <= 100) {
                        echo 'A';
                    } else {
                        echo 'Nilai : ' . $sertifikat->angka_prestasi . ' Nilai tidak valid';
                    }
                    ?></td>
            </tr>
        </table> <br>

        <table border="1" width="530">
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2" width="285px">Bidang Keahlian yang dilatihkan</th>
                <th colspan="2">Nilai</th>
            </tr>
            <tr>
                <th>Angka</th>
                <th>Huruf</th>
            </tr>
            <tr>
                <td style="text-align: center;">1.</td>
                <td><?php echo $sertifikat->keahlian1 ?></td>
                <td><?php echo $sertifikat->angka_keahlian1 ?></td>
                <td><?php
                    if ($sertifikat->angka_keahlian1 == "") {
                        echo "";
                    } else if ($sertifikat->angka_keahlian1 >= 0 && $sertifikat->angka_keahlian1 <= 74) {
                        echo 'D';
                    } else if ($sertifikat->angka_keahlian1 >= 75 && $sertifikat->angka_keahlian1 <= 79) {
                        echo 'C';
                    } else if ($sertifikat->angka_keahlian1 >= 80 && $sertifikat->angka_keahlian1 <= 89) {
                        echo 'B';
                    } else if ($sertifikat->angka_keahlian1 >= 90 && $sertifikat->angka_keahlian1 <= 100) {
                        echo 'A';
                    } else {
                        echo 'Nilai : ' . $sertifikat->angka_keahlian1 . ' Nilai tidak valid';
                    }
                    ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">2.</td>
                <td><?php echo $sertifikat->keahlian2 ?></td>
                <td><?php echo $sertifikat->angka_keahlian2 ?></td>
                <td><?php
                    if ($sertifikat->angka_keahlian2 == "") {
                        echo "";
                    } else if ($sertifikat->angka_keahlian2 >= 0 && $sertifikat->angka_keahlian2 <= 74) {
                        echo 'D';
                    } else if ($sertifikat->angka_keahlian2 >= 75 && $sertifikat->angka_keahlian2 <= 79) {
                        echo 'C';
                    } else if ($sertifikat->angka_keahlian2 >= 80 && $sertifikat->angka_keahlian2 <= 89) {
                        echo 'B';
                    } else if ($sertifikat->angka_keahlian2 >= 90 && $sertifikat->angka_keahlian2 <= 100) {
                        echo 'A';
                    } else {
                        echo 'Nilai : ' . $sertifikat->angka_keahlian2 . ' Nilai tidak valid';
                    }
                    ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">3.</td>
                <td><?php echo $sertifikat->keahlian3 ?></td>
                <td><?php echo $sertifikat->angka_keahlian3 ?></td>
                <td><?php
                    if ($sertifikat->angka_keahlian3 == "") {
                        echo "";
                    } else if ($sertifikat->angka_keahlian3 >= 0 && $sertifikat->angka_keahlian3 <= 74) {
                        echo 'D';
                    } else if ($sertifikat->angka_keahlian3 >= 75 && $sertifikat->angka_keahlian3 <= 79) {
                        echo 'C';
                    } else if ($sertifikat->angka_keahlian3 >= 80 && $sertifikat->angka_keahlian3 <= 89) {
                        echo 'B';
                    } else if ($sertifikat->angka_keahlian3 >= 90 && $sertifikat->angka_keahlian3 <= 100) {
                        echo 'A';
                    } else {
                        echo 'Nilai : ' . $sertifikat->angka_keahlian3 . ' Nilai tidak valid';
                    }
                    ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">4.</td>
                <td><?php echo $sertifikat->keahlian4 ?></td>
                <td><?php echo $sertifikat->angka_keahlian4 ?></td>
                <td><?php
                    if ($sertifikat->angka_keahlian4 == "") {
                        echo "";
                    } else if ($sertifikat->angka_keahlian4 >= 0 && $sertifikat->angka_keahlian4 <= 74) {
                        echo 'D';
                    } else if ($sertifikat->angka_keahlian4 >= 75 && $sertifikat->angka_keahlian4 <= 79) {
                        echo 'C';
                    } else if ($sertifikat->angka_keahlian4 >= 80 && $sertifikat->angka_keahlian4 <= 89) {
                        echo 'B';
                    } else if ($sertifikat->angka_keahlian4 >= 90 && $sertifikat->angka_keahlian4 <= 100) {
                        echo 'A';
                    } else {
                        echo 'Nilai : ' . $sertifikat->angka_keahlian4 . ' Nilai tidak valid';
                    }
                    ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">5.</td>
                <td><?php echo $sertifikat->keahlian5 ?></td>
                <td><?php echo $sertifikat->angka_keahlian5 ?></td>
                <td><?php
                    if ($sertifikat->angka_keahlian5 == "") {
                        echo "";
                    } else if ($sertifikat->angka_keahlian5 >= 0 && $sertifikat->angka_keahlian5 <= 74) {
                        echo 'D';
                    } else if ($sertifikat->angka_keahlian5 >= 75 && $sertifikat->angka_keahlian5 <= 79) {
                        echo 'C';
                    } else if ($sertifikat->angka_keahlian5 >= 80 && $sertifikat->angka_keahlian5 <= 89) {
                        echo 'B';
                    } else if ($sertifikat->angka_keahlian5 >= 90 && $sertifikat->angka_keahlian5 <= 100) {
                        echo 'A';
                    } else {
                        echo 'Nilai : ' . $sertifikat->angka_keahlian5 . ' Nilai tidak valid';
                    }
                    ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">6.</td>
                <td><?php echo $sertifikat->keahlian6 ?></td>
                <td><?php echo $sertifikat->angka_keahlian6 ?></td>
                <td><?php
                    if ($sertifikat->keahlian6 == "") {
                        echo "";
                    } else if ($sertifikat->keahlian6 >= 0 && $sertifikat->keahlian6 <= 74) {
                        echo 'D';
                    } else if ($sertifikat->keahlian6 >= 75 && $sertifikat->keahlian6 <= 79) {
                        echo 'C';
                    } else if ($sertifikat->keahlian6 >= 80 && $sertifikat->keahlian6 <= 89) {
                        echo 'B';
                    } else if ($sertifikat->keahlian6 >= 90 && $sertifikat->keahlian6 <= 100) {
                        echo 'A';
                    } else {
                        echo 'Nilai : ' . $sertifikat->keahlian6 . ' Nilai tidak valid';
                    }
                    ?></td>
            </tr>
            <tr>
                <td style="text-align: center;">7.</td>
                <td><?php echo $sertifikat->keahlian7 ?></td>
                <td><?php echo $sertifikat->angka_keahlian7 ?></td>
                <td><?php
                    if ($sertifikat->angka_keahlian7 == "") {
                        echo "";
                    } else if ($sertifikat->angka_keahlian7 >= 0 && $sertifikat->angka_keahlian7 <= 74) {
                        echo 'D';
                    } else if ($sertifikat->angka_keahlian7 >= 75 && $sertifikat->angka_keahlian7 <= 79) {
                        echo 'C';
                    } else if ($sertifikat->angka_keahlian7 >= 80 && $sertifikat->angka_keahlian7 <= 89) {
                        echo 'B';
                    } else if ($sertifikat->angka_keahlian7 >= 90 && $sertifikat->angka_keahlian7 <= 100) {
                        echo 'A';
                    } else {
                        echo 'Nilai : ' . $sertifikat->angka_keahlian7 . ' Nilai tidak valid';
                    }
                    ?></td>
            </tr>
        </table> <br>
        <table width="550">
            <tr>
                <td>Keterangan</td>
                <td width="20">:</td>
                <td width="900">Mohon kompetensi diisi sesuai dengan di industri</td>
            </tr>
        </table> <br>

        <table width="550">
            <tr>
                <td>A = 90 – 100</td>
                <td width="460">( Sangat Baik )</td>
            </tr>
            <tr>
                <td>B = 80 – 89</td>
                <td width="460">( Baik )</td>
            </tr>
            <tr>
                <td>C = 75 – 79</td>
                <td width="460">( Cukup )</td>
            </tr>
            <tr>
                <td>D = 0 – 74 </td>
                <td width="460">( Kurang )</td>
            </tr>


        </table><br>
        <table>
            <tr>
                <td width="540"><b>LULUS MINIMAL 75 </td>
            </tr>
        </table>

        <table width="600">
            <tr>
                <td><br><br><br><br></td>
                <td width="200">Kudus, ……………………….<br><br>Pembimbing <br>Industri/Perusahaan<br><br><br><br><br>………………………..</td>
            </tr>

        </table>



    </center>
</body>
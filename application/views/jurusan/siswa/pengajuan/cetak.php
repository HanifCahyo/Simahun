<!DOCTYPE html>
<html>

<head>
    <title><?= $title_pdf;?></title>
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
        }

        table tr td {
            font-size: 13px;
        }

        .p {
            color: navy;
        }
    </style>
</head>

<body>
    <center>
        <table>
            <tr>
                <td><img src="logosmk.png" width="125" height="120"></td>
                <td>
                    <center>
                        <font size="2">YAYASAN PENDIDIKAN ISLAM RADEN UMAR SAID</font><br>
                        <font size="5" class="p"><b>SMK RADEN UMAR SAID KUDUS</b></font><br>
                        <font size="1"><b>Kompetensi Keahlian : 1. Desain Grafika 2. Produksi Grafika<br>
                                3. Desain Komunikasi Visual (DKV) 4. Animasi 5. Rekayasa Perangkat Lunak (RPL)</b></font><br>
                        <font size="1"><b>Alamat: Jalan Sukun Raya No 9, Desa Besito RT.04 RW.05 Kec.Gebog Kab.Kudus, 59333, Telp/Fax:(0291)230202</font><br>
                        <font size="1" class="text1"><b>website : www.smkruskudus.sch.id</b></font><br>
                        <font size="1" class="text1"><b>email : smkradenumarsaidkudus@gmail.com</b></font><br>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <table width="625">
                <tr>
                    <td class="text2">Kudus, 19 januari 2022</td>
                </tr>
            </table>
        </table>
        <table>
            <tr class="text2">
                <td>Nomor</td>
                <td width="572">: 044/PKL/SMK.RUS/XII/<?php echo $pengajuan->tahun_pelajaran ?></td>
            </tr>
            <tr class="text2">
                <td>Lamp</td>
                <td width="572">: 1 bendel</td>
            </tr>
            <tr>
                <td>Hal</td>
                <td width="564">: <i>Permohonan Penempatan Siswa PKL</i></td>
            </tr>
        </table>
        <br>
        <table width="625">
            <tr>
                <td>
                    <font size="2">Kepada Yth.<br>Direktur<br>HRD <?php echo $pengajuan->nama_perusahaan ?><br>di tempat</font>
                </td>
            </tr>
        </table>
        <br>
        <table width="625">
            <tr>
                <td>
                    <font size="2"><i>Assalamu'alaikum Warohmatullohi Wabarokatuh.</i><br><br>Teriring Puji Syukur Kehadirat Allah SWT, Sholawat dan salam semoga selalu dilimpahkan kepada Junjungan kita Nabi besar Muhammad SAW, keluarga para sahabat dan pengikutnya serta orang-orang yang mencintainya hingga Yaumil Qiyamah.</font><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <font size="2">Dengan hormat,<br>
                        Sesuai dengan program kerja Humas SMK Raden Umar Said Kudus Tahun Pelajaran 2021/2022, tentang pelaksanaan Praktik Kerja Lapangan (PKL) Angkatan ke XVI Gelombang 1 yang akan dilaksanakan mulai tanggal<b> 3 Januari 2022 s.d 30 Juni 2022</b> dengan daftar nama peserta terlampir.
                    </font><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <font size="2">Sehubungan dengan hal tersebut, dengan ini kami bermaksud menempatkan siswa kami untuk Praktik Kerja Lapangan (PKL) di perusahaan Bapak/Ibu.
                    </font><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <font size="2">Demikian permohonan kami, atas kesediaan dan kerjasama Bapak/Ibu diucapkan terima kasih. .
                    </font><br><br>
                </td>
            </tr>

            <tr>
                <td>
                    <font size="2"><i>Wassalamu'alaikum Warahmatullahi Wabarakatuh.</i></font>
                </td>
            </tr>

        </table>

        <br>
        </table>
        <br>
        </table>
        <br>
        <table width="625">
            <tr>
                <td width="430"><br><br><br><br></td>
                <td class="ttd" align="left">Kepala<br>SMK Raden Umar Said Kudus,<br><br><br><br><b><br><br>FARIDDUDIN, S.Sn</td>
            </tr>
        </table>
    </center>
</body>

</html>
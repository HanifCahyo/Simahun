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
        <table>
            <tr>
                <td><img src="<?php echo base_url('assets_deskapp/vendors/images/logosmk.png') ?>" width="125" height="120"></td>
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
                <td colspan="4">
                    <hr>
                </td>
            </tr>
            <table width="500">
                <tr style="font-family: sans-serif;">
                    <td class="text3">Kudus, <?php echo $penarikan->tanggal_surat ?></td>
                </tr>
            </table>
        </table>
        <table>
            <tr class="text2">
                <td>Nomor</td>
                <td width="472">: <?php echo $penarikan->nomor_surat ?></td>
            </tr>
            <tr class="text2">
                <td>Lamp</td>
                <td width="472">: 1 bendel</td>
            </tr>
            <tr>
                <td>Hal</td>
                <td width="564">: <i><b>Surat Penarikan PKL</b></i></td>
            </tr>
        </table>
        <br>
        <table width="500">
            <tr>
                <td>
                    <font size="2">Kepada Yth.<br>Direktur<br>HRD <?php echo $penarikan->nama_perusahaan ?><br>di tempat</font>
                </td>
            </tr>
        </table>
        <br>
        <table width="500">
            <tr style="font-family: sans-serif;">
                <td class="justify">
                    <font size="2"><b><i>Assalamu'alaikum Warohmatullohi Wabarokatuh.</b></i><br><br>Teriring Puji Syukur Kehadirat Allah SWT, Sholawat dan salam semoga selalu dilimpahkan kepada Junjungan kita Nabi besar Muhammad SAW, keluarga para sahabat dan pengikutnya serta orang-orang yang mencintainya hingga Yaumil Qiyamah.</font><br><br>
                </td>
            </tr>
            <tr style="font-family: sans-serif;">
                <td class="justify>
                    <font size=" 2">
                    Selanjutnya sesuai dengan program kerja, Praktik Kerja Lapangan (PKL)
                    SMK Raden Umar Said Kudus Tahun Pelajaran <?php echo $penarikan->tahun_pelajaran ?>, tentang
                    pelaksanaan Praktik Kerja Lapangan (PKL), kami beritahukan bahwa
                    terhitung mulai <b><?php echo $penarikan->mulai_pkl ?> s.d. <?php echo $penarikan->selesai_pkl ?></b> sudah berakhir, Maka
                    dari itu perkenankan siswa kami Tarik kembali untuk melakukan bimbingan di
                    sekolahan, dengan daftar nama terlampir..
                    </font><br><br>
                </td>
            </tr>
            <tr style="font-family: sans-serif;">
                <td class="justify>
                    <font size=" 2">Demikian agar bisa ditindak lanjuti sesuai prosedur yang ada. Atas
                    kerjasamanya kami sampaikan terima kasih
                    </font><br><br>
                </td>
            </tr><br>

            <tr style="font-family: sans-serif;">
                <td class="justify>
                    <font size=" 2"><b><i>Wassalamu'alaikum Warahmatullahi Wabarakatuh.</i></b></font>
                </td>
            </tr>

        </table>

        <br>
        </table>
        <br>
        </table>
        <br><br>
        <table width="625">
            <tr style="font-family: sans-serif;">
                <td><br><br><br><br></td>
                <td>Mengetahui<br>Kepala<br>SMK Raden Umar Said Kudus,<br><br><br><br><b><br><br>FARIDDUDIN, S.Sn</td>
                <td><br><br><br><br></td>
                <td width="250">Wakil Kepala Sekolah<br>Bidang Humas & Industri,<br><br><br><br><b><br><br>Agam Amintaha, S.Kom</td>

            </tr>
        </table>
    </center>
</body>

<body>
    <center>

        <table width="625">
            <tr>
                <td>
                    <font size="2" style="font-family: sans-serif;">Lampiran Surat Penarikan Peserta PKL<br>Nomor : <?php echo $penarikan->nomor_surat ?></font>
                </td>
            </tr>
            <br>



        </table><br><br>

        <table width="550">
            <tr style="font-family: sans-serif;">
                <td>
                    <center>
                        <font size="2" class="text"><b>Daftar Nama Siswa Praktik Kerja Lapangan (PKL)</b></font><br>
                        <font size="2" class="text"><b>SMK Raden Umar Said Kudus</font><br>
                        <font size="2" class="text"><b>Tahun Pelajaran <?php echo $penarikan->tahun_pelajaran ?></b></font><br>
                        <font size="2" class="text"><b>Di <?php echo $penarikan->nama_perusahaan ?></font>
                </td>
            </tr>
            <br>



        </table>
        <br><br><br>

        <table width="525" cellpadding="5" border="1">
            <!-- Bagian kepala tabel -->
            <thead>
                <tr class="text7">
                    <th><b>No</th>
                    <th><b>Nama</th>
                    <th><b>Kelas</th>
                </tr>
            </thead>
            <!-- Bagian body tabel -->
            <tbody>
                <tr class="text7">
                    <td>1.</td>
                    <td><?php echo $penarikan->nama ?></td>
                    <td><?php echo $penarikan->kelas ?></td>
                </tr>
            </tbody>
        </table>

        <br><br><br><br>
        <table width="625">
            <tr style="font-family: sans-serif;">
                <td><br><br><br><br></td>
                <td>Kepala<br>SMK Raden Umar Said Kudus,<br><br><br><br><b><br><br>FARIDDUDIN, S.Sn</td>
                <td><br><br><br><br></td>
                <td width="250">Wakil Kepala Sekolah<br>Bidang Humas & Industri,<br><br><br><br><b><br><br>Agam Amintaha, S.Kom</td>

            </tr>
        </table>
    </center>
</body>

<body>
	<center>
		

		<table width="550">
			<tr style="font-family: sans-serif;">
				<td>
				<center>
					<font size="2" class="text"><b>REKAP NILAI PESERTA DIDIK PKL (rpl)</b></font><br>
				</td>
			</tr>
		    <br><br>

			   <table width="550">
            <tr>
                <td style="width: 30%;">Nama Peserta Didik</td>
                <td>:</td>
                <td><?php echo $penarikan->nama ?></td>
            </tr>

            <tr>
                <td>NIS</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $penarikan->nis ?></td>
            </tr>

            <tr>
                <td>Kelas</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $penarikan->kelas ?></td>
            </tr>
            <br><br>

		    </table>

		    

		    

		</table>
		<br>
    <table border="1"  width="530">
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
            <td></td>
            <td></td>
        </tr>
        <tr>
        	<td style="text-align: center;">2.</td>
            <td>Kerjasama</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        	<td style="text-align: center;">3.</td>
            <td>Inisiatif</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        	<td style="text-align: center;">4.</td>
            <td>Kerajinan</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        	<td style="text-align: center;">5.</td>
            <td>Tanggungjawab</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        	<td style="text-align: center;">6.</td>
            <td>Kepribadian</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        	<td style="text-align: center;">7.</td>
            <td>Prestasi</td>
            <td></td>
            <td></td>
        </tr>
    </table> <br>

    <table border="1"  width="530">
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
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        	<td style="text-align: center;">2.</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        	<td style="text-align: center;">3.</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        	<td style="text-align: center;">4.</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        	<td style="text-align: center;">5.</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        	<td style="text-align: center;">6.</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        	<td style="text-align: center;">7.</td>
            <td></td>
            <td></td>
            <td></td>
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

</html>
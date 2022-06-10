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
        table tr .justify{
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
                <tr>
                    <td class="text2">Kudus,  <?php echo $pengajuan->tanggal_surat ?></td>
                </tr>
            </table>
        </table>
        <table>
            <tr class="text2">
                <td>Nomor</td>
                <td width="472">: <?php echo $pengajuan->nomor_surat ?></td>
            </tr>
            <tr class="text2">
                <td>Lamp</td>
                <td width="472">: 1 bendel</td>
            </tr>
            <tr>
                <td>Hal</td>
                <td width="564">: <i>Permohonan Penempatan Siswa PKL</i></td>
            </tr>
        </table>
        <br>
        <table width="500">
            <tr>
                <td>
                    <font size="2">Kepada Yth.<br>Direktur<br>HRD <?php echo $pengajuan->nama_perusahaan ?><br>di tempat</font>
                </td>
            </tr>
        </table>
        <br>
        <table width="500">
            <tr>
                <td class="justify">
                    <font size="2"><i>Assalamu'alaikum Warohmatullohi Wabarokatuh.</i><br><br>Teriring Puji Syukur Kehadirat Allah SWT, Sholawat dan salam semoga selalu dilimpahkan kepada Junjungan kita Nabi besar Muhammad SAW, keluarga para sahabat dan pengikutnya serta orang-orang yang mencintainya hingga Yaumil Qiyamah.</font><br><br>
                </td>
            </tr><br>
            <tr>
                <td class="justify>
                    <font size="2">Dengan hormat,<br>
                        Sesuai dengan program kerja Humas SMK Raden Umar Said Kudus Tahun Pelajaran  <?php echo $pengajuan->tahun_pelajaran ?>, tentang pelaksanaan Praktik Kerja Lapangan (PKL) Angkatan ke XVI Gelombang 1 yang akan dilaksanakan mulai tanggal <b>  <?php echo $pengajuan->mulai_pkl ?> s.d  <?php echo $pengajuan->selesai_pkl ?></b> dengan daftar nama peserta terlampir.
                    </font><br><br>
                </td>
            </tr>
            <tr>
                <td class="justify>
                    <font size="2">Sehubungan dengan hal tersebut, dengan ini kami bermaksud menempatkan siswa kami untuk Praktik Kerja Lapangan (PKL) di perusahaan Bapak/Ibu.
                    </font><br><br>
                </td>
            </tr>
            <tr>
                <td class="justify>
                    <font size="2">Demikian permohonan kami, atas kesediaan dan kerjasama Bapak/Ibu diucapkan terima kasih. .
                    </font><br><br>
                </td>
            </tr><br>

            <tr>
                <td class="justify>
                    <font size="2"><i>Wassalamu'alaikum Warahmatullahi Wabarakatuh.</i></font>
                </td>
            </tr>

        </table>

        <br>
        </table>
        <br>
        </table>
        <br><br><br>
        <table width="625">
			<tr style="font-family: sans-serif;">
				<td width="350"></td>
				<td class="ttd" align="left">Kepala<br>SMK Raden Umar Said Kudus,<br><br><br><br><br><br>
                <b>FARIDDUDIN, S.Sn</td>
			</tr>
	     </table>
    </center>
</body>

<body>
	<center>
		
		<table width="625">
			<tr>
		       <td>
			       <font size="2" style="font-family: sans-serif;">Lampiran Surat Permohonan Peserta PKL<br>Nomor : <?php echo $pengajuan->nomor_surat ?></font>
		       </td>
		    </tr>
		    <br>

		    

		</table><br><br>

		<table width="550">
			<tr>
				<td>
				<center>
					<font size="2" class="text"><b>Daftar Nama Siswa Praktik Kerja Lapangan (PKL)</b></font><br>
					<font size="2" class="text"><b>Angkatan XVI Gelombang 1</b></font><br>
					<font size="2" class="text"><b>SMK Raden Umar Said Kudus</font><br>
					<font size="2" class="text"><b>Tahun Pelajaran <?php echo $pengajuan->tahun_pelajaran ?></b></font><br>
					<font size="2" class="text"><b>Di  <?php echo $pengajuan->nama_perusahaan ?></b></font>
				</td>
			</tr>
		    <br>

		    

		</table>
		<br><br><br>

		<table class="s1" width="530" cellpadding="5" border="1">
  <!-- Bagian kepala tabel -->
  <thead>
    <tr class="text7">
      <th><b>No</th>
      <th><b>Nama</th>
      <th><b>Kelas</th>
      <th><b>No Wa</th>
      <th><b>Email</th>
    </tr>
  </thead>
  <!-- Bagian body tabel -->
  <tbody>
    <tr class="text7">
      <td>1.</td>
      <td><?php echo $pengajuan->nama ?></td>
      <td><?php echo $pengajuan->kelas ?></td>
      <td><?php echo $pengajuan->nomor ?></td>
      <td><?php echo $pengajuan->email ?></td>
    </tr>
  </tbody>
</table>

    <br><br><br><br>
		<table width="625">
			<tr style="font-family: sans-serif;">
				<td width="380"></td>
				<td class="ttd" align="left">Kepala<br>SMK Raden Umar Said Kudus,<br><br><br><br><br><br>
                <b>FARIDDUDIN, S.Sn</td>
			</tr>
	     </table>
	</center>
</body>

</html>
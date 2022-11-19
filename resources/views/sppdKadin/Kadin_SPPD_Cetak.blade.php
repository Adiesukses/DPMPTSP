<?php
      $fdate=$data->tanggal_berangkat;
      $tdate=$data->tanggal_kembali;
      $datetime1= new DateTime($fdate);
      $datetime2= new DateTime($tdate);
      $interval= $datetime1->diff( $datetime2);
      $days=$interval->format('%a') + 1;
  function penyebut($nilai) {
		$nilai = abs($nilai);
		$huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
		$temp = "";
		if ($nilai < 12) {
			$temp = " ". $huruf[$nilai];
      	//	} else if ($nilai <20) {
			//$temp = penyebut($nilai - 10). " belas";
//		} else if ($nilai < 100) {
		//	$temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
		//} else if ($nilai < 200) {
			//$temp = " seratus" . penyebut($nilai - 100);
		//} else if ($nilai < 1000) {
		//	$temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
	//	} else if ($nilai < 2000) {
	//		$temp = " seribu" . penyebut($nilai - 1000);
	//	} else if ($nilai < 1000000) {
	//		$temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
	//	} else if ($nilai < 1000000000) {
	//		$temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
	//	} else if ($nilai < 1000000000000) {
	//		$temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
	//	} else if ($nilai < 1000000000000000) {
	//		$temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
	//	} 
		}     
		return $temp;
	}
 
	function terbilang($nilai) {
		if($nilai<0) {
			$hasil = "minus ". trim(penyebut($nilai));
		} else {
			$hasil = trim(penyebut($nilai));
		}     		
		return $hasil;
	}
 
 
	$angka =$days;

	?>
      
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SPPD KEPALA DINAS</title>
</head>
<style type="text/css">
<!--
.style1 {font-size: 18px;
	font-weight: bold;
}
.style4 {font-size: 36px;
	font-weight: bold;
}
.style6 {font-size: 18px}
-->
</style>
<body>
<table width="831" border="0">
  <tr>
    <td width="100" rowspan="3" valign="top"><div align="center"><img src="{{ url('img/logo.png') }}" width="94" height="106" /></div></td>
    <td width="618" valign="bottom"><div align="center"><span class="style1">PEMERINTAH KABUPATEN PURWOREJO</span></div></td>
    <td width="99" valign="bottom"><div align="center"></div></td>
  </tr>
  <tr>
    <td valign="top"><div align="center"><span class="style4">SEKRETARIAT DAERAH</span></div></td>
    <td valign="top"><div align="center"></div></td>
  </tr>
  <tr>
    <td valign="top"><div align="center">Jl. Proklamasi No. 2 Purworejo Kode Pos 54111 Telp : (0275)321012&nbsp;Psw. 315-317&nbsp;Fax: (0275) 322791, E-mail: setda@purworejokab.go.id, Website: www.setda.purworejokab.go.id</div></td>
    <td height="40" valign="top"><div align="center"></div></td>
  </tr>
</table>

<table width="831" border="0">
  <tr>
    <td width="823" height="1"><img src="{{ url('img/LINE.png') }}" width="820" height="4" /></td>
  </tr>
</table>
<table width="831" border="0">
  <tr>
    <td width="525">&nbsp;</td>
    <td width="84" valign="top" class="style6"><span class="style6">Lembar ke</span></td>
    <td width="10" valign="top" class="style6"><span class="style6">:</span></td>
    <td width="194" valign="top" class="style6"><span class="style6">1 (satu)</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="top" class="style6"><span class="style6">Kode No</span></td>
    <td valign="top" class="style6"><span class="style6">:</span></td>
    <td valign="top" class="style6"><span class="style6">{{ $data->anggaran }}</span></td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td valign="top" class="style6"><span class="style6">Nomor</span></td>
    <td valign="top" class="style6"><span class="style6">:</span></td>
    <td valign="top" class="style6"><span class="style6">084  /&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; / 2021</span></td>
  </tr>
  <tr>
    <td colspan="4" valign="bottom"><div align="center" class="style6"><strong><u>SURAT PERINTAH PERJALANAN DINAS</u></strong></div></td>
  </tr>
  <tr>
    <td colspan="4" valign="top"><div align="center" class="style6"><strong>(SPPD)</strong></div></td>
  </tr>
</table>
<table width="832" border="0">
  <tr>
    <td width="826" height="12"><img src="{{ ('img/LINE2.png') }}" width="820" height="2" /></td>
  </tr>
</table>
<table width="831" border="0">
  <tr>
    <td width="23" valign="top" class="style6"><span class="style6">1.</span></td>
    <td colspan="2" valign="top" class="style6"><span class="style6">Pejabat yang memberi Perintah</span></td>
    <td width="10" valign="top" class="style6"><span class="style6">:</span></td>
    <td width="451" valign="top" class="style6"><span class="style6">Sekretaris Daerah Kab. Purworejo</span></td>
    <td width="13" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="2" valign="top" class="style6"><span class="style6">2.</span></td>
    <td colspan="2" rowspan="2" valign="top" class="style6"><span class="style6">Nama / NIP Pegawai yang diperintah</span></td>
    <td valign="top" class="style6"><span class="style6">:</span></td>
    <td valign="top" class="style6"><span class="style6">AGUNG WIBOWO, AP.,MM. </span></td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="style6"><span class="style6"></span></td>
    <td valign="top" class="style6"><span class="style6">19740308 199311 1 002</span></td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="style6"><span class="style6">3.</span></td>
    <td width="14" valign="top" class="style6"><span class="style6">a.</span></td>
    <td width="294" valign="top" class="style6"><span class="style6">Pangkat dan Golongan menurut	PP No. 6 Tahun 1997</span></td>
    <td valign="top" class="style6"><span class="style6">:</span></td>
    <td valign="top" class="style6"><span class="style6">Pembina Utama Muda/IV c</span></td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="style6"><span class="style6"></span></td>
    <td valign="top" class="style6"><span class="style6">b.</span></td>
    <td valign="top" class="style6"><span class="style6">Jabatan</span></td>
    <td valign="top" class="style6"><span class="style6">:</span></td>
    <td valign="top" class="style6"><span class="style6">Kepala Dinas PMPTSP Kab. Purworejo</span></td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="style6"><span class="style6"></span></td>
    <td valign="top" class="style6"><span class="style6">c.</span></td>
    <td valign="top" class="style6"><span class="style6">Tingkat menurut peraturan perjalanan</span></td>
    <td valign="top" class="style6"><span class="style6">:</span></td>
    <td valign="top" class="style6"><span class="style6">c</span></td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="style6"><span class="style6">4.</span></td>
    <td colspan="2" valign="top" class="style6"><span class="style6">Maksud Perjalanan Dinas</span></td>
    <td valign="top" class="style6"><span class="style6">:</span></td>
    <td valign="top" class="style6"><div align="justify" class="style6">{{ $data->maksud }}</div></td>
    <td valign="top"><div align="justify"></div></td>
  </tr>
  <tr>
    <td valign="top" class="style6"><span class="style6">5.</span></td>
    <td colspan="2" valign="top" class="style6"><span class="style6">Alat Angkut yang dipergunakan</span></td>
    <td valign="top" class="style6"><span class="style6">:</span></td>
    <td valign="top" class="style6"><span class="style6">{{ $data->kendaraan }}</span></td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="style6"><span class="style6">6.</span></td>
    <td valign="top" class="style6"><span class="style6">a.</span></td>
    <td valign="top" class="style6"><span class="style6">Tempat berangkat</span></td>
    <td valign="top" class="style6"><span class="style6">:</span></td>
    <td valign="top" class="style6"><span class="style6">DPMPTSP Kab. Purworejo</span></td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="style6"><span class="style6"></span></td>
    <td valign="top" class="style6"><span class="style6">b.</span></td>
    <td valign="top" class="style6"><span class="style6">Tempat tujuan</span></td>
    <td valign="top" class="style6"><span class="style6">:</span></td>
    <td valign="top" class="style6"><div align="justify" class="style6">{{ $data->tujuan }}</div></td>
    <td valign="top"><div align="justify"></div></td>
  </tr>
  <tr>
    <td valign="top" class="style6"><span class="style6">7.</span></td>
    <td valign="top" class="style6"><span class="style6">a.</span></td>
    <td valign="top" class="style6"><span class="style6">Lama    Perjalanan Dinas</span></td>
    <td valign="top" class="style6"><span class="style6">:</span></td>
    <td valign="top" class="style6"><span class="style6"> {{$days}} ({{terbilang($days) }})
      hari</span></td>
    <td valign="top"></td>
  </tr>
  <tr>
    <td valign="top" class="style6"><span class="style6"></span></td>
    <td valign="top" class="style6"><span class="style6">b.</span></td>
    <td valign="top" class="style6"><span class="style6">Tanggal berangkat</span></td>
    <td valign="top" class="style6"><span class="style6">:</span></td>
    <td valign="top" class="style6"><span class="style6">{{ date('d F Y',strtotime($data->tanggal_berangkat)) }}</span></td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="style6"><span class="style6"></span></td>
    <td valign="top" class="style6"><span class="style6">c.</span></td>
    <td valign="top" class="style6"><span class="style6">Tanggal harus kembali</span></td>
    <td valign="top" class="style6"><span class="style6">:</span></td>
    <td valign="top" class="style6"><span class="style6">{{ date('d F Y',strtotime($data->tanggal_kembali)) }}</span></td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="style6"><span class="style6">8.</span></td>
    <td colspan="2" valign="top" class="style6"><span class="style6">Pengikut</span></td>
    <td valign="top" class="style6"><span class="style6">:</span></td>
    <td valign="top" class="style6"><span class="style6">{{ $data->nama }}</span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="style6"><span class="style6">9.</span></td>
    <td colspan="2" valign="top" class="style6"><span class="style6">Pembebanan Anggaran</span></td>
    <td valign="top" class="style6"><span class="style6">:</span></td>
    <td valign="top" class="style6"><span class="style6">APBD</span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="style6"><span class="style6"></span></td>
    <td valign="top" class="style6"><span class="style6">a.</span></td>
    <td valign="top" class="style6"><span class="style6">Instansi</span></td>
    <td valign="top" class="style6"><span class="style6">:</span></td>
    <td valign="top" class="style6"><span class="style6">Dinas PMPTSP Kab. Purworejo</span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="style6"><span class="style6"></span></td>
    <td valign="top" class="style6"><span class="style6">b.</span></td>
    <td valign="top" class="style6"><span class="style6">Mata Anggaran</span></td>
    <td valign="top" class="style6"><span class="style6">:</span></td>
    <td valign="top" class="style6"><span class="style6">{{ $data->anggaran }}</span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="style6"><span class="style6"></span></td>
    <td valign="top" class="style6"><span class="style6"></span></td>
    <td valign="top" class="style6"><span class="style6"></span></td>
    <td valign="top" class="style6"><span class="style6"></span></td>
    <td valign="top" class="style6"><span class="style6">5.1.02.04.01.0001 (Belanja Perjalanan Dinas Biasa)</span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="style6"><span class="style6">10.</span></td>
    <td colspan="2" valign="top" class="style6"><span class="style6">Keterangan lain-lain</span></td>
    <td valign="top" class="style6"><span class="style6">:</span></td>
    <td valign="top" class="style6"><span class="style6"></span></td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="831" border="0">
  <tr>
    <td width="530">&nbsp;</td>
    <td width="107" valign="top" class="style6"><span class="style6">Ditetapkan di </span></td>
    <td width="13" valign="top" class="style6"><span class="style6">:</span></td>
    <td width="163" valign="top" class="style6"><span class="style6">Purworejo</span></td>
  </tr>
  <tr>
    <td height="27">&nbsp;</td>
    <td valign="top" class="style6"><span class="style6">Pada tanggal</span></td>
    <td valign="top" class="style6"><span class="style6">:</span></td>
    <td valign="top" class="style6">{{ date('d F Y',strtotime($data->tanggal_kembali)) }}</td>
  </tr>
</table>
<table width="831" border="0">
  <tr>
    <td width="502">&nbsp;</td>
    <td width="263" class="style6"><div align="center">an. BUPATI PURWOREJO</div></td>
    <td width="52" class="style6"><div align="center" class="style6"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="style6"><div align="center">SEKRETARIS DAERAH</div></td>
    <td class="style6"><div align="center" class="style6"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="style6"><div align="center"></div></td>
    <td class="style6"><span class="style6"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="style6"><div align="center"></div></td>
    <td class="style6"><span class="style6"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="bottom" class="style6"><div align="center"><strong><u>Drs. SAID ROMADHON</u></strong></div></td>
    <td valign="bottom" class="style6"><div align="center" class="style6"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="top" class="style6"><div align="center">Pembina Utama Madya</div></td>
    <td valign="top" class="style6"><div align="center" class="style6"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="top" class="style6"><div align="center">NIP. 19640122 198903 1 004</div></td>
    <td valign="top" class="style6"><div align="center" class="style6"></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<script type="text/javascript">
  window.print();
</script>
</body>
</html>



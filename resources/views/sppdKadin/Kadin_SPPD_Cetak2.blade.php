<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style6 {font-size: 18px}
.style8 {font-size: 18px; font-weight: bold; }
.style9 {font-size: 18}
-->
</style>
</head>

<body>
<table width="831" height="1225" border="3" bordercolor="#000000">
  <tr>
    <td height="268" colspan="2"><table width="820" border="0">
      <tr>
        <td>&nbsp;</td>
        <td valign="top"><span class="style6">SPPD No</span></td>
        <td valign="top"><span class="style6">:</span></td>
        <td valign="top"><span class="style6">084  /&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ 2022</span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td valign="top"><span class="style6">Berangkat dari</span></td>
        <td valign="top"><span class="style6">:</span></td>
        <td valign="top"><span class="style6">DPMPTSP Kab. Purworejo</span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td valign="top"><span class="style6">Pada tanggal</span></td>
        <td valign="top"><span class="style6">:</span></td>
        <td valign="top">{{ date('d F Y',strtotime($data->tanggal_berangkat)) }}</td>
      </tr>
      <tr>
        <td width="349" height="22">&nbsp;</td>
        <td width="107" valign="top"><span class="style6">Ke</span></td>
        <td width="6" valign="top"><span class="style6">:</span></td>
        <td width="340" valign="top">{{ $data->tujuan }}</td>
      </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td colspan="3" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="3" valign="top" class="style6"><div align="center">Pejabat Pelaksana Teknis Kegiatan</div></td>
      </tr>
      <tr>
        <td height="44">&nbsp;</td>
        <td colspan="3">&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td height="18" colspan="3" valign="bottom"><div align="center"><span class="style8">GUNTUR SETIAWAN, S.Pd.</span></div></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td height="18" colspan="3" valign="top"><div align="center"><span class="style6">Penata TK I / III d</span></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td height="22" colspan="3" valign="top"><div align="center"><span class="style6">NIP.19761126 200803 1 002</span></div></td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td width="406" height="191" valign="top"><table width="405" border="0">
      <tr>
        <td width="19" valign="top"><span class="style6">II.</span></td>
        <td width="110" valign="top"><span class="style6">Tiba di</span></td>
        <td width="10" valign="top" class="style6">:</td>
        <td width="248" valign="top"><div align="justify">{{ $data->tujuan }}</div></td>
      </tr>
      <tr>
        <td valign="top"><span class="style6"></span></td>
        <td valign="top"><span class="style6">Pada Tanggal</span></td>
        <td valign="top" class="style6">:</td>
        <td valign="top">{{ date('d F Y',strtotime($data->tanggal_berangkat)) }}</td>
      </tr>
      <tr>
        <td valign="top"><span class="style6"></span></td>
        <td valign="top"><span class="style6">Kepala</span></td>
        <td valign="top" class="style6">:</td>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td valign="bottom"><div align="center"><img src="{{ url('img/LINE2.png') }}" width="150" height="2" align="bottom" /></div></td>
      </tr>
      <tr>
        <td height="21">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td valign="bottom">&nbsp;</td>
      </tr>
      
      
    </table></td>
    <td width="406" valign="top"><table width="405" border="0">
      <tr>
        <td width="110" valign="top"><span class="style6">Berangkat dari</span></td>
        <td width="10" valign="top" class="style6">:</td>
        <td width="271" valign="top"><div align="justify">{{ $data->tujuan }}</div></td>
      </tr>
      <tr>
        <td valign="top"><span class="style6">Pada Tanggal</span></td>
        <td valign="top" class="style6">:</td>
        <td valign="top">{{ date('d F Y',strtotime($data->tanggal_kembali)) }}</td>
      </tr>
      <tr>
        <td valign="top"><span class="style6">Ke</span></td>
        <td valign="top" class="style6">:</td>
        <td valign="top"><span class="style6">DPMPTSP Kab. Purworejo</span></td>
      </tr>
      <tr>
        <td><span class="style6">Kepala</span></td>
        <td valign="top"><span class="style6">:</span></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="21">&nbsp;</td>
        <td valign="top">&nbsp;</td>
        <td valign="bottom"><div align="center"><img src="{{ url('img/LINE2.png') }}" width="150" height="2" align="bottom" /></div></td>
        </tr>
      <tr>
        <td height="21">&nbsp;</td>
        <td valign="top">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="175" valign="top"><table width="405" border="0">
      <tr>
        <td width="23"><span class="style6">III.</span></td>
        <td width="105"><span class="style6">Tiba di</span></td>
        <td width="12" class="style6">:</td>
        <td width="247">&nbsp;</td>
      </tr>
      <tr>
        <td><span class="style6"></span></td>
        <td><span class="style6">Pada Tanggal</span></td>
        <td class="style6">:</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><span class="style6"></span></td>
        <td><span class="style6">Kepala</span></td>
        <td class="style6">:</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td valign="top"><table width="405" border="0">
      <tr>
        <td width="110"><span class="style6">Tiba di</span></td>
        <td width="10" class="style6">:</td>
        <td width="271">&nbsp;</td>
      </tr>
      <tr>
        <td><span class="style6">Pada Tanggal</span></td>
        <td class="style6">:</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><span class="style6">Ke</span></td>
        <td class="style6">:</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><span class="style6">Kepala</span></td>
        <td><span class="style6">:</span></td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="182" valign="top"><table width="405" border="0">
      <tr>
        <td width="23"><span class="style6">IV.</span></td>
        <td width="107"><span class="style6">Tiba di</span></td>
        <td width="12" class="style6">:</td>
        <td width="245">&nbsp;</td>
      </tr>
      <tr>
        <td><span class="style6"></span></td>
        <td><span class="style6">Pada Tanggal</span></td>
        <td class="style6">:</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><span class="style6"></span></td>
        <td><span class="style6">Kepala</span></td>
        <td class="style6">:</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td valign="top"><table width="405" border="0">
      <tr>
        <td width="120"><span class="style6">Tiba di</span></td>
        <td width="10" class="style6">:</td>
        <td width="263">&nbsp;</td>
      </tr>
      <tr>
        <td><span class="style6">Pada Tanggal</span></td>
        <td class="style6">:</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><span class="style6">Ke</span></td>
        <td class="style6">:</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><span class="style6">Kepala</span></td>
        <td><span class="style6">:</span></td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="287" valign="top"><table width="405" height="91" border="0">
      <tr>
        <td width="23"><span class="style6">V.</span></td>
        <td width="123"><span class="style6">Tiba di</span></td>
        <td width="10" class="style6">:</td>
        <td width="231"><span class="style6">DPMPTSP Kab. Purworejo</span></td>
      </tr>
      <tr>
        <td height="57" valign="top"><span class="style6"></span></td>
        <td valign="top"><span class="style6">Pada Tanggal</span></td>
        <td valign="top" class="style6">:</td>
        <td valign="top">&nbsp;</td>
      </tr>
    </table>
      <table width="406" height="191" border="0">
        <tr>
          <td height="43" valign="bottom" class="style6"><div align="center"></div></td>
        </tr>
        <tr>
          <td valign="top" class="style6"><div align="center"><span class="style9"></span>Pejabat Pelaksana Teknis Kegiatan</div></td>
        </tr>
        <tr>
          <td height="40" class="style6"><div align="center"><span class="style9"></span></div></td>
        </tr>
        <tr>
          <td height="22" valign="bottom" class="style6"><div align="center"><strong>GUNTUR SETIAWAN, S.Pd</strong></div></td>
        </tr>
        <tr>
          <td height="22" valign="top" class="style6"><div align="center">Penata TK I / III d</div></td>
        </tr>
        <tr>
          <td height="22" valign="top" class="style6"><div align="center"><span class="style9"></span>NIP.19761126 200803 1 002</div></td>
        </tr>
      </table>
    </td>
    <td valign="top"><table width="406" height="91" border="0">
      <tr>
        <td height="87" valign="top"><div align="justify"><span class="style6">Telah  diperiksa ,   dengan   keterangan   bahwa perjalanan tersebut diatas benar  dilakukan  atas perintahnya dan semata-mata  untuk kepentingan jabatan dalam waktu sesingkat-singkatnya.</span></div></td>
      </tr>

    </table>    
      <table width="406" height="192" border="0">
        <tr>
          <td height="43" valign="bottom" class="style6"><div align="center"><span class="style9">an. BUPATI PURWOREJO</span></div></td>
        </tr>
        <tr>
          <td valign="top" class="style6"><div align="center"><span class="style9"></span>SEKRETARIS DAERAH</div></td>
        </tr>
        <tr>
          <td height="40" class="style6"><div align="center"><span class="style9"></span></div></td>
        </tr>
        <tr>
          <td height="22" valign="bottom" class="style6"><div align="center"><strong>Drs. SAID ROMADHON</strong></div></td>
        </tr>
        <tr>
          <td height="22" valign="top" class="style6"><div align="center">Pembina Utama Madya</div></td>
        </tr>
        <tr>
          <td height="23" valign="top" class="style6"><div align="center"><span class="style9"></span>NIP. 19640122 198903 1 004</div></td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td height="30" colspan="2" valign="top"><table width="822" border="0">
      <tr>
        <td width="28" class="style6"><span class="style9">VI.</span></td>
        <td width="784" height="22" class="style6"><span class="style9">CATATAN LAIN - LAIN</span></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="53" colspan="2" valign="top"><table width="821" height="40" border="0">
      <tr>
        <td width="28" valign="top" class="style6"><span class="style6">VII.</span></td>
        <td width="783" valign="top" class="style6"><div align="justify"><span class="style6">Pejabat  yang  berwenang  menerbitkan  SPPD ,  pegawai  yang  melakukan  perjalanan  dinas, para  pejabat  yang  mengesahkan  tanggal  /  tiba  serta  bendaharawan  bertanggung  jawab berdasarkan  peraturan - peraturan  Keuangan  Negara  apabila  Negara  mendapat  rugi  akibat kesalahan dan kealpaannya.</span></div></td>
      </tr>
    </table></td>
  </tr>
  <script type="text/javascript">
  window.print();
</script>
</table>
</body>
</html>

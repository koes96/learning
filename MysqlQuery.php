<?php
// koneksi ke database ecampuz
$host	= "localhost";
$user	= "root";
$pass	= "";
$name	= "ecampuz";
$koneksi = mysqli_connect("$host", "$user", "$pass", "$name");

// buat query dengan kondisi nilai terbanyak di kode mata kuliah MK303
$sql = mysqli_query($koneksi, "SELECT a.mhs_nama, b.nilai FROM tb_mahasiswa a, tb_mahasiswa_nilai b, tb_matakuliah c WHERE b.mhs_id = a.mhs_id AND b.mk_id = c.mk_id AND c.mk_kode = 'MK303' ORDER BY b.nilai DESC LIMIT 1");
while ($data = mysqli_fetch_assoc($sql))
{
	echo "Nilai Terbanyak : ".$data['mhs_nama'];
}
// saya kurang paham tentang soal ini, maksudnya itu querynya di mysqlnya atau di php yang seperti saya buat ini?
// tapi semisal query langsung di mysql maka jawabannya hanya ini :  SELECT a.mhs_nama, b.nilai FROM tb_mahasiswa a, tb_mahasiswa_nilai b, tb_matakuliah c WHERE b.mhs_id = a.mhs_id AND b.mk_id = c.mk_id AND c.mk_kode = 'MK303' ORDER BY b.nilai DESC LIMIT 1
// sebenarnya saya tahu cara join selain yang saya pakai ini akan tetapi menurut saya join ini paling mudah dimengerti
?>

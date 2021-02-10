<?php
// saya deklarasikan variabel yang akan di butuhkan lalu set valuenya
$q = 1;
$w = 3;
$z = 5;
$y = 15;

while ($q <= 50) {

	switch ($q) {

		case $q == $w: // bila value $q sama dengan $w maka muncul Foo
			$w += 3;
			if ($w == $y) {
				$w += 3;
			}
			echo "Foo";
			$q += 1;
			break;
		case $q == $z: // bila value $q sama dengan $w maka muncul Bar
			$z += 5;
			if ($z == $y) {
				$z += 5;
			}
			echo "Bar";
			$q += 1;
			break;
		case $q == $y: // bila value $q sama dengan $w maka muncul FooBar
			$y += 15;
			echo "FooBar";
			$q += 1;
			break;
		default:
			echo $q;
			$q++;
			break;
	}
}
echo "<br>";
// sebelumnya saya memakai perulangan for tapi gagal lalu memakai for dengan kondisi if juga belum sesuai harapan.
// setelah saya cek di google dan baca - baca artikel tetap hasilnya masih nihil. Karena artikel yang saya baca tanpa ada kondisi.
// bisa saja perulangan yang buat kurang efektif apabila ada kurangnya bisa beritahu saya.
?>
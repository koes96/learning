<?php
$d = 0; //set nilai nol di variabel $d
$aplikasi = array('gtAkademika','gtFinansial','gtPerizinan','eCampuz','eOviz'); // set nilai array
// buat perulangan untuk menampilkan array
while ($d <= 4) {
	echo $aplikasi[$d]."</br>";
	$d++;
}

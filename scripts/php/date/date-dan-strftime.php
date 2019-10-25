<?php
// set the default timezone to use. Available since PHP 5.1
date_default_timezone_set('Asia/Jakarta');

// Tampilkan 25-10-2019
echo date("d-m-Y")."<br>";

// Tampilkan 25 Oktober 2019
setlocale(LC_TIME, 'id_ID');
echo strftime( "%d %B %Y", time());
?>
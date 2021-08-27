<?php
include "koneksi.php";
$QUERYINFO = mysqli_query ($koneksi, "SELECT * FROM tb_informasi");
$DATAINFO = mysqli_fetch_array($QUERYINFO);
?>
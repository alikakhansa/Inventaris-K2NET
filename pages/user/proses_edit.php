<?php
include ("../../inc/koneksi.php");
$ID       			= mysqli_real_escape_string($koneksi,$_POST['id_login']);
$USERNAME           = mysqli_real_escape_string($koneksi,$_POST['username']);
$PASSWORD           = mysqli_real_escape_string($koneksi,$_POST['password']);
$TIPE_USER          = mysqli_real_escape_string($koneksi,$_POST['level']);
$NAMA          		= mysqli_real_escape_string($koneksi,$_POST['nama']);

if (
$ID   			== "" ||
$USERNAME       == "" ||    
$PASSWORD       == "" ||      
$TIPE_USER      == "" || 
$NAMA      		== "")
{

}

else {

$query = mysqli_query ($koneksi,"UPDATE login SET 
	username 	= '$USERNAME' ,
    password 	= '$PASSWORD' ,
    level 		= '$TIPE_USER' ,
    nama 		= '$NAMA' WHERE login.id_login='$ID';")
 or die(mysqli_error($koneksi));

 header('location:../../operator/index.php?page=user');

?>		

<div class="alert alert-block alert-success">
	<button type="button" class="close" data-dismiss="alert">
		<i class="icon-remove"></i>
	</button>

	<i class="icon-ok green"></i>
	<h4>Data Berhasil di Tambahkan</h4>

</div>
<?php 
}
 ?>
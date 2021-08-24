
<?php 
ob_start();
include ("../../inc/koneksi.php");
$ID                 = $_POST['id_login'];
$USERNAME           = $_POST['username'];
$PASSWORD           = $_POST['password'];
$PASSWORD           = md5($PASSWORD);
$TIPE_USER          = $_POST['level'];
$TEAM               = $_POST['team'];
$NAMA               = $_POST['nama'];

if (
    $ID             == "" ||
    $USERNAME       == "" ||    
    $PASSWORD       == "" || 
    $TIPE_USER      ==  ""|| 
    $TEAM           ==  ""||      
    $NAMA           ==  "") 
{
    echo "Harap Isi Data Dengan Lengkap";
}
else {
    $QUERY = mysqli_query($koneksi, "INSERT INTO `login` SET 
            id_login='$ID',
            username='$USERNAME',
            password='$PASSWORD',
            level='$TIPE_USER',
            team='$TEAM',
            nama='$NAMA';") or die('Gagal Memasukan Data Baru'.mysqli_error($koneksi) );

header('location:../../operator/index.php?page=user');
}
?>

<?php 
ob_start();
include ("../../inc/koneksi.php");
$ID           = $_POST['id_login'];
$USERNAME           = $_POST['username'];
$PASSWORD          = $_POST['password'];
$PASSWORD           = md5($PASSWORD);
$TIPE_USER          = $_POST['level'];
$NAMA          = $_POST['nama'];

if (
     $ID       == "" ||
    $USERNAME       == "" ||    
    $PASSWORD       == "" ||      
    $TIPE_USER      ==  ""|| 
    $NAMA      ==  "") 
{
    echo "Harap Isi Data Dengan Lengkap";
}
else {
    $QUERY = mysqli_query($koneksi, "INSERT INTO `login` SET 
          id_login='$ID',
            username='$USERNAME',
            password='$PASSWORD',
            level='$TIPE_USER',
            nama='$NAMA';") or die(mysqli_error());

header('location:../../operator/index.php?page=user');
?>

<div class="alert alkert-block alert-success">
    <button type="button" class="close" data-dismiss="alert">
        <i class="icon-remove"></i>
    </button>

    <i class="icon-ok green"></i>
    <h4>Data berhasil ditambahkan !</h4>
</div>

<?php 
}
 ?>

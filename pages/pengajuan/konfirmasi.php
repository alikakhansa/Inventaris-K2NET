
<?php 

$VALUE = $_GET['value'];
$ID    = $_GET['id'];



if (    

$VALUE == 0 
|| $ID  == ""  


) 

{

?>


<div class='alert alert-danger alert-dismissible fade show' role='alert'>

<div class="container">

    <div class='alert-icon'>
        <i class='zmdi zmdi-block'></i>
    </div>
    <strong>GAGAL</strong> Pastikan data terisi semua
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>
            <i class='zmdi zmdi-close'></i>
        </span>
    </button>

</div>


</div>


<?php 

}

else{

$QUERY1 = mysqli_query($koneksi,"UPDATE daftar_pengajuan SET 

    status = '$VALUE'


WHERE daftar_pengajuan.kode_pengajuan='$ID'; ") or die(mysqli_error($CONNECT));




?>


<script>

alert('Berhasil');

</script>

<meta http-equiv='refresh' content='1; url=index.php?page=pengajuan'>


<?php 



}

?>


<link  rel="stylesheet" type="text/scc" href="../../assets/css/style.css">

<section class="">
      <header class="panel-heading">
       </header>
</section>
            <?php
            @$page=$_GET['aksi'];
            switch ($page) {
                case 'tambah':
                    include "tambah.php";
                    break;
                  case 'edit':
                    include "edit.php";
                    break;
                  case 'proses_edit':
                        include "proses_edit.php";
                        break;
                case 'selengkapnya':
                    include "selengkapnya.php";
                    break;
                case 'detail':
                    include "laporan_detail.php";
                    break;
                case 'hapus':
                    include "hapus.php";
                    break;
                case 'proses_tambah':
                    include "proses_tambah_data.php";
                    break;
                  case 'Detail':
                        include "detail.php";
                        break;
                default:
                    include "tampil.php";
                    break;
            }
            ?>
        </section>
    
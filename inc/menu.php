<?php
@$PAGE = $_GET['page'];
switch ($PAGE) {
	case 'dashboard':
		include '../pages/dashboard/dashboard.php';
		break;
	case 'informasi':
		include "../pages/informasi/info.php";
		break;
	case 'pengajuan':
		include '../pages/pengajuan/pengajuan.php';
		break;
	case 'pekerjaan':
		include '../pages/pekerjaan/pekerjaan.php';
		break;
	case 'user':
		include '../pages/user/user.php';
		break;
	case 'view':
		include '../pages/view/view.php';
		break;
	case 'dashboardsiswa':
		include '../pages/dashboard/dashboard.php';
		break;
	case 'barang':
		include '../pages/barang/barang.php';
		break;
	case 'sekolah':
		include '../pages/sekolah/sekolah.php';
		break;	
		
	case 'pinjam':
		include '../pages/pinjam/pinjam.php';
		break;
	case 'kembali':
		include '../pages/kembali/kembali.php';
		break;
	
	case 'admin':
		include '../pages/admin/admin.php';
		break;
	default:
		include '../pages/dashboard.php';
		break;
}


?>
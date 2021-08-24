<?php
@$PAGE = $_GET['page'];
switch ($PAGE) {
	case 'dashboard':
		include '../pages/dashboard/dashboard.php';
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
	case 'barangsiswa':
		include '../pages/barangsiswa/barangsiswa.php';
		break;
	case 'sekolahsiswa':
		include '../pages/sekolahsiswa/sekolahsiswa.php';
		break;	
	case 'pinjam':
		include '../pages/pinjam/pinjam.php';
		break;
	case 'kembali':
		include '../pages/kembali/kembali.php';
		break;
	case 'pinjamsiswa':
		include '../pages/pinjamsiswa/pinjamsiswa.php';
		break;
	case 'kembalisiswa':
		include '../pages/kembalisiswa/kembalisiswa.php';
		break;
	case 'siswa':
		include '../pages/siswa/siswa.php';
		break;
	default:
		include '../pages/dashboard.php';
		break;
}


?>
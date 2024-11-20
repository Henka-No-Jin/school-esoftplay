<?php  if (!defined('_VALID_BBC')) exit('No direct script access allowed');

$sys->set_layout('blank');
switch ($Bbc->mod['task'])
{
	case 'home': // Untuk menampilkan halaman utama dashboard
		$sys->set_layout('home');
		break;


	case 'list': // Untuk menampilkan data list
		pr('$var', $_GET, _URL, __FILE__.':'.__LINE__);
		echo '<i class="fa fa-user" aria-hidden="true">ssssss</i>';
		break;

	case 'student':
		pr('nanti disini akan tampil form & daftar siswa', __FILE__.':'.__LINE__);
		break;

	case 'mapel':
		pr('nanti disini akan tampil form & daftar mapel', __FILE__.':'.__LINE__);
		break;



	default:
		echo 'Invalid action <b>'.$Bbc->mod['task'].'</b> has been received...';
		break;
}

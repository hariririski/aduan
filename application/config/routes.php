<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
/*-----------------------------------------------------------------------*/
$route['default_controller'] = 'Umum_Home/cek';
$route['beranda'] = 'Umum_Home';
$route['tentang'] = 'Umum_Tentang';
$route['info'] = 'Umum_Info';
$route['admin_info'] = 'Admin_Informasi';
$route['admin'] = 'Admin_Beranda';
$route['data_admin'] = 'Admin';
$route['jenis_pengaduan'] = 'Admin_Jenis_Pengaduan';
$route['jenis_informasi'] = 'Admin_Jenis_Informasi';
$route['data'] = 'Admin_Pengaduan';
$route['login'] = 'Login/proses_login';
$route['login_hp'] = 'Hp/login_hp';
$route['logout'] = 'Login/logout';
$route['hp'] = 'Hp/home';
$route['cek'] = 'Hp/cek_pengaduan';
$route['pengecekan'] = 'Hp/cek_pengecekan';
$route['pengecekan_url'] = 'Hp/cek_pengecekan_url';
$route['pengaduan_hp'] = 'Lapor_hp/tambah_hp';
$route['pengaduan'] = 'Lapor_hp/tambah_dekstop';
$route['umum_cek'] = 'Umum_Home/umum_cek';
$route['umum_cek_awal'] = 'Umum_Home/umum_cek_awal';
$route['admin_lapor'] = 'Admin_Pengaduan/lapor';
$route['media_pelaporan'] = 'Admin_Media_Pelaporan';
$route['pengaduan_admin'] = 'Lapor_hp/tambah';
$route['detail_lapor_admin'] = 'Admin_Pengaduan/detail_lapor_admin';
$route['tindak_lanjut'] = 'Admin_Pengaduan/tindak_lanjut';
$route['bidang'] = 'Admin_Bidang';
$route['cetak'] = 'Admin_Pengaduan/cetak_lapor';
$route['artikel_hp'] = 'Admin_Informasi/detail_hp';




$route['404_override'] = 'Custom404';
$route['translate_uri_dashes'] = FALSE;

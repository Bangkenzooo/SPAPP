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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['admin/overview']= 'admin/overview';


$route['admin/spp']= 'admin/spp';
$route['admin/spp/create']= 'admin/spp/create';
$route['admin/spp/store']= 'admin/spp/store';
$route['admin/spp/delete']= 'admin/spp/delete';
$route['admin/spp/edit']= 'admin/spp/edit';
$route['admin/spp/update']= 'admin/spp/update';





$route['admin/siswa']= 'admin/siswa';
$route['admin/siswa/create']= 'admin/siswa/create';
$route['admin/siswa/store']= 'admin/siswa/store';
$route['admin/siswa/delete']= 'admin/siswa/delete';
$route['admin/siswa/edit']= 'admin/siswa/edit';
$route['admin/siswa/update']= 'admin/siswa/update';



$route['admin/kelas']= 'admin/kelas';
$route['admin/kelas/create']= 'admin/kelas/create';
$route['admin/kelas/store']= 'admin/kelas/store';
$route['admin/kelas/delete']= 'admin/kelas/delete';
$route['admin/kelas/edit']= 'admin/kelas/edit';
$route['admin/kelas/update']= 'admin/kelas/update';

$route['admin/petugas']= 'admin/petugas';
$route['admin/petugas/create']= 'admin/petugas/create';
$route['admin/petugas/store']= 'admin/petugas/store';
$route['admin/petugas/delete']= 'admin/petugas/delete';
$route['admin/petugas/edit']= 'admin/petugas/edit';
$route['admin/petugas/update']= 'admin/petugas/update';



$route['admin/transaksi']= 'admin/pembayaran';
$route['admin/pembayaran/create']= 'admin/pembayaran/create';
$route['admin/pembayaran/store']= 'admin/pembayaran/store';
$route['admin/pembayaran/delete']= 'admin/pembayaran/delete';
$route['admin/pembayaran/edit']= 'admin/pembayaran/edit';
$route['admin/pembayaran/update']= 'admin/pembayaran/update';




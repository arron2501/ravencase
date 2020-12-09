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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin'] = 'admin/home';
$route['home'] = 'ravencase/home';
$route['login'] = 'admin/login';
$route['register'] = 'admin/register';
$route['registeradmin'] = 'admin/registeradmin';
$route['forgotpassword'] = 'admin/forgotpassword';
$route['auth'] = 'admin/login/auth';
$route['submitregister'] = 'admin/register/validation';
$route['submitregisteradmin'] = 'admin/registeradmin/validationadmin';
$route['logout'] = 'admin/login/logout';
$route['customcase'] = 'ravencase/cart';
$route['add_to_cart'] = 'ravencase/cart/add_to_cart';
$route['load_cart'] = 'ravencase/cart/load_cart';
$route['hapus_cart'] = 'ravencase/cart/hapus_cart';
$route['tambah'] = 'admin/produk/viewform_tambah';
$route['checkout'] ='ravencase/checkout';
$route['prosescheckout'] = 'ravencase/checkout/proses_order';
$route['checkoutsuccess'] ='ravencase/checkout/success';
$route['destroycart'] ='ravencase/checkout/destroycart';
$route['viewinvoice'] = 'ravencase/viewinvoice';
$route['load_order'] = 'ravencase/cart/load_order';
$route['editprofile'] = 'ravencase/home/editprofile';
$route['produk'] = 'admin/produk';
$route['orders'] = 'admin/orders';
$route['detailorders'] = 'admin/detailorders';
$route['users'] = 'admin/users';
$route['changepassword'] = 'admin/changepassword';
$route['change_password'] = 'ravencase/change_password';
$route['submitchangepassword'] = 'admin/changepassword/save_password';
$route['submitchange_password'] = 'ravencase/change_password/save_password';
$route['editprofileadmin'] = 'admin/editprofileadmin';
$route['search'] = 'admin/produk/search';
$route['update_status'] = 'admin/orders/update_status';
$route['vieworders'] = 'ravencase/vieworders';

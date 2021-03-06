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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['branding-yolo'] = 'home/brandingYolo';
$route['brandingBantrab'] = 'home/brandingBantrab';
$route['brandingCafeBarista'] = 'home/brandingCafeBarista';
$route['brandingAMP'] = 'home/brandingAMP';
$route['brandingAdrenaline'] = 'home/brandingAdrenaline';
$route['brandingMagiaBlanca'] = 'home/brandingMagiaBlanca';
$route['brandingPolloGranjero'] = 'home/brandingPolloGranjero';
$route['brandingNissan'] = 'home/brandingNissan';

$route['ideasIorra'] = 'home/ideasIorra';
$route['ideasBaristaEnCasa'] = 'home/ideasBaristaEnCasa';
$route['ideasBaristaBeneficio'] = 'home/ideasBaristaBeneficio';
$route['ideasMountain'] = 'home/ideasMountain';
$route['ideasAdrenaline'] = 'home/ideasAdrenaline';
$route['ideasConversation'] = 'home/ideasConversation';
$route['ideasCovidflix'] = 'home/ideasCovidflix';
$route['ideasTapTap'] = 'home/ideasTapTap';

$route['entreEscape'] = 'home/entreEscape';
$route['entreArturo'] = 'home/entreArturo';
$route['entreManos'] = 'home/entreManos';
$route['entreNicky'] = 'home/entreNicky';
$route['entreTacTac'] = 'home/entreTacTac';
$route['entreStickers'] = 'home/entreStickers';
$route['entreDespedida'] = 'home/entreDespedida';
$route['entreChiripa'] = 'home/entreChiripa';

$route['blogEntry'] = 'home/blogEntry';
$route['branding'] = 'home/branding';
$route['ideas'] = 'home/ideas';
$route['blog'] = 'home/blog';
$route['guatemala'] = 'home/guatemala';
$route['panama'] = 'home/panama';
$route['barcelona'] = 'home/barcelona';
$route['entretenimiento'] = 'home/entretenimiento';
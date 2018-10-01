<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
/*==========================START whatArelief PART=================================================*/


$route['default_controller'] = 'main/index';
$route['main/(:any)'] = "main/$1";

$route['header'] = 'main/header';
$route['header/(:any)'] = "header/$1";

$route['myaccount'] = 'main/myaccount';
$route['myaccount/(:any)'] = "main/myaccount/$1";


$route['signup'] = 'main/signup';
$route['signup/(:any)'] = "main/signup/$1";

$route['login'] = 'main/login';
$route['login/(:any)'] = "main/login/$1";

$route['category_listing'] = 'main/category_listing';
$route['category_listing/(:any)'] = "main/category_listing/$1";


$route['myprofile'] = 'main/myprofile';
$route['myprofile/(:any)'] = "main/myprofile/$1";

$route['myportfolio'] = 'main/myportfolio';
$route['myportfolio/(:any)'] = "main/myportfolio/$1";

$route['edit_portfolio'] = 'main/edit_portfolio';
$route['edit_portfolio/(:any)'] = "main/edit_portfolio/$1";

$route['edit_profile'] = 'main/edit_profile';
$route['edit_profile/(:any)'] = "main/edit_profile/$1";

$route['general_information_edit'] = 'main/general_information_edit';
$route['general_information_edit/(:any)'] = "main/general_information_edit/$1";

$route['myportfolio'] = 'main/myportfolio';
$route['myportfolio/(:any)'] = "main/myportfolio/$1";

$route['edit_portfolio'] = 'main/edit_portfolio';
$route['edit_portfolio/(:any)'] = "main/edit_portfolio/$1";

$route['edit_profile'] = 'main/edit_profile';
$route['edit_profile/(:any)'] = "main/edit_profile/$1";

$route['photos'] = 'main/photos';
$route['photos/(:any)'] = "main/photos/$1";

$route['add_photo'] = 'main/add_photo';
$route['add_photo/(:any)'] = "main/add_photo/$1";

$route['delete_imagefile'] = 'main/delete_imagefile';
$route['delete_imagefile/(:any)'] = "main/delete_imagefile/$1";

$route['add_user_img'] = 'main/add_user_img';
$route['add_user_img/(:any)'] = "main/add_user_img/$1";

$route['imagenamesave'] = 'main/imagenamesave';
$route['imagenamesave/(:any)'] = "main/imagenamesave/$1";

$route['edit_photo'] = 'main/edit_photo';
$route['edit_photo/(:any)'] = "main/edit_photo/$1";

$route['category_page'] = 'main/category_page';
$route['category_page/(:any)'] = "main/category_page/$1";

$route['general_profile_information_edit'] = 'main/general_profile_information_edit';
$route['general_profile_information_edit/(:any)'] = "main/general_profile_information_edit/$1";

$route['changepassword'] = 'main/changepassword';
$route['changepassword/(:any)'] = "main/changepassword/$1";

$route['logout'] = 'main/logout';
$route['logout/(:any)'] = "main/logout/$1";

$route['password_change'] = 'main/password_change';
$route['password_change/(:any)'] = "main/password_change/$1";

$route['aboutus'] = 'main/aboutus';
$route['aboutus/(:any)'] = "main/aboutus/$1";

$route['help'] = 'main/help';
$route['help/(:any)'] = "main/help/$1";

$route['privacypolicy'] = 'main/privacypolicy';
$route['privacypolicy/(:any)'] = "main/privacypolicy/$1";

$route['termsandcondition'] = 'main/termsandcondition';
$route['termsandcondition/(:any)'] = "main/termsandcondition/$1";

$route['ad_choice'] = 'main/ad_choice';
$route['ad_choice/(:any)'] = "main/ad_choice/$1";

$route['ajax_multiplefiles_handler'] = 'main/ajax_multiplefiles_handler';
$route['ajax_multiplefiles_handler/(:any)'] = "main/ajax_multiplefiles_handler/$1";

$route['artist_video'] = 'main/artist_video';
$route['artist_video/(:any)'] = "main/artist_video/$1";

$route['artist_detail'] = 'main/artist_detail';
$route['artist_detail/(:any)'] = "main/artist_detail/$1";

$route['filtering_page'] = 'main/filtering_page';
$route['filtering_page/(:any)'] = "main/filtering_page/$1";

$route['image_view'] = 'main/image_view';
$route['image_view/(:any)'] = "main/image_view/$1";

$route['artist_view'] = 'main/artist_view';
$route['artist_view/(:any)'] = "main/artist_view/$1";

$route['forget_password'] = 'main/forget_password';
$route['forget_password/(:any)'] = "main/forget_password/$1";

$route['reset_password'] = 'main/reset_password';
$route['reset_password/(:any)'] = "main/reset_password/$1";

$route['reset_password_user'] = 'main/reset_password_user';
$route['reset_password_user/(:any)'] = "main/reset_password_user/$1";

$route['video_view'] = 'main/video_view';
$route['video_view/(:any)'] = "main/video_view/$1";

$route['confirmuser'] = 'main/confirmuser';
$route['confirmuser/(:any)'] = "main/confirmuser/$1";

$route['update_logout_time'] = 'main/update_logout_time';
$route['update_logout_time/(:any)'] = "main/update_logout_time/$1";

$route['search_page'] = 'main/category_page';
$route['search_page/(:any)'] = "main/category_page/$1";

$route['payment_setting'] = 'main/payment_setting';
$route['payment_setting/(:any)'] = "main/payment_setting/$1";

///////////////////////////////////////////////////souvik(5.7.2017)////////////////////////////////////////////
$route['recorded_video'] = 'main/recorded_video';
$route['recorded_video/(:any)'] = "main/recorded_video/$1";

$route['edit_recorded_video'] = 'main/edit_recorded_video';
$route['edit_recorded_video/(:any)'] = "main/edit_recorded_video/$1";

$route['recorded_video_view'] = 'main/recorded_video_view';
$route['recorded_video_view/(:any)'] = "main/recorded_video_view/$1";

$route['payment_details'] = 'main/payment_details';
$route['payment_details/(:any)'] = "main/payment_details/$1";


$route['video_details_page'] = 'main/video_details_page';
$route['video_details_page/(:any)'] = "main/video_details_page/$1";



$route['payment_package'] = 'main/payment_package';
$route['payment_package/(:any)'] = "main/payment_package/$1";

$route['schedule_time'] = 'main/schedule_time';
$route['schedule_time/(:any)'] = "main/schedule_time/$1";


$route['add_scheduled_time'] = 'main/add_scheduled_time';
$route['add_scheduled_time/(:any)'] = "main/add_scheduled_time/$1";

$route['delete_scheduled_artist'] = 'main/delete_scheduled_artist';
$route['delete_scheduled_artist/(:any)'] = "main/delete_scheduled_artist/$1";

$route['edit_scheduled_time'] = 'main/edit_scheduled_time';
$route['edit_scheduled_time/(:any)'] = "main/edit_scheduled_time/$1";


?>
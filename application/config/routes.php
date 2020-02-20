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
$route['default_controller'] = 'Website';
$route['Gallery'] = 'Website/gallery';
// $route['Gallery'] = 'Website/gallery';
$route['Gallery-Images/:num'] = 'Website/gallery_images/$i';
$route['About-Eklavya'] = 'Website/about';
$route['Vision-Mission'] = 'Website/vision';
$route['Administrator'] = 'Website/administrative';
$route['Chairman'] = 'Website/chairman_desk';
$route['Secretary'] = 'Website/secretery';
$route['School-Achivement'] = 'Website/school_achivement';
$route['Teacher-Achivement'] = 'Website/teacher_achivement';
$route['Student-Achivement'] = 'Website/student_achivement';
$route['Principal'] = 'Website/principal';
$route['Teaching-Staff'] = 'Website/teaching_staff';
$route['Non-Teaching-Staff'] = 'Website/nonteaching_staff';
$route['Annual-Calendar'] = 'Website/annual_calender';
$route['CBSE-Circular'] = 'Website/cbsc_circulars';
$route['CBSE-Notification'] = 'Website/cbsc_notification';
$route['Registration-Form'] = 'Website/registration_form';
$route['Fee-Details'] = 'Website/fee_details';
$route['Documents'] = 'Website/documents';
$route['Compitition'] = 'Website/compitition';
$route['Contact'] = 'Website/contact';
$route['Announcements'] = 'Website/announcement';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* ================= DEFAULT ================= */
$route['default_controller'] = 'Sign_in';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* ================= AUTH ================= */
$route['sign_in']        = 'Sign_in/index';
$route['sign_in/login']  = 'Sign_in/login';
$route['emp/logout']     = 'Sign_in/logout';

/* ================= ADMIN ================= */

$route['admin/login']        = 'admin/Admin_login/index';
$route['admin/login/check']  = 'admin/Admin_login/login';
$route['admin/logout'] = 'Sign_in/logout';




$route['admin']                  = 'admin/Dashboard/index';
$route['admin/dashboard']         = 'admin/Dashboard/index';

$route['admin/employee']          = 'admin/Employee/index'; 
$route['admin/employee/add']      = 'admin/Employee/add';      

$route['admin/leave']             = 'admin/Leave/index';
$route['admin/leave/approve/(:num)'] = 'admin/Leave/approve/$1';
$route['admin/leave/reject/(:num)']  = 'admin/Leave/reject/$1';

$route['admin/history']            = 'admin/History/index';
$route['admin/profile']            = 'admin/Dashboard/profile';
$route['admin/profile/update']     = 'admin/Dashboard/update_profile';

$route['admin/holidays/add']       = 'admin/Holidays/add';
$route['admin/save-fcm-token']     = 'admin/Dashboard/save_fcm_token';

/* ================= EMP ================= */
$route['emp']                 = 'emp/Dashboard/index';
$route['emp/dashboard']        = 'emp/Dashboard/index';

$route['emp/profile']          = 'emp/Dashboard/profile';
$route['emp/profile/update']   = 'emp/Dashboard/update_profile';

$route['emp/attendance_add']   = 'emp/Add_attendance/index';
$route['emp/save_attendance']  = 'emp/Add_attendance/save';
$route['emp/attendance_list']  = 'emp/Attendance/attendance_list';

$route['emp/leave']            = 'emp/Leave/index';
$route['emp/leave/add']        = 'emp/Leave/add';
$route['emp/leave/store']      = 'emp/Leave/store';

$route['emp/holidays']          = 'emp/Holidays/index';
$route['emp/holidays/(:num)']   = 'emp/Holidays/index/$1';

$route['save-fcm-token']        = 'emp/Dashboard/save_fcm_token';



$route['admin/employee/edit/(:num)']   = 'admin/Employee/edit/$1';
$route['admin/employee/update/(:num)'] = 'admin/Employee/update/$1';
$route['admin/employee/delete/(:num)'] = 'admin/Employee/delete/$1';









$route['emp/profile']               = 'emp/Profile/index';
$route['emp/profile/update']        = 'emp/Profile/update_profile'; 

$route['emp/change-password'] = 'emp/Profile/change_password';
$route['emp/change-password/save'] = 'emp/Profile/save_password';





$route['admin/announcements']        = 'admin/Announcements/index';
$route['admin/announcements/add']    = 'admin/Announcements/add';
$route['admin/announcements/store']  = 'admin/Announcements/store';



$route['admin/(:any)/(:any)'] = 'admin/$1/$2';
$route['admin/(:any)']        = 'admin/$1';
$route['admin']               = 'admin/dashboard';


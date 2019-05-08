 <?php
 
 //library
$relative_path_to_apps = '../../';

$relative_path_to_library = "../../../seminars_lib/";

 include($relative_path_to_library . "./src/php/functions.php");

//application
 include($relative_path_to_apps . './src/php/ttu_math_seminars.php');
 
  $icon_in_toolbar = $relative_path_to_apps . ttu_math_seminars::$icon_in_toolbar;

 
 $year = 2019;
 $semester = "spring"; //lowercase for the folder names
 $month_begin = 4;
 $day_begin = 29;
 $month_end = 5;
 $day_end = 5;

 $disciplines = array(
 colloquia => Colloquia
 );
 
 Seminars::generate_page_with_all_seminars_by_time_range($relative_path_to_library,
                                                        ttu_math_seminars::$math_server_url_base,
                                                         $relative_path_to_apps,
                                                        ttu_math_seminars::$are_input_files_local,
                                                         ttu_math_seminars::$institution,
                                                         ttu_math_seminars::$department,
                                                         $icon_in_toolbar,
                                                         $year,
                                                         $semester,
                                                         $month_begin,
                                                         $day_begin,
                                                         $month_end,
                                                         $day_end,
                                                         $disciplines);

                                                       
// $file = './applied_math/2019/spring/abstracts/jan30.txt';
// 
// 
// Seminars::include_file( ttu_math_seminars::$math_server_url_base, $relative_path_to_apps, $file, ttu_math_seminars::$are_input_files_local);

 ?>
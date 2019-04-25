 <?php
 
 //library
 $library_path = "../../../../seminars_lib/";
 
 include($library_path . "./src/php/functions.php");
 
 //application-specific
 include("../../../src/php/ttu_math_seminars.php");
 $icon_in_toolbar = '../../../' . ttu_math_seminars::$icon_in_toolbar;
 
 $topic = 'applied_math';
 $year = '2019';
 $semester = 'spring';
  

 Seminars::generate_seminar_page_by_topic($library_path, 
                                          ttu_math_seminars::$institution, 
                                          ttu_math_seminars::$department,  
                                          $topic, 
                                          $year, 
                                          $semester,
                                          $icon_in_toolbar,
                                          ttu_math_seminars::$discipline_array); 
 
 ?>

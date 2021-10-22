<?php
require('controls/zdze8efzedzdeezd/de5.php');
$userpu=$_SESSION['nmu'];
$userpp=$_SESSION['passu'];
$userp=$_SESSION['uat'];

$seluser=$cdb->prepare("SELECT * FROM user WHERE u_username='$userpu' AND u_password='$userpp' AND u_access_type='$userp'");
$seluser->execute();
if ($seluser===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $res=$seluser->get_result();
while ($showuser=$res->fetch_row()) {
?>
<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
                        <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
                            <ul class="kt-menu__nav ">
                                <?php if(($_SESSION['uat']=='admin')||($_SESSION['uat']=='user')){?>
                                <li class="kt-menu__section ">
                                    <h4 class="kt-menu__section-text" style="color:#00A1db;font-weight: 700;text-transform:capitalize; font-size: 14px;">Human Resources</h4>
                                    <i class="kt-menu__section-icon flaticon-more-v2"></i>
                                </li>
                                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--open kt-menu__item--here" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle">  


<svg id="emplyees" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 1000 1000">
  <defs>
    <style>
      .cls-1e, .cls-2e {
        fill: #3fa9f5;
      }

      .cls-1e {
        fill-rule: evenodd;
      }
    </style>
  </defs>
  <path id="Ellipse_1_copy_3" data-name="Ellipse 1 copy 3" class="cls-1e" d="M253,654c0-19.684,5.288-54.508,14.519-70.378,18.621-32.01,53.288-37.153,92.98-37.153,17.268,0,47.457,5.485,47.043,5.738-53.338,32.607-49.9,101.783-49.9,101.689,0-.433-104.639.194-104.639,0.1"/>
  <path id="Ellipse_2_copy_3" data-name="Ellipse 2 copy 3" class="cls-1e" d="M360.5,418a59.8,59.8,0,1,1-59.915,59.8A59.856,59.856,0,0,1,360.5,418Z"/>
  <path id="Ellipse_1_copy_5" data-name="Ellipse 1 copy 5" class="cls-1e" d="M749,655c0-19.684-5.288-54.508-14.519-70.378-18.621-32.01-53.288-37.153-92.98-37.153-17.268,0-47.457,5.485-47.043,5.738,53.338,32.607,49.9,101.783,49.9,101.689,0-.433,104.639.194,104.639,0.1"/>
  <ellipse id="Ellipse_2_copy_4" data-name="Ellipse 2 copy 4" class="cls-2e" cx="641.5" cy="478.797" rx="59.906" ry="59.797"/>
  <path id="Ellipse_1_copy_4" data-name="Ellipse 1 copy 4" class="cls-1e" d="M362.005,681c0-25.356,6.788-70.214,18.639-90.656,23.9-41.234,68.407-47.859,119.36-47.859,51.1,0,95.711,6.783,119.565,48.211C631.294,611.059,638,655.79,638,681"/>
  <path id="Ellipse_2_copy" data-name="Ellipse 2 copy" class="cls-1e" d="M500,377a77.008,77.008,0,1,1-76.917,77.008A76.963,76.963,0,0,1,500,377Z"/>
</svg>




                                    <span class="kt-menu__link-text">Employees</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                        <ul class="kt-menu__subnav ">
                                            <li class="kt-menu__item kt-menu__item  kt-menu__item--active" aria-haspopup="true"><a href="" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">List</span></a></li>

                                            <li class="kt-menu__item " aria-haspopup="true"><a href="" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Contract</span></a></li>

                                            <li class="kt-menu__item " aria-haspopup="true"><a href="" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Archive</span></a></li>


                                
                                        </ul>
                               
                                    </div>
                                </li>
                            
                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle">

<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 1000 1000">
  <defs>
    <style>
      .cls-1h, .cls-3h {
        fill: #3fa9f5;
      }

      .cls-2h {
        fill: #101932;
      }

      .cls-3h {
        fill-rule: evenodd;
      }
    </style>
  </defs>
  <circle class="cls-1h" cx="475" cy="461" r="240"/>
  <circle class="cls-2h" cx="475" cy="461" r="193"/>
  <path class="cls-3h" d="M337.005,653c0-25.356,6.788-70.214,18.639-90.656,23.9-41.234,68.407-47.859,119.36-47.859,51.1,0,95.711,6.783,119.565,48.211C606.294,583.059,613,627.79,613,653"/>
  <path class="cls-3h" d="M475,349a77.008,77.008,0,1,1-76.917,77.008A76.963,76.963,0,0,1,475,349Z"/>
  <path id="Rounded_Rectangle_11" data-name="Rounded Rectangle 11" class="cls-3h" d="M626.169,662.718l15.284-11.286c13.329-9.842,26.172-15.06,36.014-1.732l112.9,147.845a30,30,0,0,1-6.313,41.955l-20.111,14.85a30,30,0,0,1-41.954-6.313L613.916,696.628C604.074,683.3,612.84,672.56,626.169,662.718Z"/>
</svg>



                                    <span class="kt-menu__link-text">Recrutement</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                        <ul class="kt-menu__subnav">
                                            <li class="kt-menu__item " aria-haspopup="true"><a href="" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Job Titles</span></a></li>
                                
                                        
                                            <li class="kt-menu__item " aria-haspopup="true"><a href="" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">candidacy</span></a></li>
                                            
                                            <li class="kt-menu__item " aria-haspopup="true"><a href="" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">CVtheque</span></a></li>
                                
                                        </ul>
                                    </div>
                                </li>

                                 <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle">



<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 1000 1000">
  <defs>
    <style>
      .cls-1t, .cls-3t {
        fill: #3fa9f5;
      }

      .cls-2t {
        fill: #101932;
      }

      .cls-3t {
        fill-rule: evenodd;
      }
    </style>
  </defs>
  <circle class="cls-1t" cx="511.5" cy="537.5" r="245.5"/>
  <circle id="Ellipse_7_copy" data-name="Ellipse 7 copy" class="cls-2t" cx="512" cy="538" r="191"/>
  <rect id="Rounded_Rectangle_12" data-name="Rounded Rectangle 12" class="cls-1t" x="437" y="228" width="149" height="55" rx="27.5" ry="27.5"/>
  <path id="Rounded_Rectangle_13" data-name="Rounded Rectangle 13" class="cls-3t" d="M697.807,321.783a19.5,19.5,0,0,1,2.68,27.447L670.64,385.537a19.5,19.5,0,1,1-30.127-24.767l29.847-36.307A19.5,19.5,0,0,1,697.807,321.783Z"/>
  <path id="Rounded_Rectangle_14" data-name="Rounded Rectangle 14" class="cls-3t" d="M509.788,399h4.085a13.5,13.5,0,0,1,13.5,13.5V561.428a13.5,13.5,0,0,1-13.5,13.5h-4.085a13.5,13.5,0,0,1-13.5-13.5V412.5A13.5,13.5,0,0,1,509.788,399Z"/>
  <path id="Rounded_Rectangle_14_copy" data-name="Rounded Rectangle 14 copy" class="cls-3t" d="M649.814,477.841a15.512,15.512,0,0,1-5.469,21.263L519.475,572.84a15.528,15.528,0,1,1-15.82-26.725l124.87-73.736A15.554,15.554,0,0,1,649.814,477.841Z"/>
</svg>



                                    <span class="kt-menu__link-text">Time Management</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                        <ul class="kt-menu__subnav">
                                            
                                            
                                
                                        
                                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Timesheets</span></span></li>
                                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Timesheets</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                                    <ul class="kt-menu__subnav">
                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="../SRF/user/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Requests</span></a></li>
                                                        <li class="kt-menu__item " aria-haspopup="true"><a href="../SRF/user/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">activities</span></a></li>
                                                      
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="kt-menu__item " aria-haspopup="true"><a href="../SRF/user/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Presences</span></a></li>
                                              <li class="kt-menu__item " aria-haspopup="true"><a href="../SRF/user/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Tally</span></a></li>
                                
                                        </ul>
                                    </div>
                                </li>
                            
                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle">

<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 1000 1000">
  <image id="_" data-name="$" x="376" y="205" width="255" height="553" xlink:href="data:img/png;base64,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"/>
</svg>



                                    <span class="kt-menu__link-text">Expences</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                        <ul class="kt-menu__subnav">
                                             <li class="kt-menu__item " aria-haspopup="true"><a href="../SRF/user/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Expences</span></a></li>
                                              <li class="kt-menu__item " aria-haspopup="true"><a href="../SRF/user/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Requests</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle">


<svg id="salaries" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 1000 1000">
  <defs>
    <style>
      .cls-1 {
        fill: #3fa9f5;
        fill-rule: evenodd;
      }
    </style>
  </defs>
  <path id="Ellipse_1_copy_6" data-name="Ellipse 1 copy 6" class="cls-1" d="M300.007,751c0-31.984,8.3-88.568,22.78-114.354C352,584.634,406.4,576.278,468.672,576.278c62.454,0,116.98,8.555,146.134,60.813,3.59,6.434-7.371,14.394-7.417,24.22-0.139,29.814-.051,65.855-0.051,89.689"/>
  <path id="Ellipse_2_copy_2" data-name="Ellipse 2 copy 2" class="cls-1" d="M468.667,370.535c37.536,0,72.134,29.69,76,55.618,2.042,13.7-8,4.271-8,41.529,0,39.318,10.741,29.222,7.2,43.235-6.342,25.106-38.314,53.913-75.2,53.913-51.913,0-94-43.495-94-97.148S416.754,370.535,468.667,370.535Z"/>
  <image id="_copy" data-name="$ copy" x="539" y="337" width="185" height="414" xlink:href="data:img/png;base64,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"/>
</svg>


                                    <span class="kt-menu__link-text">Salaries & Advances</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                        <ul class="kt-menu__subnav">
                                             <li class="kt-menu__item " aria-haspopup="true"><a href="../SRF/user/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Salaries</span></a></li>
                                              <li class="kt-menu__item " aria-haspopup="true"><a href="../SRF/user/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Advances</span></a></li>
                                               <li class="kt-menu__item " aria-haspopup="true"><a href="../SRF/user/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Advantages</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <?php }elseif(($_SESSION['uat']=='admin')||($_SESSION['uat']=='user')||($_SESSION['uat']=='owner')){?>

                                <?php }?>
                            </ul>
                        </div>
                    </div>
                    

<?php }}?>